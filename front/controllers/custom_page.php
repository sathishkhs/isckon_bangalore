<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
    require_once 'vendor/autoload.php';
require_once 'vendor/autoload.php';
require_once APPPATH . 'third_party/easebuzz/easebuzz-lib/easebuzz_payment_gateway.php';

use Razorpay\Api\Api;

class Custom_page extends MY_Controller {
    public $class_name;
    public $api;
    function __construct() {
        parent::__construct();
        $this->class_name = strtolower(get_class());
        $this->load->config('payment_config');
        $this->load->model('custom_page_model');
        $this->load->model('chapters_model');
        $this->load->model('campaigns_model');
        $this->load->model('payment_model');
        $this->load->helper(array('form','url'));
          $this->load->library('form_validation');
          $this->load->library('encryption');
          $this->load->library('my_encrypt');
    }

    
    public function index($slug) {
       
        if (!empty($this->input->post())) {
            
             $this->form_validation->set_rules('full_name', 'Full Name', 'required');
             $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim');
             $this->form_validation->set_rules('mobile_number', 'Mobile number', 'required|min_length[10]|max_length[10]|numeric');
             $this->form_validation->set_rules('pan_number', 'Pan Number', 'required|trim|alpha_numeric');
              $this->form_validation->set_rules('amount', 'Amount', 'required|trim|greater_than[99]');
             
             if ($this->form_validation->run() == TRUE){
             
            $this->payment_model->data['page_slug'] = $data['page_slug'] = $page_slug = $this->input->post('page_slug');
            $data['table_name'] = $table_name = $this->input->post('table_name');
            $data['company_name'] = $company_name = $this->config->item('company_name');
            $data['company_description'] = $company_description = $this->config->item('company_description');
            $data['image'] = $image = SETTINGS_UPLOAD_PATH . $this->data['settings']->LOGO_IMAGE;

            // Easebuzz details
            $data['MERCHANT_KEY'] = $MERCHANT_KEY = $this->config->item('merchant_key');
            $data['salt'] = $SALT = $this->config->item('salt');
            $data['env'] = $ENV = $this->config->item('env');
            //    Razorpay details
            $data['keyId'] = $keyId =  $this->config->item('keyId');
            $data['keySecret'] = $keySecret = $this->config->item('keySecret');
            // Form input details
            $this->payment_model->data['full_name'] = $data['full_name'] = $full_name = ucfirst($this->input->post('full_name',true));
            $this->payment_model->data['mobile_number'] = $data['mobile_number'] = $mobile_number = $this->input->post('mobile_number',true);
            $this->payment_model->data['email'] = $data['email'] = $email = $this->input->post('email',true);
            $this->payment_model->data['pan_number'] = $data['pan_number'] = $pan_number = strtoupper($this->input->post('pan_number',true));
            $this->payment_model->data['address'] = $data['address'] = $address = $this->input->post('city',true);
             $this->payment_model->data['city'] = $data['city'] = $city = $this->input->post('city',true);
            $this->payment_model->data['state'] = $data['state'] = $state = $this->input->post('state',true);
            $this->payment_model->data['pincode'] = $data['pincode'] = $pincode = $this->input->post('pincode',true);
            $this->payment_model->data['dob'] = $data['dob'] = $dob = $this->input->post('dob');
            $this->payment_model->data['frcode'] = $data['frcode'] = $frcode = $this->input->post('frcode',true);
            //payment details 
            $this->payment_model->data['amount'] = $data['amount'] = $amount = $this->input->post('amount');
            $this->payment_model->data['currency'] = $data['currency'] = $currency = $this->input->post('currency');
            $this->payment_model->data['citizen'] = $data['citizen'] = $citizen = $this->input->post('citizen');
            $this->payment_model->data['campaign'] = $data['campaign'] = $campaign = $this->input->post('campaign');
            $this->payment_model->data['programme'] = $data['programme'] = $programme = $this->input->post('programme') . '-' . $this->input->post('duration');
            $this->payment_model->data['payment_date'] = $data['payment_date'] = $payment_date = date('Y-m-d h:i:s');
            $this->payment_model->data['status'] = "attempted";

            $str_result = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $generated_key = substr(str_shuffle($str_result), 0, 4);
            $this->payment_model->data['receipt'] = $receipt = 'IGF_' . $generated_key . '_' . rand('00000000', '9999999999');
            // Payment duration
            $this->payment_model->data['duration'] = $duration = $this->input->post('duration');


            $data['insert_id'] = $insert_id = $this->payment_model->insert($table_name);
            // $encrypted_id = urlencode($this->encryption->encrypt($insert_id));
            $encrypted_id = urlencode($this->my_encrypt->encrypt_key($insert_id));
           
            if ($duration == 'DONATE-NOW') {

                $easebuzzObj = new Easebuzz($MERCHANT_KEY, $SALT, $ENV);

                $postData = array(
                    "txnid" => "$receipt",
                    "amount" => "$amount.0",
                    "firstname" => "$full_name",
                    "email" => "$email",
                    "phone" => "$mobile_number",
                    "productinfo" => "$programme",
                    "surl" => base_url() . "charitable_programs/success/$encrypted_id",
                    "furl" => base_url() . "charitable_programs/failed/$encrypted_id",
                    "udf1" => "$frcode",
                    "udf2" => "",
                    "udf3" => "$programme",
                    "udf4" => "$insert_id",
                    "udf5" => "",
                    "udf6" => "$pan_number",
                    "address1" => "$address",
                    "address2" => "",
                    "city" => "",
                    "state" => "",
                    "country" => "",
                    "zipcode" => ""
                );
                $result = $easebuzzObj->initiatePaymentAPI($postData);

                $postData1 = array(
                    "txnid" => "$receipt",
                    "amount" => "$amount.0",
                    "email" => "$email",
                    "phone" => "$mobile_number"
                );

                // $result1 = $easebuzzObj->transactionAPI($postData1); 

                header("content-type:Application/json");
                echo json_encode($result);
            } elseif ($duration == 'DONATE-MONTHLY') {

                $api = new Api($keyId, $keySecret);


                $customer =   $api->customer->create(array('name' => $full_name, 'email' => $email, 'contact' => $mobile_number, 'fail_existing' => 0, 'notes' => array('pan' => $pan_number, 'address' => $city, 'amount' => $amount, 'programme' => $programme, 'payment_date' => $payment_date)));
                // Api Customer id generated when user details sent 
                $data['api_customer_id'] = $api_customer_id =  $customer->id;
                $this->payment_model->primary_key = array('id' => $customer->id);
                $get_customer = $this->payment_model->row_data('rzp_customers');

                if (!empty($get_customer) && $get_customer->id == $customer->id) {
                    $customer_id = $get_customer->customer_id;
                } else {
                    $this->payment_model->data = array('id' => $customer->id, 'entity' => $customer->entity, 'full_name' => $customer->name, 'email' => $customer->email, 'contact' => $customer->contact, 'pan' => $customer->notes->pan, 'address' => $customer->notes->address, 'amount' => $customer->notes->amount, 'programme' => $customer->notes->programme, 'payment_date' => $customer->notes->payment_date, 'created_at' => $customer->created_at);
                    $customer_id =  $this->payment_model->insert('rzp_customers');
                }
                $this->payment_model->data = [];
                $this->payment_model->data['payment_method'] =  $payment_method = $this->input->post('payment_method');
                $this->payment_model->data['donation_period'] = $donation_period = $this->input->post('donation_period');

                $data['call_back_url'] = $call_back_url = base_url("charitable_programs/success/$encrypted_id");

                $data['customer_id'] = $this->payment_model->data['customer_id'] = $customer_id;
                $this->payment_model->primary_key = array('id' => $insert_id);
                $this->payment_model->update($table_name);

                $razorpayOrder =   $api->order->create(array('amount' => $amount*100 , 'currency' => 'INR', 'method' => $payment_method, 'customer_id' => $customer->id, 'token' => array('max_amount' => $amount  * 100, 'expire_at' => strtotime(" +" . $donation_period . " months"), 'frequency' => 'monthly'), 'receipt' => $receipt, 'notes'           => array(
                    "name"  =>  $full_name,
                    "email"             => $email,
                    "contact"           => $mobile_number,
                    "pan"               => $pan_number,
                    "dob"               => $dob,
                    "citizen"           => $citizen,
                    "address"           => $address
                )));
                $this->payment_model->data['razorpay_order_id'] = $data['razorpay_order_id'] = $razorpayOrderId = $razorpayOrder['id'];
                $this->payment_model->data['amount_paid'] = $razorpayOrder->amount_paid;
                $this->payment_model->data['amount_due'] = $razorpayOrder->amount_due;

                $this->payment_model->primary_key = array('id' => $insert_id);
                $this->payment_model->update($table_name);

                $data['rzp_data'] = [
                    "key"               => $keyId,
                    "amount"            => $amount,
                    "name"              => "Impact Guru Foundation",
                    "description"       => "Impact Guru Foundation (IGF) aspires to build a world where healthcare is affordable and accessible to everyone.",
                    "image"             => $image,
                    "currency"          => $currency,
                    "full_name"              => $full_name,
                    "email"             => $email,
                    "contact"           => $mobile_number,
                    "pan_number"               => $pan_number,
                    "dob"               => $dob,
                    "citizen"           => $citizen,
                    "address"           => $address,
                    "merchant_order_id" => $receipt,
                    "receipt" => $receipt,
                    "order_id"          => $razorpayOrderId,
                    "insert_id"         => $insert_id,
                    "campaign"         => $campaign,
                    "programme"         => $programme,
                    "table_name"              => $table_name,
                    "payment_method" => $payment_method,
                    "customer_id" => $api_customer_id,
                    "call_back_url"  => $call_back_url,
                    "interval" => $donation_period

                ];

                $template_path = $this->pagewisecontent($slug);
                $data += $this->data;
                $data['view_path'] = "custom/".$slug; 
                $data['page_heading'] = $data['page_items']->page_title;
                $data['breadcrumb'] = '<span><a href="">Home</a> - </span><span><i class="fa fa-angle-right"></i></span><span class="active">' . $data['page_items']->page_title . '</span>';
                $data['scripts'] = array('assets/javascripts/custom_page.js');
                $this->load->view($template_path, $data);
            }
            
             }else{
                  $template_path = $this->pagewisecontent($slug);
                    $data = $this->data;
                     $data['view_path'] = "custom/".$slug; 
                     $this->chapters_model->primary_key = array('status_ind'=>1);
                     $data['chapters'] = $this->chapters_model->getdata('chapters');
                     $this->campaigns_model->primary_key = array('status_ind'=>1);
                    $data['campaigns'] = $this->campaigns_model->getdata('campaigns');
                     $this->campaigns_model->primary_key = array('status_ind'=>1);
                    $data['faqs'] = $this->campaigns_model->getdata('faqs');
                    $data['page_heading'] = $data['page_items']->page_title;
                    $data['breadcrumb'] = '<span><a href="">Home</a> - </span><span><i class="fa fa-angle-right"></i></span><span class="active">' . $data['page_items']->page_title . '</span>';
                    $data['scripts'] = array('assets/javascripts/custom_page.js');
                    $this->load->view($template_path, $data);
             }
             
             
        } else {

            $template_path = $this->pagewisecontent($slug);
            $data = $this->data;
             $data['view_path'] = "custom/".$slug; 
             $this->chapters_model->primary_key = array('status_ind'=>1);
             $data['chapters'] = $this->chapters_model->getdata('chapters');
             $this->campaigns_model->primary_key = array('status_ind'=>1);
            $data['campaigns'] = $this->campaigns_model->getdata('campaigns');
             $this->campaigns_model->primary_key = array('status_ind'=>1);
            $data['faqs'] = $this->campaigns_model->getdata('faqs');
            $data['page_heading'] = $data['page_items']->page_title;
            $data['breadcrumb'] = '<span><a href="">Home</a> - </span><span><i class="fa fa-angle-right"></i></span><span class="active">' . $data['page_items']->page_title . '</span>';
            $data['scripts'] = array('assets/javascripts/custom_page.js');
            $this->load->view($template_path, $data);
        }
    
    }  

    public function connect_save(){
        $this->custom_page_model->data = $this->input->post();
        $this->custom_page_model->data['service_slot'] = implode(',',$this->input->post('service_slot'));
      
        $res = $this->custom_page_model->insert('connect');
        if(!empty($res) && $res == true ){
            $result = 1;
        }else{
            $result = 0;
        }
        echo json_encode(($result));
    }

    public function gallery_categories($gallery_id){
        $data = $this->data;
        $data['view_path'] = "gallery/gallery_category"; 
        $this->custom_page_model->primary_key = array('gallery_id' => $gallery_id); 
        $data['gallery_categories'] =  $this->custom_page_model->getdata('gallery_category');
        $this->custom_page_model->primary_key = array('gallery_id'=>$gallery_id);
        $data['page_heading'] = $this->custom_page_model->get_row('gallery')->gallery_name;
        $data['breadcrumb'] = '<span><a href="">Home</a> - </span><span><i class="fa fa-angle-right"></i></span><span class="active">'.'Gallery Categories'.'</span>' ;   
        $data['scripts'] = array('assets/javascripts/custom_page.js');
        $this->load->view('templates/custom_page', $data);
    }
    
    public function show_gallery($gallery_id,$category_id){
        $data = $this->data;
        $data['view_path'] = "gallery/page"; 
        $this->custom_page_model->primary_key = array('gallery_id' => $gallery_id, 'category_id' => $category_id); 
        $data['gallery_images'] =  $this->custom_page_model->view_data('gallery_images');
        $this->custom_page_model->primary_key = array('category_id'=>$category_id);
        $data['page_heading'] = $this->custom_page_model->get_row('gallery_category')->category_name;
        $data['scripts'] = array('assets/javascripts/custom_page.js','assets/javascripts/index.js');
        $this->load->view('templates/custom_page', $data);
    }


    public function charitable($slug){
        $template_path = $this->pagewisecontent($slug);
        $data = $this->data;
        $data['slug'] = $slug;
        $data['table_name'] = $table_name = $this->input->post('table_name');

        $data['keyId'] = $keyId = $this->config->item('keyId');
        $this->seva_page_model->data['seva_name'] = $data['seva_name'] = $seva_name = $this->input->post('table_name');
        $this->seva_page_model->data['full_name'] = $data['full_name'] = $full_name = $this->input->post('full_name');
        $this->seva_page_model->data['phone_number'] = $data['phone_number'] = $phone_number = $this->input->post('phone_number');
        $this->seva_page_model->data['email'] = $data['email'] = $email = $this->input->post('email');
        $this->seva_page_model->data['pan_number'] = $data['pan_number'] = $pan_number = $this->input->post('pan_number');
        $this->seva_page_model->data['city'] = $data['city'] = $city = $this->input->post('city');
        $this->seva_page_model->data['amount'] = $data['amount'] = $amount = $this->input->post('amount');
        $this->seva_page_model->data['payment_date'] = $data['payment_date'] = $payment_date = date('Y-m-d h:i:s');
        $str_result = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $generated_key = substr(str_shuffle($str_result), 0, 4);
        $this->seva_page_model->data['receipt'] = $receipt = $generated_key . '_' . rand('00000000', '9999999999');
        $insert_id = $this->seva_page_model->insert($table_name);

        // print_r($insert_id);exit;
        $order_data = [
            'receipt'         => $receipt,
            'amount'          => $amount * 100, // 39900 rupees in paise
            'currency'        => 'INR',
            'notes'           => [
                'name'  => $full_name,
                'phone_number' => $phone_number,
                'email' => $email,
                'pan_number' => $pan_number,
                'city' => $city,
                'payment_date' => $payment_date,
                'receipt' => $receipt,
                'seva_name' => $seva_name,
                'insert_id' => $insert_id
            ]

        ];
        $api = new Api($this->config->item('keyId'), $this->config->item('keySecret'));
        $razorpayOrder = $api->order->create($order_data);
        // print_r($razorpayOrder['created_at']);exit;

        $this->seva_page_model->data['razorpay_order_id'] = $data['razorpay_order_id'] = $razorpay_order_id = $razorpayOrder['id'];
        $this->seva_page_model->data['entity'] = $data['entity'] = $entity = $razorpayOrder['entity'];
        $this->seva_page_model->data['status'] = $data['status'] = $status = $razorpayOrder['status'];
        $this->seva_page_model->data['created_at'] = $data['created_at'] = $created_at = $razorpayOrder['created_at'];

        $this->seva_page_model->primary_key = array('id' => $insert_id);
        $this->seva_page_model->update($slug);


        $data['insert_id'] = $insert_id;
        $this->load->view($template_path, $data);
    }
   

    
    public function save_payment($insert_id, $table_name)
    {

        $this->seva_page_model->primary_key = array('id' => $insert_id);
        $payment_data = $this->seva_page_model->row_data($table_name);
         $this->seva_page_model->primary_key = array('page_slug' => $payment_data->seva_name);
        $seva_data = $this->seva_page_model->row_data('charitable_programs');
        
        if (!empty($this->input->post('error'))) {
            $this->seva_page_model->data['error_code'] = $this->input->post('error')['code'];
            $this->seva_page_model->data['error_description'] = $this->input->post('error')['description'];
            $this->seva_page_model->data['reason'] = $this->input->post('error')['reason'];
            $this->seva_page_model->data['razorpay_payment_id'] = $razorpay_payment_id =  json_decode($this->input->post('error')['metadata'])->payment_id;
            $this->seva_page_model->data['status'] = 'failed';
        } else {
            $this->seva_page_model->data['razorpay_payment_id'] = $razorpay_payment_id = $this->input->post('razorpay_payment_id');
            $this->seva_page_model->data['status'] = 'success';
        }
         $this->seva_page_model->primary_key = array('id' => $insert_id);
        $q = $this->seva_page_model->update($table_name);
      

        if (!empty($this->input->post('error'))) {
            $this->sendmail($payment_data->email, $payment_data->name, $payment_data->amount, $payment_data->razorpay_order_id, 0);
            $this->session->set_flashdata('amount', $payment_data->amount);
            $this->session->set_flashdata('name', $payment_data->full_name);
            redirect($this->class_name . '/donation_failed/');
        } else {
            $this->sendmail($payment_data->email, $payment_data->name, $payment_data->amount, $payment_data->razorpay_order_id, 1);
            
             $curl = curl_init();

            curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://hkm-tapf.azurewebsites.net/api/login',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'POST',
              CURLOPT_POSTFIELDS =>'{
                "email":"websiteuser@harekrishnamandir.org",
                "password":"Websiteuser@786"
            }',
              CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                'Authorization: ',
                'Content-Type: application/json'
              ),
            ));
            
            $response = curl_exec($curl);
            curl_close($curl);
            $token = json_decode($response)->token;
           
            

            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://hkm-tapf.azurewebsites.net/api/web/online-donation',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'name' => $payment_data->full_name,
                'email' => $payment_data->email,
                'phone_number' => $payment_data->phone_number,
                'address' => $payment_data->city,
                'amount' => $payment_data->amount,
                'seva_id' => $payment_data->id,
                'transaction_number' => $payment_data->razorpay_order_id,
                'order_id' => "$payment_data->razorpay_order_id",
                'payment_status' => $payment_data->status,
                'tally_head' => !empty($seva_data->tally_head) ? $seva_data->tally_head : 'General Donation',
                'seva_name' => $payment_data->seva_name,
                'seva_code' => !empty($seva_data->seva_code) ? $seva_data->seva_code : 'GEN-ADS'
            ),
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer $token"
            ),
            ));
            
            $response = curl_exec($curl);
      
            curl_close($curl);
            
            $this->session->set_flashdata('order_id', $razorpay_payment_id);
            $this->session->set_flashdata('razorpay_payment_id', $razorpay_payment_id);
            $this->session->set_flashdata('amount', $payment_data->amount);
            $this->session->set_flashdata('name', $payment_data->full_name);
            redirect('seva_page/donation_success/');
        }
    }

    public function donation_success()
    {
        // if(empty($res) || empty($amount)){
        //     redirect('donate');
        // }
        $data = $this->data;
        $msg = array();
        $data['view_path'] = $this->class_name . '/donation_success';
        // $data['name'] = urldecode($res);
        // $data['amount'] = $amount;

        $data['scripts'] = array('javascripts/' . $this->class_name . '.js', 'javascripts/dashboard.js');
        $this->load->view('templates/seva_page', $data);
    }
    public function donation_failed()
    {
        $msg = array();
        $data = $this->data;
        $data['view_path'] = $this->class_name . '/donation_failed';
        // $data['name'] = ucfirst($name);
        $data['scripts'] = array('javascripts/' . $this->class_name . '.js', 'javascripts/dashboard.js');
        $this->load->view('templates/seva_page', $data);
    }

    public function sendmail($to_mail, $name, $amount, $receipt, $status)
    {


        $config['protocol']    = 'mail';
        $config['smtp_host']    = 'mail.hkm-mandir.org';
        $config['smtp_port']    = '465';
        $config['smtp_timeout'] = '30';
        $config['smtp_user']    = 'admin@hkm-mandir.org';
        $config['smtp_pass']    = '@ksh@y@ch@it@ny@123';
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        // $config['smtp_crypto'] = 'ssl';
        $config['mailtype'] = 'html'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not 
        $config['wordwrap'] = TRUE; // bool whether to validate email or not 

        $this->load->library('email', $config);
        $this->email->set_mailtype("html");
        $this->email->from('admin@hkm-mandir.org', 'Harekrishna Mandir');
        $this->email->to($to_mail);

        if ($status == 1) {
            $this->seva_page_model->primary_key = array('template_id' => 1);
            $template = $this->seva_page_model->row_data('email_templates');
            $data['name'] = $name;
            $data['amount'] = $amount;
            $this->email->subject($template->template_title);
            // $message = $template->template_content;
            $message = str_replace('####NAME####', $name, $template->template_content);
            $message = str_replace('####RECEIPT####', $receipt, $message);
        } elseif ($status == 0) {
            $this->seva_page_model->primary_key = array('template_id' => 2);
            $template = $this->seva_page_model->row_data('email_templates');
            $data['name'] = $name;
            $data['amount'] = $amount;
            $this->email->subject($template->template_title);
            // $message = $template->template_content;

            $message = str_replace('####NAME####', $name, $template->template_content);
            $message = str_replace('####RECEIPT####', $receipt, $message);
            // $message = $this->load->view('email_templates/failed.php',$data,true);
        }


        $this->email->message($message);

        $q = $this->email->send();
    }

}