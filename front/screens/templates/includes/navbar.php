<?php $user = $this->session->userdata('user_id'); $account_active_status = $this->session->userdata('account_active_status');?>
<section class="secondary-header">
    <div class="container">
      <div class="row">
       <div class="col-12">
        <nav class="navbar navbar-expand-lg navbar-light rounded">
         <a class="navbar-brand d-block d-lg-none" href="./index.html">
          <img src="./asset/image/logo-white.png" class="white-logo" alt="">
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
           </button>
         <div class="collapse navbar-collapse" id="navbar">
          <ul class="navbar-nav ml-auto mx-auto">
          <?php if (!empty($header_menu)) { ?>
            <?php foreach ($header_menu as $header) { ?>
                <?php if ($header->submenu == null || empty($header->submenu)) { ?>
                    <li class="nav-item">
                    <a class="nav-link" target="<?php echo $header->menuitem_target; ?>" href="<?php echo ($header->menuitem_link == '#') ? 'javascript:void(0)' : $header->menuitem_link; ?>"><?php echo $header->menuitem_text; ?></a>
                    </li>
                <?php } ?>
                <?php if (!empty($header->submenu)) : ?>
           <li class="nav-item dropdown d-block ">
            <a class="nav-link dropdown-toggle" href="<?php echo ($header->menuitem_link == '#') ? 'javascript:void(0)' : $header->menuitem_link; ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo $header->menuitem_text; ?>
            </a>
            <div class="dropdown-menu account-profile" aria-labelledby="navbarDropdown" style="margin-top: 3px;">
            <?php foreach ($header->submenu as $submenu) : ?>
              <a class="dropdown-item" target="<?php echo $submenu->menuitem_target; ?>" href="<?php echo $submenu->menuitem_link; ?>"><?php echo $submenu->menuitem_text; ?></a>
              <?php endforeach; ?>
            </div>
            
          </li>
          <?php endif; ?>
          <?php } ?>
        <?php } ?>

          <?php if (isset($user) && $user > 0) { ?>
            <li class="nav-item dropdown d-block ">
              <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                MY ACCOUNT
              </a>
              <div class="dropdown-menu account-profile" aria-labelledby="navbarDropdown" style="margin-top: 3px;">
                 
                <a class="dropdown-item" href="<?php echo ($account_active_status < 2) ?'campaigns/create_campaign' : 'javascript:void(0)'; ?>" <?php echo ($account_active_status < 2) ? 'title="Your account is under review"' : '' ?>>CREATE CAMPAIGN</a>
                <a class="dropdown-item" href="<?php echo ($account_active_status < 2) ? 'campaigns/my_campaigns' : 'javascript:void(0)'; ?> " <?php echo ($account_active_status < 2) ? 'title="Your account is under review"' : '' ?>>MY CAMPAIGNS</a>
                <a class="dropdown-item" href="myaccount">PROFILE</a>
                <a class="dropdown-item" href="change-password">CHANGE PASSWORD</a>
                <a class="dropdown-item" href="logout">LOG OUT</a>
              </div>
            </li>
          <?php } ?>
          </ul>
         </div>
        </nav>
       </div>
      </div>
     </div>
  </section>



