<section class="add-sucss-bacgrnd">
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

<section class="faq-sec">
  <div class="container-fluid default-container">
    <div class="row">
      <div class="col-lg-7 col-md-7 col-sm-12 col-12">
  <h2 class="malyali-hed" data-aos="fade-up"><img src="<?php echo base_url(); ?>assets/images/c.png" class="img-fluid tick-img"> &nbsp; Add Your Success Story</h2>

<hr>

<div class="sucs-wrap">
  <h6>Post your success story with photograph and let your story inspire our other members in their search for a life partner.</h6>
<form action="<?php echo site_url('Home/couples_add'); ?>" method="post" enctype="multipart/form-data" >
              <input type="hidden" data-form-email="true">
              <div class="row">
              <div class="col-md-6 col-xs-12">
              <div class="form-group ">
                <input type="text" class="form-control" name="webid" id="webid" onblur="webcheck()" placeholder="Groom Web Id">
              </div>
            </div>
              <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" name="bride_id" id="" required="" placeholder="Bride Web Id" data-form-field="Email">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <input type="text" class="form-control" name="name" required="" placeholder="Your name" data-form-field="Phone">
              </div>
            </div>

 <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <input type="date" class="form-control" name="date" required="" placeholder="Choose Wedding Date" data-form-field="Phone">
              </div>
            </div>

                        </div>
<div class="row">
            <div class="col-md-12 col-xs-12">
            <div class="form-group">
                <textarea class="form-control stry-ad" name="story" required="" placeholder="Enter Your Success Story" rows="7" data-form-field="Message" spellcheck="false"></textarea>
              </div>
            </div>


                        </div>

          <div class="row">
              <div class="col-md-12 col-xs-12">
                <a href="#">
              <div class="upload-btn-wrapper">
              <a href="#" class="btn">Upload a Photo &nbsp; <i class="fas fa-upload"></i> </a>
              <input type="file" id="image" name="image" />
            </div>
          </a>


            </div>


                        </div>

                        <div class="">
                            <button type="submit" class="sub-per-btn add-stry-btn">Add Your Story</button>
                        </div>

            </form>

</form>
</div>

      </div>
      <div class="col-lg-3 col-md-3 col-sm-12 col-12">
       
       <h6 class="prfle-h6">Profile of the day</h6> 


      
<div class="flip-box">
  <div class="flip-box-inner">
    <div class="flip-box-front ">
    <img src="<?php echo base_url(); ?>assets/images/img-1.jpg" class="img-fluid">
    </div>
    <div class="flip-box-back">
       <img src="<?php echo base_url(); ?>assets/images/img-1.jpg" class="img-fluid">
    </div>
  </div>
</div>
<div class="name-d">
<h4>Ann Thomas</h4>
<h6>MM-123456</h6>
</div>

  <div class="faq-call">
  <img src="<?php echo base_url(); ?>assets/images/aa.png" class="img-fluid"> 
  <h5>NEED ANY ASSISTANCE</h5> 
  <h5><b>MISSEDCALL </b> TO</h5>
  <h5><b><i class="fas fa-phone-volume" style="font-size: 25px;"></i> &nbsp; <span style="color: #f50163;">807 8000 801 </span></b></h5>
  </div>

      </div>

      <div class="col-lg-2 col-md-2 col-sm-12 col-12">
        <img src="<?php echo base_url(); ?>assets/images/add.jpg" class="img-fluid ad-img-suc">
      </div> 
    </div>
  </div>
</section>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>

<script>
  $(document).ready(function() {

      $('#webid').blur(function(){

                         var webid = $('#webid').val();
                         getResultEmail();

                         return false;
                       })

      function getResultEmail(){

        var webid = $('#webid').val();

        alert(webid);

        $.ajax({
              url:"<?php echo base_url('home/check_webid');?>",
              type:"POST",
              data:{webid:webid},
              success:function(data)
              {
                alert(data);

                //alert(data);
                if(data==1){
                // document.regForm.submit();

              }
              else{
                alert();
                $("#webid").val("");

                Swal.fire('EMAIL ALREADY EXIST', 'Try another Email address or Login ', 'warning');

              }
            }
          });


     }
     });


// $(document).ready(function() {
//         function webcheck(){

//           var webid = $('#webid').val();

         
//             $.ajax({
//               url:"<?php echo base_url('Home/check_webid');?>",
//               type:"POST",
//               data:{webid:webid},
//               success:function(data)
//               {
//                 alert(data);

//                 //alert(data);
//                 if(data==1){
//                 // document.regForm.submit();

//               }
//               else{
//                 alert();
//                 $("#webid").val("");

//                 Swal.fire('EMAIL ALREADY EXIST', 'Try another Email address or Login ', 'warning');

//               }
//             }
//           });
          
//         }
//       });

   </script>