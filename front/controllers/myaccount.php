<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Myaccount extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $user_id = $this->session->userdata('user_id');
        if (empty($user_id)) {
            redirect('');
		}
		$this->load->model('register_model');
		// $this->load->model('email_templates_model');	
		
    }	
    public function index() {		
		$data = $this->data;
		$user_id = $this->session->userdata('user_id');
		$data['userdata'] = $this->register_model->getuser($user_id);
		
		$this->register_model->primary_key = array('customer_id'=>$user_id);
		$data['customer_documents'] = $this->register_model->getdata('customer_documents');
		$this->register_model->primary_key = array('customer_id'=>$user_id);
		$data['customer_details'] = $this->register_model->getrow('customer_details');
		// $this->register_model->primary_key = array('customer_id'=>$user_id);
		// $data['family_details'] = $this->register_model->getdata('family_details');
		$data['countries'] = $this->register_model->view_data('countries');
		$data['states'] = $this->register_model->view_data('states');
		$data['cities'] = $this->register_model->view_data('cities');
        $data['view_path'] = 'myaccount/myaccount';
        $data['scripts'] = array('front/javascripts/myaccount.js');
        $data['links'] = array('front/css/dashboard.css');

        $this->load->view("templates/inner_page", $data);

	}
	
	public function account_update()
	{
		$data = $this->data;
		$loguser_id = $this->session->userdata('user_id');
		if (empty($loguser_id)) {
			redirect('register');
		}
		$user_id = $this->input->post('customer_id');
		
		if(!empty($_FILES['customer_documents']['name']) && count(array_filter($_FILES['customer_documents']['name'])) > 0){
			$filesCount = count($_FILES['customer_documents']['name']); 
			for($i = 0; $i < $filesCount; $i++){ 
				$_FILES['document']['name']     = $_FILES['customer_documents']['name'][$i]; 
				$_FILES['document']['type']     = $_FILES['customer_documents']['type'][$i]; 
				$_FILES['document']['tmp_name'] = $_FILES['customer_documents']['tmp_name'][$i]; 
				$_FILES['document']['error']     = $_FILES['customer_documents']['error'][$i]; 
				$_FILES['document']['size']     = $_FILES['customer_documents']['size'][$i]; 
				$customer_documents = array('upload_path' => CUSTOMER_DOCUMENTS_PATH, 'allowed_types' => 'gif|jpg|png|jpeg');
				$this->upload->initialize($customer_documents);

				if($this->upload->do_upload('document')){
					$upload_data = $this->upload->data();
					$file_Ext =  pathinfo($upload_data['full_path'], PATHINFO_EXTENSION);
					$gen_filename = "customer_document".rand ( 1000000 , 9999999 ).".".$file_Ext;
					rename($upload_data['full_path'],$upload_data['file_path'].$gen_filename);
					$this->register_model->data['document'] = $gen_filename;
					$this->register_model->data['customer_id'] = $user_id;
					// $this->register_model->primary_key = array('customer_id'=>$user_id);
					$this->register_model->insert_data('customer_documents');

				}else{
					$data['form_error']['document'] = $this->upload->display_errors();
					print_r($this->upload->display_errors());
				}

			}
		}
		$this->register_model->data = $this->input->post();	
		$personal_photo = array('upload_path' => PERSONAL_PHOTO_PATH, 'allowed_types' => 'gif|jpg|png|jpeg');
        $this->upload->initialize($personal_photo);
		if (!empty($_FILES['personal_photo']['name']) && $this->upload->do_upload('personal_photo')) {
			
            $upload_data = $this->upload->data();
            $file_Ext =  pathinfo($upload_data['full_path'], PATHINFO_EXTENSION);
            $gen_filename = "personal_photo".rand ( 1000000 , 9999999 ).".".$file_Ext;
            rename($upload_data['full_path'],$upload_data['file_path'].$gen_filename);
            $this->register_model->data['personal_photo'] = $gen_filename;
        } else {
			$data['form_error']['personal_photo'] = $this->upload->display_errors();
			print_r($this->upload->display_errors());
			}
		
		unset($this->register_model->data['customer_id']);
		$this->register_model->primary_key = array('customer_id' => $user_id);
		
		if($this->register_model->update('customers')){
			$msg = array('type' => 'success', 'txt' => "Details updated successfully..!",'icon' => 'icon-ok green'); 
		}else{
			$msg = array('type' => 'danger', 'txt' => "Update Failed..!", 'icon' => 'icon-remove red'); 
		}
		
		
		$this->session->set_flashdata('msg', $msg);
		redirect('myaccount');
		
	}

	public function education_update()
	{
		$data = $this->data;
		$loguser_id = $this->session->userdata('user_id');
		if (empty($loguser_id)) {
			redirect('register');
		}
		$customer_details_id = $this->input->post('customer_details_id');
		$this->register_model->data = $this->input->post();	
		if(!empty($customer_details_id)){
			
			$this->register_model->primary_key = array('customer_details_id' => $customer_details_id);		
			if($this->register_model->update('customer_details')){
				$msg = array('type' => 'success', 'txt' => "Details updated successfully..!",'icon' => 'icon-ok green'); 
			}else{
				$msg = array('type' => 'danger', 'txt' => "Update Failed..!", 'icon' => 'icon-remove red'); 
			}
		}else{
			unset($this->register_model->data['customer_details_id']);
			$this->register_model->data['customer_id'] = $loguser_id;
			if($this->register_model->insert_data('customer_details')){
				$msg = array('type' => 'success', 'txt' => "Details added successfully..!",'icon' => 'icon-ok green'); 
			}else{
				$msg = array('type' => 'danger', 'txt' => "Failed To Add Details..!", 'icon' => 'icon-remove red'); 
			}
		}
		$this->session->set_flashdata('msg', $msg);
		redirect('myaccount');
		
	}
	public function experience_update()
	{
		$data = $this->data;
		$loguser_id = $this->session->userdata('user_id');
		if (empty($loguser_id)) {
			redirect('register');
		}
		$this->register_model->data = $this->input->post();	
		$resume = array('upload_path' => RESUME_PATH, 'allowed_types' => '*');
        $this->upload->initialize($resume);
		if (!empty($_FILES['resume']['name']) && $this->upload->do_upload('resume')) {
			
            $upload_data = $this->upload->data();
            $file_Ext =  pathinfo($upload_data['full_path'], PATHINFO_EXTENSION);
            $gen_filename = "resume_".rand ( 1000000 , 9999999 ).".".$file_Ext;
            rename($upload_data['full_path'],$upload_data['file_path'].$gen_filename);
            $this->register_model->data['resume'] = $gen_filename;
        } else {
			$data['form_error']['resume'] = $this->upload->display_errors();
			print_r($this->upload->display_errors());
		}
		$customer_details_id = $this->input->post('customer_details_id');
		
		if(!empty($customer_details_id)){
			
			$this->register_model->primary_key = array('customer_details_id' => $customer_details_id);		
			if($this->register_model->update('customer_details')){
				$msg = array('type' => 'success', 'txt' => "Details updated successfully..!",'icon' => 'icon-ok green'); 
			}else{
				$msg = array('type' => 'danger', 'txt' => "Update Failed..!", 'icon' => 'icon-remove red'); 
			}
		}else{
			unset($this->register_model->data['customer_details_id']);
			$this->register_model->data['customer_id'] = $loguser_id;
			if($this->register_model->insert_data('customer_details')){
				$msg = array('type' => 'success', 'txt' => "Details added successfully..!",'icon' => 'icon-ok green'); 
			}else{
				$msg = array('type' => 'danger', 'txt' => "Failed To Add Details..!", 'icon' => 'icon-remove red'); 
			}
		}
		$this->session->set_flashdata('msg', $msg);
		redirect('myaccount');
		
	}


	public function delete_customer_document($customer_document_id, $customer_document){
	
		$this->register_model->primary_key = array('customer_document_id' => $customer_document_id);
		if($this->register_model->delete('customer_documents')){
			unlink(CUSTOMER_DOCUMENTS_PATH.$customer_document);
			$msg = array('type' => 'success', 'icon' => 'icon-ok green', 'txt' => 'Customer Document deleted Successfully');
		}else{
			$msg = array('type' => 'error', 'icon' => 'icon-remove red', 'txt' => 'Sorry! Unable to delete.');
		}
		$this->session->set_flashdata('msg',$msg);
		redirect('myaccount');
		
	}

	public function family_data_save(){
		$loguser_id = $this->session->userdata('user_id');
		$family_details_id = $this->input->post('family_details_id');
		$this->register_model->data = $this->input->post();

		if(!empty($family_details_id)){
			$this->register_model->primary_key = array('family_details_id' => $family_details_id);		
			if($this->register_model->update('family_details')){
				$msg = array('type' => 'success', 'txt' => "Details updated successfully..!",'icon' => 'icon-ok green'); 
			}else{
				$msg = array('type' => 'danger', 'txt' => "Update Failed..!", 'icon' => 'icon-remove red'); 
			}
		}else{
			unset($this->register_model->data['family_details_id']);
			$this->register_model->data['customer_id'] = $loguser_id;
			if($this->register_model->insert_data('family_details')){
				$msg = array('type' => 'success', 'txt' => "Details added successfully..!",'icon' => 'icon-ok green'); 
			}else{
				$msg = array('type' => 'danger', 'txt' => "Failed To Add Details..!", 'icon' => 'icon-remove red'); 
			}

		}
		$this->session->set_flashdata('msg',$msg);
		redirect('myaccount');

	}

	public function delete_family_member($family_details_id){
	
		$this->register_model->primary_key = array('family_details_id' => $family_details_id);
		if($this->register_model->delete('family_details')){
			$msg = array('type' => 'success', 'icon' => 'icon-ok green', 'txt' => 'Family Member deleted Successfully');
		}else{
			$msg = array('type' => 'error', 'icon' => 'icon-remove red', 'txt' => 'Sorry! Unable to delete.');
		}
		$this->session->set_flashdata('msg',$msg);
		redirect('myaccount');
		
	}
	public function change_password() {		
		
		// $template_path = $this->pagewisecontent('my-account');
		$this->data['view_path'] = 'account/changepassword';
		$data = $this->data;
		
        $this->load->view("templates/inner_page", $data);

	}
	
	public function updatepassword()
	{
		
		if(isset($_POST['password']) && !empty($_POST['password'])){
			$user_id = $this->session->userdata('login_user_id');

			$this->users_model->data['password'] = md5($this->input->post('password'));	
			
			$this->users_model->primary_key = array('users_id' => $user_id);

			$this->users_model->update();
			
			$this->session->sess_destroy();//session distroy 
			session_destroy();

			$msg = array('type' => 'success', 'txt' => "Please login with new password..!"); 
			$this->session->set_flashdata('msg', $msg);
			redirect('login');
		} else {
			redirect('home');
		}
		
		
	}


	public function logout()
	{
		if(($this->session->userdata('remember'))!='1'){		
			$this->session->sess_destroy();//session distroy 
			session_destroy();
		}else{
			$data['new_expiration'] = 60*60*1;//1hr
        	$this->session->sess_expiration = $data['new_expiration'];
			$x=$this->session->userdata('logged_in');
			unset($x['password']);
			$this->session->set_userdata('logged_in',$x);			
		}
		redirect('');
       
    }
}