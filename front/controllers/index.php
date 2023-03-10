<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Index extends MY_Controller {
    function __construct() {
        parent::__construct();
        $this->class_name = strtolower(get_class());
        $this->load->model('index_model');
        $this->load->model('blog_model');
        $this->load->config('payment_config');
      
    }
    public function index($slug = 'home') {
         $template_path = $this->pagewisecontent($slug);
        $data = $this->data;
        $this->index_model->primary_key = array('widget1_id'=>1);
        $data['widget1'] = $this->index_model->get_row_data('widget1');
        $this->index_model->primary_key = array('widget_id'=>1);
        $data['widget_cta1'] = $this->index_model->get_row_data('widget_cta');
        $this->index_model->primary_key = array('widget_id'=>2);
        $data['widget_cta2'] = $this->index_model->get_row_data('widget_cta');
        // $this->index_model->primary_key = array('gallery_id'=>$data['page_items']->gallery_id);
        $data['gallery'] = $this->index_model->gallery_data('category_gallery');
        // $data['sevas'] = $this->index_model->view_sevas('sevas_page');
         $data['blog'] =  $this->blog_model->view_limit_data('blog'); 
        $data['events'] =  $this->index_model->view_data('events'); 
        $this->index_model->primary_key = array('status_ind'=>1);
        $data['campaigns'] = $this->index_model->campaigns('campaigns');
        $this->index_model->primary_key = array('status_ind'=>1);
        $data['banners'] = $this->index_model->view_data('banners');
        $data['scripts'] = array('assets/javascripts/index.js');
        $this->load->view('templates/home', $data);
    }

    public function contact_us(){
        $data = $this->data;
        $data['view'] = 'index/contact_us';
        $data['scripts'] = array('assets/javascripts/index.js'); 
        $this->load->view('templates/home', $data);
    }

    public function event($id){
       
        $data = $this->data;
        $this->index_model->primary_key = array('event_id'=>$id);
        $data['event'] = $this->index_model->get_row_data('events');
        $data['view_path'] = 'events/event_page';
        $data['scripts'] = array('assets/javascripts/index.js'); 
        $this->load->view('templates/inner_page', $data);
    }

    public function contact_submit(){
        ini_set('SMTP', "harekrishnamandir.org");
            ini_set('smtp_port', "465");
            ini_set('sendmail_from', "mailing@harekrishnamandir.org");
            $config['protocol']    = 'mail';
            $config['smtp_host']    = 'harekrishnamandir.org';
            $config['smtp_port']    = '465';
            $config['smtp_timeout'] = '30';
            $config['smtp_user']    = 'mailing@harekrishnamandir.org';
            $config['smtp_pass']    = 'Q!W@E#r4t5y6';
            $config['charset']    = 'utf-8';
            $config['newline']    = "\r\n";
            // $config['smtp_crypto'] = 'ssl';
            $config['mailtype'] = 'html'; // or html
            $config['validation'] = TRUE; // bool whether to validate email or not 
            $config['wordwrap'] = TRUE; // bool whether to validate email or not 
    
           $que =  $this->load->library('email', $config);
            $this->email->set_mailtype("html");
            $this->email->from('mailing@harekrishnamandir.org', 'HKM AHAMDABAD');
            $this->email->to('contact@harekrishnamandir.org');
           
            // $this->email_templates_model->primary_key = array('template_id' => 6);
            // $template = $this->email_templates_model->row_data('email_templates');
            // $data['name'] = $one->name;
            // $data['down'] = $amount;
            $this->email->subject('Contact Form Submission');
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $phone = $this->input->post('phone');
            $subject = $this->input->post('subject');
            $message = $this->input->post('message');
            // $message = str_replace('####NAME####', $one->name, $template->template_content);
            // $message = str_replace('####DOWNLOADLINK####',base_url().INVOICE_PDF_PATH.$one->pdf_folder_name."/".$one->invoice_file , $message);
             $html = 'New contact form submission recieved. User details are as follows:';
             $html .= "Name: $name <br>";
             $html .= "Email: $email <br>";
             $html .= "Phone: $phone <br>";
             $html .= "Subject: $subject <br>";
             $html .= "Message: $message";
    
    
            $this->email->message($html);
           
            // $q = $this->email->send();
   
         
        // $config['protocol']    = 'mail';
        // $config['smtp_host']    = 'smtp.office365.com';
        // $config['smtp_port']    = '587';
        // $config['smtp_timeout'] = '30';
        // $config['smtp_user']    = 'contact@harekrishnamandir.org';
        // $config['smtp_pass']    = 'harekrishna1*';
        // $config['newline']    = "\r\n";
        // $config['mailtype'] = 'html';
        // $config['validation'] = TRUE; 
        // $config['wordwrap'] = TRUE;      
        // $this->load->library('email',$config);
    
        //   $que =  $this->email->initialize($config);
        //   $this->email->set_newline("\r\n");  
        //    print_R($que);
        //     $this->index_model->data = $this->input->post();
        //     $this->index_model->data['created_date'] = date('y-m-d');
        //     if($this->index_model->insert('contact')){
        //         $this->email->from('contact@harekrishnamandir.org');
        //         $this->email->to('sathishds94@gmail.com');
          
        //         $this->email->subject('Enquiry or Contact Form Submission');
        //         $message = 'New Contact Form Submission.';
        //         $message .= '<br> The Contact details are as follows';
        //         $message .= '<br> Name :'.$this->input->post('name');
        //         $message .= '<br> Email :'.$this->input->post('email');
        //         $message .= '<br> Email :'.$this->input->post('phone');
        //         $message .= '<br> message :'.$this->input->post('message');
        //         $message .= '<br> Thanks & Regards';
        //      $this->email->message($message);
        //       $q = $this->email->send();
        //       echo $this->email->print_debugger(); 
        //       print_R($q);
                if($this->email->send()){
               
                    $res = 1;
                }else{
                    $res = 0;
                
                }
               
                header('content-Type:application/json');
                echo json_encode( $res);
                exit;
    
           
        
    }
    
    public function search(){
        $search = $this->input->post('search');
        $q = $this->index_model->search_data($search);
       
       $output = '';
        foreach($q as $r){
            
            if(isset($r->OriginatingTable) && $r->OriginatingTable == 'campaigns'){
                $output .= "<a class='text-white pt-1 pb-1' href='campaigns/$r->page_slug'>$r->title  - Campaign</a><br>";
            }
            if(isset($r->OriginatingTable) && $r->OriginatingTable == 'chapters'){
                $output .= "<a class='text-white pt-1 pb-1' href='chapters/$r->page_slug'>$r->title  - Chapter</a><br>";
            }
            if(isset($r->OriginatingTable) && $r->OriginatingTable == 'charitable_programs'){
                $output .= "<a class='text-white pt-1 pb-1' href='programs/$r->page_slug'>$r->title - Program</a><br>";
            }
        }
         
        echo $output;
        exit;
    }
}
?>