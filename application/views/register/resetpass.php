
    
<section class="login-bac-sec">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="login-main-wrapper">
          <div class="login-form-main-wrapper">

<h6 class="login-title"> <i class="fas fa-pencil-alt"></i>  &nbsp;Reset <span><b>PASSWORD !</b></span></h6>

       <!--    <a href="#" class="login-with-facebook"> Login with Facebook</a>
               <a href="#" class="login-with-google"> Login with Google</a>
               <div class="login-or">
                                                    <hr class="hr-or">
                                                    <span class="span-or">or</span>
                                                </div> -->
<form action="<?php echo site_url('Register/update_Changepassword');?>" method="post">
  <div class="form-group">
    <!-- <label for="exampleInputEmail1">Password</label> -->
    <input type="text" name="newpassword" class="form-control" placeholder="Password" id="exampleInputEmail1" aria-describedby="emailHelp" required="required">
    
  </div>
  <div class="form-group">
    <!-- <label for="exampleInputEmail1">User name</label> -->
    <input type="text" name="confirmpassword" placeholder="Confirm Password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="required">
    
  </div>
  

  <div class="sign-in-btn">
    <button type="submit" class="sign-in-btn" >
    <a type="submit"> Submit</a>
    </button>
  </div>

</form>






          </div>

        </div>
      </div>
    </div>
  </div>
</section>
