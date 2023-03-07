<link href="assets/css/loadmore-style.css" rel="stylesheet">
<style>
    .product .product-details{
        height: 150px;
    }


    .btn-load-more {
	  font-size: 14px;
	  color: #f7b135;
    border-width: 3px;
border-color: #f7b135;
border-style: solid;
position: relative;
z-index: 0;
border-radius: 3rem;
background-color: transparent;
	}
  .btn-load-more:before{
    position: absolute;
content: '';
background: #f1d167;
width: 0;
height: 100%;
left: 0;
top: 0;
opacity: 0;
z-index: -1;
transition: all .5s ease;
  }

  .btn-load-more:hover{
    border-color: var(--theme-color3) !important;
color: #fff !important;
background-color: #f7b135;
text-decoration: none;
  }
    </style>
    <script src="assets/js/loadMoreResults.js"></script>
<section>
      <div class="container">
        <div class="section-content">
          <div class="row loadMore" >
              <?php foreach($blog as $post) { ?>

             
                

            <div  class="col-sm-12 col-md-6 col-lg-4 mt-3 item" >
            <div class="product" >
                        <div class="product-header" >
                          <span class="onsale"><?php echo $this->db->where('category_id',$post->category_id)->get('blogcategory')->row()->category_name; ?></span>
                          <div class="thumb image-swap">
                            <a href="blog/post/<?php echo $post->page_slug; ?>"><img src="<?php echo BLOG_PHOTO_UPLOAD_PATH.$post->post_image; ?>" class="product-main-image img-responsive img-fullwidth" width="300" height="300" alt="Hare Krishna Mandir"></a>
                            <a href="blog/post/<?php echo $post->page_slug; ?>"><img src="<?php echo BLOG_PHOTO_UPLOAD_PATH.$post->post_image; ?>" class="product-hover-image img-responsive img-fullwidth" alt="Hare Krishna Mandir" width="300" height="300"></a>
                          </div>
                       
                        </div>
                        <div class="product-details" >
                        <?php  $user = $this->db->select('*')->where('id',$post->author)->get('author')->row(); ?>
                          <span class="product-categories d-flex justify-content-between">
                              <a  rel="tag">By <?php echo $user->name; ?> </a>
                              <a class="ml-auto"><?php echo $post->created_at; ?></a>
                            </span> 
                          <h5 class="product-title"><a href="blog/post/<?php echo $post->page_slug; ?>"><?php echo $post->title; ?></a></h5>
                         
                        </div>
                      </div>
             
            </div>
            <?php } ?>

            <div class="col-sm-12 d-block">
              <div class=" d-flex justify-content-center">
            
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>




    <script>

$('.loadMore').loadMoreResults({
  displayedItems: 6
});
      </script>