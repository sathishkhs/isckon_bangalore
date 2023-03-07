<?php if ($page_items->display_image == 1 && !empty($page_items->display_image) && file_exists((BANNER_IMAGE_PATH . $page_items->banner_image))) { ?>
<section class="container-fluid p-0">
    <div class="row mx-0">
        <div class="col-sm-12 p-0">
            <img src="<?php echo BANNER_IMAGE_PATH . $page_items->banner_image; ?>" alt="<?php  echo $page_heading; ?>" class="w-100">
        </div>
    </div >
</section>
<!--<section class="about-us-banner" style="background-image: url(&quot;<?php echo BANNER_IMAGE_PATH . $page_items->banner_image; ?>&quot;);">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-12">-->
<!--                    <h1><?php  echo $page_heading; ?></h1>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<?php } ?>
