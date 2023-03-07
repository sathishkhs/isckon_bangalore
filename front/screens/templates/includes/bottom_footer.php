

			<div class="footer-bottom">
      <div class="container">
          <div class="row">
              <div class="col-12 column">
                  <div class="copyright text-center"><a href="#"><?php echo  $settings->COPY_RIGHT; ?></a></div>
              </div>
          </div>
      </div>
  </div>

  
  <!-- Model Login -->
  <div class="modal fade custom-popup" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <img src="./assets/image/close.png" alt="" class="close" data-dismiss="modal" aria-label="Close">
          <div>
            <p class="text-pink text-center">Login</p>
            <p id="success_message"> </p>
          </div>
          <form id="loginform" action="auth/login" method="post" enctype="multipart/form-data">
              <div class="field mt-3" id="">
                <input class="w-100" type="email" id="email" placeholder="Email" name="email" value="<?php echo set_value('email'); ?>"/>
                <label id="email_error" class="error d-inline"></label>
              
              </div>
              <div class="field mt-3" id="">
                <input class="w-100" type="password" id="password" placeholder="Password" name="password" value="<?php echo set_value('password'); ?>"/>
                <label id="password_error" class="error d-inline"></label>
              
              </div>
              <div class="field mt-3" id="">
            
            
              <button type="submit" id="loginsubmitbtn" class="w-100 text-bold">
              Login  <img src="./assets/image/arrow-right-white.png" class="img-fluid" alt="">
              </button>
            </div>
          </form>
          <!-- <span class="line">
            <h2><span>Or</span></h2>
        </span> -->
        <!-- <div class="d-flex align-items-center justify-content-center">
          <img src="./assets/image/facebook.png" class="img-fluid mx-2" width="35" alt="">
          <img src="./assets/image/googleplus.png" class="img-fluid mx-2" width="35" alt="">
        </div> -->
        </div>
      </div>
    </div>
  </div>




  
  <!-- Model Registration -->
  <div class="modal fade custom-popup" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <img src="./assets/image/close.png" alt="" class="close" data-dismiss="modal" aria-label="Close">
          <div>
            <p class="text-pink text-center">Register</p>
            <p id="success_message"> </p>
          </div>
          <form id="registerform" action="auth/register" method="post" enctype="multipart/form-data">
            <div class="field mt-3" >
              <input class="w-100" type="text" id="full_name" placeholder="Full Name" name="full_name" value="<?php echo set_value('full_name'); ?>"/>
              <label id="name_error" class="error d-inline"></label>
            
            </div>
            <div class="field mt-3" id="">
            
              <input class="w-100" type="email" id="email" placeholder="Email" name="email" value="<?php echo set_value('email'); ?>"/>
              <label id="email_error" class="error d-inline"></label>
            
            </div>
            <div class="field mt-3" id="">
            
              <input class="w-100" type="text" id="mobile_number" placeholder="Mobile Number" name="mobile_number" value="<?php echo set_value('mobile_number'); ?>"/>
              <label id="mobile_number_error" class="error d-inline"></label>
            
            </div>
            <div class="field mt-3" id="">
              
              <input class="w-100" type="password" id="password" placeholder="Password" name="password" value="<?php echo set_value('password'); ?>"/>
              <label id="password_error" class="error d-inline"></label>
            
            </div>
            <div class="field mt-3" id="">
            
              <input class="w-100" type="password" id="confirm_password" placeholder="Confirm Password" name="confirm_password" value="<?php echo set_value('confirm_password'); ?>"/>
              <label id="confirm_password_error" class="error d-inline"></label>
            
            </div>
            <div class="field mt-3" id="">
            
            
              <button type="submit" id="registersubmitbtn" class="w-100 text-bold">
              Register  <img src="./assets/image/arrow-right-white.png" class="img-fluid" alt="">
              </button>
            </div>
          </form>
          <!-- <span class="line">
            <h2><span>Or</span></h2>
        </span> -->
        <!-- <div class="d-flex align-items-center justify-content-center">
          <img src="./assets/image/facebook.png" class="img-fluid mx-2" width="35" alt="">
          <img src="./assets/image/googleplus.png" class="img-fluid mx-2" width="35" alt="">
        </div> -->
        </div>
      </div>
    </div>
  </div>
    <!-- cursor -->
	<div class="cursor"></div>