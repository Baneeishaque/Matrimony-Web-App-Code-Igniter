 
<section class="login-bac-sec">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="login-main-wrapper">
          <div class="login-form-main-wrapper">

<h6 class="login-title"> <i class="fas fa-pencil-alt"></i>  &nbsp; Forgot <span><b>PASSWORD !</b></span></h6>

       <!--    <a href="#" class="login-with-facebook"> Login with Facebook</a>
               <a href="#" class="login-with-google"> Login with Google</a>
               <div class="login-or">
                                                    <hr class="hr-or">
                                                    <span class="span-or">or</span>
                                                </div> -->
<form method="post" action="<?php echo base_url(); ?>index.php/register/forgot_pass">
  <div class="form-group">
    <!-- <label for="exampleInputEmail1">User name</label> -->
    <input type="email" name="email" placeholder="Email / WebId / Phone Number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>

  <button class="sign-in-btn">
    <a type="submit"> Submit</a>
  </button>
  <p class="login-link">If you don't have an account yet, <a href="#" class="link-a-log">Sign up</a></p>
</form>






          </div>

        </div>
      </div>
    </div>
  </div>
</section>
