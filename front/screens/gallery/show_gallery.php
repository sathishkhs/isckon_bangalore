<style>
    .card-body h5.card-title a {
  text-decoration: none;
  color: #1a7d69;
  font-size: 24px;
  line-height: 26px;
  margin-bottom: 12px;
  font-weight: 700;
}
</style>
<div class="container mt-5 mb-5">
        <div class="section-content">
          <div class="row">

          <?php if(empty($galleries)){ ?>
            <div class="col-md-12">
            <div class="title-wrapper mb-1 text-center">
              <!-- <h6 class="subtitle line-shape-bottom line-shape-center text-theme-colored1">Gallery</h6> -->
              <h2 class="title mb-0">No Galleries Found</h2>
            </div>
            </div>
          <?php }else{ ?>

<div class="col-md-12">
                <div>
                    <h2 class="sec-title">Gallery </h2>
                    <p class="text-center">Glimpses of Impact Guru Foundation</p>
                    
                </div>
            
            <div class="row">
                  <?php foreach($galleries as $gallery){ ?>
               <div class="col-lg-4 col-md-6 col-12 my-2">
                    <div class="card">
                        <div class="card-head">
                            <img src="<?php echo GALLERY_UPLOAD_PATH . $gallery->category_img_path  ; ?>" class="card-img-top" alt="...">
        
                        </div>
                     
                        <div class="card-body">
                            <h5 class="card-title"><a href="<?php echo 'gallery/gallery_images/'.$gallery->gallery_id .'/'. $gallery->category_id; ?>"><?php echo $gallery->gallery_name; ?></a></h5>
                        </div>
                       
                            <a href="<?php echo 'gallery/gallery_images/'.$gallery->gallery_id .'/'. $gallery->category_id; ?>">
                            <div class="btn btn-primary donate-now-btn  rounded-0">
                                View
                            </div>
                            </a>
                        </div>
                </div>
                 <?php } ?>
            </div>

</div>





            
        <?php } ?>
          </div>
        </div>
      </div>
      
  