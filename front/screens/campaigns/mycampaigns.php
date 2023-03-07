<section class="section-pt-50 section-pb-50 tab-control-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-3">
                    <h4 class="text-pink" data-aos="fade-up">MY CAMPAIGNS</h4>
                </div>

                <div class="input-group mb-0 col-lg-8 col-8" data-aos="fade-up" >
                    <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append" data-aos="fade-up">
                      <span class="input-group-text" id="basic-addon2">
                        <img src="./assets/image/search.png" alt="" class="img-fluid" width="15">
                      </span>
                    </div>
                </div>

                <div class="col-lg-1 col-4 d-flex flex-wrap justify-content-center align-items-center">
                    <div class="d-flex">
                        <span class="img-hover-icon" data-aos="fade-up">
                            <img src="./assets/image/filter.png" class="img-fluid mr-3 hover-img-icon" width="15" alt="">
                            <img src="./assets/image/filterwhite.png" class="img-fluid mr-3 hover-img-icon white-img" width="15" alt="">
                        </span>
                        <span class="img-hover-icon" data-aos="fade-up">
                            <img src="./assets/image/sort.png" class="img-fluid ml-3 hover-img-icon" width="15" alt="">
                            <img src="./assets/image/sortwhite.png" class="img-fluid ml-3 hover-img-icon white-img" width="15" alt="">
                        </span>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-12">
                      <div class="row card-campaign">
                        <?php foreach($my_campaigns as $campaign){ ?>
                         <div class="col-lg-3 col-md-6 col-12">
                            <div class="card" data-aos="fade-up">
                                <img src="./assets/image/tilak.png" class="img-fluid tilak" alt="">
                                <figure class="animation-image">
                                  <img class="card-img-top" src="./assets/image/temp-1.png" alt="<?php echo $campaign->title; ?>">
                                </figure>
                                <div class="progress blue">
                                    <div class="progress-bar" style="width:90%; background:#ecd29a;">
                                        <div class="progress-value">90%</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                  <h4 class="card-title"><?php echo $campaign->title; ?></h4>
                                  <p class="card-text"><?php echo $campaign->short_desc; ?> </p>
                                 <h6 class="card-subtitle mb-2 text-right"> <a href="campaigns/campaign_detail/<?php echo $campaign->campaign_id; ?>">Read More</a></h6>
                                  <div class="d-flex outline-pink-1">
                                    <a href="campaigns/campaign_detail/<?php echo $campaign->campaign_id; ?>" class="card-link bg-white text-pink">Donate</a>
                                    <a class="card-link sbutton">
                                      <img src="./assets/image/share.png"  class="share-icon"/>Share
                                     </a>
                                     <div class="campagin-detail share-social-icon">
                                      <ul class="footer-social smenu mb-0">
                                          <li class="green-li"><a href="https://wa.me/9876543210" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                                          <li class="blue-li"><a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                          <li class="light-blue-li"><a href="https://twitter.com/i/flow/login" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                          <li class="light-blue-li"><a href="https://in.linkedin.com/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                          <li class="red-li"><a href="https://myaccount.google.com/?utm_source=sign_in_no_continue&pli=1" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                        <?php } ?>
                    
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <nav aria-label="Page navigation example">
                        <?php echo $links; ?>
                      </nav>
                </div>
                <p></p>
                <div class="col-lg-6 d-flex align-items-center justify-content-end">
                    <div class="text-right">
                        <span style="font-size: 14px">Showing <?php  echo !empty($this->uri->segment(3)) ? ($this->uri->segment(3)/$per_page+1) * $per_page : 1 * $per_page ; ?> of <?php echo $total_rows/$per_page; ?> pages</span>
                    </div>
                </div>

            </div>
        </div>
  </section>