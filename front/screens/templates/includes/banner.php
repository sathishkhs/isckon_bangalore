<?php if ($page_items->display_image == 1 && !empty($page_items->display_image) && file_exists((BANNER_IMAGE_PATH . $page_items->banner_image))) { ?>
<section class="about-us-banner" style="background-image: url(&quot;<?php echo BANNER_IMAGE_PATH . $page_items->banner_image; ?>&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2><?php  echo $page_heading; ?></h2>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
