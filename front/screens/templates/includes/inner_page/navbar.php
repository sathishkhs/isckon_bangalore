<style>
  .header-bg-donate .btn-denote{
     background: #1a9432;
 }
 .header-bg-donate .btn-denote:hover {
  background: #ffe649 !important;
  border-color: #ffe649 !important;
  color: #000;
}
</style>

<div class="navigation-wrap start-header start-style">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light">

                    <a class="navbar-brand" href="">
                        <img src="<?php echo SETTINGS_UPLOAD_PATH . $settings->LOGO_IMAGE ?>" alt="" class="img-fluid">
                    </a>
                    <a href="donate-now"><button href="donate-now" class="btn btn-contact mobile-view-donate" type="button">
                   <i class="fa fa-heart text-danger"></i> DONATE NOW
                    </button></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto py-4 py-md-0">
                            <?php if (!empty($header_menu)) { ?>
                                <?php foreach ($header_menu as $header) { ?>
                                    <?php if ($header->submenu == null || empty($header->submenu)) { ?>
                                        <li class="nav-item pl-4 pl-md-0 ml-0 py-2 ml-md-0 <?php echo ($page_items->page_slug == $header->menuitem_link) || ($page_items->page_slug == 'home' && $header->menuitem_link == '') ? 'active' : '' ?>">
                                            <a class="nav-link" target="<?php echo $header->menuitem_target; ?>" href="<?php echo ($header->menuitem_link == '#') ? 'javascript:void(0)' : $header->menuitem_link; ?>"><?php echo $header->menuitem_text; ?></a>
                                        </li>
                                    <?php } ?>
                                    <?php if (!empty($header->submenu)) : ?>
                                        <li class="nav-item pl-4 pl-md-0 ml-0 py-2 ml-md-0 ">
                                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="<?php echo ($header->menuitem_link == '#') ? 'javascript:void(0)' : $header->menuitem_link; ?>"><?php echo $header->menuitem_text; ?></a>
                                            <div class="dropdown-menu">
                                                <?php foreach ($header->submenu as $submenu) : ?>
                                                    <a class="dropdown-item" target="<?php echo $submenu->menuitem_target; ?>" href="<?php echo $submenu->menuitem_link; ?>"><?php echo $submenu->menuitem_text; ?></a>

                                                <?php endforeach; ?>
                                            </div>
                                        </li>
                                    <?php endif; ?>

                                <?php } ?>
                            <?php } ?>
                             <li class="nav-item pl-4 pl-md-0 ml-1 py-2  ml-md-0">
                                  <form id="search-data" class="search-content" onsubmit="event.preventDefault(); return false;">
                                      <div class="input-group">
                                    <input id="search-value" type="text" class="form-control search-input border" placeholder="Search here..." value="" autocomplete="off">
                                <div class="search">
                                    <!--<a class="search-button" href="javascript:void(0)"><i class="fa fa-search"></i></a>-->
                                    <div class="search-result">
                                        <div class="search-links">
                                            
                                        </div>
                                    </div>
                                  </form>
                                </div>
                                </div>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-0 py-2 active">
                            <a href="donate-now" class="header-bg-donate"><button class="btn btn-denote">
                               <i class="fa fa-heart text-danger"></i> Donate
                            </button></a>
                        </li>
                        </ul>
                    </div>


                </nav>
            </div>
        </div>
    </div>
</div>



<script>
    $(document).ready(function() {
        $('#search-data').on('submit', function(e){
            e.preventDefault();
        })
        $('#search-value').on('keyup',function(){
         
            if($(this).val().length > 3 ){
                // alert('dasj')
                 $.ajax({
                    url: "index/search",
                    type: 'POST',
                    data : {search : $('#search-value').val()},
                    success: function(res) {
                        console.log(res);
                        $('.search-links').html(res);
                    }
                });
            }
        })
       
    })
</script>
