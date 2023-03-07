<style>
 .elementor-gt-form{

  background: #1a9432;
}

.gt-header {
  position: relative;
  background: #1a9432;
  padding: 30px 50px;
}
h2.gt-header__title {
  font-size: 24px;
  line-height: 1.25;
  text-transform: uppercase;
  color: #FFFFFF;
  margin-bottom: 0px;
  font-weight: 700;
}
    h2 {
        color: #1a7d69;
        font-family: "Poppins", Sans-serif;
        font-size: 32px;
        font-weight: 700;
        line-height: 1.25em;
    }

    h3 {
        text-transform: uppercase;
        margin-bottom: 10px;
        max-width: 100%;
        color: #4D6995;
        font-family: "Roboto", Sans-serif;
        font-size: 16px;
        font-weight: 500;
        line-height: 1.25em;
    }

    .d-none {
        display: none;
    }

    .container-active {
        display: flex !important;
    }
    
    @media (min-width : 720px){
.minus-margin-top-120px {
  margin-top: -150px;
}
span.raised-income {
  padding-right: 100px;
}
}

.give-title {
  font-size: 30px;
  line-height: 125%;
  margin-bottom: 24px;
  color: #1a9432;
  font-weight:700;
}
.raised{
    margin-bottom: 15px;
}
 ul{
    margin-top: -23px;
}


@media(max-width: 540px){
    .gt-header{
        padding: 22px 15px;
    }
    .elementor-gt-form{
        padding: 15px 15px;
    }
    
    h2.gt-header__title{
        font-size: 18px;
        margin-bottom: 0;
        text-align:center;
    }
    .give-title {
  font-size: 25px;
    text-align:center;
    margin-bottom: 16px;
}
.give-description{
    text-align:center;
}
}
</style>



<!--<section class="about-sec-1 mb-1 d-none d-lg-block" style="margin-bottom: -50px">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-12 col-lg-4">-->
<!--                    <img class="img-right-side" src="<?php echo CHARITABLE_PROGRAM_BANNER_PATH.$charitable_program->impact_side_image; ?>" alt="" style="margin-bottom:-200px">-->
<!--                </div>-->
<!--                <div class="col-12 col-lg-4 ">-->
<!--                    <div class="middle-para ml-0 mb-0">-->
<!--                       <?php echo $charitable_program->impact_description; ?>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-12 col-lg-4">-->
<!--                    <div class="right-side-para my-0">-->
<!--                        <div class="number-side">-->
<!--                            <?php $impact_number1 = explode(',',$charitable_program->impact_number1); ?>-->
<!--                            <?php $impact_number2 = explode(',',$charitable_program->impact_number2); ?>-->
<!--                            <?php $impact_number3 = explode(',',$charitable_program->impact_number3); ?>-->
<!--                            <h5><?php echo $impact_number1[0]; ?></h5>-->
<!--                            <span><?php echo $impact_number1[1]; ?> </span>-->
<!--                            <div class="hr"></div>-->
<!--                        </div>-->
<!--                        <div class="number-side">-->
<!--                            <h5><?php echo $impact_number2[0]; ?></h5>-->
<!--                            <span><?php echo $impact_number2[1]; ?></span>-->
<!--                            <div class="hr"></div>-->
<!--                        </div>-->
<!--                        <div class="number-side">-->
<!--                            <h5><?php echo $impact_number3[0]; ?></h5> -->
<!--                            <span><?php echo $impact_number3[1]; ?></span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->

<section class="donate-now my-0 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-12 mb-3">
                <h2 class="give-title"><?php echo $charitable_program->program_heading;?></h2>
               
                <p class="give-description"><?php echo $charitable_program->short_description; ?></p>
                <?php if(!empty($charitable_program->program_video)) { ?>
                <video id="player" playsinline controls data-poster="<?php echo CHARITABLE_PROGRAM_BANNER_PATH.$charitable_program->banner; ?>">
                  <source src="<?php echo CHARITABLE_PROGRAM_BANNER_PATH.$charitable_program->program_video; ?>" type="video/mp4" />
                  
                </video>
                <?php }else{ ?>
                <img src="<?php echo CHARITABLE_PROGRAM_BANNER_PATH.$charitable_program->banner; ?>" class="img-fluid">
                <?php } ?>
                <div>
                    <?php echo $charitable_program->left_description; ?>
                </div>
            </div>
            <div class="col-lg-5 col-12">
            <div class="elementor-gt-form ">
            <form id="pay-form" class=" mt-2 " action="programs/<?php echo $charitable_program->page_slug; ?>" method="post" enctype="multipart/form-data">
                <input id="amount" name="amount" type="hidden" value="<?php echo $charitable_program->ot_amount_1; ?>">
                <input name="campaign" type="hidden" value="<?php echo $charitable_program->title; ?>">
                <!-- <input id="program" name="program" type="hidden" value=""> -->
                <input name="currency" type="hidden" value="INR">
                <input name="citizen" type="hidden" value="INDIAN">
                <input name="page_slug" type="hidden" value="<?php echo $charitable_program->page_slug; ?>">
                <input name="programme" type="hidden" value="<?php echo $charitable_program->page_slug; ?>">
                <input name="table_name" type="hidden" value="<?php echo $this->config->item('table_name'); ?>">
                
                <!--<div class="gt-form__text">-->
                <!--        <h3 class="form__sub-title">Choose a cause</h3>-->
                <!--        <h2 class="form__title">To save a life</h2>-->

                <!--    </div>-->
                <!--    <div class="row">-->
                <!--    <div class="col-12">-->
                <!--        <div class="form-group">-->
                <!--            <label for="full_name">I pledge my support for</label>-->
                <!--            <select name="programme" id="dt-program-select" class="selection-option form-control">-->
                <!--                <option class="option-select" id="option-impact-guru-foundation" value="impact-guru-foundation">Impact Guru Foundation</option>-->
                <!--                <option class="option-select" id="option-clinic-on-wheels" value="clinic-on-wheels">Clinic On Wheels </option>-->
                <!--                <option class="option-select" id="option-cancer-care" value="cancer-care"> Cancer Care </option>-->
                <!--                <option class="option-select" id="option-menstrual-hygiene" value="menstrual-hygiene">Menstrual Hygiene Program </option>-->
                <!--                <option class="option-select" id="option-heart-transplant" value="heart-transplant"> Heart Transplant </option>-->
                <!--                <option class="option-select" id="option-cataract-surgery" value="cataract-surgery">Cataract Surgery Program </option>-->
                <!--                <option class="option-select" id="option-critical-care" value="critical-care"> Critical Care </option>-->
                <!--                <option class="option-select" id="option-thank-a-nurse" value="thank-a-nurse">Thank A Nurse </option>-->

                <!--            </select>-->
                <!--        </div>-->
                <!--    </div>-->

                <!--</div>-->
                <div class="form-group d-flex flex-wrap justify-content-between" id="button-donate-month">
                    <div class="button-donate">
                        <input type="radio" id="Onetime" name="duration" value="DONATE-NOW" checked autocomplete="off"/>
                        <label class="btn btn-default onetime-label" for="Onetime" style="border-top-left-radius: 15px;border-bottom-left-radius: 15px;"> One Time Gift</label>
                    </div>
                    <div class="button-donate">
                        <input type="radio" id="Monthly" name="duration" value="DONATE-MONTHLY" autocomplete='off'/>
                        <label class="btn btn-default monthly-label" for="Monthly" style="border-top-right-radius: 15px;border-bottom-right-radius: 15px;">Monthly Gift</label>
                    </div>
                </div>
                 <small class="text-center text-white d-block">Impact Guru Foundation Pan No: AABTI11433N</small>
                <div class="inside-gt-form">
                <div class="form-group  flex-wrap justify-content-between d-none container-active mb-0" id="onetime-container">
                    <div class="button-donate">
                        <input type="radio" id="ot_<?php echo $charitable_program->ot_amount_1; ?>" name="ot_donate-radio" class="donate-radio" value="<?php echo $charitable_program->ot_amount_1; ?>" checked />
                        <label class="btn btn-default" for="ot_<?php echo $charitable_program->ot_amount_1; ?>">₹<?php echo $charitable_program->ot_amount_1; ?></label>
                    </div>
                    <div class="button-donate">
                        <input type="radio" id="ot_<?php echo $page_items->ot_amount_2; ?>" name="ot_donate-radio" class="donate-radio" value="<?php echo $page_items->ot_amount_2; ?>" />
                        <label class="btn btn-default" for="ot_<?php echo $page_items->ot_amount_2; ?>">₹<?php echo $page_items->ot_amount_2; ?></label>
                    </div>
                    <div class="button-donate">
                        <input type="radio" id="ot_<?php echo $page_items->ot_amount_3; ?>" name="ot_donate-radio" class="donate-radio" value="<?php echo $page_items->ot_amount_3; ?>" />
                        <label class="btn btn-default" for="ot_<?php echo $page_items->ot_amount_3; ?>">₹<?php echo $page_items->ot_amount_3; ?></label>
                    </div>

                    <div class="button-donate">
                        <input type="radio" id="ot_<?php echo $page_items->ot_amount_4; ?>" name="ot_donate-radio" class="donate-radio" value="<?php echo $page_items->ot_amount_4; ?>" />
                        <label class="btn btn-default" for="ot_<?php echo $page_items->ot_amount_4; ?>">₹<?php echo $page_items->ot_amount_4; ?></label>
                    </div>

                    <div class="button-donate">
                        <input type="radio" id="ot_<?php echo $page_items->ot_amount_5; ?>" name="ot_donate-radio" class="donate-radio" value="<?php echo $page_items->ot_amount_5; ?>" />
                        <label class="btn btn-default" for="ot_<?php echo $page_items->ot_amount_5; ?>">₹<?php echo $page_items->ot_amount_5; ?></label>
                    </div>
                    <div class="button-donate">
                        <input type="radio" id="ot_other" name="donate-radio" value="" />
                        <label class="btn btn-default" for="ot_other">Other</label>
                    </div>
                    <div class="form-group w-100 mb-0" id="ot_other-amount">
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text donate-now-input">Custom Amount</div>
                            </div>
                            <input type="text" class="form-control" value="" id="ot_amount" placeholder="Enter Custom Amount">
                        </div>
                        <small class="error-amount text-danger "></small>
                    </div>
                </div>
                <div class="form-group  flex-wrap justify-content-between d-none mb-0" id="monthly-container">
                    <div class="button-donate">
                        <input type="radio" id="m_<?php echo $charitable_program->m_amount_1; ?>" name="m_donate-radio" class="donate-radio" value="<?php echo $charitable_program->m_amount_1; ?>" checked  disabled/>
                        <label class="btn btn-default" for="m_<?php echo $charitable_program->m_amount_1; ?>">₹<?php echo $charitable_program->m_amount_1; ?></label>
                    </div>
                    <div class="button-donate">
                        <input type="radio" id="m_<?php echo $page_items->m_amount_2; ?>" name="m_donate-radio" class="donate-radio" value="<?php echo $page_items->m_amount_2; ?>"  disabled/>
                        <label class="btn btn-default" for="m_<?php echo $page_items->m_amount_2; ?>">₹<?php echo $page_items->m_amount_2; ?></label>
                    </div>
                    <div class="button-donate">
                        <input type="radio" id="m_<?php echo $page_items->m_amount_3; ?>" name="m_donate-radio" class="donate-radio" value="<?php echo $page_items->m_amount_3; ?>"  disabled/>
                        <label class="btn btn-default" for="m_<?php echo $page_items->m_amount_3; ?>">₹<?php echo $page_items->m_amount_3; ?></label>
                    </div>

                    <div class="button-donate">
                        <input type="radio" id="m_<?php echo $page_items->m_amount_4; ?>" name="m_donate-radio" class="donate-radio" value="<?php echo $page_items->m_amount_4; ?>"  disabled/>
                        <label class="btn btn-default" for="m_<?php echo $page_items->m_amount_4; ?>">₹<?php echo $page_items->m_amount_4; ?></label>
                    </div>

                    <div class="button-donate">
                        <input type="radio" id="m_<?php echo $page_items->m_amount_5; ?>" name="m_donate-radio" class="donate-radio" value="<?php echo $page_items->m_amount_5; ?>"  disabled/>
                        <label class="btn btn-default" for="m_<?php echo $page_items->m_amount_5; ?>">₹<?php echo $page_items->m_amount_5; ?></label>
                    </div>
                    <div class="button-donate">
                        <input type="radio" id="m_other" name="donate-radio" value=""  disabled/>
                        <label class="btn btn-default" for="m_other">Other</label>
                    </div>
                    <div class="form-group w-100 mb-0" id="m_other-amount">
                        <div class="input-group mb-2 mr-sm-2 ">
                            <div class="input-group-prepend d-none">
                                <div class="input-group-text donate-now-input ">Custom Amount</div>
                            </div>
                            <input type="text" class="form-control" value="" id="m_amount" placeholder="Enter Custom Amount" disabled>
                        </div>
                        <small class="error-amount text-danger "></small>
                       
                    </div>
                    
                    <input name="donation_period" type="hidden" value="12" id="donation_period" disabled>
                    <div class="row mt-2 w-100">
                    <!--    <div class="col-sm-12">-->
                    <!--        <label for="donation_period">Donation Period</label>-->
                            <!--<select name="donation_period" class="form-control mb-2" id="donation_period" disabled>-->
                            <!--    <option >Select Donation Period</option>-->
                            <!--    <option value="3">3 Months</option>-->
                            <!--    <option value="6">6 Months</option>-->
                            <!--    <option value="9">9 Months</option>-->
                            <!--    <option value="12">12 Months</option>-->
                            <!--    <option value="24">24 Months</option>-->
                            <!--    <option value="48">48 Months</option>-->
                            <!--</select>-->
                        <!--</div>-->
                        <!-- <input name="payment_method" type="hidden" value="card"> -->
                        <div class="col-sm-12">
                            <label for="payment_method">Payment Method</label>
                            <select name="payment_method" class="form-control mb-2" id="payment_method" disabled>
                               
                                <option value="card">Card</option>
                                <option value="upi">UPI</option>
                                <!-- <option value="netbanking">Net Banking</option> -->
                            </select>
                        </div>
                    </div>
                </div>
            <?php echo form_error('amount', '<small class="error">', '</small>'); ?>




                <div class="row">
                    <div class="col-12">
                        <h2 class="pt-4 pb-1 text-center italic-style border-top-grey">Personal Details</h2>
                    </div>
                </div>

                
                <div class="row">
                    <div class="col-sm-12 col-lg-6">
                        <div class="form-group">
                            <label for="full_name">Full Name</label>
                            <input name="full_name" type="text" class="form-control" placeholder="Full Name" required >
                            <?php echo form_error('full_name', '<small class="error">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="form-group">
                            <label for="mobile_number">Mobile Number</label>
                            <input name="mobile_number" type="text" class="form-control" placeholder="Mobile Number" required>
                           <?php echo form_error('mobile_number', '<small class="error">', '</small>'); ?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-lg-6">
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input name="email" type="text" class="form-control" placeholder="Email Address" required>
                            <?php echo form_error('email', '<small class="error">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="form-group">
                            <label for="pan_number">Pan Number</label>
                            <input name="pan_number" type="text" class="form-control" placeholder="Pan Number" onkeyup="this.value = this.value.toUpperCase()" required>
                            <?php echo form_error('pan_number', '<small class="error">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- <div class="col-6">
                        <div class="form-group">
                            <label for="">FR Code</label> -->
                            <input name="frcode" type="hidden" class="form-control" placeholder="FR Code" value="-">
                        <!-- </div>
                    </div> -->
                    <div class="col-sm-12 col-lg-6">
                        <div class="form-group">
                            <label for="dob">Date Of Birth</label>
                            <input name="dob" type="date" class="form-control" placeholder="Date Of Birth" max="<?php echo date('Y-m-d'); ?>">
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="form-group">
                            <label for="city">City</label>
                            <input name="city" type="text" class="form-control" placeholder="City" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-lg-6">
                        <div class="form-group">
                            <label for="state">State</label>
                            <input name="state" type="text" class="form-control" placeholder="State" >
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="form-group">
                            <label for="pincode">Pincode</label>
                            <input name="pincode" type="text" class="form-control" placeholder="Pincode" >
                        </div>
                    </div>
                    
                </div>

                <!--<div class="form-group">-->
                <!--    <label for="">Address</label>-->
                <!--    <textarea name="address" class="form-control" id="" cols="10" rows="1" required></textarea>-->
                <!--</div>-->

                <!-- <div class="form-check form-group">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Agree to Terms?
                    </label>
                </div> -->


                <div class="form-group">
                    <button class="btn btn-primary donate-now-btn" id="submit">Donate</button>
                </div>
                <small class="text-center d-block small-text">*All Donations to Impact Guru Foundation are 50% Tax Exempt under section
80G of IT Act, 1961. Impact Guru Foundation does NOT accept cash & foreign
donations</small>
</div>
            </form>
            </div>
            </div>
        </div>
    </div>
</section>

<!--<section class="about-sec-1 mb-1 d-sm-block d-lg-none pb-0">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-12 col-lg-4">-->
<!--                    <img class="img-right-side" src="<?php echo CHARITABLE_PROGRAM_BANNER_PATH.$charitable_program->impact_side_image; ?>" alt="" style="margin-bottom: -90px">-->
<!--                </div>-->
<!--                <div class="col-12 col-lg-4 ">-->
<!--                    <div class=" ml-0 mb-0 mt-2">-->
<!--                       <?php echo $charitable_program->impact_description; ?>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-12 col-lg-4">-->
<!--                    <div class="right-side-para my-0">-->
<!--                        <div class="number-side">-->
<!--                            <?php $impact_number1 = explode(',',$charitable_program->impact_number1); ?>-->
<!--                            <?php $impact_number2 = explode(',',$charitable_program->impact_number2); ?>-->
<!--                            <?php $impact_number3 = explode(',',$charitable_program->impact_number3); ?>-->
<!--                            <h5><?php echo $impact_number1[0]; ?></h5>-->
<!--                            <span><?php echo $impact_number1[1]; ?> </span>-->
<!--                            <div class="hr"></div>-->
<!--                        </div>-->
<!--                        <div class="number-side">-->
<!--                            <h5><?php echo $impact_number2[0]; ?></h5>-->
<!--                            <span><?php echo $impact_number2[1]; ?></span>-->
<!--                            <div class="hr"></div>-->
<!--                        </div>-->
<!--                        <div class="number-side">-->
<!--                            <h5><?php echo $impact_number3[0]; ?></h5> -->
<!--                            <span><?php echo $impact_number3[1]; ?></span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->

<!--<section class="container mb-5">-->
<!--<div class="row mt-3 pt-5">-->
<!--                    <div class="col-12 col-lg-5">-->
<!--                        <div class="card-sec-4">-->
<!--                            <div class="card-img-sec">-->
<!--                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="currentColor"><path d="M18.5 17.8745C23.428 17.8745 27.4372 13.8653 27.4372 8.93724C27.4372 4.00919 23.428 0 18.5 0C13.5719 0 9.56274 4.00919 9.56274 8.93724C9.56274 13.8653 13.572 17.8745 18.5 17.8745ZM18.5 1.87495C22.3942 1.87495 25.5623 5.04304 25.5623 8.93724C25.5623 12.8314 22.3942 15.9995 18.5 15.9995C14.6058 15.9995 11.4377 12.8314 11.4377 8.93724C11.4377 5.04304 14.6058 1.87495 18.5 1.87495Z"></path><path d="M19.5407 8.01963C19.0736 7.85439 18.3119 7.57683 17.9302 7.27753C17.9071 7.25934 17.8639 7.15053 17.8942 6.98885C17.9089 6.91123 17.976 6.65211 18.2275 6.5763C18.6158 6.45861 18.9844 6.53592 19.2263 6.71504C19.6081 7.06272 20.1994 7.03628 20.5485 6.6553C20.8972 6.27474 20.8724 5.68439 20.494 5.33415C20.494 5.33415 20.0597 4.94741 19.4386 4.76441V4.68723C19.4386 4.16949 19.0188 3.74976 18.5011 3.74976C17.9834 3.74976 17.5636 4.16949 17.5636 4.68723V4.82285C15.8785 5.43571 15.4823 7.74076 16.7733 8.75298C17.3614 9.2141 18.2018 9.53465 18.9152 9.78714C19.3799 9.95151 19.4271 10.2848 19.385 10.5354C19.3381 10.8144 19.0978 11.2875 18.4948 11.2915C17.8697 11.2955 17.7214 11.2725 17.2651 10.9739C16.8318 10.6904 16.2509 10.8116 15.9673 11.2449C15.6837 11.6781 15.805 12.2592 16.2383 12.5427C16.7366 12.8689 17.1314 13.0305 17.5635 13.1062V13.1964C17.5635 13.7142 17.9833 14.1339 18.501 14.1339C19.0188 14.1339 19.4385 13.7142 19.4385 13.1964V13.0002C21.7099 12.1793 22.0112 8.89348 19.5407 8.01963Z"></path><path d="M27.1277 18.2503L16.3807 20.6957C16.1348 20.4724 15.8524 20.2848 15.5396 20.144L10.0211 17.6683C8.41598 16.946 6.57879 16.9548 4.98527 17.6903L0.549775 19.7087C0.0784763 19.9231 -0.129705 20.4789 0.0847886 20.9502C0.29922 21.4215 0.855079 21.6297 1.32631 21.4152L5.76643 19.3947C6.87153 18.8847 8.14187 18.8787 9.25271 19.3785L14.7712 21.8542C15.2535 22.0713 15.5626 22.5536 15.5626 23.0782C15.5626 24.0485 14.5639 24.7049 13.6695 24.3023L8.89784 22.155C8.42554 21.9425 7.87069 22.1531 7.65825 22.6252C7.44576 23.0974 7.65632 23.6523 8.12843 23.8648L12.9001 26.012C15.3002 27.0921 17.9275 24.9794 17.3637 22.3948C24.3638 20.8019 27.5839 20.0703 27.6286 20.057C28.8921 19.6835 30.1247 20.6324 30.1247 21.9198C30.1247 22.6031 29.7595 23.2438 29.1739 23.5907L19.074 29.5393C18.0086 30.1705 16.7272 30.2978 15.5585 29.8885L7.81 27.1766C7.60119 27.1036 7.37326 27.1067 7.16658 27.1854L0.604273 29.6854C0.120413 29.8697 -0.12233 30.4113 0.0619768 30.8951C0.246284 31.379 0.787956 31.6218 1.27175 31.4374L7.51395 29.0594L14.9389 31.658C16.5976 32.239 18.4562 32.0846 20.0276 31.1536L30.1275 25.205C31.2823 24.5209 31.9996 23.2621 31.9996 21.9198C31.9996 19.4062 29.5924 17.543 27.1277 18.2503Z"></path></svg>-->
<!--                            </div>-->
<!--                            <div class="card-sec-para">-->
<!--                                <div class="float-right d-flex  align-items-center">-->
<!--                                    <a href="careers"><span class="mr-2">Explore</span></a>-->
<!--                                    <svg class="svg-icon" width="16" height="16" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><path d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068    c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557    l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104    c0.006-0.006,0.011-0.013,0.018-0.019C513.968,262.339,513.943,249.635,506.134,241.843z"></path></svg>-->
<!--                                </div>-->
<!--                                <h3>Volunteer</h3>-->
<!--                                <div>-->
<!--                                    <p>IGF’s vehement endeavors have secured smiles on the faces of thousands, thus far.</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        <div class="card-sec-4">-->
<!--                            <div class="card-img-sec">-->
<!--                                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="currentColor"><path d="M30.9453 12.0195H25.4349C25.7863 11.0616 25.9648 10.0617 25.9648 9.03125C25.9648 4.05138 21.9432 0 17 0C12.0568 0 8.03516 4.05138 8.03516 9.03125C8.03516 10.0615 8.21366 11.0614 8.56521 12.0195H3.05469C2.50458 12.0195 2.05859 12.4655 2.05859 13.0156V33.0039C2.05859 33.554 2.50458 34 3.05469 34H30.9453C31.4954 34 31.9414 33.554 31.9414 33.0039V13.0156C31.9414 12.4655 31.4954 12.0195 30.9453 12.0195ZM17 1.99219C22.1683 1.99219 25.5106 7.50523 23.2711 12.0195H19.9381C20.2543 10.4682 19.0613 9.03125 17.498 9.03125H16.502C16.2273 9.03125 16.0039 8.80786 16.0039 8.5332C16.0039 8.25855 16.2273 8.03516 16.502 8.03516H18.9922C19.5423 8.03516 19.9883 7.58917 19.9883 7.03906C19.9883 6.48895 19.5423 6.04297 18.9922 6.04297H17.9961V5.04688C17.9961 4.49677 17.5501 4.05078 17 4.05078C16.4499 4.05078 16.0039 4.49677 16.0039 5.04688V6.09311C14.8686 6.32446 14.0117 7.33059 14.0117 8.5332C14.0117 9.90635 15.1288 11.0234 16.502 11.0234H17.498C17.7727 11.0234 17.9961 11.2468 17.9961 11.5215C17.9961 11.7961 17.7727 12.0195 17.498 12.0195H10.7288C8.48944 7.50397 11.8325 1.99219 17 1.99219ZM29.9492 14.0117V16.0039H4.05078V14.0117H29.9492ZM4.05078 32.0078V17.9961H29.9492V32.0078H4.05078Z"></path><path d="M17 20.7384C14.8309 18.9757 11.6875 20.474 11.6875 23.6317C11.6875 25.0258 12.5213 26.5032 14.1657 28.023C15.303 29.0741 16.4304 29.7722 16.4778 29.8014C16.7981 29.9985 17.2019 29.9985 17.5222 29.8014C17.5696 29.7722 18.697 29.0741 19.8344 28.023C21.4787 26.5033 22.3125 25.0258 22.3125 23.6318C22.3125 20.4659 19.1642 18.9797 17 20.7384ZM17.0023 27.7591C15.7782 26.8954 13.6797 25.1093 13.6797 23.6318C13.6797 22.0061 15.2465 21.3343 16.1616 22.761C16.5534 23.3719 17.4472 23.3709 17.8384 22.761C18.7529 21.3352 20.3203 22.0059 20.3203 23.6318C20.3203 24.9904 18.4591 26.7418 17.0023 27.7591Z"></path></svg>-->
<!--                            </div>-->
<!--                            <div class="card-sec-para"> -->
<!--                                <div class="float-right d-flex  align-items-center">-->
<!--                                    <a href="media-coverage"><span class="mr-2">Explore</span></a>-->
<!--                                    <svg class="svg-icon" width="16" height="16" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><path d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068    c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557    l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104    c0.006-0.006,0.011-0.013,0.018-0.019C513.968,262.339,513.943,249.635,506.134,241.843z"></path></svg>-->
<!--                                </div>-->
<!--                                <h3>Media Coverage</h3>-->
<!--                                <div>-->
<!--                                    <p>We are truly, utterly privileged to have partners across India and beyond, who share our values and commitment.</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        <div class="card-sec-4">-->
<!--                            <div class="card-img-sec">-->
<!--                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="currentColor"><path d="M22.2221 27.8736C22.2365 27.8685 22.2507 27.8627 22.2646 27.8563C22.3926 27.7978 22.591 27.7216 22.6975 27.6807C22.7387 27.6649 22.7697 27.6527 22.7861 27.6459V27.646C23.574 27.3191 24.0773 26.7275 24.2418 25.9352C24.4027 25.1601 24.2297 24.2338 23.8308 23.2395C26.3327 23.1069 28.0472 23.4727 30.2011 24.1698C30.5841 24.2937 30.9257 24.3435 31.2276 24.3434C32.016 24.3434 32.5334 24.0033 32.8081 23.7517C33.4229 23.1884 33.6833 22.3079 33.4877 21.4536C33.2711 20.5078 32.5532 19.7873 31.518 19.4768C29.6885 18.9278 25.9454 17.8049 21.835 19.8214C21.4323 19.2739 20.9995 18.7329 20.5524 18.21L27.822 12.1727C27.8345 12.1624 27.8464 12.1515 27.8579 12.1401C28.0937 11.9043 28.2237 11.5902 28.2237 11.2555C28.2237 10.9207 28.0937 10.6066 27.8578 10.3707L25.5966 8.11271C25.1089 7.62516 24.3151 7.62509 23.8272 8.11271C23.8158 8.12417 23.8049 8.13605 23.7945 8.1485L21.5763 10.8155C21.3901 11.0394 21.4206 11.3719 21.6446 11.5582C21.8685 11.7444 22.201 11.7138 22.3872 11.49L24.5849 8.84762C24.6613 8.78356 24.7796 8.78729 24.8512 8.85894L27.1124 11.1169C27.1617 11.1662 27.1691 11.225 27.1691 11.2555C27.1691 11.2836 27.1629 11.3354 27.1238 11.3819L19.8532 17.4198C19.6504 17.1979 19.4463 16.9808 19.2421 16.7696C19.2379 16.7652 19.2336 16.7609 19.2292 16.7567C19.0068 16.542 18.7779 16.3273 18.5439 16.114L20.7835 13.4214C20.9697 13.1974 20.9392 12.865 20.7153 12.6787C20.4914 12.4925 20.1589 12.5231 19.9727 12.7469L17.7521 15.4166C17.265 15.0018 16.7623 14.5998 16.2536 14.223C18.5461 10.1847 17.6036 6.35265 17.1425 4.47847C16.8849 3.42983 16.2016 2.67699 15.2677 2.41297C14.4231 2.17426 13.5295 2.39019 12.9357 2.97645C12.5693 3.33814 12.0109 4.1544 12.3877 5.5565C12.9939 7.81782 13.2716 9.61438 12.9604 12.2551C11.888 11.7966 10.8868 11.588 10.0586 11.76C9.26628 11.9244 8.67467 12.4275 8.34779 13.2147C8.34111 13.231 8.32888 13.262 8.31306 13.3031C8.27213 13.4096 8.19592 13.6078 8.13735 13.7357C8.13095 13.7497 8.12518 13.7639 8.11998 13.7784L7.45208 15.6548C7.45138 15.6567 7.45046 15.6585 7.44976 15.6604L6.32321 18.8249C6.32181 18.8289 6.32089 18.833 6.31956 18.8371L4.6978 23.3934C4.69625 23.3975 4.69428 23.4012 4.69288 23.4052L4.20104 24.7892L1.98324 31.0202C1.57578 32.168 1.69777 33.1317 2.31638 33.6751C2.64896 34.0517 3.13742 34.2437 3.72861 34.2437C4.10584 34.2437 4.52497 34.1655 4.97167 34.0071L11.1931 31.795L12.5903 31.299C12.5943 31.2976 12.598 31.2957 12.6019 31.2942L17.1596 29.6737C17.164 29.6722 17.1686 29.6712 17.173 29.6695L20.339 28.5436C20.341 28.5429 20.3429 28.5419 20.3449 28.5411L22.2221 27.8736ZM31.2149 20.4869C32.1206 20.7586 32.3835 21.3567 32.4596 21.689C32.569 22.1668 32.4261 22.6712 32.0956 22.974C31.7316 23.3075 31.1738 23.3759 30.5256 23.1663C28.1872 22.4094 26.2375 22.007 23.3537 22.2128C23.0925 21.7138 22.7867 21.2054 22.4485 20.697C26.1357 18.9633 29.5397 19.9844 31.2149 20.4869ZM13.4063 5.2832C13.2297 4.62613 13.3256 4.07354 13.6766 3.72711C13.9961 3.41176 14.508 3.29441 14.9807 3.42793C15.3089 3.52067 15.893 3.81317 16.1183 4.73033C16.5426 6.4546 17.4057 9.96467 15.3873 13.6107C14.9101 13.29 14.4325 12.9975 13.9621 12.7428C14.3645 9.73595 14.0746 7.7762 13.4063 5.2832ZM9.10618 14.153C9.17607 13.9975 9.2544 13.7936 9.29743 13.6817C9.30791 13.6545 9.31585 13.6337 9.32028 13.6228C9.32077 13.6216 9.32127 13.6205 9.32169 13.6194C9.51674 13.1496 9.81901 12.887 10.2729 12.7928C10.9645 12.6493 11.953 12.9051 13.11 13.4848C13.136 13.501 13.1638 13.5148 13.1928 13.5263C13.8251 13.8494 14.5062 14.2675 15.2161 14.7695C15.235 14.7854 15.2549 14.8006 15.2765 14.8141C15.2788 14.8155 15.2813 14.8164 15.2837 14.8179C16.3144 15.5525 17.4035 16.4606 18.4902 17.5092C18.8033 17.8333 19.1034 18.1576 19.3907 18.4806C19.3921 18.4824 19.3933 18.4843 19.3947 18.4861C19.399 18.4913 19.4039 18.4958 19.4084 18.5008C20.0922 19.2708 20.6999 20.0325 21.2189 20.7642C21.2354 20.7924 21.2541 20.8187 21.2748 20.8427C21.7967 21.5854 22.2254 22.2954 22.5488 22.9503C22.5613 22.9837 22.5768 23.0153 22.5954 23.0449C23.1199 24.1326 23.3459 25.0615 23.2091 25.721C23.115 26.1747 22.8521 26.4769 22.382 26.672C22.3809 26.6725 22.3798 26.673 22.3787 26.6735C22.3676 26.6779 22.3469 26.6858 22.3194 26.6963C22.2075 26.7393 22.0036 26.8176 21.848 26.8874L20.5244 27.358C19.826 25.1202 17.8772 22.6819 16.7153 21.3652C16.5226 21.1469 16.1894 21.1261 15.971 21.3187C15.7526 21.5114 15.7318 21.8447 15.9245 22.0631C17.7718 24.1566 19.0609 26.182 19.5302 27.7116L17.2651 28.5169C16.3991 26.8091 14.9297 24.8436 13.0812 22.928C13.0767 22.9235 13.0722 22.919 13.0677 22.9146C11.1512 21.0671 9.18479 19.5986 7.47606 18.733L8.28149 16.47C9.87793 16.9627 12.0517 18.3694 14.2148 20.324C14.4309 20.5192 14.7643 20.5023 14.9596 20.2862C15.1549 20.0701 15.138 19.7366 14.9219 19.5414C12.6408 17.4802 10.3906 16.0305 8.63523 15.4763L9.10618 14.153ZM12.6234 30.1671C11.7942 28.9511 10.7421 27.6729 9.55949 26.4476C9.55506 26.443 9.55063 26.4386 9.54606 26.4343C8.32009 25.2522 7.04124 24.2008 5.82484 23.3721L7.11908 19.7359C8.6938 20.558 10.5597 21.9628 12.3288 23.6671C14.0338 25.435 15.4393 27.2997 16.2619 28.8735L12.6234 30.1671ZM10.861 30.7937L8.99087 31.4576C8.35925 30.6548 7.66309 29.859 6.91756 29.0876C6.91327 29.0832 6.90899 29.0789 6.90463 29.0747C6.13288 28.3296 5.33666 27.6339 4.53362 27.0027L5.19181 25.1506L5.45886 24.4004C6.55574 25.1686 7.70204 26.1219 8.80728 27.1868C9.87252 28.2911 10.8262 29.4366 11.5948 30.5328L10.861 30.7937ZM4.61884 33.0131C3.90144 33.2675 3.33219 33.2492 3.09601 32.9641C3.0747 32.9384 3.05101 32.9147 3.02527 32.8935C2.74044 32.6589 2.72251 32.0904 2.97704 31.3733L4.15878 28.0531C4.83765 28.6008 5.51047 29.1949 6.16557 29.8271C6.79782 30.4817 7.39217 31.1539 7.94005 31.8321L4.61884 33.0131Z"></path><path d="M27.2572 4.48917L28.5884 5.42953C28.5934 5.44106 28.6045 5.47158 28.6173 5.54063L28.9016 7.07963C28.9266 7.24388 28.9875 7.6081 29.3339 7.74907C29.4133 7.78135 29.4903 7.79464 29.5637 7.79464C29.8164 7.79464 30.025 7.63699 30.1298 7.55782L31.3631 6.60811C31.3894 6.59103 31.4606 6.57253 31.4902 6.57366L33.0379 6.7796C33.2014 6.80013 33.5842 6.8483 33.8184 6.54968C34.0493 6.25535 33.9204 5.90717 33.8615 5.75325L33.3358 4.27711C33.3127 4.2113 33.3075 4.18036 33.3063 4.16876L33.9884 2.68538C34.0634 2.53498 34.2254 2.19881 34.0277 1.88536C33.8265 1.56656 33.4488 1.57346 33.2866 1.57662L31.6541 1.60847L30.4826 0.472994C30.3759 0.370127 30.0923 0.0969632 29.7148 0.197721C29.3371 0.298549 29.2276 0.676619 29.1865 0.818932C29.1863 0.819776 29.186 0.820549 29.1858 0.821393L28.7403 2.38781L27.3077 3.17749C27.1669 3.25547 26.8373 3.438 26.8225 3.81467C26.8079 4.18571 27.1171 4.39643 27.2572 4.48917ZM29.2953 3.28613C29.6104 3.11119 29.6886 2.91136 29.7466 2.70492L30.0758 1.54744L30.9054 2.35153L30.9364 2.38191C31.0875 2.53069 31.2524 2.66414 31.6079 2.66414C31.613 2.66414 31.6182 2.66414 31.6235 2.66407L32.8485 2.64017L32.3442 3.73662C32.1858 4.08446 32.2594 4.39559 32.3418 4.62938L32.7133 5.6726L31.6335 5.52889C31.3353 5.48698 30.9601 5.58675 30.7221 5.7709L29.8557 6.43803L29.6546 5.3491C29.613 5.12445 29.5215 4.79995 29.2059 4.5746L28.2208 3.87865L29.2953 3.28613Z"></path><path d="M19.8035 5.27861L20.9209 5.92562C21.0708 6.01105 21.2342 6.05225 21.3983 6.05225C21.711 6.05225 22.0264 5.90249 22.2557 5.62356L24.3174 3.14181C24.4862 2.93896 24.5551 2.66847 24.5064 2.39966C24.4522 2.10041 24.2613 1.83125 23.9957 1.67938L21.9403 0.492082C21.6748 0.339434 21.3451 0.310606 21.0585 0.414809C20.8026 0.507832 20.6043 0.702457 20.5148 0.946793L19.395 3.96967C19.2002 4.49012 19.3687 5.02871 19.8035 5.27861ZM20.3834 4.33768L21.4596 1.43237L23.4238 2.56707L21.4428 4.95179C21.4292 4.96832 21.4164 4.97999 21.406 4.98793L20.3703 4.38817C20.3719 4.37516 20.3757 4.35807 20.3834 4.33768Z"></path><path d="M35.7517 9.89787C35.5252 9.62913 35.1785 9.46875 34.8244 9.46875H31.7118C31.358 9.46875 31.0113 9.62941 30.7845 9.8985C30.5831 10.1374 30.5001 10.4314 30.5506 10.7261L31.264 14.8954C31.3749 15.5409 31.8416 15.9745 32.4252 15.9745H34.113C34.6966 15.9745 35.1632 15.5409 35.2742 14.8948L35.9854 10.7263C36.0362 10.431 35.9532 10.1368 35.7517 9.89787ZM34.2347 14.7169C34.218 14.8145 34.1666 14.9199 34.113 14.9199H32.4252C32.3653 14.9199 32.318 14.8012 32.3036 14.7172L31.5946 10.5738C31.6152 10.5522 31.6639 10.5234 31.7119 10.5234H34.8245C34.8727 10.5234 34.9213 10.5519 34.9418 10.5731L34.2347 14.7169Z"></path><path d="M2.97085 16.6749C3.06633 16.6749 3.16336 16.6624 3.2604 16.6367L4.88897 16.1995C5.4552 16.0496 5.79453 15.5095 5.73336 14.8559L5.34066 10.6433C5.31261 10.3448 5.15539 10.0823 4.89805 9.90382C4.60934 9.70371 4.23345 9.6393 3.89384 9.73134L0.888542 10.5367C0.546331 10.6277 0.252706 10.872 0.10308 11.1902C-0.0301618 11.4735 -0.0342399 11.7796 0.0913383 12.0514L1.85963 15.8944C2.08646 16.3857 2.51093 16.6749 2.97085 16.6749ZM1.15967 11.5559L1.16114 11.5555L4.16813 10.7497C4.21405 10.737 4.2679 10.7523 4.29294 10.7675L4.68317 14.954C4.69231 15.0521 4.67037 15.1664 4.61722 15.1804L2.98864 15.6176C2.93042 15.6333 2.85308 15.5302 2.81743 15.4528L1.05996 11.6334C1.07431 11.6077 1.11368 11.568 1.15967 11.5559Z"></path><path d="M26.6221 31.8202L23.4431 29.5692C22.9335 29.2061 22.3245 29.2288 21.9275 29.6256L20.8297 30.7228C20.4324 31.1199 20.4096 31.729 20.7722 32.2371L23.0248 35.4148C23.1911 35.6504 23.4474 35.7944 23.7464 35.8201C23.7779 35.8228 23.8094 35.8241 23.841 35.8241C24.1445 35.8241 24.4462 35.7006 24.6631 35.4838L26.6901 33.4579C26.9295 33.2186 27.0553 32.8761 27.0266 32.5416C27.0011 32.2424 26.8571 31.9859 26.6221 31.8202ZM25.9446 32.7118L23.9176 34.7378C23.9017 34.7536 23.8776 34.7633 23.8587 34.7673L21.6317 31.6258C21.5757 31.5473 21.569 31.4843 21.5753 31.4688L22.6748 30.3691C22.6768 30.3685 22.68 30.3682 22.6841 30.3682C22.7079 30.3682 22.7639 30.3801 22.8323 30.4289L25.974 32.6535C25.9699 32.6723 25.9602 32.6962 25.9446 32.7118Z"></path><path d="M3.42048 4.51813C3.42062 4.51946 3.42392 4.55118 3.38553 4.65953L2.81417 6.26209C2.75272 6.42177 2.61835 6.7824 2.85418 7.08306C3.09359 7.38835 3.47708 7.33935 3.66425 7.31544L5.33663 7.09185C5.37945 7.0877 5.47712 7.11407 5.50883 7.13614L6.85222 8.17353C6.96669 8.25974 7.17692 8.41808 7.43236 8.41808C7.50697 8.41808 7.58544 8.40458 7.66651 8.37182C8.01997 8.22887 8.08409 7.84967 8.11088 7.68085L8.41744 6.01185C8.4391 5.89773 8.45696 5.87066 8.46083 5.86721L9.91657 4.83791C10.0723 4.73406 10.3834 4.52178 10.3672 4.14294C10.3508 3.75967 10.0081 3.57137 9.86257 3.49143L8.29236 2.62511L7.80228 0.907512C7.76002 0.75838 7.64794 0.364489 7.26235 0.260708C6.87633 0.156716 6.58109 0.442114 6.46979 0.549833L5.21534 1.76434L5.18539 1.79373L3.39481 1.75956C3.22712 1.75569 2.83449 1.74662 2.62869 2.07224C2.42598 2.39293 2.59044 2.73142 2.67517 2.89989L3.42048 4.51813ZM5.20184 2.84891C5.57991 2.85664 5.74768 2.72122 5.91319 2.55711L6.90249 1.59861L7.28133 2.92625C7.34398 3.149 7.42245 3.3482 7.75144 3.53129L8.97938 4.20875L7.85361 5.00476C7.52806 5.23293 7.43019 5.55749 7.38069 5.818L7.15048 7.07125L6.15134 6.29978C5.93886 6.13735 5.62217 6.03744 5.33916 6.03744C5.29163 6.03744 5.24502 6.04025 5.20002 6.04609L3.95134 6.21301L4.37926 5.01278C4.46616 4.76746 4.54456 4.43938 4.37764 4.07572L3.80045 2.82212L5.20184 2.84891Z"></path><path d="M35.282 27.6026L33.5374 27.1712L32.6195 25.6382C32.5406 25.5056 32.3312 25.1534 31.9312 25.1523C31.9306 25.1523 31.93 25.1523 31.9295 25.1523C31.5305 25.1523 31.3192 25.5036 31.2395 25.6359C31.2394 25.6362 31.2392 25.6365 31.239 25.6368L30.3409 27.1363L30.3202 27.1712L28.5744 27.6029C28.4121 27.6434 28.032 27.7384 27.9185 28.1046C27.8063 28.4659 28.0521 28.7507 28.1764 28.8914L29.3172 30.2641C29.3184 30.2672 29.3285 30.2977 29.3195 30.4109L29.1845 32.1083C29.1657 32.279 29.1288 32.6603 29.4322 32.8904C29.7412 33.1246 30.1002 32.9798 30.2784 32.9079L31.8383 32.2576C31.8776 32.2428 31.9782 32.2424 32.017 32.2567L33.5858 32.9098C33.6874 32.9511 33.8542 33.0188 34.0375 33.0188C34.1638 33.0188 34.2978 32.9867 34.4239 32.8919C34.7291 32.6624 34.6929 32.2792 34.6752 32.1095L34.538 30.4112C34.5291 30.2977 34.5392 30.2672 34.5411 30.264L35.6831 28.8914C35.8072 28.7511 36.0526 28.4669 35.9403 28.1052C35.8267 27.7387 35.4458 27.6435 35.282 27.6026ZM33.7308 29.5891C33.4752 29.8955 33.4661 30.2338 33.4867 30.4953L33.5896 31.769L32.4229 31.2832C32.1291 31.1605 31.733 31.1602 31.4351 31.2831L30.2695 31.769L30.3709 30.4945C30.3916 30.234 30.3826 29.8957 30.1275 29.5898L29.2424 28.5241L30.6058 28.187C30.9737 28.097 31.1019 27.9226 31.2204 27.7207L31.9287 26.5376L32.6125 27.6793L32.6372 27.721C32.7558 27.9227 32.8839 28.097 33.2504 28.1868L34.6164 28.5245L33.7308 29.5891Z"></path></svg>-->
<!--                            </div>-->
<!--                            <div class="card-sec-para"> -->
<!--                                <div class="float-right d-flex  align-items-center">-->
<!--                                    <a href="<?php echo 'gallery/gallery_images/'.$charitable_program->gallery_id .'/'. $this->db->where('gallery_id',$charitable_program->gallery_id)->get('gallery')->row()->category_id; ?>"><span class="mr-2">Explore</span></a>-->
<!--                                    <svg class="svg-icon" width="16" height="16" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><path d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068    c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557    l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104    c0.006-0.006,0.011-0.013,0.018-0.019C513.968,262.339,513.943,249.635,506.134,241.843z"></path></svg>-->
<!--                                </div>-->
<!--                                <h3>Photo Gallery</h3>-->
<!--                                <div>-->
<!--                                    <p>IGF’s team of dedicated and passionate professionals participate with full energy in all our campaigns. </p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->

<!--                    </div>-->
<!--                    <div class="col-12 col-lg-7">-->
<!--                        <img src="<?php echo CHARITABLE_PROGRAM_BANNER_PATH.$charitable_program->explore_side_image;?>" class="img-fluid sec-about-4-img" alt="" srcset="">-->
<!--                    </div>-->
<!--                </div>-->
<!--</section>-->

<!--<section class="real-testimonals">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-12">-->
<!--                <div>-->
<!--                    <h2 class="sec-title">From Our Beneficiaries</h2>-->
<!--                    <p class="text-center">Read on to know their experiences with our integrated healthcare programs.</p>-->

<!--                    <div class="tick-icon">-->
<!--                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Capa_1" x="0px" y="0px" viewBox="0 0 426.667 426.667" style="enable-background:new 0 0 426.667 426.667;" xml:space="preserve">-->
<!--                            <g>-->
<!--                                <g>-->
<!--                                    <path d="M421.876,56.307c-6.548-6.78-17.352-6.968-24.132-0.42c-0.142,0.137-0.282,0.277-0.42,0.42L119.257,334.375    l-90.334-90.334c-6.78-6.548-17.584-6.36-24.132,0.42c-6.388,6.614-6.388,17.099,0,23.713l102.4,102.4    c6.665,6.663,17.468,6.663,24.132,0L421.456,80.44C428.236,73.891,428.424,63.087,421.876,56.307z">-->
<!--                                    </path>-->
<!--                                </g>-->
<!--                            </g>-->
<!--                        </svg>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="real-container">-->
<!--                    <div id="real-carousel" class="owl-carousel real-carousel owl-theme">-->
<!--                        <div class="item">-->
<!--                            <div class="position-relative">-->
<!--                                <div class="post-thumbail-img">-->
<!--                                    <img src="./assets/image/pics/real-1.jpg" width="296" height="411" class="real-img-thumbail" alt="" />-->
<!--                                </div>-->
<!--                                <div class="post-content">-->
<!--                                    <h3 class="post__title">Aakash T.,Jharkhand</h3>-->
<!--                                    <p class="elementor-post__excerpt">“It is thrilling to be part of such a great initiative. It is a well-designed learning path with practical orientation.”</p>-->
                                    <!-- <a class="read_more" href="">Read More
<!--                                        <svg class="svg-icon" width="10" height="10" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 492.004 492.004" style="enable-background:new 0 0 492.004 492.004;width: 14px;" xml:space="preserve">-->
<!--                                            <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12    c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028    c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265    c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z">-->
<!--                                            </path>-->
<!--                                        </svg>-->
<!--                                    </a> -->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <div class="position-relative">-->
<!--                                <div class="post-thumbail-img">-->
<!--                                    <img src="./assets/image/testimonials/Ketu S.jpg" width="296" height="411" class="real-img-thumbail" alt="" />-->
<!--                                </div>-->
<!--                                <div class="post-content">-->
<!--                                    <h3 class="post__title">Ketu S., Haryana</h3>-->
<!--                                    <p class="elementor-post__excerpt">“The C.O.W. - MMU doctor patiently listened to my problems and her medicines worked like magic. Without the doctor’s help, I wouldn’t know the actual health problems that I’ve been ignoring.”  </p>-->
                                    <!-- <a class="read_more" href="">Read More
<!--                                        <svg class="svg-icon" width="10" height="10" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 492.004 492.004" style="enable-background:new 0 0 492.004 492.004;width: 14px;" xml:space="preserve">-->
<!--                                            <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12    c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028    c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265    c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z">-->
<!--                                            </path>-->
<!--                                        </svg>-->
<!--                                    </a> -->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <div class="position-relative">-->
<!--                                <div class="post-thumbail-img">-->
<!--                                    <img src="./assets/image/testimonials/utkarsh and aakash (sample).jpg" width="296" height="411" class="real-img-thumbail" alt="" />-->
<!--                                </div>-->
<!--                                <div class="post-content">-->
<!--                                    <h3 class="post__title">Utkarsh G., Delhi</h3>-->
<!--                                    <p class="elementor-post__excerpt">“At a time when oxygen concentrators in Delhi were hard to find, IGF's oxygen concentrators’ donation drive helped me get one. I was able to assess my family’s health and take appropriate actions during their COVID infection.” </p>-->
                                    <!-- <a class="read_more" href="">Read More
<!--                                        <svg class="svg-icon" width="10" height="10" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 492.004 492.004" style="enable-background:new 0 0 492.004 492.004;width: 14px;" xml:space="preserve">-->
<!--                                            <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12    c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028    c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265    c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z">-->
<!--                                            </path>-->
<!--                                        </svg>-->
<!--                                    </a> -->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <div class="position-relative">-->
<!--                                <div class="post-thumbail-img">-->
<!--                                    <img src="./assets/image/testimonials/sheryn.jpg" width="296" height="411" class="real-img-thumbail" alt="" />-->
<!--                                </div>-->
<!--                                <div class="post-content">-->
<!--                                    <h3 class="post__title">Sheryn, Nurse at Apollo Hospital </h3>-->
<!--                                    <p class="elementor-post__excerpt">“We thank Impact Guru Foundation for providing a platform that allowed us to get information on COVID care. The ANGEL- #ThankANurse program was very informative and knowledgeable to improve our skills.” </p>-->
                                    <!-- <a class="read_more" href="">Read More
<!--                                        <svg class="svg-icon" width="10" height="10" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 492.004 492.004" style="enable-background:new 0 0 492.004 492.004;width: 14px;" xml:space="preserve">-->
<!--                                            <path d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12    c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028    c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265    c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z">-->
<!--                                            </path>-->
<!--                                        </svg>-->
<!--                                    </a> -->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->

<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<!-- Razorpya with ajax method -->
<!-- <button id="rzp-button1" class="d-none"></button>
<div id="failed-form"></div>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script> -->

<!-- Razorpay for redirect method -->
<button id="rzp-button1" class="d-none"></button>
<div id="failed-form"></div>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<form id="razorpay-form" action="<?php echo $page_items->page_slug; ?>" method="POST">
    <script type="text/javascript" src="https://checkout.razorpay.com/v1/checkout.js" data-buttontext="" data-key="<?php echo $key; ?>" data-amount="<?php echo $amount * 100; ?>" data-currency="INR" data-name="<?php echo $name ?>" data-image="<?php echo $settings->LOGO_IMAGE; ?>" data-description="<?php echo $description ?>" data-prefill.name="<?php echo $prefill['name'] ?>" data-prefill.email="<?php echo $prefill['email'] ?>" data-prefill.contact="<?php echo $prefill['contact'] ?>" data-prefill.pan="<?php echo $prefill['pan'] ?>" data-notes.pan="<?php echo $prefill['pan'] ?>" data-notes.shopping_order_id="<?php echo $notes['merchant_order_id']; ?> " data-modal.confirm_close='true' data-modal.ondismiss="this.modal_close()" data-display_amount="<?php echo $display_amount; ?>" data-display_currency="<?php echo $currency ?>" data-redirect='true' data-callback_url="<?php echo base_url(); ?>charitable_programs/success/<?php echo urlencode($this->my_encrypt->encrypt_key($insert_id)); ?>"></script>
</form>
<script>
   <?php if(!empty($rzp_data)){   ?>
       console.log(<?php echo $rzp_data; ?>)
    var options = {
        "key": "<?php echo $rzp_data['key'] ?>",
        "name": "<?php echo $rzp_data['name'] ?>",
        "description": "<?php echo $rzp_data['description'] ?>",
        "image": "<?php echo $rzp_data['image']; ?>",
        "amount": "<?php echo $rzp_data['amount']*100; ?>",
        "currency": "<?php echo $rzp_data['currency']; ?>",
        "email": "<?php echo $rzp_data['mail']; ?>",
        "contact": "<?php echo $rzp_data['contact']; ?>",
        "method": "<?php echo $rzp_data['payment_method']; ?>",
        "order_id": "<?php echo $rzp_data['order_id']; ?>",
        "customer_id": "<?php echo $rzp_data['customer_id']; ?>",
        "recurring": "1",
        "callback_url": "<?php echo $rzp_data['call_back_url']; ?>",
        "notes": {
            "name": "<?php echo $rzp_data['name']; ?>",
            "email": "<?php echo $rzp_data['email']; ?>",
            "contact": "<?php echo $rzp_data['contact']; ?>",
            "pan_number": "<?php echo $rzp_data['pan_number']; ?>",
        },
        "theme": {
            "color": "#F37254",
        },
        "modal": {
        "ondismiss": function(){
            $('#failed-form').html('<form id="failed_form_submit" action="<?php echo base_url(); ?>charitable_programs/failed_save/<?php echo $insert_id; ?>"  method="post" style="display:none"><input type="hidden" name="error_code" value=""><input type="hidden" name="error_description" value="User closed razorpay payment window without making any transaction"><input type="hidden" name="error_source" value="Modal Windows Closed"><input type="hidden" name="error_reason" value="User closed Payment Form"></form>');
            $('#failed_form_submit').submit();
            }
        }
    };

            

            
    var rzp1 = new Razorpay(options);
    console.log(rzp1);
    rzp1.on('payment.failed', function(response) {
        $('#failed-form').html('<form id="failed_form_submit" action="<?php echo base_url(); ?>charitable_programs/failed/<?php echo urlencode($this->my_encrypt->encrypt_key($insert_id)); ?>"  method="post" style="display:none"><input type="hidden" name="error_code" value="' + response.error.code + '"><input type="hidden" name="error_description" value="' + response.error.description + '"><input type="hidden" name="error_source" value="' + response.error.source + '"><input type="hidden" name="error_reason" value="' + response.error.reason + '"><input type="hidden" name="razorpay_order_id" value="' + response.error.metadata.order_id + '"><input type="hidden" name="razorpay_payment_id" value="' + response.error.metadata.payment_id + '"><input type="hidden" name="programme" value="monthly-meals"></form>');
        $('#failed_form_submit').submit();
    });
    $('#rzp-button1').click();
    rzp1.open();
    //   e.preventDefault();
    <?php } ?>
</script>


<script>
    $(document).ready(function() {

          // Remove code after Monthly fix
          $('#Monthly').click(function(){
            window.open("https://www.impactguru.com/monthly/save-patients-with-critical-illness?utm_source=homepage_recurr_btn&utm_medium=igfgem&utm_campaign=IGF202200XX&launch=1",'_blank');
        })

        $('#Onetime').change(function() {
            $('.donate-radio').removeAttr('checked');
            $('#onetime-container').addClass('container-active')
            $('#monthly-container').removeClass('container-active')
            $('#onetime-container input, #onetime-container select').removeAttr('disabled', false);
            $('#monthly-container input, #monthly-container select').prop('disabled', true);
            $('#ot_<?php echo $charitable_program->ot_amount_1; ?>').attr('checked', true);
             $('#m_amount').val('');
              $('.error-amount').html('')
            $('#amount').val($('#ot_<?php echo $charitable_program->ot_amount_1; ?>').val())
        })
        $('#Monthly').on('change', function() {
            $('.donate-radio').removeAttr('checked');
            $('#onetime-container').removeClass('container-active')
            $('#monthly-container').addClass('container-active')
            $('#monthly-container input, #monthly-container select').removeAttr('disabled', false);
            $('#onetime-container input, #onetime-container select').prop('disabled', true);
            $('#m_<?php echo $charitable_program->m_amount_1; ?>').attr('checked', true);
             $('#ot_amount').val('');
              $('.error-amount').html('')
            $('#amount').val($('#m_<?php echo $charitable_program->m_amount_1; ?>').val())
        })

        $('.donate-radio').click(function() {
             $('#ot_other,#m_other').removeAttr('checked');
            $('#amount').val($(this).val());
            $('#ot_amount,#m_amount').val('');
            if($(this).val() < 100){
            // $('.error-amount').removeClass('d-none')
            $('.error-amount').html('Minimum amount should be ₹100 ')
        }else{
            $('.error-amount').html('')
        }
        })
        $('#ot_amount').keyup(function() {
            $('.donate-radio').removeAttr('checked');
            $('#ot_other').prop('checked', 'checked')
            // $('.error-amount').addClass('d-none');
            $('#amount').val($(this).val());
        })
        $('#m_amount').keyup(function() {
            $('.donate-radio').removeAttr('checked');
            $('#m_other').prop('checked', 'checked')
            $('#amount').val($(this).val());
        })

    })
      $('#m_other').click(function(){
         $('.donate-radio').removeAttr('checked');
         $('#m_other').prop('checked', 'checked')
    })
    $('#ot_other').click(function(){
         $('.donate-radio').removeAttr('checked');
         $('#ot_other').prop('checked', 'checked')
    })
    
$('#ot_amount').on('keyup',function(){
    
     if($(this).val().length > 1 ){
        if($(this).val() < 100){
            // $('.error-amount').removeClass('d-none')
            $('.error-amount').html('Minimum amount should be ₹100 ')
        }else{
            $('.error-amount').html('')
        }
     }
})
$('#m_amount').on('keyup',function(){
    
     if($(this).val().length > 1 ){
        if($(this).val() < 100){
            // $('.error-amount').removeClass('d-none')
            $('.error-amount').html('Minimum amount should be ₹100 ')
        }else{
            $('.error-amount').html('')
        }
     }
})

    $('#pay-form').validate({
       
        rules: {
            full_name: {
                required: true,
                maxlength: 30,
                lettersonly:true
            },
            mobile_number: {
                required: true,
                minlength: 10,
                maxlength: 10
            },
            email: {
                required: true,
                email: true
            },
            pan_number: {
                required: true,
                maxlength:10,
                pannumber: true
            },
            // frcode: {
            //     required: false,
            //     minlength: 10
            // },
            // dob: 'required',
            amount: 'required',
            city :{
                required:true,
                maxlength: 20,
                lettersonly:true
                
            },
            state :{
                required:true,
                maxlength: 20,
                lettersonly:true
                
            },
            pincode :{
                required:true,
                maxlength: 6,
                integer:true
                
            },
        },
        messages: {
             full_name: {
                required :'Full name is required',
                maxlength : "Maximum 30 Characters allowed",
                lettersonly :"Invalid Characters! Only Alphabets allowed"
            },
            mobile_number: {
                required: "Phone number is required",
                minlength: "Mobile number require minimum 10 digits",
                maxlength: "Mobile number require maximum 10 digits"
            },
            email: {
                required: 'Email is required',
                email: 'Enter valid email address'
            },
            pan_number: {
                required :'Pan number is required',
                maxlength : 'Maximum 10 characters allowed',
                pannumber : "Invalid Pan card number!"
            },
            city: {
                required :'City is required',
                maxlength : "Maximum 20 Characters allowed",
                lettersonly :"Invalid Characters! Only Alphabets allowed"
            },
            state: {
                required :'State is required',
                maxlength : "Maximum 20 Characters allowed",
                lettersonly :"Invalid Characters! Only Alphabets allowed"
            },
            pincode: {
                required :'Pincode is required',
                maxlength : "Maximum 6 Characters allowed",
                integer : "Only Numbers allowed"
            },
            frcode: {
                minlength: "Enter minimum 10 digit code"
            },
            dob: "Date of birth is required",
            amount: 'Amount is required'
        },
        submitHandler :function(form){
            if($('#amount').val() < 100){
                    $('.error-amount').removeClass('d-none');
            }else{
                $('.error-amount').addClass('d-none');
            // console.log($('input[name="duration"]:checked').val());
            if($('input[name="duration"]:checked').val() == 'DONATE-NOW'){
                form.submit();
            }else{
                // $.ajax ({ 
                //           type : 'POST', 
                //           url : 'charitable_programs/do_payment', 
                //           data : $('#pay-form').serialize (),
                //           beforeSend: function() {
                //     $('.preloader').removeClass('d-none');
                //   },
                //   success: function(){
                    
                //     $('.preloader').addClass('d-none');
                // },
                //           complete : function(data){
                //             console.log(data);
                //             var options = {
                //                     "key": data.responseJSON.keyId, // Enter the Key ID generated from the Dashboard
                //                     "amount": data.responseJSON.amount*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                //                     "currency": data.responseJSON.currency,
                //                     "name": data.responseJSON.company_name,
                //                     "email":data.responseJSON.email,
                //                     "contact":data.responseJSON.contact,
                //                     "method":data.responseJSON.payment_method,
                //                     "customer_id":data.responseJSON.customer_id,
                //                     "recurring":"1",
                //                     "description": data.responseJSON.company_description,
                //                     "amount": data.responseJSON.amount,
                //                     "image": data.responseJSON.image,
                //                     "order_id": data.responseJSON.order_id, //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                //                     "callback_url": data.responseJSON.callback_url,
                //                     "interval" : data.responseJSON.interval,
                //                     "redirect": true,
                //                     "retry" : {
                //                       'enabled':true,
                //                     },
                                    
                //                     "theme": {
                //                         "color": "#3399cc"
                //                     }
                //                 };
                //                 var rzp1 = new Razorpay(options);
                //                 rzp1.on('payment.failed', function (response){
                //                     $('#failed-form').html('<form id="failed_form_submit" action="charitable_programs/failed/'+data.responseJSON.insert_id+'" method="post" style="display:none"><input type="hidden" name="error_code" value="'+response.error.code+'"><input type="hidden" name="error_description" value="'+response.error.description+'"><input type="hidden" name="error_source" value="'+response.error.source+'"><input type="hidden" name="error_reason" value="'+response.error.reason+'"><input type="hidden" name="razorpay_order_id" value="'+response.error.metadata.order_id+'"><input type="hidden" name="razorpay_payment_id" value="'+response.error.metadata.payment_id+'"></form>');
                //                     $('#failed_form_submit').submit();
                //                 });
                              
                //                 $('#rzp-button1').click(); 
                //                 // $('#rzp-button1').on('click',function(e){
                                
                //                   rzp1.open();
                //                   // e.preventDefault();
                //                 // });
                //                 // document.getElementById('rzp-button1').onclick = function(e){
                //                 // }
                //           }
                //         })

                form.submit();
            }
            }
            
        }
    })
    
    
    
    $('.real-carousel').owlCarousel({
  loop: true,
  margin: 30,
  dots: false,
  nav: true,
  autoplay:true,
  autoplayTimeout:5000,
  autoplayHoverPause:true,
  items : 5,
  responsive: {
  0: {
    items: 1
  },

  600: {
    items: 1
  },

  1024: {
    items: 2
  },

  1366: {
    items: 2
  }
}
})

</script>