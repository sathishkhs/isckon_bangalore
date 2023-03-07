<section class="card-sec section-pt-50 section-pb-50">
    <div class="container container-sm">
        <div class="row">
          <div class="col-12">
            <h2 class="font-size-22 mb-4 pb-3 model-title" data-aos="fade-up" >Campaign Details</h2>
          </div>
            <div class="col-12">
            <?php
							$msg = $this->session->flashdata('msg');
									if (!empty($msg['txt'])):
							?>
									<div class="alert alert-block alert-<?php echo $msg['type']; ?>">
										<button type="button" class="wt-btn badge" data-dismiss="alert" style="padding: 0 15px;">
									<i class="fa fa-remove"></i>
									</button>
										<i class="<?php echo $msg['icon']; ?> badge"></i>
										<span class="lead"><?php echo $msg['txt']; ?> </span>
								</div>
								<?php endif ?>
                <div class="card">
                    <div class="card-body">
                        <form action="campaigns/campaign_save" method="POST" enctype="multipart/form-data">
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="inputEmail4">Title</label>
                                <input class="w-100" type="text" id="title" placeholder="Title" name="title" value="<?php echo set_value('title'); ?>"/>
                                <label id="title_error" class="error d-inline"><?php echo form_error('title'); ?></label>
                              </div>
                              <div class="form-group col-md-12">
                                <label for="short_desc">Short Description</label>
                                <input class="w-100" type="text" id="short_desc" placeholder="Short Description" name="short_desc" value="<?php echo set_value('short_desc'); ?>"/>
                                <label id="short_desc_error" class="error d-inline"><?php echo form_error('short_desc'); ?></label>
                              </div>
                              <div class="form-group col-md-12">
                                <label for="inputPassword4">Description</label>
                                <textarea name="campaign_desc" id="campaign_desc" Placeholder="Campaign Description" cols="30" rows="10"  class="form-control"></textarea>
                                <label id="campaign_desc_error" class="error d-inline"><?php echo form_error('campaign_desc'); ?></label>
                              </div>
                              <div class="form-group col-md-12">
                                <label for="inputPassword4">Summary</label>
                                <textarea name="summary" id="summary" Placeholder="Summary" cols="30" rows="10"  class="form-control"></textarea>
                                <label id="summary_error" class="error d-inline"><?php echo form_error('summary'); ?></label>
                              </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="campaign_category">Campaign Category</label>
                                                <select class="form-control" name="campaign_category">
                                                    <option>Select Category</option>
                                                    <?php foreach($campaign_category as $category){ ?>
                                                    <option name="<?php echo $category->campaign_category_id; ?>"><?php echo $category->category_name;?></option>
                                                    <?php } ?>
                                                </select>
                                                <label id="campaign_category_error" class="error d-inline"><?php echo form_error('campaign_category'); ?></label>
                                            </div>
                                            </div>
                                            <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="inputCity">Goal Amount</label>
                                                <input type="number" class="form-control" id="goal_amount" name="goal_amount" min="25000">
                                                <label id="goal_amount_error" class="error d-inline"><?php echo form_error('goal_amount'); ?></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="start_date">Start Date</label>
                                            <input type="date" class="form-control" id="start_date" name="start_date" min="<?php echo date('Y-m-d'); ?>">
                                            <label id="start_date_error" class="error d-inline"><?php echo form_error('start_date'); ?></label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="end_date">End Date</label>
                                            <input type="date" class="form-control" id="end_date" name="end_date">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="input-dnd">
                                        <label class="" for="banner">Banner Thumbnail</label>
                                        <div class="dnd-input-wrapper ml-0">
                                          <input  class="form-control-file text-primary font-weight-bold" type="file" id="banner"  name="banner">
                                          <small>Dimensions 640x640 px</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-dnd">
                                        <label class="" for="banner_image">Banner</label>
                                        <div class="dnd-input-wrapper ml-0">
                                            <input  class="form-control-file text-primary font-weight-bold" type="file" id="banner_image"  name="banner_image">
                                            <small>Dimensions 1260x540 px</small>
                                        </div>
                                      </div>
                                </div>

                            </div>

                            <div class="text-center mt-4">
                              
                                <button class="btn btn-pink px-4" type="submit">Create</button>
                            </div>
                          </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
  </section>