<style>
    .card-body{
        height: 270px;
    }
</style>
<section class="campaign-listing">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 my-4">
                <h2 class="sec-title mt-3">Stand-Up to Care</h2>
                <p class="text-center mb-0">Our Campaigns</p>
                </div>
            </div>
            <div class="row">
                <?php if(!empty($campaigns)){ ?>
                    <?php foreach($campaigns as $campaign){ ?>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card">
                        <div class="card-head">
                            <img src="<?php echo CAMPAIGN_BANNER_PATH.$campaign->banner; ?>" class="card-img-top" alt="...">
                            <!--<figure class="campaign-btn">-->
                            <!--    <button class="btn btn-primary">Education</button>-->
                            <!--</figure>-->
                        </div>
                     
                        <div class="card-body">
                            <h5 class="card-title"><a href="campaigns/<?php echo $campaign->page_slug; ?>"><?php echo $campaign->title; ?> </a></h5>
                            <p class="card-text"><?php echo strip_tags(substr($campaign->campaign_desc,strpos($campaign->campaign_desc,'<p>'),120)).'...'; ?></p> 
                        </div>
                        <div class="card-footer">
                            <!--<div class="progress">-->
                            <?php 
                        $table = ($this->config->item('payment_mode') == 'test') ? 'test_payments' : 'payments';
                        $amount_sum = $campaign->raised_amount + $this->db->select('SUM(amount) as amount')->where('campaign', $campaign->page_slug)->where('status','success')->get($table)->row(); 
                       
                            $percentage = round(($amount_sum / $campaign->goal_amount) * 100,2); 
                            $percentage_manual =  round(($campaign->raised_amount / $campaign->goal_amount) * 100);
                            ?>
                                <!--<div class="progress-bar tool_tip" data-toggle="tooltip" data-placement="right" title="<?php echo round($percentage); ?>%" role="progressbar" aria-valuenow="<?php echo round($percentage);?>" aria-valuemin="0" aria-valuemax="100"> -->
                                    <!--</div>-->
                                    
                                <!--</div>-->
                                <span class="float-right progress-bar-text">₹<?php echo $campaign->goal_amount; ?> <span class="progress-bar-goal">Goal</span></span>
                                <span class="progress-bar-weight">₹<?php echo !empty($amount_sum) ? $amount_sum : $campaign->raised_amount ;// echo $campaign->raised_amount; ?> <span class="progress-bar-raised">Raised</span></span>
                            </div>
                            <a href="campaigns/<?php echo $campaign->page_slug; ?>">
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
    </section>


  
