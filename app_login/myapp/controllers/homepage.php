<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Homepage extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('homepage_model');
		$this->load->model('admin_users_model');
		$user_id = $this->session->userdata('user_id');
		if (empty($user_id)) {
			redirect('');
		}
	}

	public function index()
	{
		// $data['query'] = $this->homepage_model->view('countries');
		$data['view'] = 'homepage/list';
		$data['title'] = 'Administrator Dashboard';
		$data['page_heading'] = 'Homepage Sections List';
		$data['breadcrumb'] = 'Homepage Sections List';
		$data['scripts'] = array('assets/javascripts/master.js');
		$this->load->view('templates/dashboard', $data);
	}
	public function edit_widget1(){
		$this->homepage_model->primary_key = array('widget1_id'=>1);
		$data['query'] = $this->homepage_model->get_row('widget1');
		$data['view'] = 'homepage/widget1';
		$data['title'] = 'Administrator Dashboard';
		$data['page_heading'] = 'Edit Widget 1';
		$data['breadcrumb'] = 'Edit Widget 1';
		$data['scripts'] = array('assets/javascripts/master.js');
		$this->load->view('templates/dashboard', $data);
	}

	public function save_widget1(){
		
		$widget1_id = $this->input->post('widget1_id');

		$this->homepage_model->data = $this->input->post();

		$this->card_image_1 = array('upload_path' => WIDGET_PHOTO_UPLOAD_PATH, 'allowed_types' => 'gif|jpg|png|jpeg');
		$this->upload->initialize($this->card_image_1);
		if (!empty($_FILES['card_image_1']['name']) && $this->upload->do_upload('card_image_1')) {
			$upload_data = $this->upload->data();
			$file_Ext =  pathinfo($upload_data['full_path'], PATHINFO_EXTENSION);
			$gen_filename = "card_image_1_" . rand(1000000, 9999999) . "." . $file_Ext;
			rename($upload_data['full_path'], $upload_data['file_path'] . $gen_filename);
			$this->homepage_model->data['card_image_1'] = $gen_filename;
			// $this->createthumbs(array($upload_data['file_name']));
		} else {
			$data['form_error']['card_image_1'] = $this->upload->display_errors();
		}

		$this->card_image_2 = array('upload_path' => WIDGET_PHOTO_UPLOAD_PATH, 'allowed_types' => 'gif|jpg|png|jpeg');
		$this->upload->initialize($this->card_image_2);
		if (!empty($_FILES['card_image_2']['name']) && $this->upload->do_upload('card_image_2')) {
			$upload_data = $this->upload->data();
			$file_Ext =  pathinfo($upload_data['full_path'], PATHINFO_EXTENSION);
			$gen_filename = "card_image_2" . rand(1000000, 9999999) . "." . $file_Ext;
			rename($upload_data['full_path'], $upload_data['file_path'] . $gen_filename);
			$this->homepage_model->data['card_image_2'] = $gen_filename;
			// $this->createthumbs(array($upload_data['file_name']));
		} else {
			$data['form_error']['card_image_2'] = $this->upload->display_errors();
		}

		$this->card_image_3 = array('upload_path' => WIDGET_PHOTO_UPLOAD_PATH, 'allowed_types' => 'gif|jpg|png|jpeg');
		$this->upload->initialize($this->card_image_3);
		if (!empty($_FILES['card_image_3']['name']) && $this->upload->do_upload('card_image_3')) {
			$upload_data = $this->upload->data();
			$file_Ext =  pathinfo($upload_data['full_path'], PATHINFO_EXTENSION);
			$gen_filename = "card_image_3_" . rand(1000000, 9999999) . "." . $file_Ext;
			rename($upload_data['full_path'], $upload_data['file_path'] . $gen_filename);
			$this->homepage_model->data['card_image_3'] = $gen_filename;
			// $this->createthumbs(array($upload_data['file_name']));
		} else {
			$data['form_error']['card_image_3'] = $this->upload->display_errors();
		}
		// print_r($this->homepage_model->data);exit;
		//Image Upload Code end here


		if (!empty($widget1_id)) {
			$this->homepage_model->data['modified_date'] = date('Y-m-d');
			$this->homepage_model->data['modified_by'] = $this->session->userdata('user_id');
			$this->homepage_model->primary_key = array('widget1_id' => $widget1_id);
			if ($this->homepage_model->update('widget1')) {
				$msg = array('type' => 'success', 'icon' => 'fa fa-check', 'txt' => 'Record Updated Successfully');
			} else {
				$msg = array('type' => 'danger', 'icon' => 'fa fa-thumbs-down', 'txt' => 'Sorry! Unable to Update Record.');
			}
		} else {
			unset($this->homepage_model->data['widget1_id']);
			$this->homepage_model->data['modified_date'] = date('Y-m-d');
			$this->homepage_model->data['modified_by'] = $this->session->userdata('user_id');
			if ($q = $this->homepage_model->insert('widget1')) {
				
				$msg = array('type' => 'success', 'icon' => 'fa fa-check', 'txt' => 'Record Added Successfully');
			} else {
				$data['query'] = (object) $this->input->post();
				$data['view'] = "homepage/widget1";
				$data['title'] = 'Administrator Dashboard';
				$data['page_heading'] = 'Add/Edit Widget 1';
				$data['breadcrumb'] = "Add/Edit Widget 1";
				$data['scripts'] = array('assets/javascripts/' . 'master.js');
				$this->load->view('templates/dashboard', $data);
				$msg = array('type' => 'danger', 'icon' => 'fa fa-thumbs-down', 'txt' => 'Sorry! Unable to Add Record.');
			}
		}

		$this->session->set_flashdata('msg', $msg);
		redirect("homepage/edit_widget1");
	}

	public function edit_widget2(){
		$this->homepage_model->primary_key = array('widget_id'=>1);
		$data['query'] = $this->homepage_model->get_row('widget_cta');
		$data['view'] = 'homepage/widget2';
		$data['title'] = 'Administrator Dashboard';
		$data['page_heading'] = 'Edit Widget 2';
		$data['breadcrumb'] = 'Edit Widget 2';
		$data['scripts'] = array('assets/javascripts/master.js');
		$this->load->view('templates/dashboard', $data);
	}
	
	public function edit_widget3(){
		$this->homepage_model->primary_key = array('widget_id'=>2);
		$data['query'] = $this->homepage_model->get_row('widget_cta');
		$data['view'] = 'homepage/widget3';
		$data['title'] = 'Administrator Dashboard';
		$data['page_heading'] = 'Edit Widget 3';
		$data['breadcrumb'] = 'Edit Widget 3';
		$data['scripts'] = array('assets/javascripts/master.js');
		$this->load->view('templates/dashboard', $data);
	}


	public function save_widget_cta(){
		
		$widget_id = $this->input->post('widget_id');

		$this->homepage_model->data = $this->input->post();

		$this->cta_bg_img = array('upload_path' => WIDGET_PHOTO_UPLOAD_PATH, 'allowed_types' => 'gif|jpg|png|jpeg');
		$this->upload->initialize($this->cta_bg_img);
		if (!empty($_FILES['cta_bg_img']['name']) && $this->upload->do_upload('cta_bg_img')) {
			$upload_data = $this->upload->data();
			$file_Ext =  pathinfo($upload_data['full_path'], PATHINFO_EXTENSION);
			$gen_filename = "cta_bg_img" . rand(1000000, 9999999) . "." . $file_Ext;
			rename($upload_data['full_path'], $upload_data['file_path'] . $gen_filename);
			$this->homepage_model->data['cta_bg_img'] = $gen_filename;
			// $this->createthumbs(array($upload_data['file_name']));
		} else {
			$data['form_error']['cta_bg_img'] = $this->upload->display_errors();
		}
		// print_r($this->homepage_model->data);exit;
		//Image Upload Code end here

		if (!empty($widget_id)) {
			$this->homepage_model->data['modified_date'] = date('Y-m-d');
			$this->homepage_model->data['modified_by'] = $this->session->userdata('user_id');
			$this->homepage_model->primary_key = array('widget_id' => $widget_id);
			if ($this->homepage_model->update('widget_cta')) {
				$msg = array('type' => 'success', 'icon' => 'fa fa-check', 'txt' => 'Record Updated Successfully');
			} else {
				$msg = array('type' => 'danger', 'icon' => 'fa fa-thumbs-down', 'txt' => 'Sorry! Unable to Update Record.');
			}
		} else {
			unset($this->homepage_model->data['widget_id']);
			$this->homepage_model->data['modified_date'] = date('Y-m-d');
			$this->homepage_model->data['modified_by'] = $this->session->userdata('user_id');
			if ($q = $this->homepage_model->insert('widget_cta')) {
			
				$msg = array('type' => 'success', 'icon' => 'fa fa-check', 'txt' => 'Record Added Successfully');
			} else {
				$data['query'] = (object) $this->input->post();
				$data['view'] = "homepage/widget_2";
				$data['title'] = 'Administrator Dashboard';
				$data['page_heading'] = 'Add/Edit Widget 2';
				$data['breadcrumb'] = "Add/Edit Widget 2";
				$data['scripts'] = array('assets/javascripts/' . 'master.js');
				$this->load->view('templates/dashboard', $data);
				$msg = array('type' => 'danger', 'icon' => 'fa fa-thumbs-down', 'txt' => 'Sorry! Unable to Add Record.');
			}
		}

		$this->session->set_flashdata('msg', $msg);
		redirect("homepage");
	}

}