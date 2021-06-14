
<script type="text/javascript">
 
    /* Replace #your_subdomain# by the subdomain of a Site in your OneAll account */    
    var oneall_subdomain = 'app-1046502-1.api.oneall.com';
 
    /* The library is loaded asynchronously */
    var oa = document.createElement('script');
    oa.type = 'text/javascript'; oa.async = true;
    oa.src = '//' + oneall_subdomain + '.api.oneall.com/socialize/library.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(oa, s);
         
  </script>

<section class="login-bac-sec">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="login-main-wrapper">
          <div class="login-form-main-wrapper">

          <h6 class="login-title"> <i class="fas fa-pencil-alt"></i>  &nbsp; Login <span><b>NOW !</b></span></h6>

<div id="oa_social_login_container"></div>
 
  <script type="text/javascript"> 
 
    /* Replace #callback_uri# by the url to your own callback script */
    var callback_uri = '<?php echo site_url('Oneallcallback');?>';
     
    /* Embeds the buttons into the container oa_social_login_container */
    var _oneall = _oneall || [];
    _oneall.push(['social_login', 'set_providers', ['facebook', 'google']]);
    _oneall.push(['social_login', 'set_callback_uri', callback_uri]);
    _oneall.push(['social_login', 'do_render_ui', 'oa_social_login_container']);
     
  </script>

               <!-- <a href="#" class="login-with-facebook"> Login with Facebook</a>
                       <a href="#" class="login-with-google"> Login with Google</a>
                       <div class="login-or">
                          <hr class="hr-or">
                          <span class="span-or">or</span>
                </div> -->

          <form action="<?php echo site_url('Register/LoginCheck');?>" method="POST" class="login100-form validate-form">
            <div class="form-group">
              <!-- <label for="exampleInputEmail1">User name</label> -->
              <input  type="text" name="username" placeholder="Email / WebId / Phone Number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              
            </div>
             <div class="form-group">
              <!-- <label for="exampleInputEmail1">Password</label> -->
              <input type="password" name="password" class="form-control" placeholder="Password" id="exampleInputEmail1" aria-describedby="emailHelp">
              
            </div>
            <p class="forgt-p"><a href="<?php echo base_url(); ?>index.php/Register/forgot">Forgot Password?</a></p>
            <button type="submit" class="sign-in-btn">
              <a type="submit"> Login</a>
            </button>

            
            <p class="login-link">New to Malayali Marry? <a href="#" class="link-a-log">Sign up</a></p>
          </form>

          </div>

        </div>
      </div>
    </div>
  </div>
</section>
  <script src="<?php echo base_url();?>assets/js/main.js"></script>
