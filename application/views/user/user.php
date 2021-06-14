
<section>
  <div class="container-fluid default-container">
    <div class="row">
      <div class="col-lg-2 col-md-2 col-sm-12 col-12 prof-pad-zero user-side-wrap mx-wdth-22">
    <div class="  row-prf">
           <div class="rh">
<img src="<?php echo base_url(); ?>assets/uploads/<?php echo $mydata[0]->img_name; ?>" class="img-responsive usr-prf-img">
</div>
      <div class=" usr-name-wrp">
<h6><?php echo strtoupper($mydata[0]->first_name); ?></h6>
<h5>ID-<?php echo $mydata[0]->web_id; ?></h5>
<h5><?php echo $package[0]->title; ?>&nbsp; PACKAGE</h5>

</div>

        </div>
<div class="menu-row">
 <ul class="sidenav">
          <li><a href=""> <i class="fas fa-list-ul lst"></i>&nbsp;  Add Photo<img src="<?php echo base_url(); ?>assets/images/arw.png" class="caret-dwn wdth-arw"></a></li>
           <li><a href=""><i class="fas fa-list-ul lst"></i>&nbsp; Edit Your Profile<img src="<?php echo base_url(); ?>assets/images/arw.png" class="caret-dwn wdth-arw"></a></li>
            <li><a href=""><i class="fas fa-list-ul lst"></i>&nbsp; Edit Partner Pregrences<img src="<?php echo base_url(); ?>assets/images/arw.png" class="caret-dwn wdth-arw"></a></li>
            <li><a href=""><i class="fas fa-list-ul lst"></i>&nbsp; Settings<img src="<?php echo base_url(); ?>assets/images/arw.png" class="caret-dwn wdth-arw"></a></li>
            <li><a href=""><i class="fas fa-list-ul lst"></i>&nbsp; Wedding Services<img src="<?php echo base_url(); ?>assets/images/arw.png" class="caret-dwn wdth-arw"></a></li>
            <li><a href=""> <i class="fas fa-list-ul lst"></i>&nbsp; Discover Matches<img src="<?php echo base_url(); ?>assets/images/arw.png" class="caret-dwn wdth-arw"></a></li>
            <li>
                           <a class="accordion-toggle toggle-switch collapsed" data-toggle="collapse" href="#submenu-1" aria-expanded="false">
                           <span class="sidebar-icon"><i class="fas fa-list-ul lst"></i>&nbsp;</span>
                           <span class="sidebar-title">Search</span>
                         <img src="<?php echo base_url(); ?>assets/images/down.png" class="caret-dwn wdth-arw">
                           </a>
                           <ul id="submenu-1" class="panel-collapse submnu panel-switch collapse" role="menu" aria-expanded="false" style="height: 10px;">
                              <li><a href="">Quick Search</a></li>
                        <li><a href="">Advanced Search</a></li>
                        <li><a href="">Keyword Search</a></li>
                        <li><a href="">Search By Profile ID</a></li>
                              <li><a href="#">Saved Searches</a></li>
                           </ul>
                        </li>
            <li>
                           <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-2">
                           <span class="sidebar-icon"><i class="fas fa-list-ul lst"></i>&nbsp;</span>
                           <span class="sidebar-title">Matches</span>
                           <img src="<?php echo base_url(); ?>assets/images/down.png" class="caret-dwn wdth-arw">
                           </a>
                           <ul id="submenu-2" class="panel-collapse submnu collapse panel-switch" role="menu">
                           <li><a href="">New Matches</a></li>
                        <li><a href="">My Matches</a></li>
                        <li><a href="">Prefered Matches</a></li>
                        <li><a href="">Match to Me</a></li>
                        <li><a href="">Mutual Matches</a></li>
                        <li><a href="">Premium Matches</a></li>
                        <li><a href="">Horoscop Matches</a></li>
                           </ul>
                        </li>


                         <li>
                           <a class="accordion-toggle toggle-switch collapsed" data-toggle="collapse" href="#submenu-4" aria-expanded="false">
                           <span class="sidebar-icon"><i class="fas fa-list-ul lst"></i>&nbsp;</span>
                           <span class="sidebar-title">Interests</span>
                          <img src="<?php echo base_url(); ?>assets/images/down.png" class="caret-dwn wdth-arw">
                           </a>
                           <ul id="submenu-4" class="panel-collapse submnu panel-switch collapse" role="menu" aria-expanded="false" style="height: 10px;">
                              <li><a href="">Interest received</a></li>
                              <li><a href="">Interest sent</a></li>
                            
                           </ul>
                        </li>

                         <li>
                           <a class="accordion-toggle toggle-switch collapsed" data-toggle="collapse" href="#submenu-6" aria-expanded="false">
                           <span class="sidebar-icon"><i class="fas fa-list-ul lst"></i>&nbsp;</span>
                           <span class="sidebar-title">Profile Visits</span>
                          <img src="<?php echo base_url(); ?>assets/images/down.png" class="caret-dwn wdth-arw">
                           </a>
                           <ul id="submenu-6" class="panel-collapse submnu panel-switch collapse" role="menu" aria-expanded="false" style="height: 10px;">
                              <li><a href="">Who Visited my profile</a></li>
                              <li><a href="">Profile visited by me</a></li>
                            
                           </ul>
                        </li>

                        <li>
                           <a class="accordion-toggle toggle-switch" data-toggle="collapse" href="#submenu-7" aria-expanded="true">
                           <span class="sidebar-icon"><i class="fas fa-list-ul lst"></i >&nbsp; </span>
                           <span class="sidebar-title"> Contact View</span>
                            <img src="<?php echo base_url(); ?>assets/images/down.png" class="caret-dwn wdth-arw">
                           </a>
                           <ul id="submenu-7" class="panel-collapse submnu panel-switch collapse in" role="menu" aria-expanded="true" style="">
                              <li><a href="">Who visited my contact</a></li>
                              <li><a href="">Contact visited by me</a></li>
                           </ul>
                        </li>



<li>
                           <a class="accordion-toggle toggle-switch collapsed" data-toggle="collapse" href="#submenu-5" aria-expanded="false">
                           <span class="sidebar-icon"><i class="fas fa-list-ul lst"></i>&nbsp;</span>
                           <span class="sidebar-title">Short List</span>
                          <img src="<?php echo base_url(); ?>assets/images/down.png" class="caret-dwn wdth-arw">
                           </a>
                           <ul id="submenu-5" class="panel-collapse submnu panel-switch collapse" role="menu" aria-expanded="false" style="height: 10px;">
                              <li><a href="">Who shortlisted me</a></li>
                              <li><a href="">My shortlist</a></li>
                            
                           </ul>
                        </li>
            <li>
                           <a class="accordion-toggle toggle-switch collapsed" data-toggle="collapse" href="#submenu-3" aria-expanded="false">
                           <span class="sidebar-icon"><i class="fas fa-list-ul lst"></i>&nbsp;</span>
                           <span class="sidebar-title">Requests</span>
                           <img src="<?php echo base_url(); ?>assets/images/down.png" class="caret-dwn wdth-arw">
                           </a>
                           <ul id="submenu-3" class="panel-collapse submnu panel-switch collapse" role="menu" aria-expanded="false" style="height: 10px;">
                              <li><a href="">Contact received</a></li>
                              <li><a href="">Contact sent</a></li>
                              <li><a href="">Horoscope Received/sent</a></li>
                           </ul>
                        </li>




                       

       
         <li>
                           <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-8">
                           <span class="sidebar-icon"><i class="fas fa-list-ul lst"></i > &nbsp; </span>
                           <span class="sidebar-title">Accepted</span>
                            <img src="<?php echo base_url(); ?>assets/images/down.png" class="caret-dwn wdth-arw">
                           </a>
                           <ul id="submenu-8" class="panel-collapse submnu collapse panel-switch" role="menu">
                              <li><a href="">Who accepted me</a></li>
                              <li><a href="">I accepted</a></li>
                           </ul>
                        </li>
          <li>
                           <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-9">
                           <span class="sidebar-icon"><i class="fas fa-list-ul lst"></i > &nbsp; </span>
                           <span class="sidebar-title">Declined</span>
                            <img src="<?php echo base_url(); ?>assets/images/down.png" class="caret-dwn wdth-arw">
                           </a>
                           <ul id="submenu-9" class="panel-collapse submnu collapse panel-switch" role="menu">
                              <li><a href="">Who Declined me</a></li>
                              <li><a href="">I Declined</a></li>
                           </ul>
                        </li>
          <li>
                           <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-10">
                           <span class="sidebar-icon"><i class="fas fa-list-ul lst"></i > &nbsp; </span>
                           <span class="sidebar-title">Pending</span>
                             <img src="<?php echo base_url(); ?>assets/images/down.png" class="caret-dwn wdth-arw">
                           </a>
                           <ul id="submenu-10" class="panel-collapse submnu collapse panel-switch" role="menu">
                              <li><a href="">Who is pending me</a></li>
                              <li><a href="">My pendings</a></li>
                           </ul>
                        </li>
         <li class="list-none">
                           <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-11">
                           <span class="sidebar-icon"><i class="fas fa-list-ul lst"></i > &nbsp; </span>
                           <span class="sidebar-title">Blocked</span>
                           <img src="<?php echo base_url(); ?>assets/images/down.png" class="caret-dwn wdth-arw">
                           </a>
                           <ul id="submenu-11" class="panel-collapse submnu collapse panel-switch" role="menu">
                              <li><a href="">Who blocked me</a></li>
                              <li><a href="">I blocked</a></li>
                           </ul>
                        </li>
         
        </ul>
      </div> 

    <div class="col-md-12 pad-0">
<img src="<?php echo base_url(); ?>assets/images/LEFT-1.png" class="img-fluid brdr-radius">

<img src="<?php echo base_url(); ?>assets/images/LEFT-2.jpg" class="img-fluid brdr-radius">
<img src="<?php echo base_url(); ?>assets/images/LEF-3.png" class="img-fluid brdr-radius">

    </div>  
 </div>



      <div class="col-lg-8 col-md-8 col-sm-12 col-12 mx-wdth-56">
        <div class="cntr-usr-wrap">
        <h2 class="user-hed-1"><i class="fas fa-file-signature"></i> &nbsp; COMPLETE YOUR PROFILE</h2>
       <div class="row asa">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <div class="cntr-usr-wraps-2 row">
                      <div class="col-md-2 col-3">
                       <img src="<?php echo base_url(); ?>assets/images/prefer-bg.png" class="img-fluid">
                      </div>
                       <div class="col-md-10 col-9">
                <h4>Manage your partner prefrences to get suitable matches</h4>
                <a href="#" class="manage-btn"> <i class="fas fa-long-arrow-alt-right"></i>&nbsp;  Manage your partner prefrences </a>
              </div>
              </div>
               </div>

               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wdth-fea-100 pad-brd">
                    <div class="cntr-usr-wraps-2 row">
                      <div class="col-md-2 col-3">
                       <img src="<?php echo base_url(); ?>assets/images/prefer-bg.png" class="img-fluid">
                      </div>
                       <div class="col-md-10 col-9">
                <h4>Manage your partner prefrences to get suitable matches</h4>
                <a href="#" class="manage-btn"> <i class="fas fa-long-arrow-alt-right"></i>&nbsp;  Manage your partner prefrences </a>
              </div>
              </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wdth-fea-100 pad-brd">
                  <div class="cntr-usr-wraps-2 row">
                      <div class="col-md-2 col-3">
                       <img src="<?php echo base_url(); ?>assets/images/prefer-bg.png" class="img-fluid">
                      </div>
                       <div class="col-md-10 col-9">
                <h4>Manage your partner prefrences to get suitable matches</h4>
                <a href="#" class="manage-btn"> <i class="fas fa-long-arrow-alt-right"></i>&nbsp;  Manage your partner prefrences </a>
              </div>
              </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wdth-fea-100 pad-brd">
                 <div class="cntr-usr-wraps-2 row">
                      <div class="col-md-2 col-3">
                       <img src="<?php echo base_url(); ?>assets/images/prefer-bg.png" class="img-fluid">
                      </div>
                       <div class="col-md-10 col-9">
                <h4>Manage your partner prefrences to get suitable matches</h4>
                <a href="#" class="manage-btn"> <i class="fas fa-long-arrow-alt-right"></i>&nbsp;  Manage your partner prefrences </a>
              </div>
              </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wdth-fea-100 pad-brd">
                 <div class="cntr-usr-wraps-2 row">
                      <div class="col-md-2 col-3">
                       <img src="<?php echo base_url(); ?>assets/images/prefer-bg.png" class="img-fluid">
                      </div>
                       <div class="col-md-10 col-9">
                <h4>Manage your partner prefrences to get suitable matches</h4>
                <a href="#" class="manage-btn"> <i class="fas fa-long-arrow-alt-right"></i>&nbsp;  Manage your partner prefrences </a>
              </div>
              </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wdth-fea-100 pad-brd">
                  <div class="cntr-usr-wraps-2 row">
                      <div class="col-md-2 col-3">
                       <img src="<?php echo base_url(); ?>assets/images/prefer-bg.png" class="img-fluid">
                      </div>
                       <div class="col-md-10 col-9">
                <h4>Manage your partner prefrences to get suitable matches</h4>
                <a href="#" class="manage-btn"> <i class="fas fa-long-arrow-alt-right"></i>&nbsp;  Manage your partner prefrences </a>
              </div>
              </div>
               </div>
        
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wdth-fea-100 pad-brd">
                   <div class="cntr-usr-wraps-2 row">
                      <div class="col-md-2 col-3">
                       <img src="<?php echo base_url(); ?>assets/images/prefer-bg.png" class="img-fluid">
                      </div>
                       <div class="col-md-10  col-9">
                <h4>Manage your partner prefrences to get suitable matches</h4>
                <a href="#" class="manage-btn"> <i class="fas fa-long-arrow-alt-right"></i>&nbsp;  Manage your partner prefrences </a>
              </div>
              </div>
            </div>

      </div>
    
    </div>

<div class="latest-updts-wrap">
 <h2 class="user-hed-1"> <img src="<?php echo base_url(); ?>assets/images/LOKK.png" class="img-fluid lve-img">&nbsp; LATEST UPDATES </h2>
 <div class="row  as" >
  <div class="col-lg-2 width-25">
    <div class="up-img">
    <img src="<?php echo base_url(); ?>assets/images/usr-1.jpg" class="img-fluid"> <span>25</span> 
  </div>

<h5 class="latest-up-subhed"><a href="#">Who Viewed your porfile</a></h5>
  </div>
   <div class="col-lg-2 width-25">
      <div class="up-img">
    <img src="<?php echo base_url(); ?>assets/images/up-2.jpg" class="img-fluid"> <span>25</span>
     </div>
    <h5 class="latest-up-subhed"><a href="#">Who sent interest</a></h5>

</div>
   <div class="col-lg-2 width-25">
    <div class="up-img">
    <img src="<?php echo base_url(); ?>assets/images/up-3.jpg" class="img-fluid"> <span>25</span>
  </div>
    <h5 class="latest-up-subhed"><a href="#">Who accepted your interest</a></h5>
  </div>
   <div class="col-lg-2 width-25">
     <div class="up-img">
    <img src="<?php echo base_url(); ?>assets/images/up-4.jpg" class="img-fluid"><span>25</span>
  </div>
    <h5 class="latest-up-subhed"><a href="#">Members looking for you</a></h5>
  </div>
   <div class="col-lg-2 width-25">
    <div class="up-img">
    <img src="<?php echo base_url(); ?>assets/images/up-5.jpg" class="img-fluid"><span>25</span>
    </div>
    <h5 class="latest-up-subhed"><a href="#">Who sent Requests</a></h5>
  </div>
  <div class="col-lg-2 width-25">
    <div class="up-img">
    <img src="<?php echo base_url(); ?>assets/images/up-6.jpg" class="img-fluid"><span>25</span>
    </div>
    <h5 class="latest-up-subhed"><a href="#">Awaiting your response</a></h5>
  </div>
 </div>
</div>

<div class="new-mchs-foru-wrp">
<h2 class="user-hed-1"> <img src="<?php echo base_url(); ?>assets/images/lve.jpg" class="img-fluid lve-img">&nbsp; NEW MATCHES FOR YOU </h2>
<a href="" class="view-all-btn">View All</a>
<div class="nw-match-row row asa1 pdn-12">
<div class="col-lg-12 col-md-12 col-12  pad-9">
<div class="mch-innr-wrp">
<a href="#">  
  <img src="<?php echo base_url(); ?>assets/images/img-1.jpg" class="img-fluid">
  <h2>MM 257423</h2>
  <h6>27yrs, 158cm-57ft 2in</h6>
</a>
  <button class=" sent-interest-btn"><i class="fas fa-heart clr-love"></i>&nbsp;  Sent Interest</button>
</div>
</div>
<div class="col-lg-12 col-md-12 col-12 pad-9">
  <div class="mch-innr-wrp">  
    <a href="#"> 
  <img src="<?php echo base_url(); ?>assets/images/img-1.jpg" class="img-fluid">
  <h2>MM 257423</h2>
  <h6>27yrs, 158cm-57ft 2in</h6>
</a>
  <button class=" sent-interest-btn"><i class="fas fa-heart clr-love"></i>&nbsp;  Sent Interest</button>
</div>
</div>
<div class="col-lg-12 col-md-12 col-12 pad-9">
  <div class="mch-innr-wrp">  
    <a href="#"> 
  <img src="<?php echo base_url(); ?>assets/images/img-1.jpg" class="img-fluid">
  <h2>MM 257423</h2>
  <h6>27yrs, 158cm-57ft 2in</h6>
</a>
  <button class=" sent-interest-btn"><i class="fas fa-heart clr-love"></i>&nbsp;  Sent Interest</button>
</div>
</div>
<div class="col-lg-12 col-md-12 col-12 pad-9">
  <div class="mch-innr-wrp">  
    <a href="#"> 
  <img src="<?php echo base_url(); ?>assets/images/img-1.jpg" class="img-fluid">
  <h2>MM 257423</h2>
  <h6>27yrs, 158cm-57ft 2in</h6>
</a>
  <button class=" sent-interest-btn"><i class="fas fa-heart clr-love"></i>&nbsp;  Sent Interest</button>
</div>
</div>
<div class="col-lg-12 col-md-12 col-12 pad-9">
  <div class="mch-innr-wrp"> 
  <a href="#">  
  <img src="<?php echo base_url(); ?>assets/images/img-1.jpg" class="img-fluid">
  <h2>MM 257423</h2>
  <h6>27yrs, 158cm-57ft 2in</h6>
</a>
  <button class=" sent-interest-btn"><i class="fas fa-heart clr-love"></i>&nbsp;  Sent Interest</button>
</div>
</div>
<div class="col-lg-12 col-md-12 col-12 pad-9">
  <div class="mch-innr-wrp">  
  <img src="<?php echo base_url(); ?>assets/images/img-1.jpg" class="img-fluid">
  <h2>MM 257423</h2>
  <h6>27yrs, 158cm-57ft 2in</h6>
  <button class=" sent-interest-btn"><i class="fas fa-heart clr-love"></i>&nbsp;  Sent Interest</button>
</div>
</div>
</div>

</div>

<div class="new-mchs-foru-wrp">
<h2 class="user-hed-1"> <img src="<?php echo base_url(); ?>assets/images/lve.jpg" class="img-fluid lve-img"> &nbsp;WHO VIEWED YOUR PROFILE </h2>
<a href="" class="view-all-btn">View All</a>
<div class="nw-match-row row asa1 pdn-12">
<div class="col-lg-12 col-md-12 col-12 pad-9">
<div class="mch-innr-wrp">  
  <a href="#"> 
  <img src="<?php echo base_url(); ?>assets/images/img-1.jpg" class="img-fluid">
  <h2>MM 257423</h2>
  <h6>27yrs, 158cm-57ft 2in</h6>
</a>
  <button class=" sent-interest-btn"><i class="fas fa-heart clr-love"></i>&nbsp;  Sent Interest</button>
</div>
</div>
<div class="col-lg-12 col-md-12 col-12 pad-9">
  <div class="mch-innr-wrp">  
    <a href="#"> 
  <img src="<?php echo base_url(); ?>assets/images/img-1.jpg" class="img-fluid">
  <h2>MM 257423</h2>
  <h6>27yrs, 158cm-57ft 2in</h6>
</a>
  <button class=" sent-interest-btn"><i class="fas fa-heart clr-love"></i>&nbsp;  Sent Interest</button>
</div>
</div>
<div class="col-lg-12 col-md-12 col-12 pad-9">
  <div class="mch-innr-wrp">  
    <a href="#"> 
  <img src="<?php echo base_url(); ?>assets/images/img-1.jpg" class="img-fluid">
  <h2>MM 257423</h2>
  <h6>27yrs, 158cm-57ft 2in</h6>
</a>
  <button class=" sent-interest-btn"><i class="fas fa-heart clr-love"></i>&nbsp;  Sent Interest</button>
</div>
</div> 
<div class="col-lg-12 col-md-12 col-12 pad-9">
  <div class="mch-innr-wrp">  
    <a href="#"> 
  <img src="<?php echo base_url(); ?>assets/images/img-1.jpg" class="img-fluid">
  <h2>MM 257423</h2>
  <h6>27yrs, 158cm-57ft 2in</h6>
</a>
  <button class=" sent-interest-btn"><i class="fas fa-heart clr-love"></i>&nbsp;  Sent Interest</button>
</div>
</div>
<div class="col-lg-12 col-md-12 col-12 pad-9">
  <div class="mch-innr-wrp">  
    <a href="#"> 
  <img src="<?php echo base_url(); ?>assets/images/img-1.jpg" class="img-fluid">
  <h2>MM 257423</h2>
  <h6>27yrs, 158cm-57ft 2in</h6>
</a>
  <button class=" sent-interest-btn"><i class="fas fa-heart clr-love"></i>&nbsp;  Sent Interest</button>
</div>
</div>
<div class="col-lg-12 col-md-12 col-12 pad-9">
  <div class="mch-innr-wrp"> 
  <a href="#">  
  <img src="<?php echo base_url(); ?>assets/images/img-1.jpg" class="img-fluid">
  <h2>MM 257423</h2>
  <h6>27yrs, 158cm-57ft 2in</h6>
</a>
  <button class=" sent-interest-btn"><i class="fas fa-heart clr-love"></i>&nbsp;  Sent Interest</button>
</div>
</div>
</div>

</div>

<div class="new-mchs-foru-wrp " style="margin-bottom: 0;">
<h2 class="user-hed-1"> <img src="<?php echo base_url(); ?>assets/images/lve.jpg" class="img-fluid lve-img"> PARTNER PREFERENCES </h2>
<a href="" class="view-all-btn">View All</a>
<div class="nw-match-row row part">
<div class="col-lg-12 col-md-12 col-12 pad-px">
<div class="mch-innr-wrp rews"> 
<div class="col-md-7 col-12 pad-left-0"> 
  <img src="<?php echo base_url(); ?>assets/images/img-1.jpg" class="img-fluid">
</div>
<div class="col-md-5 col-12 pad-left-0 "> 
  <a href="#"> 
<h2>MM 257423</h2>
  <h6><i class="fas fa-user-circle"></i>&nbsp; 27yrs, 158cm-57ft</h6>
  <h6><i class="fas fa-book-open"></i>&nbsp; Roman Catholic</h6>
  <h6><i class="fas fa-map-marker-alt"></i>&nbsp; Pala, Kerala</h6>
  <h6><i class="fas fa-graduation-cap"></i>&nbsp; B-tech</h6>
</a>
  <button class=" sent-interest-btn sent-interest-btn-2"><i class="fas fa-heart clr-love"></i>&nbsp;  Sent Interest</button>
</div>
</div>
</div>
<div class="col-lg-12 col-md-12 col-12 pad-px">
<div class="mch-innr-wrp rews"> 
<div class="col-md-7 col-12 pad-left-0"> 
  <img src="<?php echo base_url(); ?>assets/images/img-1.jpg" class="img-fluid">
</div>
<div class="col-md-5 col-12 pad-left-0"> 
  <a href="#"> 
  <h2>MM 257423</h2>
  <h6><i class="fas fa-user-circle"></i>&nbsp; 27yrs, 158cm-57ft</h6>
  <h6><i class="fas fa-book-open"></i>&nbsp; Roman Catholic</h6>
  <h6><i class="fas fa-map-marker-alt"></i>&nbsp; Pala, Kerala</h6>
  <h6><i class="fas fa-graduation-cap"></i>&nbsp; B-tech</h6>
</a>
  <button class=" sent-interest-btn sent-interest-btn-2"><i class="fas fa-heart clr-love"></i>&nbsp;  Sent Interest</button>
</div>
</div>
</div>
<div class="col-lg-12 col-md-12 col-12 pad-px">
<div class="mch-innr-wrp rews"> 
<div class="col-md-7 col-12 pad-left-0"> 
  <img src="<?php echo base_url(); ?>assets/images/img-1.jpg" class="img-fluid">
</div>
<div class="col-md-5 col-12 pad-left-0"> 
  <a href="#"> 
<h2>MM 257423</h2>
  <h6><i class="fas fa-user-circle"></i>&nbsp; 27yrs, 158cm-57ft</h6>
  <h6><i class="fas fa-book-open"></i>&nbsp; Roman Catholic</h6>
  <h6><i class="fas fa-map-marker-alt"></i>&nbsp; Pala, Kerala</h6>
  <h6><i class="fas fa-graduation-cap"></i>&nbsp; B-tech</h6>
</a>
  <button class=" sent-interest-btn sent-interest-btn-2"><i class="fas fa-heart clr-love"></i>&nbsp;  Sent Interest</button>
</div>
</div>
</div>
<div class="col-lg-12 col-md-12 col-12 pad-px">
<div class="mch-innr-wrp rews"> 
<div class="col-md-7 col-12 pad-left-0"> 
  <img src="<?php echo base_url(); ?>assets/images/img-1.jpg" class="img-fluid">
</div>
<div class="col-md-5 col-12 pad-left-0"> 
  <a href="#"> 
<h2>MM 257423</h2>
  <h6><i class="fas fa-user-circle"></i>&nbsp; 27yrs, 158cm-57ft</h6>
  <h6><i class="fas fa-book-open"></i>&nbsp; Roman Catholic</h6>
  <h6><i class="fas fa-map-marker-alt"></i>&nbsp; Pala, Kerala</h6>
  <h6><i class="fas fa-graduation-cap"></i>&nbsp; B-tech</h6>
</a>
  <button class=" sent-interest-btn sent-interest-btn-2"><i class="fas fa-heart clr-love"></i>&nbsp;  Sent Interest</button>
</div>
</div>
</div>
<div class="col-lg-12 col-md-12 col-12 pad-px">
<div class="mch-innr-wrp rews"> 
<div class="col-md-7 col-12 pad-left-0"> 
  <img src="<?php echo base_url(); ?>assets/images/img-1.jpg" class="img-fluid">
</div>
<div class="col-md-5 col-12 pad-left-0"> 
  <a href="#"> 
<h2>MM 257423</h2>
  <h6><i class="fas fa-user-circle"></i>&nbsp; 27yrs, 158cm-57ft</h6>
  <h6><i class="fas fa-book-open"></i>&nbsp; Roman Catholic</h6>
  <h6><i class="fas fa-map-marker-alt"></i>&nbsp; Pala, Kerala</h6>
  <h6><i class="fas fa-graduation-cap"></i>&nbsp; B-tech</h6>
</a>
  <button class=" sent-interest-btn sent-interest-btn-2"><i class="fas fa-heart clr-love"></i>&nbsp;  Sent Interest</button>
</div>
</div>
</div>
<div class="col-lg-12 col-md-12 col-12 pad-px">
<div class="mch-innr-wrp rews"> 
<div class="col-md-7 col-12 pad-left-0"> 
  <img src="<?php echo base_url(); ?>assets/images/img-1.jpg" class="img-fluid">
</div>
<div class="col-md-5 col-12 pad-left-0">
<a href="#">  
<h2>MM 257423</h2>
  <h6><i class="fas fa-user-circle"></i>&nbsp; 27yrs, 158cm-57ft</h6>
  <h6><i class="fas fa-book-open"></i>&nbsp; Roman Catholic</h6>
  <h6><i class="fas fa-map-marker-alt"></i>&nbsp; Pala, Kerala</h6>
  <h6><i class="fas fa-graduation-cap"></i>&nbsp; B-tech</h6>
</a>
  <button class=" sent-interest-btn sent-interest-btn-2"><i class="fas fa-heart clr-love"></i>&nbsp;  Sent Interest</button>
</div>
</div>
</div>
</div>

</div>
<div class="col-md-12">
<div class="row usr-no-arw">
  <div class="new-mchs-foru-wrp col-md-6 col-12 mrg-1">
    <h2 class="user-hed-1 last-hed"><img src="<?php echo base_url(); ?>assets/images/lve.jpg" class="img-fluid lve-img"> WHO VIEWED YOUR CONTACT </h2>
    <div class="nw-match-row row asa2">
<div class="col-lg-12 col-md-12 col-12 pad-7">
<div class="mch-innr-wrp rews"> 
<div class="col-md-7 col-12 pad-left-0"> 
  <img src="<?php echo base_url(); ?>assets/images/img-1.jpg" class="img-fluid">
</div>
<div class="col-md-5 col-12 pad-left-0 "> 
  <a href="#"> 
<h2>MM 257423</h2>
  <h6><i class="fas fa-user-circle"></i>&nbsp; 27yrs, 158cm</h6>
  <h6><i class="fas fa-book-open"></i>&nbsp; Roman Catholic</h6>
  <h6><i class="fas fa-map-marker-alt"></i>&nbsp; Pala, Kerala</h6>
  <h6><i class="fas fa-graduation-cap"></i>&nbsp; B-tech</h6>
</a>
  <button class=" sent-interest-btn sent-interest-btn-2"><i class="fas fa-heart clr-love"></i>&nbsp;  Sent Interest</button>
</div>
</div>
</div>
<div class="col-lg-12 col-md-12 col-12 pad-7">
<div class="mch-innr-wrp rews"> 
<div class="col-md-7 col-12 pad-left-0"> 
  <img src="<?php echo base_url(); ?>assets/images/img-1.jpg" class="img-fluid">
</div>
<div class="col-md-5 col-12 pad-left-0">
<a href="#">  
  <h2>MM 257423</h2>
  <h6><i class="fas fa-user-circle"></i>&nbsp; 27yrs, 158cm</h6>
  <h6><i class="fas fa-book-open"></i>&nbsp; Roman Catholic</h6>
  <h6><i class="fas fa-map-marker-alt"></i>&nbsp; Pala, Kerala</h6>
  <h6><i class="fas fa-graduation-cap"></i>&nbsp; B-tech</h6>
</a>
  <button class=" sent-interest-btn sent-interest-btn-2"><i class="fas fa-heart clr-love"></i>&nbsp;  Sent Interest</button>
</div>
</div>
</div>
<div class="col-lg-12 col-md-12 col-12 pad-7">
<div class="mch-innr-wrp rews"> 
<div class="col-md-7 col-12 pad-left-0"> 
  <img src="<?php echo base_url(); ?>assets/images/img-1.jpg" class="img-fluid">
</div>
<div class="col-md-5 col-12 pad-left-0"> 
  <a href="#"> 
<h2>MM 257423</h2>
  <h6><i class="fas fa-user-circle"></i>&nbsp; 27yrs, 158cm</h6>
  <h6><i class="fas fa-book-open"></i>&nbsp; Roman Catholic</h6>
  <h6><i class="fas fa-map-marker-alt"></i>&nbsp; Pala, Kerala</h6>
  <h6><i class="fas fa-graduation-cap"></i>&nbsp; B-tech</h6>
</a>
  <button class=" sent-interest-btn sent-interest-btn-2"><i class="fas fa-heart clr-love"></i>&nbsp;  Sent Interest</button>
</div>
</div>
</div>


</div>
</div>
<div class="new-mchs-foru-wrp col-md-6 col-12 mrg-2">
  <h2 class="user-hed-1 last-hed"><img src="<?php echo base_url(); ?>assets/images/lve.jpg" class="img-fluid lve-img"> WHO SHORTLISTED YOUR PROFILE</h2>
   <div class="nw-match-row row asa2">
<div class="col-lg-12 col-md-12 col-12 pad-7">
<div class="mch-innr-wrp rews"> 
<div class="col-md-7 col-12 pad-left-0"> 
  <img src="<?php echo base_url(); ?>assets/images/img-1.jpg" class="img-fluid">
</div>
<div class="col-md-5 col-12 pad-left-0 "> 
  <a href="#"> 
<h2>MM 257423</h2>
  <h6><i class="fas fa-user-circle"></i>&nbsp; 27yrs, 158cm</h6>
  <h6><i class="fas fa-book-open"></i>&nbsp; Roman Catholic</h6>
  <h6><i class="fas fa-map-marker-alt"></i>&nbsp; Pala, Kerala</h6>
  <h6><i class="fas fa-graduation-cap"></i>&nbsp; B-tech</h6>
</a>
  <button class=" sent-interest-btn sent-interest-btn-2"><i class="fas fa-heart clr-love"></i>&nbsp;  Sent Interest</button>
</div>
</div>
</div>
<div class="col-lg-12 col-md-12 col-12 pad-7">
<div class="mch-innr-wrp rews"> 
<div class="col-md-7 col-12 pad-left-0"> 
  <img src="<?php echo base_url(); ?>assets/images/img-1.jpg" class="img-fluid">
</div>
<div class="col-md-5 col-12 pad-left-0"> 
  <a href="#"> 
  <h2>MM 257423</h2>
  <h6><i class="fas fa-user-circle"></i>&nbsp; 27yrs, 158cm</h6>
  <h6><i class="fas fa-book-open"></i>&nbsp; Roman Catholic</h6>
  <h6><i class="fas fa-map-marker-alt"></i>&nbsp; Pala, Kerala</h6>
  <h6><i class="fas fa-graduation-cap"></i>&nbsp; B-tech</h6>
  <button class=" sent-interest-btn sent-interest-btn-2"><i class="fas fa-heart clr-love"></i>&nbsp;  Sent Interest</button>
</a>
</div>
</div>
</div>
<div class="col-lg-12 col-md-12 col-12 pad-7">
<div class="mch-innr-wrp rews"> 
<div class="col-md-7 col-12 pad-left-0"> 
  <img src="<?php echo base_url(); ?>assets/images/img-1.jpg" class="img-fluid">
</div>
<div class="col-md-5 col-12 pad-left-0">
 <a href="#"> 
<h2>MM 257423</h2>
  <h6><i class="fas fa-user-circle"></i>&nbsp; 27yrs, 158cm</h6>
  <h6><i class="fas fa-book-open"></i>&nbsp; Roman Catholic</h6>
  <h6><i class="fas fa-map-marker-alt"></i>&nbsp; Pala, Kerala</h6>
  <h6><i class="fas fa-graduation-cap"></i>&nbsp; B-tech</h6>
</a>
  <button class=" sent-interest-btn sent-interest-btn-2"><i class="fas fa-heart clr-love"></i>&nbsp;  Sent Interest</button>
</div>
</div>
</div>


</div>
</div>
</div>
</div>




  </div>



<div class="col-lg-2 col-md-2 col-sm-12 col-12 prof-pad-zero mx-wdth-22">
  <div class="prgrs-wrp">
    
 <div class="progress blue">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="inner-circle"></div>
                <div class="progress-value"><span>56</span>%</div>
            </div>
            <h3 class="prgrs-hed">44% Need to complete</h3>
            <p class="prgrs-p">Fill in your details to maximize your chances of getting responses to your profile.</p>
              <a href="#" class="cmplte-btn">Complete your profile now </a>
          </div>

  <div class="wrp-AD">  
 <img src="<?php echo base_url(); ?>assets/images/Right-1.png" class="img-fluid brdr-radius ad-mrg">
<img src="<?php echo base_url(); ?>assets/images/Right-2.png" class="img-fluid brdr-radius ad-2">
<img src="<?php echo base_url(); ?>assets/images/Right-3.jpg" class="img-fluid brdr-radius ad-2">
<img src="<?php echo base_url(); ?>assets/images/Right-4.png" class="img-fluid brdr-radius ad-2">
<!-- <img src="<?php echo base_url(); ?>assets/images/bbb.jpg" class="img-fluid brdr-radius">
<img src="<?php echo base_url(); ?>assets/images/ok.jpg" class="img-fluid brdr-radius"> -->
</div>

      </div>

</section>

      