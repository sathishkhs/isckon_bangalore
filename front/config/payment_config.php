<?php 
//  test, prod, local
$config['payment_mode'] = 'live';
$config['company_name'] = 'Impact Guru Foundation';
$config['description'] = 'Impact Guru Foundation (IGF) aspires to build a world where healthcare is affordable and accessible to everyone.';


if($config['payment_mode'] == 'test'){
    
    $config['table_name'] = 'test_payments';
    
    // Easebuzz gateway details
    $config['request_url'] = '';
    $config['merchant_key'] = '2PBP7IABZ2';
    $config['salt'] = 'DAH88E3UWQ';
    $config['env'] = 'test';

    // Razorpay gateway details
    $config['keyId'] = 'rzp_test_X3vAXXpAaAGqM7';
    $config['keySecret'] = 'BGhydKjGFhFmYJSFRIkR4T1n';


}else{
    $config['table_name'] = 'payments';

    // Easebuzz Gateway details
    $config['request_url'] = '';
    $config['merchant_key'] = '4MR5KDHB0N';
    $config['salt'] = 'H3FO5VI38T';
    $config['env'] = 'prod';

    // Razorpay Gateway details
    $config['keyId'] = 'rzp_live_lthdM2PV5VgkVu';
    $config['keySecret'] = '45LfWlgrWH9qn27EH992aKcf';   
  
}

error_reporting(E_ALL);
ini_set('display_errors', 1);

?>


