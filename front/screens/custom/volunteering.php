
    <!-- contact form -->

    <section class="contact-form-sec mb-5 mt-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-10 mx-auto">
                    <div class="contact-form-container">
                        <div class="text-center contact-address-sec mx-auto">
                            <?php if($this->session->flashdata('msg')){ ?>
                            <div class="middle-para"><h4 class=""><?php echo $this->session->flashdata('msg'); ?></h4></div>
                            <?php } ?>
                            <h2>Your time and talent can make a real difference in people's lives!</h2>
                            <p>Volunteering at IGF is a transformational learning experience that will enable you to make a difference where it’s needed the most. Impact Guru Foundation is always looking for talented people with various skills and backgrounds. If you want to create a real difference in the lives of underprivileged people, we welcome you among our team. Our objective is to offer rewarding volunteer programs to those who have time and commitment to support our community.  </p>
                            To apply as a volunteer, get in touch with us at <a href="igfconnect@impactgurufoundation.org">igfconnect@impactgurufoundation.org</a>. Alternatively, you can fill out the form and let us get back to you.
                        </div>
                        <form action="ajax/volunteer" method="post" id="volunteer-form">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <input name="first_name" type="text" class="form-control" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input name="last_name" type="text" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input name="mobile_number" type="text" class="form-control" placeholder="Mobile Number">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input name="email" type="text" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group"> 
                                    <textarea name="message" id="" cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group text-center"> 
                                    <button type="submit" id="form-submit" class="btn btn-contact">Volunteer With Us</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
<script>
    $('#volunteer-form').validate({
        rules: {
            first_name: 'required',
            
            mobile_number: {
                required: true,
                minlength: 10,
                maxlength: 10
            },
            email: {
                required: true,
                email: true
            },
            message:'required'
        },
        messages: {
            first_name: 'First name is required',
            mobile_number: {
                required: "Phone number is required",
                minlength: "Mobile number require minimum 10 digits",
                maxlength: "Mobile number require maximum 10 digits"
            },
            email: {
                required: 'Email is required',
                email: 'Enter valid email address'
            },
            message: 'Message is required',
           
        },
        submitHandler :function(form){
            // form.preventDefault()
            // alert('jdsk')
              form.submit()
            //      $.ajax({
            //       type: 'POST',
            //       url: 'ajax/volunteer',
            //       data: $('#volunteer-form').serialize(),
            //     complete: function(data) {
            //         if(data.responseJSON == '1'){
            //             $('#volunteer-form').html('<h5 style="color:#ffe649">Subscription Successful</h5>');
            //         }else{
            //             $('#volunteer-form').html('<h5 style="color:#ffe649">Something went wrong</h5>');
                        
            //         }
            //         // console.log(data.responseJSON)
            //     }
            //  })
           
            
        }
    })
</script>    
    
<!--    <section class="client-testimonals">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-12">-->
<!--                <div>-->
<!--                    <h2 class="sec-sub-title">ELEVATING HEALTHCARE THROUGH PARTNERSHIPS</h2>-->
<!--                </div>-->
<!--                <div class="client-container">-->
<!--                    <div id="owl-carousel" class="owl-carousel owl-theme">-->
<!--                        <div class="item">-->
<!--                            <img src="./assets/image/pics/partners/Apollo_Hospitals_Logo.jpg" alt="">-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <img src="./assets/image/pics/partners/atlassian-logo.png" alt="">-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <img src="./assets/image/pics/partners/dabur-india.png" alt="">-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <img src="./assets/image/pics/partners/give-india.jpg" alt="">-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <img src="./assets/image/pics/partners/grow-trees.png" alt="">-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <img src="./assets/image/pics/partners/Honda-logo.jpg" alt="">-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <img src="./assets/image/pics/partners/icici.png" alt="">-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <img src="./assets/image/pics/partners/ikan_logo_vertical.jpg" alt="">-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <img src="./assets/image/pics/partners/indus-towers.jpg" alt="">-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <img src="./assets/image/pics/partners/Medvarsity.jpg" alt="">-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <img src="./assets/image/pics/partners/microsoft.jpg" alt="">-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <img src="./assets/image/pics/partners/paramount-beds.png" alt="">-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <img src="./assets/image/pics/partners/ReNew_Power_New_Logo.jpg" alt="">-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <img src="./assets/image/pics/partners/vena-energy.png" alt="">-->
<!--                        </div>-->
<!--                        <div class="item">-->
<!--                            <img src="./assets/image/pics/partners/zeetv.jpg" alt="">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
