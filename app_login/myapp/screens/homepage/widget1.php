<div class="container">
		<div class="row">
			<div class="col-md-10 col-sm-12 mx-auto">
				<?php $msg = $this->session->flashdata('msg');
				if (!empty($msg['txt'])) : ?>
					<div class="alert alert-block alert-<?php echo $msg['type']; ?>">
						<button type="button" class="btn defalut" data-dismiss="alert">
							<i class="fa fa-times"></i>
						</button>
						<i class="<?php echo $msg['icon']; ?>"></i>
						<?php echo $msg['txt']; ?>
					</div>
				<?php endif ?>
			</div>
		</div>
	</div>
	<div class="card shadow mb-4">

    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><?php echo $page_heading; ?> <?php if (!empty($sub_heading)) { ?><small><?php echo $sub_heading; ?></small><?php } ?></h6>
    </div>
    <div class="card-body">
        <!-- Horizontal Form -->
        <form class="form-horizontals" method="post" id="widget1_form" name="banners_form" action="homepage/save_widget1" enctype="multipart/form-data">
            <input type="hidden" name="widget1_id" value="1" />
            <div class="card-body">


            <h4 class="text-primary"><u>Card 1</u></h4>
                <div class="row">
                  
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <label for="small_heading_1">Small Heading</label>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="small_heading_1" id="small_heading_1" class="form-control" placeholder="Small Heading" value="<?php echo (!empty($query->small_heading_1)) ? $query->small_heading_1 : '' ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                  
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <label for="big_heading_1">Big Heading</label>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="big_heading_1" id="big_heading_1" class="form-control" placeholder="Big Heading" value="<?php echo (!empty($query->big_heading_1)) ? $query->big_heading_1 : '' ?>">
                        </div>
                    </div>
                </div>


                  
                <div class="row">
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <label for="redirect_url_1">Redirect URL</label>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="redirect_url_1" id="redirect_url_1" class="form-control" placeholder="Redirect Url" value="<?php echo (!empty($query->redirect_url_1)) ? $query->redirect_url_1 : '' ?>">
                            <p> Please Use # keyword to disable redirection</p>
                        </div>
                    </div>
                </div>
                

                <div class="row">
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <label for="card_image_1">Image</label>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <?php echo form_error('card_image_1'); ?>
                            <input type="file" name="card_image_1" id="card_image_1" placeholder="Image" value="<?php echo (!empty($query->card_image_1)) ? $query->card_image_1 : '' ?>" <?php echo (!empty($query->widget1_id)) ? '' : 'data-validation="required"'; ?>>
                            <?php if (!empty($query->card_image_1) && file_exists('./' . WIDGET_PHOTO_UPLOAD_PATH . $query->card_image_1)) { ?><br />
                                <a href="<?php echo WIDGET_PHOTO_UPLOAD_PATH . $query->card_image_1; ?>" class="cboxElement" data-rel="colorbox">
                                    <img src="<?php echo WIDGET_PHOTO_UPLOAD_PATH . $query->card_image_1; ?>" width="50"></a>
                                <input type="hidden" name="card_image_1" value="<?php echo (!empty($query->card_image_1)) ? $query->card_image_1 : ''; ?>" />
                            <?php } ?>
                            
                            <p class="image-dimention">Image Size Should be 200px width and 200px height.</p>
                        </div>
                    </div>
                </div>

               
            </div>
            <div class="card-body">


            <h4 class="text-primary"><u>Card 2</u></h4>
                <div class="row">
                  
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <label for="small_heading_2">Small Heading</label>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="small_heading_2" id="small_heading_2" class="form-control" placeholder="Small Heading" value="<?php echo (!empty($query->small_heading_2)) ? $query->small_heading_2 : '' ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                  
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <label for="big_heading_2">Big Heading</label>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="big_heading_2" id="big_heading_2" class="form-control" placeholder="Big Heading" value="<?php echo (!empty($query->big_heading_2)) ? $query->big_heading_2 : '' ?>">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <label for="redirect_url_2">Redirect URL</label>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="redirect_url_2" id="redirect_url_2" class="form-control" placeholder="Redirect Url" value="<?php echo (!empty($query->redirect_url_2)) ? $query->redirect_url_2 : '' ?>">
                            <p> Please Use # keyword to disable redirection</p>
                        </div>
                    </div>
                </div>
                
                

                <div class="row">
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <label for="card_image_2">Image</label>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <?php echo form_error('card_image_2'); ?>
                            <input type="file" name="card_image_2" id="card_image_1" placeholder="Image" value="<?php echo (!empty($query->card_image_2)) ? $query->card_image_2 : '' ?>" <?php echo (!empty($query->widget1_id)) ? '' : 'data-validation="required"'; ?>>
                            <?php if (!empty($query->card_image_2) && file_exists('./' . WIDGET_PHOTO_UPLOAD_PATH . $query->card_image_2)) { ?><br />
                                <a href="<?php echo WIDGET_PHOTO_UPLOAD_PATH . $query->card_image_2; ?>" class="cboxElement" data-rel="colorbox">
                                    <img src="<?php echo WIDGET_PHOTO_UPLOAD_PATH . $query->card_image_2; ?>" width="50"></a>
                                <input type="hidden" name="card_image_2" value="<?php echo (!empty($query->card_image_2)) ? $query->card_image_2 : ''; ?>" />
                            <?php } ?>
                            
                            <p class="image-dimention">Image Size Should be 200px width and 200px height.</p>
                        </div>
                    </div>
                </div>

               
            </div>
            <div class="card-body">


            <h4 class="text-primary"><u>Card 3</u></h4>
                <div class="row">
                  
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <label for="small_heading_3">Small Heading</label>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="small_heading_3" id="small_heading_3" class="form-control" placeholder="Small Heading" value="<?php echo (!empty($query->small_heading_3)) ? $query->small_heading_3 : '' ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                  
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <label for="big_heading_3">Big Heading</label>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="big_heading_3" id="big_heading_3" class="form-control" placeholder="Big Heading" value="<?php echo (!empty($query->big_heading_3)) ? $query->big_heading_3 : '' ?>">
                        </div>
                    </div>
                </div>

                
                  
                <div class="row">
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <label for="redirect_url_3">Redirect URL</label>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="redirect_url_3" id="redirect_url_3" class="form-control" placeholder="Redirect Url" value="<?php echo (!empty($query->redirect_url_3)) ? $query->redirect_url_3 : '' ?>">
                            <p> Please Use # keyword in the input field to disable redirection</p>
                        </div>
                    </div>
                </div>
                

                <div class="row">
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <label for="card_image_3">Image</label>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <?php echo form_error('card_image_3'); ?>
                            <input type="file" name="card_image_3" id="card_image_3" placeholder="Image" value="<?php echo (!empty($query->card_image_3)) ? $query->card_image_3 : '' ?>" <?php echo (!empty($query->widget1_id)) ? '' : 'data-validation="required"'; ?>>
                            <?php if (!empty($query->card_image_1) && file_exists('./' . WIDGET_PHOTO_UPLOAD_PATH . $query->card_image_3)) { ?><br />
                                <a href="<?php echo WIDGET_PHOTO_UPLOAD_PATH . $query->card_image_3; ?>" class="cboxElement" data-rel="colorbox">
                                    <img src="<?php echo WIDGET_PHOTO_UPLOAD_PATH . $query->card_image_3; ?>" width="50"></a>
                                <input type="hidden" name="card_image_3" value="<?php echo (!empty($query->card_image_3)) ? $query->card_image_3 : ''; ?>" />
                            <?php } ?>
                            
                            <p class="image-dimention">Image Size Should be 200px width and 200px height.</p>
                        </div>
                    </div>
                </div>

               
            </div>
            <div class="card-footer">
                <button class="btn btn-round btn-success" type="submit">
					<i class="fa fa-check"></i>
					Save
				</button>
                &nbsp; &nbsp; &nbsp;
                <button class="btn btn-round btn-danger" type="reset">
					<i class="fa fa-sync"></i>
					Reset
				</button>
                &nbsp; &nbsp; &nbsp;
                <a href="master/banners">
                    <button class="btn btn-warning btn-round" type="button">
                        <i class="fa fa-times"></i>Back</button></a>
            </div>

        </form>
    </div>

</div>