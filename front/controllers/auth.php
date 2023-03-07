<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Auth extends MY_Controller {
    function __construct() {
        parent::__construct();
        $this->class_name = strtolower(get_class());
        $user_id = $this->session->userdata('user_id');
        if(!empty($user_id)){
            redirect('myaccount');
        }
        $this->load->model('auth_model');
    }

    public function index(){

    }
    public function register(){
        $this->form_validation->set_rules('full_name','Full Name', 'required|alpha');
        $this->form_validation->set_rules('email','Email', 'required|trim|valid_email|is_unique[customers.email]');
        $this->form_validation->set_rules('mobile_number','Mobile Number', 'required|numeric|trim|is_unique[customers.mobile_number]');
        $this->form_validation->set_rules('password','Password', 'required|trim');
        $this->form_validation->set_rules('confirm_password','Confirm Password', 'required|trim|matches[password]');

        if($this->form_validation->run() == FALSE){
            //Failed
            $response = array(
                'success'=>'error',
                'error'=>true, 
                'name_error'=> form_error('full_name'),
                'email_error'=> form_error('email'),
                'mobile_number_error'=> form_error('mobile_number'),
                'password_error'=> form_error('password'),
                'confirm_password_error'=> form_error('confirm_password'),
                'message' => 'Please fill the form with valid details'
            );
        }else{
            //Success
            $this->auth_model->data['full_name'] = $name = $this->input->post('full_name');
            $this->auth_model->data['email'] = $this->input->post('email');
            $this->auth_model->data['mobile_number'] = $this->input->post('mobile_number');
            $this->auth_model->data['password'] = md5($this->input->post('password'));
            $this->auth_model->data['created_by'] = 0;
            $this->auth_model->data['account_active_status'] = 0;
            $this->auth_model->data['modified_by'] = 0;
            $this->auth_model->data['modified_date'] = date('Y-m-d H:i:s');
            $this->auth_model->data['login_time'] = date('Y-m-d H:i:s');
            $this->auth_model->data['login_ip'] = $this->input->ip_address();

            $q = $this->auth_model->insert('customers');
            if(!empty($q) && $q > 0){
                $response = array(
                    'success'=>'success',
                    'error' => false,
                    'message'=> "Dear $name, you are Registered successfully. Please wait until admin approval."
                );
            }else{
                $response = array(
                    'success'=>'error',
                    'error'=>true, 
                    'name_error'=> form_error('full_name'),
                    'email_error'=> form_error('email'),
                    'mobile_number_error'=> form_error('mobile_number'),
                    'password_error'=> form_error('password'),
                    'confirm_password_error'=> form_error('confirm_password'),
                    'message' => 'Something went wrong! Please fill the form with valid details and try again'
                );
            }

        }
      
        header('Content-type: application/json');
        echo json_encode($response);
    }

    public function login(){
        $this->form_validation->set_rules('email','Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password','Password', 'required|trim');
        if($this->form_validation->run() == FALSE){
            $response = array(
                'success'=>'error',
                'error'=>true, 
                'email_error'=> form_error('email'),
                'password_error'=> form_error('password'),
                'message' => 'Invalid details',
            );
        }else{
            //Success
           
          
            $this->auth_model->primary_key = array('email'=>$this->input->post('email'), 'password'=>md5($this->input->post('password')));
            $res = $this->auth_model->row_data('customers');
            if(!empty($res) && $res != FALSE){
               
            $this->auth_model->data['login_time'] = date('Y-m-d H:i:s');
            $this->auth_model->data['login_ip'] = $this->input->ip_address();
            $this->auth_model->primary_key = array('customer_id'=>$res->customer_id);
            $this->auth_model->update('customers');
            $auth_user = [
                'full_name'=>$res->full_name,
                'email'=>$res->email,
                'mobile_number'=>$res->mobile_number,
                'customer_id' => $res->customer_id,
                'account_active_status' => $res->account_active_status
            ];
            $this->session->set_userdata('authenticated','1');
            $this->session->set_userdata('user_id',$res->customer_id);
            $this->session->set_userdata('auth_user',$auth_user);
            $this->session->set_userdata('status','You are Logged in Successfully');
            $msg = array('type' => 'success', 'txt' => "Hi $res->full_name, Welcome.",'icon' => 'icon-ok green'); 
		
		
		
		$this->session->set_flashdata('msg', $msg);
            $response = array(
                'success'=>'success',
                'error' => false,
                'message'=> "Dear $res->full_name, you are Logged in successfully."
            );
            }else{
                $response = array(
                    'success'=>'error',
                    'error'=>true, 
                    'email_error'=> form_error('email'),
                    'password_error'=> form_error('password'),
                    'message' => 'Login Failed! Please try with valid details'
                );
            }
        }
      
        header('Content-type: application/json');
        echo json_encode($response);
    }
    
}