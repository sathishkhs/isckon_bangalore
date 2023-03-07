
<?php $user = $this->session->userdata('user_id'); $account_active_status = $this->session->userdata('account_active_status');?>

<section class="section-px-15 d-none d-lg-block primary-header">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="navbar navbar-expand-lg navbar-light p-0">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="navbar-nav mr-auto d-block">
                  <i>For assistance, please call <?php echo $settings->TOLL_FREE_TIME; ?></i>
              </div>
              <ul class="mb-0 d-flex">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    CURRENCY
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Dollar</a>
                    <a class="dropdown-item" href="#">Rupee</a>
                  </div>
                </li>
                <?php if(empty($user)) { ?>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    YOUR ACCOUNT
                  </a>
                  <div class="dropdown-menu account-profile" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#registerModal">Register</a>
                    <a href="#" class="dropdown-item" data-toggle="modal" data-target="#basicModal">Login</a>
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


  <section class="d-none d-lg-block py-2">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4">
          <img src="assets/image/temple-logo.png" class="img-fluid" width="100" alt="">
        </div>
        <div class="col-lg-4 text-center">
          <img src="assets/image/logo.png" class="img-fluid" width="100" alt="">
        </div>
        <div class="col-lg-4 text-center">
          <img src="assets/image/vk_logo.png" class="img-fluid" width="100" alt="">
        </div>
      </div>
    </div>
  </section>