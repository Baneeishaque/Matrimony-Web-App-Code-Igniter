<section class="faq-bacgrnd">
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
      <div class="col-lg-9 col-md-9 col-sm-12 col-12">
<h2 class="malyali-hed"><img src="<?php echo base_url(); ?>assets/images/faq.png" class="img-fluid faq-img"> &nbsp;Faq</h2>
<hr>

<div class="faq-call-now-wrap">
  <h6>Call Now: &nbsp;&nbsp;<span class="adrs-p"> <i class="fas fa-phone-volume"> </i> &nbsp; 0484 2400 900
&nbsp;
<i class="fas fa-mobile-alt"></i> &nbsp; 807 8000 801</span></h6>
</div>

<h4 class="malayali-faq-hed">Search Your Questions Here</h4>

                  <form action="<?php echo base_url(); ?>index.php/home/faq" method="post" class="card card-sm">
                      <div class="card-body row no-gutters align-items-center">
                          <div class="col-auto">
                              <i class="fas fa-search h4 text-body"></i>
                          </div>
                          <!--end of col-->
                          <div class="col">
                              <input class="form-control form-control-lg form-control-borderless" type="search" name="key" placeholder="Enter your question">
                          </div>
                          <!--end of col-->
                          <div class="col-auto">
                              <button class="faq-search-btn" type="submit">Search</button>
                          </div>
                          <!--end of col-->
                      </div>
                  </form>


              <div class="panel panel-warning" style="padding: 25px;">
<?php if(!$results==NULL){
foreach($results as $row){ ?>
                <div class="panel-heading" role="tab" id="headingTwo22">
                    <h4 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo22" aria-expanded="false" aria-controls="collapseTwo22">
                      <?php echo $row->word; ?>
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo22" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo22">
                    <div class="panel-body">
                      <?php echo $row->content; ?>
                    </div>
                </div>
<?php } 
}
else{
// echo '<div class="col-md-12 "> <h3 class="text-center no-data-h2">NO RESULTS FOUND</h3></div>';
}
?>

</div>



 <div class="">
        <div class="col-md-12 faq-acrd">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Horoscope
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                           
<div class="panel-group acrd-inner" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-warning">
    <div class="panel-heading" role="tab" id="headingOne1">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
    What is Star Match/Astro Match/Horoscope Match?
        </a>
      </h4>
    </div>
    <div id="collapseOne1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne1">
      <div class="panel-body">
        For marriage alliances, The Hindus practice Star Match or Nakshatraporutham/Horoscope/Astro match is a prediction done by checking their Raashi and birth star.
      </div>
    </div>
  </div>
  <div class="panel panel-warning">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         How do I know my star match for Marriage?
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        Marriage horoscope matching will be done online. Marriage matching is done based on the birth stars and janmaRashi of the people who get married.
      </div>
    </div>
  </div>
 
  </div>



                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo10">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo10" aria-expanded="false" aria-controls="collapseTwo10">
                              My Malayali Marriages
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo10">
                        <div class="panel-body">
                       
<div class="panel-group acrd-inner" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-warning">
    <div class="panel-heading" role="tab" id="headingOne11">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne11" aria-expanded="true" aria-controls="collapseOne">
 Is there any daily limit to send Interest?
        </a>
      </h4>
    </div>
    <div id="collapseOne11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne11">
      <div class="panel-body">
        No, there is no limit to send interest.
      </div>
    </div>
  </div>
  <div class="panel panel-warning">
    <div class="panel-heading" role="tab" id="headingTwo22">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo22" aria-expanded="false" aria-controls="collapseTwo22">
        How will I get interests or Alerts?
        </a>
      </h4>
    </div>
    <div id="collapseTwo22" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo22">
      <div class="panel-body">
        You will get Interests or Alerts via Email and SMS .If you need to unsubscribe any among the alerts you can simply deselect those alerts in settings menu.
      </div>
    </div>
  </div>


  <div class="panel panel-warning">
    <div class="panel-heading" role="tab" id="headingTwo23">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo23" aria-expanded="false" aria-controls="collapseTwo23">
      How will I know if a member accepts or declined my Interest?
        </a>
      </h4>
    </div>
    <div id="collapseTwo23" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo23">
      <div class="panel-body">
       You will get notifications via Email and SMS when a member accepts or declines your interests. You can also log in to Malayalee Marriages profile Click on the interests menu to view interests send/received.
      </div>
    </div>
  </div>
 
  <div class="panel panel-warning">
    <div class="panel-heading" role="tab" id="headingTwo24">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo24" aria-expanded="false" aria-controls="collapseTwo24">
     Will I be charged for SMS/Email Alerts?
        </a>
      </h4>
    </div>
    <div id="collapseTwo24" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo24">
      <div class="panel-body">
       No,it’s absolutely free when you get registered.
      </div>
    </div>
  </div>


  </div>




                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                             New user or Registration
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <div class="panel-group acrd-inner" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-warning">
    <div class="panel-heading" role="tab" id="headingOne31">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne31" aria-expanded="true" aria-controls="collapseOne">
Can I register behalf of someone else?
        </a>
      </h4>
    </div>
    <div id="collapseOne31" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne31">
      <div class="panel-body">
       Yes, you can register behalf of someone.
      </div>
    </div>
  </div>
  <div class="panel panel-warning">
    <div class="panel-heading" role="tab" id="headingTwo32">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo32" aria-expanded="false" aria-controls="collapseTwo32">
    How to register or new user signup?
        </a>
      </h4>
    </div>
    <div id="collapseTwo32" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo32">
      <div class="panel-body">
       Registering on Malayali marriages.com is simple.
       Go to www.malayalimarriages.com.You can choose to register as a free member. Basic information of the person intending to get married is entered during the registration. The user can enter all information at one go, or choose to add a few essential fields the first time, and come back and complete the profile later.
      </div>
    </div>
  </div>


  <div class="panel panel-warning">
    <div class="panel-heading" role="tab" id="headingTwo33">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo33" aria-expanded="false" aria-controls="collapseTwo33">
     Can I use same Email ID for 2 profile registration?
        </a>
      </h4>
    </div>
    <div id="collapseTwo33" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo33">
      <div class="panel-body">
       No, in a single Email you cannot register multiple profiles.For each profile it is mandatory to have a unique email ID
      </div>
    </div>
  </div>
 
  <div class="panel panel-warning">
    <div class="panel-heading" role="tab" id="headingTwo34">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo34" aria-expanded="false" aria-controls="collapseTwo34">
    How to be a Premium Member?
        </a>
      </h4>
    </div>
    <div id="collapseTwo34" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo34">
      <div class="panel-body">
       Login with the 'User Name' and 'Password' which you received during free signup/registration
       <br>
Click on Go to Premiumbutton on bottom.
  <br>
Available membership schemes will displayed
  <br>
Choose your membership scheme
  <br>
Click Make Payment button to subscribe membership scheme of your choice and press OK to make payment
  <br>
Provide Card Type, Card Number, Currency, Amount, Name of Card, Card Expiry Date and Card Security Code
  <br>
Press Proceed to Pay button to process the payment

      </div>
    </div>
  </div>
</div>
                        </div>
                    </div>
                </div>


       <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                           Profile creation /Modifications
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                        <div class="panel-body">
                            <div class="panel-group acrd-inner" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-warning">
    <div class="panel-heading" role="tab" id="headingOne41">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne41" aria-expanded="true" aria-controls="collapseOne">
How to delete my Malayali marriages profile?
        </a>
      </h4>
    </div>
    <div id="collapseOne41" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne41">
      <div class="panel-body">
       Login to your Malayali marriages account using your Username and Password.
       <br>
Click on Settings menu-->click Delete My Profile tab.
 <br>
Choose a reason to delete account
 <br>
Click on Delete Profile button.

      </div>
    </div>
  </div>
  <div class="panel panel-warning">
    <div class="panel-heading" role="tab" id="headingTwo42">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo42" aria-expanded="false" aria-controls="collapseTwo42">
What is Photograph Validation process? How long it will take?
        </a>
      </h4>
    </div>
    <div id="collapseTwo42" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo42">
      <div class="panel-body">
      Every photograph posted on our website involves a manual screening
our staff will screen every photograph and has authority to Approve/Disapprove/Delete
Photographs will be available to all members only after passing validation check
The turnaround time for photograph validation is 24 hours.

      </div>
    </div>
  </div>


  <div class="panel panel-warning">
    <div class="panel-heading" role="tab" id="headingTwo43">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo43" aria-expanded="false" aria-controls="collapseTwo43">
Is it is possible to restore the deleted profile?
        </a>
      </h4>
    </div>
    <div id="collapseTwo43" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo43">
      <div class="panel-body">
       You cannot undelete, restore or reactivate your profile once you deleted it.
<br>
In case you need to restore your profile
<br>
Call Malayali marriages Help Desk: Phone +222 999 888
<br>
OR
<br>
Reach Malayali marriages Help Desk at: info@malayalimarriages.com.com 
      </div>
    </div>
  </div>
 
  <div class="panel panel-warning">
    <div class="panel-heading" role="tab" id="headingTwo44">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo44" aria-expanded="false" aria-controls="collapseTwo44">
What is profile status means?
        </a>
      </h4>
    </div>
    <div id="collapseTwo44" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo44">
      <div class="panel-body">
       Your profile status can either be set as 'Active' or 'Deactivate'. By default, the profile status is 'Active'. Setting the profile status to 'Deactivate' makes your profile invisible to others. Also you won’t be able to login and contact other profiles. Any member can change the status of profile.
       <br>
Login to your Malayali marriages account using your Username and Password.
<br>
Click on settings
<br>
Click on Hide Profile icon.
<br>
Enter Hide Profile up to Date
<br>
Click the Deactivate to hide your profile from others
<br>
Click the Un-Hide Profile button to Un-hide your profile


      </div>
    </div>
  </div>


<div class="panel panel-warning">
    <div class="panel-heading" role="tab" id="headingTwo54">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo54" aria-expanded="false" aria-controls="collapseTwo54">
 Can I activate my Malayali marriages account after deactivate?
        </a>
      </h4>
    </div>
    <div id="collapseTwo54" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo54">
      <div class="panel-body">
       Yes, you can activate your account after that particular period you choose to deactivate.
     


      </div>
    </div>
  </div>

<div class="panel panel-warning">
    <div class="panel-heading" role="tab" id="headingTwo55">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo55" aria-expanded="false" aria-controls="collapseTwo55">
What is Request to view photo?
        </a>
      </h4>
    </div>
    <div id="collapseTwo55" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo55">
      <div class="panel-body">
      This feature helps you to send a request to an Malayali marriages member to add his/her photo
If he/she has not added one.
     


      </div>
    </div>
  </div>







</div>
                        </div>
                    </div>
                </div>


<div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFive">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                          Search Profiles
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                        <div class="panel-body">
                            <div class="panel-group acrd-inner" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-warning">
    <div class="panel-heading" role="tab" id="headingOne51">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne51" aria-expanded="true" aria-controls="collapseOne">
What is Advanced Search?
        </a>
      </h4>
    </div>
    <div id="collapseOne51" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne51">
      <div class="panel-body">
       Advanced search enables Intimate portal users to narrow down search results as per their
preference. This is a detailed search and will give you better results. Following are various
criterion's available in advanced search.
       <br>
Search for Bride/Groom
 <br>
Between an Age Range
 <br>
Religion and Caste
<br>
Marital Status
<br>
Mother Tongue
<br>
Education & Job
<br>
Location (Country/State/District)
<br>
Physical and Life Style parameters
<br>
Horoscope parameters
<br>
Family Values and Financial Status

      </div>
    </div>
  </div>
  <div class="panel panel-warning">
    <div class="panel-heading" role="tab" id="headingTwo52">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo52" aria-expanded="false" aria-controls="collapseTwo52">
What is keyword Search?
        </a>
      </h4>
    </div>
    <div id="collapseTwo52" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo52">
      <div class="panel-body">
      This search will get results based on keywords found in the profile description of members
Example: Software Engineer, Brahmin Iyer, Loves pets, Cricket...

      </div>
    </div>
  </div>


  <div class="panel panel-warning">
    <div class="panel-heading" role="tab" id="headingTwo44">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo53" aria-expanded="false" aria-controls="collapseTwo53">
What is Web ID Search?
        </a>
      </h4>
    </div>
    <div id="collapseTwo53" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo53">
      <div class="panel-body">
      This search will get results based on the Web ID provided on registering.
Example: 3562
      </div>
    </div>
  </div>
 
  <div class="panel panel-warning">
    <div class="panel-heading" role="tab" id="headingTwo54">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo54" aria-expanded="false" aria-controls="collapseTwo54">
When I searched for a profile I get the message “No matching records found” .What is that?
        </a>
      </h4>
    </div>
    <div id="collapseTwo54" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo54">
      <div class="panel-body">
       This means the search criteria entered did not return any matching records from Malayali marriages
database. Please check your search criteria when you receive this message


      </div>
    </div>
  </div>

</div>
                        </div>
                    </div>
                </div>






<div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingSix">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Way to Reach Us?
                            </a>
                        </h4>
                    </div>
                    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                        <div class="panel-body">
                            <div class="panel-group acrd-inner" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-warning">
    <div class="panel-heading" role="tab" id="headingOne61">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne61" aria-expanded="true" aria-controls="collapseOne">
How can you contact us?
        </a>
      </h4>
    </div>
    <div id="collapseOne61" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne61">
      <div class="panel-body">
       You can contact us through

      </div>
    </div>
  </div>


</div>
                        </div>
                    </div>
                </div>















            </div>
        </div>
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


<div class="royl-faq-side">
<img src="<?php echo base_url(); ?>assets/images/crown.png" class="img-fluid">
<h4 class="text-center">ROYAL MARRIAGES</h4>
<a href="#"class="royl-reg">Register Now</a>
  </div>

  <div class="faq-call">
  <img src="<?php echo base_url(); ?>assets/images/aa.png" class="img-fluid"> 
  <h5>NEED ANY ASSISTANCE</h5> 
  <h5><b>MISSEDCALL </b> TO</h5>
  <h5><b><i class="fas fa-phone-volume" style="font-size: 25px;"></i> &nbsp; <span style="color: #f50163;">807 8000 801 </span></b></h5>
  </div>

      </div>
    </div>
  </div>
</section>


