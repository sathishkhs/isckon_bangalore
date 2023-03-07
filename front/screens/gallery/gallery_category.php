<div class="container mt-30">
        <div class="section-content">
          <div class="row">

          <?php if(empty($categories)){ ?>
            <div class="col-md-12">
            <div class="title-wrapper mb-1 text-center">
              <!-- <h6 class="subtitle line-shape-bottom line-shape-center text-theme-colored1">Gallery</h6> -->
              <h2 class="title mb-0">No Galleries Found</h2>
            </div>
            </div>
          <?php }else{ ?>

            <div class="col-md-12">
            <div class="title-wrapper mb-1 text-center">
              <h6 class="subtitle line-shape-bottom line-shape-center text-theme-colored1">Gallery</h6>
              
            </div>

            <div class="row">
                 <?php foreach($categories as $gallery){  ?>
               <div class="col-lg-4 col-md-6 col-12">
                    <div class="card">
                        <div class="card-head">
                            <img src="<?php echo GALLERY_IMG_UPLOAD_PATH . $gallery->category_img_path; ?>" class="card-img-top" alt="...">
        
                        </div>
                     
                        <div class="card-body">
                            <h5 class="card-title"><a href="<?php echo 'gallery/show_gallery/'.$gallery->gallery_id.'/'.$gallery->category_id; ?>"><?php echo $gallery->category_name; ?> </a></h5>
                        </div>
                       
                            <a href="gallery/show_gallery/'.$gallery->gallery_id.'/'.$gallery->category_id; ?>">
                            <div class="btn btn-primary donate-now-btn  rounded-0">
                                Donate
                            </div>
                            </a>
                        </div>
                </div>
                 <?php } ?>
            </div>

              <!-- Isotope Gallery Grid -->
              <div id="gallery-holder-618422" class="isotope-layout grid-3 gutter-15 clearfix lightgallery-lightbox">
                <div class="isotope-layout-inner" style="position: relative; height: 1074.03px;">
                  <!-- Isotope Item Start -->
                  <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                      <?php foreach($categories as $gallery){  ?>
                        <div class="isotope-item cat1 cat3" style="position: absolute; left: 0px; top: 0px;">
                          <div class="isotope-item-inner">
                            <div class="product">
                              <div class="product-header">
                                <!-- <span class="onsale">Sale!</span> -->
                                <div class="thumb image-swap">
                                  <a href="<?php echo 'gallery/show_gallery/'.$gallery->gallery_id.'/'.$gallery->category_id; ?>"><img src="<?php echo GALLERY_UPLOAD_PATH . $gallery->category_img_path; ?>" class="product-main-image img-responsive img-fullwidth" width="300" height="300" alt="<?php echo $gallery->gallery_name; ?>"></a>
                                  <a href="<?php echo $gallery->page_slug; ?>"><img src="<?php echo GALLERY_UPLOAD_PATH . $gallery->category_img_path; ?>" class="product-hover-image img-responsive img-fullwidth" width="300" height="300" alt="<?php echo $gallery->category_name; ?>"></a>
                                  <!-- <a href="<?php echo $gallery->page_slug; ?>"><img src="<?php echo GALLERY_IMG_UPLOAD_PATH . $gallery->category_img_path; ?>" class="product-main-image img-responsive img-fullwidth" width="300" height="300" alt="<?php echo $gallery->gallery_name; ?>"></a>
                                  <a href="<?php echo $gallery->page_slug; ?>"><img src="<?php echo GALLERY_IMG_UPLOAD_PATH . $gallery->category_img_path; ?>" class="product-hover-image img-responsive img-fullwidth" alt="<?php echo $gallery->gallery_name; ?>"></a> -->
                                </div>
                               
                              </div>
                              <div class="product-details">
                                
                                <h5 class="product-title"><a href="<?php echo 'custom_page/show_gallery/'.$gallery->gallery_id; ?>"><?php echo $gallery->category_name; ?></a></h5>
                               
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php } ?>

                    </div>
                  </div>
               

                </div>
              </div>
              <!-- End Isotope Gallery Grid -->
            </div>

        <?php } ?>
          </div>
        </div>
      </div>
      
  