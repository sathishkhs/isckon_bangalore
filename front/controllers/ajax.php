<?php 

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
    
    class Ajax extends CI_Controller {
    public $class_name;
    public $api;
    function __construct() {
        parent::__construct();
        $this->class_name = strtolower(get_class());
        // $this->config->load('razorpay-config');
        $this->load->config('payment_config');
        $this->load->model('index_model');
        $this->load->model('payment_model');
    }
    
    public function subscribe(){
        $this->index_model->data['subscribe_email'] = $subscribe_email = $this->input->post('subscribe_email');
        $res = $this->index_model->insert('subscriptions');
        if(!empty($res) && $res>0){
        $data = '1';
        $this->subscribe_sendmail($subscribe_email);
        }else{
            $data = '0';
        }
        header("Content-type:application/json");
        echo json_encode($data);
        exit;
        
    }
    
      public function subscribe_sendmail($to_mail)
    {

// Customer Mail
        $config['protocol']    = 'smtp';
        $config['smtp_host']    = 'mail.dmg.org.in';
        $config['smtp_port']    = '587';
        $config['smtp_timeout'] = '7';
        $config['smtp_user']    = 'test@dmg.org.in';
        $config['smtp_pass']    = 'dmg.org.in';
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'html'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not 
        $config['wordwrap'] = TRUE; // bool whether to validate email or not     
        $this->load->library('email', $config);
        $this->email->set_mailtype("html");
        $this->email->from('test@dmg.org.in');
        $this->email->to($to_mail);

     
            $this->payment_model->primary_key = array('template_id' => 3);
            $template = $this->payment_model->row_data('email_templates');
            $this->email->subject($template->template_title);
            $message = $template->template_content;
            // $message = str_replace('####NAME####', $name, $template->template_content);
            // $message = str_replace('####RECEIPT####', $receipt, $message);
            // $message = str_replace('####AMOUNT####', $amount, $message);
            $message = str_replace('####NEWSLETTERPATH####', base_url().'assets/newsletter/PULSE-Newsletter-Aug-Oct-22.pdf', $message);
            // $message = str_replace('####SLUG####', base_url().$page_slug, $message);
                // $message = "Thank you for subscribing our newsletter.";
        $this->email->message($message);

        $q = $this->email->send();
        
        // Shilpa mail
        $config['protocol']    = 'smtp';
        $config['smtp_host']    = 'mail.dmg.org.in';
        $config['smtp_port']    = '587';
        $config['smtp_timeout'] = '7';
        $config['smtp_user']    = 'test@dmg.org.in';
        $config['smtp_pass']    = 'dmg.org.in';
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'html'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not 
        $config['wordwrap'] = TRUE; // bool whether to validate email or not     
        $this->load->library('email', $config);
        $this->email->set_mailtype("html");
        $this->email->from('test@dmg.org.in');
        $this->email->to('shilpa.manhas@impactgurufoundation.org');

     
            $this->payment_model->primary_key = array('template_id' => 4);
            $template = $this->payment_model->row_data('email_templates');
            $this->email->subject($template->template_title);
            $message = $template->template_content;
            $message = str_replace('####EMAIL####', $to_mail, $message);
            // $message = str_replace('####RECEIPT####', $receipt, $message);
            // $message = str_replace('####AMOUNT####', $amount, $message);
            // $message = str_replace('####NEWSLETTERPATH####', base_url().'assets/newsletter/PULSE-Newsletter-Aug-Oct-22.pdf', $message);
            // $message = str_replace('####SLUG####', base_url().$page_slug, $message);
                // $message = "Thank you for subscribing our newsletter.";
        $this->email->message($message);

        $q = $this->email->send();
        
    }
    
     public function sendmail($to_mail)
    {


        $config['protocol']    = 'smtp';
        $config['smtp_host']    = 'mail.dmg.org.in';
        $config['smtp_port']    = '587';
        $config['smtp_timeout'] = '7';
        $config['smtp_user']    = 'test@dmg.org.in';
        $config['smtp_pass']    = 'dmg.org.in';
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'html'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not 
        $config['wordwrap'] = TRUE; // bool whether to validate email or not     
        $this->load->library('email', $config);
        $this->email->set_mailtype("html");
        $this->email->from('test@dmg.org.in');
        $this->email->to($to_mail);

     
            // $this->payment_model->primary_key = array('template_id' => 1);
            // $template = $this->payment_model->row_data('email_templates');
            $this->email->subject('Volunteer');
            // $message = $template->template_content;
            // $message = str_replace('####NAME####', $name, $template->template_content);
            // $message = str_replace('####RECEIPT####', $receipt, $message);
            // $message = str_replace('####AMOUNT####', $amount, $message);
            // $message = str_replace('####PDFPATH####', base_url().'charitable_programs/download_invoice/'.$pdf_path, $message);
            // $message = str_replace('####SLUG####', base_url().$page_slug, $message);
                $message = "Thank you for Volunteering with us.";
        $this->email->message($message);

        $q = $this->email->send();
    }
    
    
     public function volunteer(){
        $this->index_model->data = $subscribe_email = $this->input->post();
        $res = $this->index_model->insert('volunteer');
        if(!empty($res) && $res>0){
        $data = '1';
        $msg = 'Thank you for your intrest. We recived you request we will get back to you soon.';
        $this->sendmail($this->input->post('email'));
        }else{
        $msg = 'Sorry something went wrong please try again.';
            $data = '0';
        }
        // header("Content-type:application/json");
        // echo json_encode($data);
        // exit;
        
        $this->session->set_flashdata('msg',$msg);
        redirect('volunteering');
        
    }
    
    }