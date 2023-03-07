<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Campaigns extends MY_Controller {
    public $user_id;
    function __construct() {
        parent::__construct();
        $this->class_name = strtolower(get_class());
        $this->user_id = $this->session->userdata('user_id');
        
        $this->load->model('campaigns_model');
    }

    public function index(){
        $config["base_url"] = base_url() . "campaigns/my_campaigns";
        $config["total_rows"] = $data['total_rows'] = $this->db->where([ 'status_ind'=>1, 'approval_status'=>2])->count_all("campaigns");
        $config["per_page"] = $data['per_page'] = 2;
        $config["uri_segment"] = 3;
        
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = '<li class="page-item"><a class="page-link" href="#" aria-label="Previous"><img src="./assets/image/arrow-left-4.png" alt="" width="25"></a></li>';
        $config['last_link'] = '<li class="page-item"><a class="page-link"><img src="./assets/image/arrow-left-3.png" class="right-arrow-icon" alt="" width="25"></a></li>';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '<a class="page-link" href="#" aria-label="Previous"><img src="assets/image/arrow-left-4.png" alt="" width="25"></a>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '<a class="page-link" href="#" aria-label="Previous"><img src="./assets/image/arrow-left-4.png" class="right-arrow-icon" alt="" width="25"></a>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item"><a class="page-link active">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item num-tag">';
        $config['num_tag_close'] = '</li>';
       
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $this->campaigns_model->primary_key = array( 'status_ind'=>1, 'approval_status'=>2);
        $data['my_campaigns'] = $this->campaigns_model->getpaginationdata($config["per_page"],$page, 'campaigns');
        $data["links"] = $this->pagination->create_links();
     
        $data['view_path'] = 'campaigns/mycampaigns';
        $data['scripts'] = array('assets/javascripts/campaigns.js');
      

        $this->load->view("templates/inner_page", $data);
    }

    public function my_campaigns($num = 0){
        $data = $this->data;
        if(empty($this->user_id)){
            redirect('');
        }
        $config = array();
        $config["base_url"] = base_url() . "campaigns/my_campaigns";
        $config["total_rows"] = $data['total_rows'] = $this->db->where(['customer_id'=>$this->user_id, 'status_ind'=>1, 'approval_status'=>2,'created_from'=>1])->get("campaigns")->num_rows();
        $config["per_page"] = $data['per_page'] = 8;
        $config["uri_segment"] = 3;
        
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = '<li class="page-item"><a class="page-link" href="#" aria-label="Previous"><img src="./assets/image/arrow-left-4.png" alt="" width="25"></a></li>';
        $config['last_link'] = '<li class="page-item"><a class="page-link"><img src="./assets/image/arrow-left-3.png" class="right-arrow-icon" alt="" width="25"></a></li>';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '<a class="page-link" href="#" aria-label="Previous"><img src="assets/image/arrow-left-4.png" alt="" width="25"></a>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '<a class="page-link" href="#" aria-label="Previous"><img src="./assets/image/arrow-left-4.png" class="right-arrow-icon" alt="" width="25"></a>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item"><a class="page-link active">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item num-tag">';
        $config['num_tag_close'] = '</li>';
       
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $this->campaigns_model->primary_key = array('customer_id'=>$this->user_id, 'status_ind'=>1, 'approval_status'=>2,'created_from'=>1);
        $data['my_campaigns'] = $this->campaigns_model->getpaginationdata($config["per_page"],$page, 'campaigns');
        $data["links"] = $this->pagination->create_links();
        $data['view_path'] = 'campaigns/mycampaigns';
        $data['scripts'] = array('assets/javascripts/campaigns.js');
      

        $this->load->view("templates/inner_page", $data);

    }

    public function create_campaign(){
        $data = $this->data;
        if(empty($this->user_id)){
            redirect('');
        }
        $this->campaigns_model->primary_key = array('status_ind'=>1);
        $data['campaign_category'] = $this->campaigns_model->getdata('campaign_category');
        $data['view_path'] = 'campaigns/create_campaign';
        $data['scripts'] = array('assets/javascripts/campaigns.js');
        $this->load->view("templates/inner_page", $data);
    }

    
    public function campaign_save(){
        $this->form_validation->set_rules('title','Title', 'required');
        $this->form_validation->set_rules('short_desc','Email', 'required');
        $this->form_validation->set_rules('campaign_desc','Mobile Number', 'required');
        $this->form_validation->set_rules('summary','Password', 'required');
        $this->form_validation->set_rules('campaign_category','Confirm Password', 'required');
        $this->form_validation->set_rules('goal_amount','Confirm Password', 'required');
        $this->form_validation->set_rules('start_date','Confirm Password', 'required');

        if($this->form_validation->run() == FALSE){
            $data['view_path'] = 'campaigns/create_campaign';
            $data['scripts'] = array('assets/javascripts/campaigns.js');
            $this->load->view("templates/inner_page", $data);
        }else{
            // print_r($this->input->post());   
            $this->banner = array('upload_path' => CAMPAIGN_BANNER_PATH, 'allowed_types' => 'gif|jpg|png|jpeg');
            $this->upload->initialize($this->banner);
           
            if (!empty($_FILES['banner']['name']) && $this->upload->do_upload('banner')) {
                $upload_data = $this->upload->data();
                $file_Ext =  pathinfo($upload_data['full_path'], PATHINFO_EXTENSION);
                $gen_filename = "banner" . rand(1000000, 9999999) . "." . $file_Ext;
                rename($upload_data['full_path'], $upload_data['file_path'] . $gen_filename);
                $this->campaigns_model->data['banner'] = $gen_filename;
               
            } else {
            
                $data['form_error']['banner'] = $this->upload->display_errors();
            }
            $this->banner_image = array('upload_path' => CAMPAIGN_BANNER_PATH, 'allowed_types' => 'gif|jpg|png|jpeg');
            $this->upload->initialize($this->banner_image);
           
            if (!empty($_FILES['banner_image']['name']) && $this->upload->do_upload('banner_image')) {
                $upload_data = $this->upload->data();
                $file_Ext =  pathinfo($upload_data['full_path'], PATHINFO_EXTENSION);
                $gen_filename = "banner_image" . rand(1000000, 9999999) . "." . $file_Ext;
                rename($upload_data['full_path'], $upload_data['file_path'] . $gen_filename);
                $this->campaigns_model->data['banner_image'] = $gen_filename;
               
            } else {
            
                $data['form_error']['banner'] = $this->upload->display_errors();
            }

         
            $this->campaigns_model->data = $this->input->post();
            $this->campaigns_model->data['approval_status'] = 1;
            $this->campaigns_model->data['customer_id'] = $this->user_id;
            $this->campaigns_model->data['status_ind'] = 1;
            $this->campaigns_model->data['created_from'] = 1;
            $this->campaigns_model->data['created_by'] = $this->user_id;
            $this->campaigns_model->data['modified_by'] = $this->user_id;
            $this->campaigns_model->data['created_date'] = date('Y-m-d');
            $this->campaigns_model->data['modified_date'] = date('Y-m-d');
            $res = $this->campaigns_model->insert('campaigns');
            if(!empty($res) && $res > 0 ){
                $msg = array('type' => 'success', 'icon' => 'fa fa-check', 'txt' => 'Campaign Created Successfully');
            }else{
                $msg = array('type' => 'danger', 'icon' => 'fa fa-thumbs-down', 'txt' => 'Sorry! Unable to Create Campaign.');
            }
            $this->session->set_flashdata('msg', $msg);
            redirect("campaigns/create_campaign");
            // print_r($this->campaigns_model->data);
        }
    }
}