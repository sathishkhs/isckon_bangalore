<section class="campaign-listing">
        <div class="container">
            <div class="row">
                <?php if(!empty($chapters)){ ?>
                    <?php foreach($chapters as $chapter){ ?>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card">
                        <div class="card-head">
                            <img src="<?php echo CHAPTER_BANNER_PATH.$chapter->banner; ?>" class="card-img-top" alt="...">
                            <!--<figure class="campaign-btn">-->
                            <!--    <button class="btn btn-primary">Education</button>-->
                            <!--</figure>-->
                        </div>
                     
                        <div class="card-body">
                            <h5 class="card-title"><a href="chapters/<?php echo $chapter->page_slug; ?>"><?php echo $chapter->title; ?> </a></h5>
                            <p class="card-text"><?php echo strip_tags(substr($chapter->short_chapter_desc,0,120)).'...'; ?></p> 
                        </div>
                        <div class="card-footer">
                            <!--<div class="progress">-->
                            <?php 
                        $table = ($this->config->item('payment_mode') == 'test') ? 'test_payments' : 'payments';
                        $amount_sum = $this->db->select('SUM(amount) as amount')->where('chapter', $chapter->page_slug)->where('status','success')->get($table)->row(); 
                       
                            $percentage = ($amount_sum->amount / $chapter->goal_amount) * 100; 
                            $percentage_manual =  round(($chapter->raised_amount / $chapter->goal_amount) * 100);
                            ?>
                                <!--<div class="progress-bar tool_tip" data-toggle="tooltip" data-placement="right" title="<?php echo round($percentage); ?>%" role="progressbar" aria-valuenow="<?php echo round($percentage);?>" aria-valuemin="0" aria-valuemax="100"> -->
                                    <!--</div>-->
                                    
                                <!--</div>-->
                                <span class="float-right progress-bar-text">₹<?php echo $chapter->goal_amount; ?> <span class="progress-bar-goal">Goal</span></span>
                                <span class="progress-bar-weight">₹<?php echo !empty($amount_sum->amount) ? $amount_sum->amount : 0; ?> <span class="progress-bar-raised">Raised</span></span>
                            </div>
                            <a href="chapters/<?php echo $chapter->page_slug; ?>">
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
                                    <h2 class="sec-title">No chapters are running</h2>
                                </div>
                            </div>
                        </div>
                    
                    <?php } ?>
               

            </div>
        </div>
    </section>


  
