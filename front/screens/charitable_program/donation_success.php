<style>
    .centralized-title {
    font-size: 30px;
    margin-bottom: 20px;
    color: #5ab941;
}
.centralized-content {
    font-family: 'Lato', sans-serif;
    color: #343a40;
    font-size: 18px;
    font-weight: 300;
    margin-bottom: 30px;
    line-height: 1.5em;
}
.text-danger {
    color: #dc3545 !important;
}
.social-meida-icons-footer.copy-footer {
    margin-right: 0;
}
.copy-footer {
    width: unset;
    margin-right: 80px;
}
.social-meida-icons-footer {
    width: 100%;
    display: flex;
    justify-content: center;
}
.ym-social {
    display: flex;
    list-style: none;
    margin: 0;
    padding: 0;
}
.social-meida-icons-footer .ym-social li a {
    background: transparent;
}
.social-meida-icons-footer .ym-social li a {
    width: 35px;
    height: 35px;
    font-size: 16px;
    display: flex;
}
.social-meida-icons-footer .ym-social li a {
    color: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);
}
.ym-social li a {
    background-color: #3b5a9a;
    color: #ffffff;
}
.ym-social li a {
    background-color: #686f7c;
    width: 23px;
    height: 23px;
    text-align: center;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    margin-left: 8px;
    color: #ffffff !important;
    font-size: 13px;
    transition: 0.4s ease all;
    -webkit-transition: 0.4s ease all;
    -moz-transition: 0.4s ease all;
}

</style>

<div class="conainer mx-auto pt-5">
			<div class="row mx-auto">
				<div class="col-sm-10 col-md-10 mx-auto">
					<div class="inner-absolute-banner text-dark">
						<div class="centralized-title text-center">
							Thank you <?php echo $payment_data->full_name; ?>
						</div>
						<div class="centralized-content ">
                        <p class="text-center ">
                        Thank you for making a contribution of ₹<?php echo $payment_data->amount; ?> to Impact Guru Foundation. We appreciate the time and effort you have put in
to help us in need. Your contribution has helped to move closer to our goal of #HealthyIndiaHappyIndia; Once again,
welcome to our Impact Community! Please keep this written acknowledgement of your donation for your tax records    </p>
						</div>
							<div class="centralized-title text-center">
					
						</div>
						
					</div>
					 <div class="association-social-center text-center">
            <div class="social-meida-icons-footer copy-footer">
          
            </div>
             <a class="btn btn-contact text-dark" style="text-align:center;" href="charitable_programs/download_invoice/<?php echo $pdf_path;  ?>"><?php echo ($payment_data->amount >= 500) ? 'Please Download Tax Receipt' : 'Please Download Donation Receipt'; ?> </a>
        </div>
                <p class="text-center"><small >Pdf Password is first 3 letters of name and last 4 numbers of mobile number. All Caps.</small></p>
				</div>
			</div>
		
            <div class="row my-5">
				<div class="col-sm-53 mx-auto">
					<h2 class="centralized-title text-center">Donation Details</h2>
					<table class="text-right mx-auto">
						<tbody>
							<tr>
								<th >Name : </th>
								<td colspan="4"><?php echo $payment_data->full_name; ?></td>
							</tr>
							<?php if($payment_data->duration == 'DONATE-NOW'){ ?>
                                <tr>
                                <th >Easebuzz Pay Id : </th>
								<td colspan="4"><?php echo $payment_data->easepayid; ?></td>
							</tr>
							<tr>
                                <th >TXN Id : </th>
                                <td colspan="4"><?php echo $payment_data->txnid; ?></td>
							</tr>
							<?php } elseif($payment_data->duration == 'DONATE-MONTHLY'){ ?>
                                <tr>
                                    <th>Razorpay Order Id :</th>
                                    <td colspan="5"><?php echo $payment_data->razorpay_order_id; ?></td>
                                </tr>
                                <tr>
                                    <th>Razorpay Payment Id :</th>
                                    <td colspan="5"><?php echo $payment_data->razorpay_payment_id; ?></td>
                                </tr>
                                <?php } ?>
							<tr>
								<th >Amount : </th>
								<td colspan="4">&#8377; <?php echo $payment_data->amount; ?></td>
							</tr>
							<tr>
								<th >Payment Status : </th>
								<td colspan="4"> <?php echo $payment_data->status; ?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
	
		</div>
<script>
// Send transaction data with a pageview if available
// when the page loads. Otherwise, use an event when the transaction
// data becomes available.
dataLayer.push({ ecommerce: null });  // Clear the previous ecommerce object.
dataLayer.push({
    'event': 'transaction',
  'ecommerce': {
    'purchase': {
      'actionField': {
        'id': '<?php echo $payment_data->easepayid; ?>',                         // Transaction ID. Required for purchases and refunds.
        'revenue': '<?php echo $payment_data->amount; ?>',                     // Total transaction value (incl. tax and shipping)
 
      },
      'products': [{                            // List of productFieldObjects.
        // 'name': '<?php echo $seva_name ; ?>',     // Name or ID is required.
        'name': '<?php echo $payment_data->full_name; ?>',     // Name or ID is required.
        'id': '<?php echo $payment_data->txnid; ?>',
        'price': '<?php echo $payment_data->amount; ?>',
        'brand': 'xxx',
        'category': 'xxx',
        'variant': 'xxx',
        'quantity': 1
       }]
    }
  }
});
</script>

 <script>
    // fbq('track', 'Purchase', { value: <?php echo $this->session->flashdata("amount") ? $this->session->flashdata("amount") : $amount; ?> ,  currency: 'INR' });
   </script>
