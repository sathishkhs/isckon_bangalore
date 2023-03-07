<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
    require_once 'vendor/autoload.php';

// use Razorpay\Api\Api;
class Programs extends MY_Controller {
    public $class_name;
    public $api;
    function __construct() {
        parent::__construct();
        $this->class_name = strtolower(get_class());
        $this->load->model('charitable_programs_model');
        $this->load->model('seva_page_model');
        // $this->load->config('razorpay-config');
    }

    public function index() {
        $data = $this->data;
        $this->charitable_programs_model->primary_key = array('status_ind'=>1);
        $data['programs'] = $this->charitable_programs_model->view_data('charitable_programs');
        $data['view_path'] = "programs/page"; 
        $data['scripts'] = array('assets/javascripts/index.js');
        $this->load->view('templates/charitable_program_page', $data);
    }

}