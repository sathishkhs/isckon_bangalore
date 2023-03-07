
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
require_once 'vendor/autoload.php';
require_once APPPATH . 'third_party/easebuzz/easebuzz-lib/easebuzz_payment_gateway.php';

use Razorpay\Api\Api;

class Charitable_Programs extends MY_Controller
{
    public $class_name;
    public $api;
    function __construct()
    {
        parent::__construct();
        $this->class_name = strtolower(get_class());
        $this->load->config('payment_config');
        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');
        $this->load->model('payment_model');
        $this->load->library('my_encrypt');
    }


    public function index($slug)
    {
        // print_R($this->input->post()); exit;
        if (!empty($this->input->post())) {
             $this->form_validation->set_rules('full_name', 'Full Name', 'required');
             $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim');
             $this->form_validation->set_rules('mobile_number', 'Mobile number', 'required|min_length[10]|max_length[10]|numeric');
             $this->form_validation->set_rules('pan_number', 'Pan Number', 'required|trim|alpha_numeric');
             $this->form_validation->set_rules('amount', 'Amount', 'required|trim|greater_than[99]');
             if ($this->form_validation->run() == TRUE){
                 
            $this->payment_model->data['page_slug'] = $data['page_slug'] = $page_slug = 'charitable_programs/'.$this->input->post('page_slug');
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
            $this->payment_model->data['full_name'] = $data['full_name'] = $full_name = ucfirst($this->input->post('full_name'));
            $this->payment_model->data['mobile_number'] = $data['mobile_number'] = $mobile_number = $this->input->post('mobile_number');
            $this->payment_model->data['email'] = $data['email'] = $email = $this->input->post('email');
            $this->payment_model->data['pan_number'] = $data['pan_number'] = $pan_number = strtoupper($this->input->post('pan_number'));
            $this->payment_model->data['address'] = $data['address'] = $address = $this->input->post('city');
            $this->payment_model->data['city'] = $data['city'] = $city = $this->input->post('city');
            $this->payment_model->data['state'] = $data['state'] = $state = $this->input->post('state');
            $this->payment_model->data['pincode'] = $data['pincode'] = $pincode = $this->input->post('pincode');
            $this->payment_model->data['dob'] = $data['dob'] = $dob = $this->input->post('dob');
            $this->payment_model->data['frcode'] = $data['frcode'] = $frcode = $this->input->post('frcode');
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


                $customer =   $api->customer->create(array('name' => $full_name, 'email' => $email, 'contact' => $mobile_number, 'fail_existing' => 0, 'notes' => array('pan' => $pan_number, 'address' => $address, 'amount' => $amount, 'programme' => $programme, 'payment_date' => $payment_date)));
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
                $this->payment_model->data['donation_period'] = $donation_period = !empty($this->input->post('donation_period')) ? $this->input->post('donation_period') : 12;
               
                $data['call_back_url'] = $call_back_url = base_url("$this->class_name/success/$encrypted_id");

                $data['customer_id'] = $this->payment_model->data['customer_id'] = $customer_id;
                $this->payment_model->primary_key = array('id' => $insert_id);
                $this->payment_model->update($table_name);

                    $razorpayOrder =   $api->order->create(array('amount' => $amount*100 , 'currency' => 'INR', 'method' => $payment_method, 'customer_id' => $customer->id, 'token' => array('max_amount' => $amount*100 , 'expire_at' => strtotime(" +" . $donation_period . " months"), 'frequency' => 'monthly'), 'receipt' => $receipt, 'notes'           => array(
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
                    "encrypted_id"      => $encrypted_id,
                    "campaign"         => $campaign,
                    "programme"         => $programme,
                    "table_name"              => $table_name,
                    "payment_method" => $payment_method,
                    "customer_id" => $api_customer_id,
                    "call_back_url"  => $call_back_url,
                    "interval" => $donation_period

                ];

                $template_path = $this->programpagewisecontent($slug);
                $data += $this->data;
                $data['page_heading'] = $data['page_items']->title;
                $data['breadcrumb'] = '<span><a href="">Home</a> - </span><span><i class="fa fa-angle-right"></i></span><span class="active">' . $data['page_items']->title . '</span>';
                $data['scripts'] = array('assets/javascripts/custom_page.js');
                $this->load->view($template_path, $data);
            }
        } else {
             $template_path = $this->programpagewisecontent($slug);
            $data = $this->data;
            $data['page_heading'] = $data['page_items']->title;
            $data['breadcrumb'] = '<span><a href="">Home</a> - </span><span><i class="fa fa-angle-right"></i></span><span class="active">' . $data['page_items']->title . '</span>';
            $data['scripts'] = array('assets/javascripts/custom_page.js');
            $this->load->view($template_path, $data);
        }
        } else {

            $template_path = $this->programpagewisecontent($slug);
            $data = $this->data;
            $data['page_heading'] = $data['page_items']->title;
            $data['breadcrumb'] = '<span><a href="">Home</a> - </span><span><i class="fa fa-angle-right"></i></span><span class="active">' . $data['page_items']->title . '</span>';
            $data['scripts'] = array('assets/javascripts/custom_page.js');
            $this->load->view($template_path, $data);
        }
    }


    public function custom($slug)
    {

        $template_path = $this->programpagewisecontent($slug);
        $data = $this->data;
        $data['view_path'] = "charitable_program/$slug";
        $data['page_heading'] = $data['page_items']->title;
        $data['breadcrumb'] = '<span><a href="">Home</a> - </span><span><i class="fa fa-angle-right"></i></span><span class="active">' . $data['page_items']->title . '</span>';
        $data['scripts'] = array('assets/javascripts/custom_page.js');
        $this->load->view($template_path, $data);
    }

    public function do_payment()
    {
    }


    public function success($encrypt_id)
    {
        $url_decode= urldecode($encrypt_id);
        // $insert_id = $this->encryption->decrypt($url_decode);
        $insert_id = $this->my_encrypt->decrypt_key($url_decode);
       
        if(empty($this->input->post())){
            echo "Authorisation failed. You are not allowed to continue. Page is expired";
        }else{
        $data = $this->data;
        $this->payment_model->primary_key = array('page_slug' => 'donation-success');
        $data['page_items'] = $this->payment_model->row_data('pages');
        $table_name = $this->config->item('table_name');
        $this->payment_model->primary_key = array('id' => $insert_id);
        $payment_data = $this->payment_model->row_data($this->config->item('table_name'));
        // print_r($payment_data);exit;
        if ($payment_data->duration == 'DONATE-NOW') {
            $table_name = $this->config->item('table_name');
            $hash =  $this->payment_model->data['hash'] = $this->input->post('hash');
            $error_Message =  $this->payment_model->data['error_Message'] = $this->input->post('error_Message');
            $easepayid =  $this->payment_model->data['easepayid'] = $this->input->post('easepayid');
            $created_at =  $this->payment_model->data['created_at'] = $this->input->post('addedon');
            $cash_back_percentage =  $this->payment_model->data['cash_back_percentage'] = $this->input->post('cash_back_percentage');
            $order_status =  $this->payment_model->data['order_status'] = $this->input->post('status');
            $txnid =  $this->payment_model->data['txnid'] = $this->input->post('txnid');
            $card_type =  $this->payment_model->data['card_type'] = $this->input->post('card_type');
            $mode =  $this->payment_model->data['mode'] = $this->input->post('mode');
            $error =  $this->payment_model->data['error'] = $this->input->post('error');
            $deduction_percentage =  $this->payment_model->data['deduction_percentage'] = $this->input->post('deduction_percentage');
            $auto_debit_auth_error =  $this->payment_model->data['auto_debit_auth_error'] = $this->input->post('auto_debit_auth_error');
            $bank_ref_num =  $this->payment_model->data['bank_ref_num'] = $this->input->post('bank_ref_num');
            $authorization_status =  $this->payment_model->data['authorization_status'] = $this->input->post('authorization_status');
            $auto_debit_access_key =  $this->payment_model->data['auto_debit_access_key'] = $this->input->post('auto_debit_access_key');
            $upi_va =  $this->payment_model->data['upi_va'] = $this->input->post('upi_va');
            $customer_authentication_id =  $this->payment_model->data['customer_authentication_id'] = $this->input->post('customer_authentication_id');
            $auto_debit_auth_msg =  $this->payment_model->data['auto_debit_auth_msg'] = $this->input->post('auto_debit_auth_msg');
            $udf5 =  $this->payment_model->data['udf5'] = $this->input->post('udf5');


            $this->payment_model->data['status'] = 'success';
            $this->payment_model->primary_key = array('id' => $insert_id);
            $this->payment_model->update($this->config->item('table_name'));
        } else if ($payment_data->duration == 'DONATE-MONTHLY') {
            // print_r($this->config->item('table_name'));exit;
            $this->payment_model->primary_key = array('id' => $insert_id);
            $payment_data = $this->payment_model->row_data($this->config->item('table_name'));

            if (!empty($this->input->post('error'))) {
                $this->payment_model->data['error_code'] = $this->input->post('error')['code'];
                $this->payment_model->data['error_description'] = $this->input->post('error')['description'];
                $this->payment_model->data['reason'] = $this->input->post('error')['reason'];
                $this->payment_model->data['razorpay_payment_id'] = $razorpay_payment_id =  json_decode($this->input->post('error')['metadata'])->payment_id;
                $this->payment_model->data['order_status'] = 'failed';
            } else {
                $this->payment_model->data['razorpay_payment_id'] = $razorpay_payment_id = $this->input->post('razorpay_payment_id');
                $this->payment_model->data['order_status'] = 'success';
                $this->payment_model->data['status'] = 'success';
            }
            $this->payment_model->primary_key = array('id' => $insert_id);
            $this->payment_model->update($this->config->item('table_name'));
        }




        $this->payment_model->primary_key = array('id' => $insert_id);
        $data['payment_data'] =  $payment_data = $this->payment_model->row_data($table_name);

        $data['name'] = $payment_data->full_name;
        $data['amount'] = $payment_data->amount;
        $data['easepayid'] = $payment_data->easepayid;
        $data['txnid'] = $payment_data->txnid;
        $data['status'] = $payment_data->status;
        $data['slug'] = $payment_data->campaign;
        $data['duration'] = $payment_data->duration;
        $tada = (object)['office_address' => $data['settings']->OFFICE_ADDRESS, 'website_url' => base_url(), 'office_email' => $data['settings']->EMAIL, 'office_phone' => $data['settings']->TOLL_FREE_TIME, 'receipt' => $payment_data->receipt, 'name' => $payment_data->full_name, 'address' => $payment_data->address, 'email' => $payment_data->email, 'mobile_number' => $payment_data->mobile_number, 'order_id' => $payment_data->order_id, 'payment_date' => $payment_data->payment_date, 'campaign' => $payment_data->campaign, 'amount' => $payment_data->amount, 'pan_number' => $payment_data->pan_number, 'transaction_id'=> ($payment_data->duration == 'DONATE-NOW') ? $payment_data->txnid : $payment_data->razorpay_payment_id, 'modeofpayment'=>$payment_data->mode];
        $data['pdf_path'] =  $pdf_path =  $this->invoice($tada);
        $this->sendmail($payment_data->email, $payment_data->full_name,$payment_data->amount, $payment_data->receipt,$payment_data->status, $pdf_path);

        $data['slug'] = $data['payment_data']->campaign;
        $data['javascripts'] = 'templates/includes/festivals/scripts';
        $data['view_path'] = 'charitable_program/donation_success';
        $data['scripts'] = array('javascripts/' . $this->class_name . '.js', 'javascripts/dashboard.js');
        $this->load->view('templates/charitable_program_page', $data);
        }
    }
    
    public function failed_save($insert_id){
        $table_name = $this->config->item('table_name');
         $this->payment_model->data['error_code'] = $error_code = $this->input->post('error_code');
            $this->payment_model->data['error_description'] = $error_description = $this->input->post('error_description');
            $this->payment_model->data['error_source'] = $error_source = $this->input->post('error_source');
            $this->payment_model->data['error_reason'] = $error_reason = $this->input->post('error_reason');
            $this->payment_model->data['razorpay_payment_id'] = $razorpay_payment_id = $this->input->post('razorpay_payment_id');
            $razorpay_order_id = $this->input->post('razorpay_order_id');
             $this->payment_model->data['status'] = 'failed';

            $this->payment_model->primary_key = array('id' => $insert_id);
            $this->payment_model->update($table_name);
            // $encrypted_id = urlencode($this->encryption->encrypt($insert_id));
            $encrypted_id = urlencode($this->my_encrypt->encrypt_key($insert_id));
            // redirect("charitable_programs/failed/$encrypted_id");
            
           $url = base_url()."charitable_programs/failed/$encrypted_id";
           echo "<form id='the-form' 
        method='post' 
        enctype='multipart/form-data' 
        action='$url'>\n
        <input type='hidden' name='error_code' value='NULL'>\n
        <input type='hidden' name='error_source' value='Form Close'>\n";

        echo "<p id='the-button' style='display:none;'>
                Click the button if page doesn't redirect within 3 seconds.
                <br><input type='submit' value='Click this button'>
                </p>
                </form>
                <script type='text/javascript'>
                document.getElementById('the-form').submit();
                </script>
            ";
    }
    public function failed($encrypt_id)
    {
        $url_decode= urldecode($encrypt_id);
        // $insert_id = $this->encryption->decrypt($url_decode);
        // $url_decode= urldecode($encrypt_id);
        $insert_id = $this->my_encrypt->decrypt_key($url_decode);
        if(empty($this->input->post())){
            echo "Authorisation failed. You are not allowed to continue. Page is expired";
        }else{
        $data = $this->data;
        $this->payment_model->primary_key = array('page_slug' => 'donation-success');
        $data['page_items'] = $this->payment_model->row_data('pages');

        $table_name = $this->config->item('table_name');
        $this->payment_model->primary_key = array('id' => $insert_id);
        $payment_data = $this->payment_model->row_data($this->config->item('table_name'));
        if ($payment_data->duration == 'DONATE-NOW') {
            $hash = $data['hash'] = $this->input->post('hash');
            $error_Message = $data['error_Message'] = $this->input->post('error_Message');
            $easepayid = $data['easepayid'] = $this->input->post('easepayid');
            $addedon = $data['addedon'] = $this->input->post('addedon');
            $cash_back_percentage = $data['cash_back_percentage'] = $this->input->post('cash_back_percentage');
            $order_status = $data['order_status'] = $this->input->post('status');
            $txnid = $data['txnid'] = $this->input->post('txnid');
            $card_type = $data['card_type'] = $this->input->post('card_type');
            $mode = $data['mode'] = $this->input->post('mode');
            $error = $data['error'] = $this->input->post('error');
            $deduction_percentage =  $this->payment_model->data['deduction_percentage'] = $this->input->post('deduction_percentage');
            $auto_debit_auth_error =  $this->payment_model->data['auto_debit_auth_error'] = $this->input->post('auto_debit_auth_error');
            $bank_ref_num =  $this->payment_model->data['bank_ref_num'] = $this->input->post('bank_ref_num');
            $authorization_status =  $this->payment_model->data['authorization_status'] = $this->input->post('authorization_status');
            $auto_debit_access_key =  $this->payment_model->data['auto_debit_access_key'] = $this->input->post('auto_debit_access_key');
            $upi_va =  $this->payment_model->data['upi_va'] = $this->input->post('upi_va');
            $customer_authentication_id =  $this->payment_model->data['customer_authentication_id'] = $this->input->post('customer_authentication_id');
            $auto_debit_auth_msg =  $this->payment_model->data['auto_debit_auth_msg'] = $this->input->post('auto_debit_auth_msg');
            $udf5 =  $this->payment_model->data['udf5'] = $this->input->post('udf5');
        } else {


            $this->payment_model->data['error_code'] = $error_code = $this->input->post('error_code');
            $this->payment_model->data['error_description'] = $error_description = $this->input->post('error_description');
            $this->payment_model->data['error_source'] = $error_source = $this->input->post('error_source');
            $this->payment_model->data['error_reason'] = $error_reason = $this->input->post('error_reason');
            $this->payment_model->data['razorpay_payment_id'] = $razorpay_payment_id = $this->input->post('razorpay_payment_id');
            $razorpay_order_id = $this->input->post('razorpay_order_id');
        }
        $this->payment_model->data['status'] = 'failed';

        $this->payment_model->primary_key = array('id' => $insert_id);
        $this->payment_model->update($table_name);

        $this->payment_model->primary_key = array('id' => $insert_id);
        $data['payment_data'] =  $payment_data = $this->payment_model->row_data($table_name);

        $this->sendmail($payment_data->email, $payment_data->full_name,$payment_data->amount, $payment_data->receipt,$payment_data->status,$pdf_path='', $payment_data->page_slug);
        $data['slug'] = $data['payment_data']->campaign;
        $data['javascripts'] = 'templates/includes/festivals/scripts';
        $data['view_path'] = 'charitable_program/donation_failed';
        $data['scripts'] = array('javascripts/' . $this->class_name . '.js', 'javascripts/dashboard.js');
        $this->load->view('templates/charitable_program_page', $data);
        }
    }

    public function invoice($tada)
    {
        // print_R(file_get_contents(base_url('assets/css/bootstrap.min.css')));exit;
        $data = $this->data;
       
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->showImageErrors = true;
        // $html = $this->load->view('html_to_pdf',[],true);

        // $html=" <style>body{ font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; text-align: center; color: #777} body h1{ font-weight: 300; margin-bottom: 0px; padding-bottom: 0px; color: #000} body h3{ font-weight: 300; margin-top: 10px; margin-bottom: 20px; font-style: italic; color: #555} body a{ color: #06f} .invoice-box{ max-width: 800px; margin: auto; padding: 30px; border: 1px solid #eee; box-shadow: 0 0 10px rgba(0, 0, 0, 0.15); font-size: 16px; line-height: 24px; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; color: #555} .invoice-box table{ width: 100%; line-height: inherit; text-align: left; border-collapse: collapse} .invoice-box table td{ padding: 5px; vertical-align: top} .invoice-box table tr td:nth-child(2){ text-align: left} .invoice-box table tr.top table td{ padding-bottom: 20px} .invoice-box table tr.top table td.title{ font-size: 45px; line-height: 45px; color: #333} .invoice-box table tr.information table td{ padding-bottom: 40px} .invoice-box table tr.heading td{ background: #eee; border-bottom: 1px solid #ddd; font-weight: bold} .invoice-box table tr.details td{ padding-bottom: 20px} .invoice-box table tr.item td{ border-bottom: 1px solid #eee} .invoice-box table tr.item.last td{ border-bottom: none} .invoice-box table tr.total td:nth-child(2){ border-top: 2px solid #eee; font-weight: bold} @media only screen and (max-width: 600px){ .invoice-box table tr.top table td{ width: 100%; display: block; text-align: center} .invoice-box table tr.information table td{ width: 100%; display: block; text-align: center}}.bg-thm-yellow{background: #fad433} </style><body><div class='invoice-box'><table><tbody><tr class='top'><td colspan='2'><table><tbody><tr><td class='title'><img src='".base_url().SETTINGS_UPLOAD_PATH.$data['settings']->LOGO_IMAGE."' alt='Company logo' style='width: 100%; max-width: 300px'></td><td><h3>ImpactGuru Foundation</h3>$tada->office_address<br><b>Website :</b>$tada->website_url <br><b>Email ID :</b>$tada->office_email <br><b>Phone :</b>$tada->office_phone <br></td></tr></tbody></table></td></tr><tr class='information'><td colspan='2'><table><tbody><tr><td>Receipt : $tada->receipt <br>Mr/Mrs $tada->name $tada->address Mobile: $tada->mobile_number <br></td><td>Order Id: $tada->order_id <br>Payment Date: $tada->payment_date <br></td></tr></tbody></table></td></tr></tbody></table><table><tbody><tr class='heading bg-thm-yellow'><td>TAX EXEMPTION CERTIFICATE </td></tr><tr class='details'><td><h3>We truly appreciate your contribution to the cause of $tada->campaign</h3><p>This is to confirm that we have received a sum of Rs.$tada->amount.00 (Rupees Thirty Five Thousand Only ) from $tada->name having PAN $tada->pan_number through Direct Credit Receipt no. $tada->receipt. </p></td></tr></tbody></table><table><tbody><tr class='heading'><td>Support Towards</td><td></td></tr><tr class='item'><td>$tada->campaign</td><td>₹$tada->amount.00 </td></tr></tbody></table></div></body>"; 
        // $mpdf->debug = true;
        // $stylesheet = '<style>'.file_get_contents('assets/css/bootstrap.min.css').'</style>';
        // $mpdf->WriteHTML($stylesheet,1);
        if($tada->amount < 500){
        $html = "<!DOCTYPE html>  
        <html lang='en'>
        
        <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Donation Receipt</title>
        <link rel='stylesheet' href='assets/css/bootstrap-pdf.css'>
        <style>
        @media print{ *, *:before, *:after{ color: #000 !important; text-shadow: none !important; background: transparent !important; -webkit-box-shadow: none !important; box-shadow: none !important;} thead{ display: table-header-group;} tr, img{ page-break-inside: avoid;} img{ max-width: 100% !important;} .table{ border-collapse: collapse !important;} .table td, .table th{ background-color: #fff !important;} .table-bordered th, .table-bordered td{ border: 1px solid #ddd !important;}} html{ font-size: 7px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);} body{ font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 11px; line-height: 1.42857143; color: #333; background-color: #fff;} input, button, select, textarea{ font-family: inherit; font-size: inherit; line-height: inherit;} a{ color: #428bca; text-decoration: none;} a:hover, a:focus{ color: #2a6496; text-decoration: underline;} a:focus{ outline: thin dotted; outline: 5px auto -webkit-focus-ring-color; outline-offset: -2px;} figure{ margin: 0;} img{ vertical-align: middle;} .img-responsive, .thumbnail img, .thumbnail a img, .carousel-inner .item img, .carousel-inner .item a img{ display: block; max-width: 100%; height: auto;} .img-rounded{ border-radius: 6px;} .img-thumbnail{ display: inline-block; max-width: 100%; height: auto; padding: 4px; line-height: 1.42857143; background-color: #fff; border: 1px solid #ddd; border-radius: 4px; -webkit-transition: all .2s ease-in-out; -o-transition: all .2s ease-in-out; transition: all .2s ease-in-out;} .img-circle{ border-radius: 50%;} hr{ margin-top: 20px; margin-bottom: 20px; border: 0; border-top: 1px solid #eee;} h1, .h1{ font-size: 36px;} h2, .h2{ font-size: 30px;} h3, .h3{ font-size: 24px;} h4, .h4{ font-size: 18px;} h5, .h5{ font-size: 14px;} h6, .h6{ font-size: 12px;} p{ margin: 0 0 10px;} .lead{ margin-bottom: 20px; font-size: 16px; font-weight: 300; line-height: 1.4;} @media (min-width: 768px){ .lead{ font-size: 21px;}} small, .small{ font-size: 85%;} mark, .mark{ padding: .2em; background-color: #fcf8e3;} .text-left{ text-align: left;} .text-right{ text-align: right;} .text-center{ text-align: center;} .text-justify{ text-align: justify;} .text-nowrap{ white-space: nowrap;} .text-lowercase{ text-transform: lowercase;} .text-uppercase{ text-transform: uppercase;} .text-capitalize{ text-transform: capitalize;} .text-muted{ color: #777;} background-color: #428bca;} table{ background-color: transparent;} th{ text-align: left;} .table{ width: 100%; max-width: 100%; margin-bottom: 20px;} .table thead tr th, .table tbody tr th, .table tfoot tr th, .table thead tr td, .table tbody tr td, .table tfoot tr td{ padding: 8px; line-height: 1.42857143; vertical-align: top; border-top: 1px solid #ddd;} .table thead tr th{ vertical-align: bottom; border-bottom: 2px solid #ddd;} .table tbody + tbody{ border-top: 2px solid #ddd;} .table .table{ background-color: #fff;} .table-bordered{ border: 1px solid #ddd;} .table-bordered thead tr th, .table-bordered tbody tr th, .table-bordered tfoot tr th, .table-bordered thead tr td, .table-bordered tbody tr td, .table-bordered tfoot tr td{ border: 1px solid #ddd;} .table-bordered thead tr th, .table-bordered thead tr td{ border-bottom-width: 2px;} .table-striped tbody tr:nth-child(odd){ background-color: #f9f9f9;} .table-hover tbody tr:hover{ background-color: #f5f5f5;} table col[class*='col-']{ position: static; display: table-column; float: none;} table td[class*='col-'], table th[class*='col-']{ position: static; display: table-cell; float: none;} .media{ margin-top: 15px;} .media:first-child{ margin-top: 0;} .mt-2{ margin-top: 20px;} .mt-3{ margin-top: 30px;} .mt-4{ margin-top:40px;} .mt-5{ margin-top:60px;} .bg-thm-green{ background: #1a7d69;} .text-thm-green{ color: #1a7d69;} .text-white{ color: #fff}

    </style>
        </head>
        <body>
      
            <div style='width:100%; display:flex'>
                <div style='width: 50%; float: left'>
                <img src='" . base_url() . SETTINGS_UPLOAD_PATH . $data['settings']->LOGO_IMAGE . "' class='w-100 d-inline' style='width:150px'>
                </div>

                <div style='width: 50%; float:left'>
                <p class='text-muted; text-right'>H.O: 303, Jai Singh Business Center,</br>
                Andheri East, Mumbai,</br>
                Maharashtra 400053</p>
                </div>
                
                <div style='width: 100%; margin-top:10px; margin-bottom:10px; ' class='bg-thm-green'>
                <h3 class='text-white text-center' style='padding-top:-8px;padding-bottom:-5px;font-weight:700'><strong>ACKNOWLEGEMENT OF DONATION</strong></h3>
                </div>
                
                <div style='width: 50%; float: left'>
                    <p></p>
                </div>

                <div style='width: 50%; float:left' class=' text-right'>
                    <p><b>Date: </b> ".date('d-m-Y')."</p>
                </div>

                <div style='width: 100%; margin-top: -15px' class='text-center'>
                <h3 class='text-thm-green font-weight-bold'><strong>IMPACT GURU FOUNDATION</strong></h3>
                </div>

                <div style='width: 100%; '>
                To, <br>
                $tada->name <br>
                Mobile: $tada->mobile_number <br>
                Email: $tada->email <br>
                PAN No. $tada->pan_number <br>
                <!-- Mode of Payment: $tada->modeofpayment -->
            </div>

            <div style='width: 100%;' class=' mt-2'>
                <p><b>Dear $tada->name</b></p>
                <p>Thank you for making a contribution of ₹$tada->amount  to Impact Guru Foundation. We appreciate the time and effort you have put in to help us in need. Your contribution has helped
                to move closer to our goal of #HealthyIndiaHappyIndia</p>
            </div>

          
            
            <div style='width:100%' class='col-md-12 mt-2'>
                        <p>We confirm the acknowledgement of donation from Mr/Ms/Mrs $tada->name as per details below:</p>
                            <table class='table table-bordered'>
                            <tbody>
                                <tr>
                                    <td>Donor Name</td>
                                    <td>$tada->name</td>
                                </tr>
                                <tr>
                                    <td>Donation Date</td>
                                    <td>$tada->payment_date</td>
                                </tr>
                                <tr>
                                    <td>Transaction Reference Number</td>
                                    <td>$tada->transaction_id</td>
                                </tr>
                                <!-- <tr>
                                    <td>Payment Mode</td>
                                    <td>$tada->modeofpayment</td>
                                </tr> -->
                                <tr>
                                    <td>Total Contribution Received </td>
                                    <td>₹$tada->amount</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        
                        <div class='mt-1' style='width:100%'>
                        <p> Please note that this is an acknowledgement of your donation.</p>
                         </div>
                         <div class='col-md-12 mt-1' style='width:100%'>
                        <p class='text-center'> This is a Computer Generated acknowledgment. In case of any discrepancy or queries, please email us at<br>

                        donorcare@impactgurufoundation.org or call us on 9901599015.<br>
                        
                        Website: www.impactgurufoundation.org</p>
                        </div>
                        <div class='mt-2' style='width:100%'>
                             <div style='width: 50%; float: left'>
                                <p>For Impact Guru Foundation</p>
                                <img src='assets/image/pics/sundeep-signature.png' width='150' height='40'>
                                <p class='mt-1'>(Authorized Signatory)</p>
                            </div> 
            
                            <div class='mt-1' style='width:100%'>
                            <img src='assets/image/bottom_pdf.jpg' width='100%' height='160px'>
                         </div>
                        </div>
                      
            </div>

        </body>
        </html>";
        
        }elseif($tada->amount >=  500) {

        $html = "<!DOCTYPE html>  
        <html lang='en'>
        
        <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Donation Receipt</title>
        <link rel='stylesheet' href='assets/css/bootstrap-pdf.css'>
        <style>
        @media print{ *, *:before, *:after{ color: #000 !important; text-shadow: none !important; background: transparent !important; -webkit-box-shadow: none !important; box-shadow: none !important;} thead{ display: table-header-group;} tr, img{ page-break-inside: avoid;} img{ max-width: 100% !important;} .table{ border-collapse: collapse !important;} .table td, .table th{ background-color: #fff !important;} .table-bordered th, .table-bordered td{ border: 1px solid #ddd !important;}} html{ font-size: 7px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);} body{ font-family: 'Open sans', Helvetica, Arial, sans-serif; font-size: 12px; line-height: 1.42857143; color: #333; background-color: #fff;} input, button, select, textarea{ font-family: inherit; font-size: inherit; line-height: inherit;} a{ color: #428bca; text-decoration: none;} a:hover, a:focus{ color: #2a6496; text-decoration: underline;} a:focus{ outline: thin dotted; outline: 5px auto -webkit-focus-ring-color; outline-offset: -2px;} figure{ margin: 0;} img{ vertical-align: middle;} .img-responsive, .thumbnail img, .thumbnail a img, .carousel-inner .item img, .carousel-inner .item a img{ display: block; max-width: 100%; height: auto;} .img-rounded{ border-radius: 6px;} .img-thumbnail{ display: inline-block; max-width: 100%; height: auto; padding: 4px; line-height: 1.42857143; background-color: #fff; border: 1px solid #ddd; border-radius: 4px; -webkit-transition: all .2s ease-in-out; -o-transition: all .2s ease-in-out; transition: all .2s ease-in-out;} .img-circle{ border-radius: 50%;} hr{ margin-top: 20px; margin-bottom: 20px; border: 0; border-top: 1px solid #eee;} h1, .h1{ font-size: 36px;} h2, .h2{ font-size: 30px;} h3, .h3{ font-size: 24px;} h4, .h4{ font-size: 18px;} h5, .h5{ font-size: 14px;} h6, .h6{ font-size: 12px;} p{ margin: 0 0 10px;} .lead{ margin-bottom: 20px; font-size: 16px; font-weight: 300; line-height: 1.4;} @media (min-width: 768px){ .lead{ font-size: 21px;}} small, .small{ font-size: 85%;} mark, .mark{ padding: .2em; background-color: #fcf8e3;} .text-left{ text-align: left;} .text-right{ text-align: right;} .text-center{ text-align: center;} .text-justify{ text-align: justify;} .text-nowrap{ white-space: nowrap;} .text-lowercase{ text-transform: lowercase;} .text-uppercase{ text-transform: uppercase;} .text-capitalize{ text-transform: capitalize;} .text-muted{ color: #777;} background-color: #428bca;} table{ background-color: transparent;} th{ text-align: left;} .table{ width: 100%; max-width: 100%; margin-bottom: 20px;} .table thead tr th, .table tbody tr th, .table tfoot tr th, .table thead tr td, .table tbody tr td, .table tfoot tr td{ padding: 8px; line-height: 1.42857143; vertical-align: top; border-top: 1px solid #ddd;} .table thead tr th{ vertical-align: bottom; border-bottom: 2px solid #ddd;} .table tbody + tbody{ border-top: 2px solid #ddd;} .table .table{ background-color: #fff;} .table-bordered{ border: 1px solid #ddd;} .table-bordered thead tr th, .table-bordered tbody tr th, .table-bordered tfoot tr th, .table-bordered thead tr td, .table-bordered tbody tr td, .table-bordered tfoot tr td{ border: 1px solid #ddd;} .table-bordered thead tr th, .table-bordered thead tr td{ border-bottom-width: 2px;} .table-striped tbody tr:nth-child(odd){ background-color: #f9f9f9;} .table-hover tbody tr:hover{ background-color: #f5f5f5;} table col[class*='col-']{ position: static; display: table-column; float: none;} table td[class*='col-'], table th[class*='col-']{ position: static; display: table-cell; float: none;} .media{ margin-top: 15px;} .media:first-child{ margin-top: 0;} .mt-2{ margin-top: 20px;} .mt-3{ margin-top: 30px;} .mt-4{ margin-top:40px;} .mt-5{ margin-top:60px;} .bg-thm-green{ background: #1a7d69;} .text-thm-green{ color: #1a7d69;} .text-white{ color: #fff}
           
    </style>
        </head>
        <body>
      
            <div style='width:100%; display:flex'>
                <div style='width: 50%; float: left'>
                <img src='" . base_url() . SETTINGS_UPLOAD_PATH . $data['settings']->LOGO_IMAGE . "' class='w-100 d-inline' style='width:150px'>
                </div>

                <div style='width: 50%; float:left'>
                <p class='text-muted; text-right'>H.O: 303, Jai Singh Business Center,</br>
                Andheri East, Mumbai,</br>
                Maharashtra 400053</p>
                </div>
                
                <div style='width: 100%; margin-top:10px; margin-bottom: 10px;' class='bg-thm-green'>
                <h3 class='text-white text-center' style='padding-top:-12px;padding-bottom:-11px; font-weight:800'><strong>DONATION RECEIPT AND TAX EXEMPTION
                CERTIFICATE</strong></h3>
                </div>
                
                <div style='width: 50%; float: left'>
                    <p><b>Receipt No: </b> $tada->receipt</p>
                </div>

                <div style='width: 50%; float:left' class=' text-right'>
                    <p><b>Date: </b> ".date('d-m-Y')."</p>
                </div>

                <div style='width: 100%; margin-top: -20px;' class='text-center'>
                <h3 class='text-thm-green font-weight-bold' style='font-weight:800; '><strong>IMPACT GURU FOUNDATION</strong></h3>
                </div>

                <div style='width: 100%; ' style='margin-top: -20px;'>
                To, <br>
                $tada->name <br>
                Mobile: $tada->mobile_number <br>
                Email: $tada->email <br>
                PAN No. $tada->pan_number <br>
               <!-- Mode of Payment: $tada->modeofpayment -->
            </div>

            <div style='width: 100%;' class=' mt-2'>
                <p><b>Dear $tada->name</b></p>
                <p>Thank you for making a contribution of ₹$tada->amount  to Impact Guru Foundation. We appreciate the time and
                    effort you have put in to help us in need. Your contribution has helped to move closer to our goal of
                    #HealthyIndiaHappyIndia; Once again, welcome to our Impact Community! Please keep this written
                    acknowledgement of your donation for your tax records.</p>
            </div>

          
                    <div class='mt-1' style='width:100%'>
                        <div style='width: 50%; float: left'>
                            <p>For Impact Guru Foundation</p>
                            <img src='assets/image/pics/sundeep-signature.png' width='150' height='40'>
                            <p class='mt-1'>(Authorized Signatory)</p>
                        </div>
        
                      <!--  <div style='width: 50%; float:left'>
                            <img src='assets/image/sideimage-pdf.jpg' style='float:right' alt='media image' width='220' height='150'>
                        </div> -->
                    </div>

                        <div style='width:100%' class='col-md-12'>
                        <p>We confirm the acknowledgment of donation from Mr/Ms/Mrs $tada->name as per details below:</p>
                            <table class='table table-bordered'>
                            <tbody>
                                <tr>
                                    <td>Donor Name</td>
                                    <td>$tada->name</td>
                                </tr>
                                <tr>
                                    <td>Donation Date</td>
                                    <td>$tada->payment_date</td>
                                </tr>
                                <tr>
                                    <td>Transaction Reference Number</td>
                                    <td>$tada->transaction_id</td>
                                </tr>
                               <!-- <tr>
                                    <td>Payment Mode</td>
                                    <td>$tada->modeofpayment</td>
                                </tr> -->
                                <tr>
                                    <td>Total Contribution Received </td>
                                    <td>₹$tada->amount</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>


                        <div class='mt-1' style='width:100%'>
                        <p> Donations to <b>Impact Guru Foundation</b> qualify for deduction u/s 80G (5) of Income Tax Act 1961 vide Unique Registration
 Number AABTI1433NF20217 approved on August 31, 2021 which is valid until AY2026-27. This receipt is invalid in case of
 non-realization of the money instrument or reversal of the credit/debit card charge or reversal of donation amount for any
 reason. IT PAN: AABTI1433N.</p>
                         </div>
                         <div class='col-md-12 mt-1' style='width:100%'>
                        <p class='text-center'> This is a Computer Generated Receipt. In case of any discrepancy or queries, please email us at<br>
 
 donorcare@impactgurufoundation.org or call us on 9901599015.<br>
 
 website: www.impactgurufoundation.org</p>
                         </div>
                         <div class='mt-1' style='width:100%'>
                            <img src='assets/image/bottom_pdf.jpg' width='100%' height='150px'>
                         </div>

            </div>

        </body>
        </html>";
        }

        $user_password = strtoupper(substr($tada->name,0,3).substr($tada->mobile_number,6,4));
        $owner_password = 'Q!W@E#r4t5y6';
        $mpdf->SetProtection(array(), $user_password, $owner_password); 

        $mpdf->WriteHTML($html);

        // $p = $mpdf->Output('chinna.pdf');
        $p = $mpdf->Output(INVOICE_PDF_PATH . $tada->receipt . '.pdf');
        // $encrypt = urlencode($this->encryption->encrypt($tada->receipt));
        $encrypt = urlencode($this->my_encrypt->encrypt_key($tada->receipt));
        return $encrypt;
        // return 'chinna.pdf';
    }



    public function sendmail($to_mail, $name, $amount, $receipt, $status,$pdf_path, $page_slug = 'donate-now')
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

        if (strtolower($status) == 'success') {
            $this->payment_model->primary_key = array('template_id' => 1);
            $template = $this->payment_model->row_data('email_templates');
            $data['name'] = $name;
            $data['amount'] = $amount;
            $this->email->subject($template->template_title);
            // $message = $template->template_content;
            $message = str_replace('####NAME####', $name, $template->template_content);
            $message = str_replace('####RECEIPT####', $receipt, $message);
            $message = str_replace('####AMOUNT####', $amount, $message);
            $message = str_replace('####PDFPATH####', base_url().'charitable_programs/download_invoice/'.$pdf_path, $message);
            $message = str_replace('####SLUG####', base_url().$page_slug, $message);
        } elseif (strtolower($status) == 'failed') {
            $this->seva_page_model->primary_key = array('template_id' => 2);
            $template = $this->seva_page_model->row_data('email_templates');
            $data['name'] = $name;
            $data['amount'] = $amount;
            $this->email->subject($template->template_title);
            // $message = $template->template_content;

            $message = str_replace('####NAME####', $name, $template->template_content);
            $message = str_replace('####RECEIPT####', $receipt, $message);
            $message = str_replace('####AMOUNT####', $amount, $message);
             $message = str_replace('####SLUG####', base_url().$page_slug, $message);
            // $message = $this->load->view('email_templates/failed.php',$data,true);
        }


        $this->email->message($message);

        $q = $this->email->send();
    }
    
    
    public function download_invoice($file_encrypt){
        // $decrypt = $this->encryption->decrypt(urldecode($file_encrypt));
        $decrypt = $this->my_encrypt->decrypt_key(urldecode($file_encrypt));
        $path = INVOICE_PDF_PATH . $decrypt . '.pdf';
         $fsize = filesize($path);
        if( headers_sent() )
    die('Headers Sent');
    $ctype="application/force-download";
    
    header("Pragma: public"); // required
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Cache-Control: private",false); // required for certain browsers
    header("Content-Type: $ctype");
    header("Content-Disposition: attachment; filename=\"".basename($path)."\";" );
    header("Content-Transfer-Encoding: binary");
    header("Content-Length: ".$fsize);
    ob_clean();
    flush();
    readfile( $path );
    }
}
