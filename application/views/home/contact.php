<body>
  <script src='//www.google.com/recaptcha/api.js'></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">


<script type="text/javascript">


<?php if($this->session->flashdata('success')){ ?>
    toastr.success("<?php echo $this->session->flashdata('success'); ?>");
<?php }else if($this->session->flashdata('error')){  ?>
    toastr.error("<?php echo $this->session->flashdata('error'); ?>");
<?php }else if($this->session->flashdata('warning')){  ?>
    toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
<?php }else if($this->session->flashdata('info')){  ?>
    toastr.info("<?php echo $this->session->flashdata('info'); ?>");
<?php } ?>


</script>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/innerpage.css" rel="stylesheet">    
<section class="cnt-bacgrnd">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
     <!--    <img src="images/sub-bg.jpeg" class="img-responsive"> -->
 <!--     <div class="abt-sub-hed">
     <h2> CONTACT US</h2>
   </div> -->
      </div>
    </div>
  </div>
</section>

<div class="container contact" >
  <div class="row">
  <div class="col-lg-6">
    <h3 class="ap-title">Submit Your Enquiries </h3>
    <p class="bottom-adjust">Malayali Marriages is always there to help you to solve your enquiries and doubts.<br>Please feel free to post your enquiry, feedbacks and comments.</p>
    <p></p>
  <form method="post" action="<?php echo site_url('Home/contact_mail'); ?>" data-form-title="CONTACT US">
              <input type="hidden" data-form-email="true">
              <div class="row">
              <div class="col-md-6 col-xs-12">
              <div class="form-group ">
                <input type="text" class="form-control" name="name" required="" placeholder="Name*" data-form-field="Name">
              </div>
            </div>
              <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <input type="email" class="form-control" name="email" required="" placeholder="Email*" data-form-field="Email">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <input type="tel" class="form-control" name="phone" placeholder="Mobile" data-form-field="Phone">
              </div>
            </div>
<div class="col-md-6 col-xs-12">
              <div class="form-group">
                 <select class="form-control" placeholder="Type" value="" name="quiry" id="exampleFormControlSelect1">
      <option value="">Type</option>
      <option value="Inquiry">Enquiry</option>
      <option value="Feedback">Feedback</option>
      <option value="Details">Details</option>
      <option value="Others">Others</option>
    </select>
              </div>
            </div>
      <div class="col-md-12 col-xs-12">
              <div class="form-group">
                <textarea class="form-control frm-ct" name="message" placeholder="Message" rows="7" data-form-field="Message" spellcheck="false"></textarea>
              </div>
</div>


  <div class="col-md-6 col-xs-12">

<div class="g-recaptcha" data-sitekey="6LeNubIaAAAAAIAymNUqWQtnnGg3Vuu9k6vNr_uS" data-stoken=""></div>
      
</div>

<div class="col-md-6 col-xs-12">
              <div>
                <button type="submit" class="subit-btn sbt-cnt">
                  <a>Submit</a>
                </button>
                <!-- <div class="contct-btn-wrapper">
              <a href="#" class="contct-frm-btn"> </a>
            </div> -->
              </div>
            </div>
                        </div>
            </form>
          </div>
          <div class="col-lg-1 wd-cnt"></div>
          <div class="col-lg-5 cont-riyt">
            
            <h4><i class="fas fa-map-marker-alt"></i>&nbsp; Address</h4>
               <h3 class="ad12">Head Office</h3>
            <p> 1st Floor, Lucky Star Building,
            <Br>
           Near KTC Parcel Service, Market Road,
            <br>
            PIN - 682031, Ernakulam.
        
</p>
         
           

 <h3 class="ad12">Branch</h3>
     <p> 1st Floor, Morning Star Building,
            <Br>
            Opp.Excise Office, Kacheripady Jn.,
            <br>
             PIN- 682018 Ernakulam. 
        
</p>
<hr>
<div class="row">
  <div class="col-lg-2 col-12">
    <img src="<?php echo base_url(); ?>assets/images/ic1.png" class="img-responsive cnt-ic">
  </div>
    <div class="col-lg-10 col-12">
<h3 class="adrs"><b>  Mail Your Enquiries</b></h3>
<p class="adrs-p">malayalimarriages@gmail.com</p>
</div>
</div>
<hr>
<div class="row">
   <div class="col-lg-2 col-12">
     <img src="<?php echo base_url(); ?>assets/images/ic2.png" class="img-responsive cnt-ic">
  </div>
   <div class="col-lg-10 col-12">
<h3 class="adrs"><b>  Call Us</b></h3>
<p class="adrs-p"> <i class="fas fa-phone-volume"> </i> &nbsp; 0484 2400900
&nbsp;
<i class="fas fa-mobile"> </i> &nbsp; 807 8000 801</p>
</div>
</div>
          </div>
        </div>
</div>

