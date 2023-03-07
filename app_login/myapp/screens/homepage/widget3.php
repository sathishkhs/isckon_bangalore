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
        <form class="form-horizontals" method="post" id="widget2_form" name="banners_form" action="homepage/save_widget_cta" enctype="multipart/form-data">
            <input type="hidden" name="widget_id" value="2" />
            <div class="card-body">


          
                <div class="row">
                  
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <label for="thin_heading">Thin Heading</label>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="thin_heading" id="thin_heading" class="form-control" placeholder="Thin Heading" value="<?php echo (!empty($query->thin_heading)) ? $query->thin_heading : '' ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                  
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <label for="bold_heading">Bold Heading</label>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="bold_heading" id="bold_heading" class="form-control" placeholder="Bold Heading" value="<?php echo (!empty($query->bold_heading)) ? $query->bold_heading : '' ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                  
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <label for="description">Description</label>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="description" id="description" class="form-control" placeholder="Description" value="<?php echo (!empty($query->description)) ? $query->description : '' ?>">
                        </div>
                    </div>
                </div>


                  
                <div class="row">
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <label for="button_text">Button Text</label>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="button_text" id="button_text" class="form-control" placeholder="Button Text" value="<?php echo (!empty($query->button_text)) ? $query->button_text : '' ?>">
                          
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <label for="redirect_url">Redirect URL</label>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="redirect_url" id="redirect_url" class="form-control" placeholder="Redirect Url" value="<?php echo (!empty($query->redirect_url)) ? $query->redirect_url : '' ?>">
                            <p> Please Use # keyword to disable redirection</p>
                        </div>
                    </div>
                </div>
                

                <div class="row">
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <label for="cta_bg_img">Background Image</label>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                            <?php echo form_error('cta_bg_img'); ?>
                            <input type="file" name="cta_bg_img" id="cta_bg_img" placeholder="Image" value="<?php echo (!empty($query->cta_bg_img)) ? $query->cta_bg_img : '' ?>" <?php echo (!empty($query->widget1_id)) ? '' : 'data-validation="required"'; ?>>
                            <?php if (!empty($query->cta_bg_img) && file_exists('./' . WIDGET_PHOTO_UPLOAD_PATH . $query->cta_bg_img)) { ?><br />
                                <a href="<?php echo WIDGET_PHOTO_UPLOAD_PATH . $query->cta_bg_img; ?>" class="cboxElement" data-rel="colorbox">
                                    <img src="<?php echo WIDGET_PHOTO_UPLOAD_PATH . $query->cta_bg_img; ?>" width="250"></a>
                                <input type="hidden" name="cta_bg_img" value="<?php echo (!empty($query->cta_bg_img)) ? $query->cta_bg_img : ''; ?>" />
                            <?php } ?>
                            
                            <p class="image-dimention">Image Size Should be 1216px width and 424px height.</p>
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