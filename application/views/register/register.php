<body class="reg-bdy">
    <div class="col-lg-12">
    <div class="row">
      <div class="col-lg-8">
       <h3 class="reg-eng-c animateds pulse">
         <a href="#">For Enquiry  <span>0484 2400 900, +91 807 8000 801</span></a>
       </h3>
     </div>

<div class=" col-lg-4 col-md-4 col-sm-12 col-xs-12 frm-col-wrapper-reg">
<h3 class="reg-free-captn"> <i class="fas fa-pencil-alt"></i>  &nbsp; Register<span> <b>FREE !</b></span></h3>

<!-- <form action="<?php echo site_url('Register/free_reg');?>" method="post" name="regForm"> -->
  <form method="post" action="<?php echo site_url();?>/Register/free_reg">
 
   <div class="row">
  
   <div class="form-group col-lg-6">
   
   <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Bride / Groom Name" required="required">
  </div>
  <div class="form-group col-lg-6">
       <select style = "text-transform:capitalize;"  name ="profilefor" class="form-control" id="exampleFormControlSelect1" required="required">
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
 <div class="form-group col-lg-6">
   
    <select style = "text-transform:capitalize;"  class="form-control" id="exampleFormControlSelect3" name="gender" required="required">
      <option value="">Select Gender</option>
      <?php foreach($gender as $row)
        { 
        
          echo '<option value="'.$row->gender_id.'">'.$row->gender.'</option>';
        }
        ?>
      </select>
  </div>

  <div class="form-group col-lg-6">
   
   <input type="text" onfocus="(this.type='date')" class="form-control" id="exampleFormControlInput1" placeholder="Date Of Birth"  name="dob" max="2003-01-01" required="required">
  </div>
</div>
<div class="row">
  <div class="form-group col-lg-6">
   
    <select style = "text-transform:capitalize;"  class="form-control" id="exampleFormControlSelect3" name="mothertoungue" required="required">
      <option value="">Select Mother Tongue</option>
      <?php foreach($mothertoungue as $row)
        { 
        
          echo '<option value="'.$row->id.'">'.$row->name.'</option>';
        }
        ?>    </select>
  </div>
   <div class="form-group col-lg-6">
   <div id="varify"></div>
   <input type="Email" id="email" class="form-control" name="email" placeholder="Email ID"  onblur="emailcheck()">
  </div>
 
</div>
<div class="row">
    <div class="form-group col-lg-6">
   
    <select style = "text-transform:capitalize;"  class="form-control" id="religion" name="religion" required="required">
      <option value="">Religion</option>
      <?php foreach($religion as $row)
      { 
    
          echo '<option value="'.$row->religion_id.'">'.$row->religion.'</option>';
      }
      ?>
      </select>
  </div>
   <div class="form-group col-lg-6">
   
    <select style = "text-transform:capitalize;"  class="form-control" id="cast" name="cast" required="required">
      <option value="">Caste</option>
    </select>
  </div>
    

  </div>
<div class="row">
   <div class="form-group col-lg-6">
   
    <select style = "text-transform:capitalize;"  class="form-control" id="country" name="country" required="required">
      <option value="0">Select Country</option>
      <?php foreach($country as $row)
      { 
          echo '<option value="'.$row->id.'">'.$row->name.'</option>';
      }
      ?>
    </select>
  </div>
  <div class="form-group col-lg-6">
   
    <select style = "text-transform:capitalize;"  class="form-control" id="district" name="district" placeholder="Location">
      <option value="">Location</option>
    </select>


      <!-- <div id="curLocTxtBlk" class="form-group col-lg-6" style="display: none;"> -->
      <input style="display: none;" id="currentLocationText" class="form-control" name="locationText" type="text" value="" placeholder="Location" maxlength="200"/>
  <!-- </div> -->
  </div>


         
</div>
  <div class="row">
   <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
   <div class="form-group">
   
    <select style = "text-transform:capitalize;"  class="form-control" id="exampleFormControlSelect3" name="country_code" >
      <?php foreach($country as $row)
        { 
        
        echo '<option value="'.$row->phonecode.'">+'.$row->phonecode.'('.$row->nicename.')</option>';
        }
        ?>
    </select>
  </div>   
   </div>
   <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
   <div class="form-group">
   
   <input type="mobile"  class="form-control" id="phone" name="mobile" placeholder="Mobile number" required="required">
  </div>   
   </div>
   
  </div>
 <div class="custom-control custom-radio">
    <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required="required">
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

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script>
      $(document).ready(function(){
       $('#religion').change(function(){
        var religion_id = $('#religion').val();

        if(religion_id != '')
        {
         $.ajax({
          url:"<?php echo site_url('Register/get_cast');?>",
          method:"POST",
          data:{religion_id:religion_id},
          success:function(data)
          {

           $('#cast').html(data);
         }
       });
       }
       else
       {
         $('#cast').html('<option value="">Select Cast</option>');

       }
     });

       $('#country').change(function(){
        var country_id = $('#country').val();

        if(country_id != '')
        {
         $.ajax({
          url:"<?php echo site_url('Register/get_country');?>",
          method:"POST",
          data:{country_id:country_id},
          success:function(data)
          {

            if (!$.trim(data)){ 
              $('#district').hide(); 
              $('#currentLocationText').show();  

            }
            else{  
              $('#currentLocationText').hide();  

              $('#district').show(); 
              $('#district').html('<option value="">Location</option>');
              $('#district').html(data);
            }
         }
       });
       }
       else
       {
         $('#district').html('<option value="">Location</option>');

       }
     });

     });

        function emailcheck(){

        var email = $('#email').val();

        if(email != '')
        {
          $.ajax({
            url:"<?php echo site_url('Register/check_email');?>",
            method:"POST",
            data:{email:email},
            success:function(data)
            {

          //alert(data);
          if(data==1){
          // document.regForm.submit();

          }
          else{
            $("#email").val("");

            Swal.fire('EMAIL ALREADY EXIST', 'Try another Email address or Login ', 'warning');

          }
          }
          });
        }
      }

   </script>

  </body>
</html>