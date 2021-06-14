<section class="branch-bacgrnd">
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

<section class="prv-sec">
  <div class="container-fluid default-container">
    <div class="row">
   
 <div class="col-lg-12 col-md-12 col-sm-12 col-12">
  <h2 class="malyali-hed"><img src="<?php echo base_url(); ?>assets/images/brnch.png" class="img-fluid branchs-img"> &nbsp;Our Branches</h2>
  
<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>

<div class="branches row">
  <div class="col-lg-6 brnch-brdr" style="text-align: center;">
               <h3 class="ad12">Head Office</h3>
               <p> 1st Floor, Lucky Star Building,
            <br>
           Near KTC Parcel Service, Market Road,
            <br>
            PIN - 682031, Ernakulam.

        
</p>
</div>
  <div class="col-lg-6"  style="text-align: center;">
    <h3 class="ad12">Branch</h3>
    <p> 1st Floor, Morning Star Building,
            <br>
            Opp.Excise Office, Kacheripady Jn.,
            <br>
             PIN- 682018, Ernakulam. 
        
</p>
  </div>
  </div>
  <div class="row">
  <div class="col-lg-12 branch-serch">
 <form class="card card-sm">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-search h4 text-body"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class="col">
                                        <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Enter Branch Location">
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button class="faq-search-btn" type="submit">Search</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
      </div>
</div>
<div class="row ">
  <div class="table-responsive">
<table class="table table-bordered bracnch-table ">
  <thead class="thead-inverse">
    <tr class="fst-hed-tr">
      <th>No : </th>
      <th>Branch</th>
      <th>Address</th>
      <th>Email</th>
      <th>Contact</th>
    </tr>
  </thead>
  <tbody>

    <?php 
    $n=1;
    foreach ($records as $row): ?>
    <tr>
        <td><?php echo $n++ ; ?></td>
        <td><?php echo $row->name;?></td>
        <td><?php echo $row->info;?></td>
        <td><?php echo $row->email;?></td>
        <td><a href="<?php echo $row->contact;?>"><?php echo $row->contact;?></a></td>
    </tr>
<?php endforeach; ?>

  </tbody>
</table>
</div>
</div>

</div>

  
    </div>
  </div>
</section>