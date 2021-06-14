
<section class="home-fst-form-sectn">
  <div class="container-fluid hme-new-pad">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hme-new-pad">
      <div class="rw-hme-new">   
       <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
        <ul class="hom-social-banner-ico">
         <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
         <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
         <li><a href="#"><i class="fab fa-instagram"></i></a></li>
         <li><a href="#"><i class="fab fa-twitter"></i></a></li>
       </ul>
     </div>
     <div class="">
      <div class="offset-md-9 col-lg-3 col-md-4 col-sm-12 col-xs-12 hme-frm frm-col-wrapper ">
       <h3 class="hidden-lg hidden-md text-center reg-free-captn">Register<span> Free</span></h3>
       <form method="post" action="<?php echo site_url();?>/Register/free_reg">
         <div class="row">

           <div class="form-group col-lg-12">

             <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Bride / Groom Name" required="required">
           </div>
           <div class="form-group col-lg-12">
             <select style="text-transform:capitalize;" name="profilefor" class="form-control" id="exampleFormControlSelect1" required="required">
              <option value="">Profile for</option>
              <?php foreach($profilefor as $row)
              { 
                echo '<option value="'.$row->profilefor_id.'">'.$row->profilefor.'</option>';
              }
              ?>
            </select>
        </div>
      </div>
      <div class="row">
       <div class="form-group col-lg-12">

        <select style="text-transform:capitalize;" class="form-control" id="exampleFormControlSelect3" name="gender" required="required">
          <option value="">Select Gender</option>
          <?php foreach($gender as $row)
          { 
            echo '<option value="'.$row->gender_id.'">'.$row->gender.'</option>';
          }
          ?>
        </select>
      </div>

      <div class="form-group col-lg-12">

       <input type="text" onfocus="(this.type='date')" class="form-control" id="exampleFormControlInput1" placeholder="Date Of Birth" name="dob" max="2003-01-01" required="required">
     </div>
   </div>
   <div class="row">
    <div class="form-group col-lg-12">

      <select style="text-transform:capitalize;" class="form-control" id="exampleFormControlSelect3" name="mothertoungue" required="required">
        <option value="">Select Mother Tongue</option>
        <?php foreach($mothertoungue as $row)
        { 

          echo '<option value="'.$row->id.'">'.$row->name.'</option>';
        }?>
      </select>

    </div>
    <div class="form-group col-lg-12">
     <div id="varify"></div>
     <input type="Email" id="email" class="form-control" name="email" placeholder="Email ID" required="required" onblur="emailcheck()">
   </div>

 </div>
 <div class="row">
  <div class="form-group col-lg-6">

    <select style="text-transform:capitalize;" class="form-control" id="religion" name="religion" required="required">
      <option value="">Religion</option>
      <?php foreach($religion as $row)
      { 

        echo '<option value="'.$row->religion_id.'">'.$row->religion.'</option>';
      }
      ?></select>
    </div>
    <div class="form-group col-lg-6">

      <select style="text-transform:capitalize;" class="form-control" id="cast" name="cast" required="required">
        <option value="">Caste</option>
      </select>
    </div>
    

  </div>
  <div class="row">
   <div class="form-group col-lg-6">

    <select style="text-transform:capitalize;" class="form-control" id="country" name="country" required="required">
      <option value="0">Select Country</option>
      <?php foreach($country as $row)
      { 
        echo '<option value="'.$row->id.'">'.$row->name.'</option>';
      }
      ?>
    </select>
  </div>
  <div class="form-group col-lg-6">

    <select style="text-transform:capitalize;" class="form-control" id="district" name="district">
      <option value="">Location</option>

      <input style="display: none;" id="currentLocationText" class="form-control" name="locationText" type="text" value="" placeholder="Location" maxlength="200"/>

    </select>
  </div>

</div>
<div class="row">
 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
   <div class="form-group">

    <select style="text-transform:capitalize;" class="form-control" id="exampleFormControlSelect3" name="country_code">
      <option value="91">+91(India)</option>
      <?php foreach($country as $row)
      { 

        echo '<option value="'.$row->phonecode.'">+'.$row->phonecode.'('.$row->nicename.')</option>';
      }
      ?></select>
    </div>   
  </div>
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
   <div class="form-group">

     <input type="mobile" onblur="phonecheck()" class="form-control" id="phone" name="mobile" placeholder="Mobile number" required="required">
   </div>   
 </div>

</div>
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required="">
  <label class="custom-control-label" for="customControlValidation2"><span class="checkbox-caption inverse">I have read and agree to the <a href="" target="_blank">Terms of Use </a>&amp; <a href="" target="_blank">Privacy Policy</a> </span></label>
</div>

<div class="col-lg-12" align="center">
  <button type="submit" class="subit-btn col-lg-12" align="center">
    <a> SUBMIT</a>
  </button>
</div>
</form> 
<span class="if">If you are already a registered member,  &nbsp;<a href=""> Sign In </a></span>


</div>
</div>
</div>
</div>
</div>
</section>

      <section class="enq-posn">
         <div class="container enq-cont-psn">
  <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <h3 class="enquiry-captn animate__animated animate__swing">
                     <a href="#">For Enquiry | <span>0484 2400 900, +91 807 8000 801</span></a>
                  </h3>
               </div>
            </div> 

            <div class="row form-ad-hom">
    <div class="col-lg-2 col-md-3 col-sm-3 col-12 rad-wra brd-grm-width">
    <form method="post" action="" class="brd-grm">
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Bride</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">Groom</label>
</div>
</form></div>
 <div class="col-lg-1 col-md-1 col-sm-1 col-5 age-form age-width">
  <div class="form-group ">
    
    <select class="form-control" id="exampleFormControlSelect1" name="age_from">
      <option value="0">Age</option>
      <option value="18">18</option><option value="19">19</option><option value="20">20</option>  </select>
  </div>
 </div>
<div class="col-lg-1 col-md-1 col-sm-1 col-2 age-form to-width">
  <p class="text-center to-cls ">to</p>
 </div>
 <div class="col-lg-1 col-md-1 col-sm-1 col-5 age-form age-width">
  <div class="form-group ">
    
    <select class="form-control" id="exampleFormControlSelect1" name="age_to">
      <option value="0">Age</option>
      <option value="18">18</option><option value="19">19</option><option value="20">20</option>   </select>
  </div>
 </div>
<div class="col-lg-2 col-md-2 col-sm-1 col-xs-6 age-form mal-rel">
  <div class="form-group ">
    
    <select id="religionS" name="religion" class="form-control">
  <option value="0">Religion</option>
     <option value="1">Hindu</option><option value="2">christian</option><option value="3">Muslim</option><option value="4">inter-religion</option><option value="5">no-religion</option><option value="6">other</option>    </select>
  </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 age-form mal-cas">
  <div class="form-group ">
    
    <select id="castS" name="cast" class="form-control">
      <option value="0">Caste</option>
      
    </select>
  </div>
</div>

<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 age-form mart">
  <div class="form-group ">
    
    <select id="castS" name="cast" class="form-control">
      <option value="0">Marital Statuse</option>
      
    </select>
  </div>
</div>
<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 age-form search-wdth">
 <button type="submit" href="#" class="home-search-btn"> Search &nbsp;  <i class="fa fa-search"></i> </button>
 
</div>
</div>

</div>
             
      </section>
  


      <section class="fetured-br-col">
         <div class="container">
            <h2 class="home-heading" data-aos="fade-up"> FEATURED BRIDES &amp; GROOMS</h2>
            <img src="<?php echo base_url(); ?>assets/images/xzzzzz.png" data-aos="fade-up" class="img-responsive hed-under-img" >
            <div class="row owl-carousel">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wdth-fea-100">
                  <div class="fe-img-wrapper content">
                     <a href="#" target="_blank">
                        <div class="content-overlay"></div>
                        <img src="<?php echo base_url(); ?>assets/images/img-1.jpg" class="img-responsive">
                        <h4 class="feat-content-home">Anu Joseph</h4>
                        <p class="feat-cont-p">Kottayam</p>
                        <div class="content-details fadeIn-bottom">
                     <a href="index.php/register/login_view.html" class="view-prof-btn">VIEW PROFILE</a>
                     </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wdth-fea-100 pad-brd">
                  <div class="fe-img-wrapper content">
                     <a href="#" target="_blank">
                        <div class="content-overlay"></div>
                        <img src="<?php echo base_url(); ?>assets/images/img-1.jpg" class="img-responsive">
                        <h4 class="feat-content-home">Anu Joseph</h4>
                        <p class="feat-cont-p">Kottayam</p>
                        <div class="content-details fadeIn-bottom">
                     <a href="index.php/register/login_view.html" class="view-prof-btn">VIEW PROFILE</a>
                     </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wdth-fea-100 pad-brd">
                  <div class="fe-img-wrapper content">
                     <a href="#" target="_blank">
                        <div class="content-overlay"></div>
                        <img src="<?php echo base_url(); ?>assets/images/img-1.jpg" class="img-responsive">
                        <h4 class="feat-content-home">Anu Joseph</h4>
                        <p class="feat-cont-p">Kottayam</p>
                        <div class="content-details fadeIn-bottom">
                     <a href="#" class="view-prof-btn">VIEW PROFILE</a>
                     </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wdth-fea-100 pad-brd">
                  <div class="fe-img-wrapper content">
                     <a href="#" target="_blank">
                        <div class="content-overlay"></div>
                        <img src="<?php echo base_url(); ?>assets/images/img-1.jpg" class="img-responsive">
                        <h4 class="feat-content-home">Anu Joseph</h4>
                        <p class="feat-cont-p">Kottayam</p>
                        <div class="content-details fadeIn-bottom">
                     <a href="index.php/register/login_view.html" class="view-prof-btn">VIEW PROFILE</a>
                     </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wdth-fea-100 pad-brd">
                  <div class="fe-img-wrapper content">
                     <a href="#" target="_blank">
                        <div class="content-overlay"></div>
                        <img src="<?php echo base_url(); ?>assets/images/img-1.jpg" class="img-responsive">
                        <h4 class="feat-content-home">Anu Joseph</h4>
                        <p class="feat-cont-p">Kottayam</p>
                        <div class="content-details fadeIn-bottom">
                     <a href="index.php/register/login_view.html" class="view-prof-btn">VIEW PROFILE</a>
                     </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wdth-fea-100 pad-brd">
                  <div class="fe-img-wrapper content">
                     <a href="#" target="_blank">
                        <div class="content-overlay"></div>
                        <img src="<?php echo base_url(); ?>assets/images/img-1.jpg" class="img-responsive">
                        <h4 class="feat-content-home">Anu Joseph</h4>
                        <p class="feat-cont-p">Kottayam</p>
                        <div class="content-details fadeIn-bottom">
                     <a href="index.php/register/login_view.html" class="view-prof-btn">VIEW PROFILE</a>
                     </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wdth-fea-100 pad-brd">
                  <div class="fe-img-wrapper content">
                     <a href="#" target="_blank">
                        <div class="content-overlay"></div>
                        <img src="<?php echo base_url(); ?>assets/images/img-1.jpg" class="img-responsive">
                        <h4 class="feat-content-home">Anu Joseph</h4>
                        <p class="feat-cont-p">Kottayam</p>
                        <div class="content-details fadeIn-bottom">
                     <a href="index.php/register/login_view.html" class="view-prof-btn">VIEW PROFILE</a>
                     </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wdth-fea-100 pad-brd">
                  <div class="fe-img-wrapper content">
                     <a href="#" target="_blank">
                        <div class="content-overlay"></div>
                        <img src="<?php echo base_url(); ?>assets/images/img-1.jpg" class="img-responsive">
                        <h4 class="feat-content-home">Anu Joseph</h4>
                        <p class="feat-cont-p">Kottayam</p>
                        <div class="content-details fadeIn-bottom">
                     <a href="index.php/register/login_view.html" class="view-prof-btn">VIEW PROFILE</a>
                     </div>
                     </a>
                  </div>
               </div>
            </div>
            <div class="row owl-carousel">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wdth-fea-100 pad-brd">
                  <div class="fe-img-wrapper content">
                     <a href="#" target="_blank">
                        <div class="content-overlay"></div>
                        <img src="<?php echo base_url(); ?>assets/images/img-1.jpg" class="img-responsive">
                        <h4 class="feat-content-home">Anu Joseph</h4>
                        <p class="feat-cont-p">Kottayam</p>
                        <div class="content-details fadeIn-bottom">
                     <a href="index.php/register/login_view.html" class="view-prof-btn">VIEW PROFILE</a>
                     </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wdth-fea-100 pad-brd">
                  <div class="fe-img-wrapper content">
                     <a href="#" target="_blank">
                        <div class="content-overlay"></div>
                        <img src="<?php echo base_url(); ?>assets/images/img-1.jpg" class="img-responsive">
                        <h4 class="feat-content-home">Anu Joseph</h4>
                        <p class="feat-cont-p">Kottayam</p>
                        <div class="content-details fadeIn-bottom">
                     <a href="index.php/register/login_view.html" class="view-prof-btn">VIEW PROFILE</a>
                     </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wdth-fea-100 pad-brd">
                  <div class="fe-img-wrapper content">
                     <a href="#" target="_blank">
                        <div class="content-overlay"></div>
                        <img src="<?php echo base_url(); ?>assets/images/img-1.jpg" class="img-responsive">
                        <h4 class="feat-content-home">Anu Joseph</h4>
                        <p class="feat-cont-p">Kottayam</p>
                        <div class="content-details fadeIn-bottom">
                     <a href="index.php/register/login_view.html" class="view-prof-btn">VIEW PROFILE</a>
                     </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wdth-fea-100 pad-brd">
                  <div class="fe-img-wrapper content">
                     <a href="#" target="_blank">
                        <div class="content-overlay"></div>
                        <img src="<?php echo base_url(); ?>assets/images/img-1.jpg" class="img-responsive">
                        <h4 class="feat-content-home">Anu Joseph</h4>
                        <p class="feat-cont-p">Kottayam</p>
                        <div class="content-details fadeIn-bottom">
                     <a href="index.php/register/login_view.html" class="view-prof-btn">VIEW PROFILE</a>
                     </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wdth-fea-100 pad-brd">
                  <div class="fe-img-wrapper content">
                     <a href="#" target="_blank">
                        <div class="content-overlay"></div>
                        <img src="<?php echo base_url(); ?>assets/images/img-1.jpg" class="img-responsive">
                        <h4 class="feat-content-home">Anu Joseph</h4>
                        <p class="feat-cont-p">Kottayam</p>
                        <div class="content-details fadeIn-bottom">
                     <a href="index.php/register/login_view.html" class="view-prof-btn">VIEW PROFILE</a>
                     </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wdth-fea-100 pad-brd">
                  <div class="fe-img-wrapper content">
                     <a href="#" target="_blank">
                        <div class="content-overlay"></div>
                        <img src="<?php echo base_url(); ?>assets/images/img-1.jpg" class="img-responsive">
                        <h4 class="feat-content-home">Anu Joseph</h4>
                        <p class="feat-cont-p">Kottayam</p>
                        <div class="content-details fadeIn-bottom">
                     <a href="index.php/register/login_view.html" class="view-prof-btn">VIEW PROFILE</a>
                     </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wdth-fea-100 pad-brd">
                  <div class="fe-img-wrapper content">
                     <a href="#" target="_blank">
                        <div class="content-overlay"></div>
                        <img src="<?php echo base_url(); ?>assets/images/img-1.jpg" class="img-responsive">
                        <h4 class="feat-content-home">Anu Joseph</h4>
                        <p class="feat-cont-p">Kottayam</p>
                        <div class="content-details fadeIn-bottom">
                     <a href="index.php/register/login_view.html" class="view-prof-btn">VIEW PROFILE</a>
                     </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
  <section class="happy-couples-sec">
  <div class="container">
    <h2 class="home-heading" data-aos="fade-up"> SUCCESS STORIES</h2>
  
 
<div class="row">
<div class="col-md-5">
 <h4 class="test-qute"><i class="fas fa-quote-left"></i> They find their soulmate through Malayali Marriages and we are happy to be a part of their happiness. Hear from our users the experience they had with us. </h4>
 <a href="#" class="add-home-stries"><i class="fas fa-plus"></i> &nbsp; Add Your Success Stories</a>
</div>

<div id="testim" class="testim col-md-7">

<!--         <div class="testim-cover"> -->
            <div class="wrap">

                <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
                <ul id="testim-dots" class="dots">
                    <li class="dot active"></li><!--
                    --><li class="dot"></li><!--
                    --><li class="dot"></li><!--
                    --><li class="dot"></li><!--
                    --><li class="dot"></li>
                </ul>
                <div id="testim-content" class="cont">                    
                    <div class="active">
                        <div class="img"><img src="<?php echo base_url(); ?>assets/images/hapy.jpg" alt=""></div>
                        <div class="h4">Kellie</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                    </div>

                    <div>
                        <div class="img"><img src="<?php echo base_url(); ?>assets/images/hapy.jpg" alt=""></div>
                        <div class="h4">Jessica</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                    </div>

                    <div>
                        <div class="img"><img src="<?php echo base_url(); ?>assets/images/hapy.jpg" alt=""></div>
                         <div class="h4">Kellie</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                    </div>

                    <div>
                        <div class="img"><img src="<?php echo base_url(); ?>assets/images/hapy.jpg" alt=""></div>
                        <div class="h4">Jessica</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                    </div>

                    <div>
                        <div class="img"><img src="<?php echo base_url(); ?>assets/images/hapy.jpg" alt=""></div>
                        <div class="h4">Kellie</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>                    
                    </div>

                </div>
                 </div>
<div class="hom-hap-view-mor" align="center">
  <a href=""> View More</a>
</div>
            </div>

</div>





  </div>
</section>

    


<section class="impo-malayali ">
  <div class="container">
    <img src="<?php echo base_url(); ?>assets/images/crown.png" class="img-responsive crown-img" >
     <h2 class="home-heading" data-aos="fade-up"> MALAYALI MARRIAGES</h2>
     <p class="malayali-marry-p" data-aos="fade-up">EXPERIENCE A HEAVENLY WEDDING</p>
    <img src="<?php echo base_url(); ?>assets/images/xzzzzz.png" data-aos="fade-up" class="img-responsive hed-under-img exp-hed-img">
    <div class="row">
<ul class="malayali-marry-icons">
  <li class="img-hp"><img src="<?php echo base_url(); ?>assets/images/aa.png" class="img-responsive animateds pulse">
<p>Register & Enquiry with us</p>

  </li>
  <li class="img-hp"><img src="<?php echo base_url(); ?>assets/images/bb.png" class="img-responsive animateds pulse">
  <p>We Search for matched profiles</p></li>
  <li class="img-hp"><img src="<?php echo base_url(); ?>assets/images/cc.png" class="img-responsive animateds pulse">
  <p>Discussions with matched profiles</p></li>
  <li class="img-hp"><img src="<?php echo base_url(); ?>assets/images/dd.png" class="img-responsive animateds pulse">
  <p>Fix your perfect match</p></li>
  <li class=""><img src="<?php echo base_url(); ?>assets/images/ee.png" class="img-responsive animateds pulse">
  <p>Be With your Soulmate</p></li>
</ul>
<div class="get-started-btn" align="center">
  <a href="#">GET STARTED NOW</a>
  </div>
    </div>
  </div>
</section>

<section class="malayali-marry-sec">
  <div class="container">
    <div class="">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
 <h2 class="home-heading text-center" data-aos="fade-up">ABOUT MALAYALI MARRIAGES</h2>
     <img src="<?php echo base_url(); ?>assets/images/xzzzzz.png" data-aos="fade-up" class="img-responsive hed-under-img">
     <P class="text-center">Sourcing from far and near, MALAYALI MARRIAGES presents a wide range of profiles to find your
perfect life partner. In the arena of online matrimonial services, we stand out in a fashion that is elegant and 
dignified to redefine the prevaling systems of match making by pre-setting a dynamic function as suited for
the recent times. By incorporating personality traits, occupational targets and family setups our site is an ideal
platform to make the perfect choice. Here match making solutions are made simple and effective with the aid of
the advanced technical skills and the deep commitment of our team members. A happy marriage is the keystone of 
a happy society, and MALAYALI MARRIAGES is oblidged for the inception of a happier and brighter nation.</P>
      </div>
    <div class="row trus-rw">
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" align="center">
   <img src="<?php echo base_url(); ?>assets/images/a.png" class="img-responsive brand-icons animateds pulse">
   <h5>Most trusted matrimony</h5>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" align="center">
    <img src="<?php echo base_url(); ?>assets/images/b.png" class="img-responsive brand-icons animateds pulse">
    <h5>100% Privacy</h5>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" align="center">
    <img src="<?php echo base_url(); ?>assets/images/c.png" class="img-responsive brand-icons animateds pulse">
    <h5>Verified profiles</h5>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" align="center">
    <img src="<?php echo base_url(); ?>assets/images/d.png" class="img-responsive brand-icons animateds pulse">
    <h5>100% Proven history</h5>
</div>
</div>


    </div>
  </div>
</section>
<section class="choos-comuniti-sec" >
  <div class="container-fluid ">
   
<div class="row" data-aos="fade-up">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
 <!--  <div class="all-btn-hme hidden-xs">
    <a href="http://malayalimarriages.com/index.php/home/all_communities">All</a>
  </div> -->
  <h2 class="home-heading chose-com-hed aos-init aos-animate" data-aos="fade-up">CHOOSE BY COMMUNITIES</h2>
<ul class="comu-ul">
 <a style="color:white" href="" class=""><li class="animateds pulse"><img src="<?php echo base_url(); ?>assets/images/Choose logo.png" class="img-responsive "> &nbsp; <span> Nair <span></span></span></li></a>
 <a style="color:white" href=""><li class="animateds pulse"><img src="<?php echo base_url(); ?>assets/images/Choose logo.png" class="img-responsive"> &nbsp; <span>Viswakarma</span></li></a>
 <a style="color:white" href=""><li class="animateds pulse"><img src="<?php echo base_url(); ?>assets/images/Choose logo.png" class="img-responsive"> &nbsp; <span>Ezhava</span></li></a>
  <a style="color:white" href=""><li class="animateds pulse"><img src="<?php echo base_url(); ?>assets/images/Choose logo.png" class="img-responsive"> &nbsp; <span>RCSC </span></li></a>
 <a style="color:white" href=""><li class="animateds pulse"><img src="<?php echo base_url(); ?>assets/images/Choose logo.png" class="img-responsive"> &nbsp;<span> Orthodox</span></li></a>
 <a style="color:white" href=""><li class="animateds pulse"><img src="<?php echo base_url(); ?>assets/images/Choose logo.png" class="img-responsive"> &nbsp; <span>Latin</span></li></a>
 <a style="color:white" href=""> <li class="animateds pulse"><img src="<?php echo base_url(); ?>assets/images/Choose logo.png" class="img-responsive">&nbsp;<span> Mappila</span></li></a>
<a style="color:white" href=""> <li class="animateds pulse"><img src="<?php echo base_url(); ?>assets/images/Choose logo.png" class="img-responsive"> &nbsp;<span> Sunni</span></li></a>
<a style="color:white" href=""> <li class="animateds pulse all-btn-hme hidden-lg hidden-md"><span> All &nbsp;<i class="fas fa-angle-double-right"></i></span></li></a>

</ul>
 <!--  <div class="all-btn-hme hidden-lg hidden-md">
    <a href="">All</a>
  </div> -->
</div> 
</div>
  </div>  
</section>
<section class="paid-memb-sec">
  <div class="container ">
    <h2 class="home-heading" data-aos="fade-up">MEMBERSHIP BENEFITS</h2>
    <img src="<?php echo base_url(); ?>assets/images/xzzzzz.png" class="img-responsive hed-under-img" data-aos="fade-up">
    <div class="row">
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 paid-mem-wrap" align="center">
        <img src="<?php echo base_url(); ?>assets/images/i1.png" class="img-responsive animateds pulse">
        <h5 class="send-email">Dedicated Team</h5>
      </div>
      
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 paid-mem-wrap" align="center">
          <img src="<?php echo base_url(); ?>assets/images/i3.png" class="img-responsive animateds pulse">
          <h5 class="spot-light">Advanced Search</h5>
      </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 paid-mem-wrap" align="center">
          <img src="<?php echo base_url(); ?>assets/images/i4.png" class="img-responsive animateds pulse">
          <h5 class="chat">Chat</h5>
      </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 paid-mem-wrap" align="center">
          <img src="<?php echo base_url(); ?>assets/images/i7.png" class="img-responsive animateds pulse">
          <h5 class="spot-light">Get Contacts</h5>

      </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 paid-mem-wrap" align="center">
          <img src="<?php echo base_url(); ?>assets/images/i2.png" class="img-responsive animateds pulse">
          <h5 class="send-message">Send Message</h5>
      </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 paid-mem-wrap" align="center">
          <img src="<?php echo base_url(); ?>assets/images/i8.png" class="img-responsive animateds pulse">
          <h5 class="spot-light">Highlighting</h5>
      </div>
    </div>
  </div>
</section>



<div class="counselling ">
<a href="#" target="_blank" data-toggle="modal" data-target="#exampleModal"><img src="<?php echo base_url(); ?>assets/images/fre.png" alt="" class="heartbeat"></a>
</div>


