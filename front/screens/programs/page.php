<style>
    h2 {
  color: #1a7d69;
  font-family: "Poppins", Sans-serif;
  font-size: 36px;
  font-weight: 700;
  line-height: 1.25em;
}
</style>
<section class="container my-5">
    <h2 class="text-center my-4">Our Programs</h2>
    <div class="row">
    <div class="row mt-lg-2">
                    <div class="col-lg-4 col-sm-12 mt-lg-4">
                        <div class="card-banner-sec card-banner-sec-h">
                            <img src="assets/image/icons/C.O.W - black.png">
                           <a href="programs/primary-healthcare"> <h3>Primary Healthcare </h3></a>
                            <!--<span class="counter__number ">30,000+ Lives Impacted </span>-->
                            <p class="mt-2">Strive to provide healthcare facilities through Care On Wheels (C.O.W) to the underserved communities  </p>
                            <a class="text-white btn ml-0 w-100 btn-denote" href="programs/primary-healthcare">Read More..</a>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-sm-12 mt-lg-4">
                        <div class="card-banner-sec card-banner-sec-h">
                            <img src="assets/image/icons/menstrual hygiene - black.png">
                            <a href="programs/women-empowerment"> <h3>Menstrual Hygiene</h3></a>
                            <!--<span class="counter__number">2500+ Beneficiaries </span>-->
                            <p class="mt-2">Endeavour to bridge the gap between young Girl Child and menstrual hygiene management (MHM) facilities.  </p>
                            <a class="text-white btn ml-0 w-100 btn-denote" href="programs/women-empowerment">Read More..</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 mt-lg-4">
                        <div class="card-banner-sec card-banner-sec-h">
                            <img src="assets/image/icons/curative care - black.png">
                            <a href="programs/curative-care"><h3>Curative Care</h3></a>
                            <!--<span class="counter__number"> 150+ Lives Impacted</span>-->
                            <p class="mt-2">Aids medically-critical individuals via surgeries, treatments and therapies to save lives and repute of families </p>
                            <a class="text-white btn ml-0 w-100 btn-denote" href="programs/curative-care">Read More..</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-12 mt-lg-4">
                        <div class="card-banner-sec card-banner-sec-h">
                            <img src="assets/image/icons/T.A.N - black.png">
                            <a href="programs/livelihood"><h3>Livelihood</h3></a>
                            <!--<span class="counter__number">24,000+ Enrolled Nurses </span>-->
                            <p class="mt-2">Enabling the youth through upskilling, to increase productivity, employabilty and earn their livelihood.</p> 
                            <a class="text-white btn ml-0 w-100 btn-denote" href="programs/livelihood">Read More..</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 mt-lg-4">
                        <div class="card-banner-sec card-banner-sec-h">
                            <img src="assets/image/icons/life on land - black.png">
                            <a href="programs/environment"><h3>Environment</h3></a>
                            <!--<span class="counter__number">31,28,000+ Trees Planted</span>-->
                            <p class="mt-2">Securing the environment’s health today by building eco-green farms, to have a healthier life care tomorrow </p>
                            <a class="text-white btn ml-0 w-100 btn-denote" href="programs/environment">Read More..</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 mt-lg-4">
                        <div class="card-banner-sec card-banner-sec-h">
                            <img src="assets/image/pics/hygiene - black.png">
                            <a href="programs/humanitarian-relief"><h3>Humanitarian Relief  </h3></a>
                            <!--<span class="counter__number"> 90,000+ Lives Impacted </span>-->
                            <p class="mt-2">Assistance to support affected communities during natural disasters, calamities and emergencies </p>
                            <a class="text-white btn ml-0 w-100 btn-denote" href="programs/humanitarian-relief">Read More..</a>
                        </div>
                    </div>
                    <!--<div class="col-lg-4 col-sm-12 mt-lg-4">-->
                    <!--    <div class="card-banner-sec card-banner-sec-h">-->
                    <!--        <img src="assets/image/icons/standup to care - black.png">-->
                    <!--        <a href="programs/stand-up-to-care"><h3>Stand-up To Care</h3></a>-->
                            <!--<span class="counter__number"> 8,400 Lives Impacted </span>-->
                    <!--        <p class="mt-2">A Program That Aids Urgent Medical Situations of Individuals Through Financial Contributions of Their Social Communities and Beyond.</p>-->
                    <!--        <a class="text-white btn ml-0 w-100 btn-denote" href="programs/stand-up-to-care">Read More..</a>-->
                    <!--    </div>-->
                    <!--</div>-->

                    
                </div>
</div>
</section>


<!-- <section class="campaign-listing">
        <div class="container">
            <div class="row">
                <?php if(!empty($programs)){ ?>
                    <?php foreach($programs as $campaign){ ?>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card">
                        <div class="card-head">
                            <img src="<?php echo CHARITABLE_PROGRAM_BANNER_PATH.$campaign->banner; ?>" class="card-img-top" alt="...">
                            <figure class="campaign-btn">
                                <button class="btn btn-primary">Education</button>
                            </figure>
                        </div>
                     
                        <div class="card-body">
                            <h5 class="card-title"><a href="<?php echo $campaign->page_slug; ?>"><?php echo $campaign->title; ?> </a></h5>
                            <p class="card-text"><?php echo strip_tags(substr($campaign->campaign_desc,strpos($campaign->campaign_desc,'<p>'),120)).'...'; ?></p> 
                        </div> -->




                        <!-- <div class="card-footer"> -->
                            <!-- <div class="progress">
                            <?php $amount_sum = $this->db->select('SUM(amount) as amount')->where('campaign','Donate')->where('status','success')->get('payments')->row();  
                            $percentage = ($amount_sum->amount / $campaign->goal_amount) * 100; ?>
                                <div class="progress-bar tool_tip" data-toggle="tooltip" data-placement="right" title="<?php echo round($percentage); ?>%" role="progressbar" aria-valuenow="<?php echo round($percentage);?>" aria-valuemin="0" aria-valuemax="100"> 
                                    </div>
                                    
                                </div> -->
                                <!-- <span class="float-right progress-bar-text">₹<?php echo $campaign->goal_amount; ?> <span class="progress-bar-goal">Goal</span></span>
                                <span class="progress-bar-weight">₹<?php echo !empty($amount_sum->amount) ? $amount_sum->amount : 0; ?> <span class="progress-bar-raised">Raised</span></span> -->
                            <!-- </div> -->


                            <!-- <a href="<?php echo $campaign->page_slug; ?>">
                            <div class="btn btn-primary donate-now-btn  rounded-0">
                                Donate
                            </div>
                            </a>
                        </div>
                </div>
                <?php } ?>
                    <?php } else{ ?>
                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <h2 class="sec-title">No Campaigns are running</h2>
                                </div>
                            </div>
                        </div>
                    
                    <?php } ?>
               

            </div>
        </div>
    </section> -->


  
