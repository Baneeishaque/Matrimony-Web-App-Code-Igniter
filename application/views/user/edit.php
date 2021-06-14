<section>
         <div class="container-fluid default-container">
         <div class="row">
         <div class="col-lg-2 col-md-2 col-sm-12 col-12 prof-pad-zero user-side-wrap mx-wdth-22">
            <div class="main prof-edit">
               <div class="slider slider-for">
                  <div>
                     <img src="<?php echo base_url(); ?>assets/uploads/<?php echo $mydata[0]->img_name; ?>" class="img-fluid">
                     <a href="#">
                        <h6 class="set-as">Set as Primary Image &nbsp; <i class="fas fa-check-circle"></i></h6>
                     </a>
                  </div>
                  <div>
                     <img src="<?php echo base_url(); ?>assets/images/Big-2.jpg" class="img-fluid" id="myImg" src="img_snow.jpg" alt="Snow"> 
                     <a href="#">
                        <h6 class="set-as">Set as Primary Image &nbsp; <i class="fas fa-check-circle"></i></h6>
                     </a>
                  </div>
                  <div>
                     <img src="<?php echo base_url(); ?>assets/images/Big-2.jpg" class="img-fluid"> 
                     <a href="#">
                        <h6 class="set-as">Set as Primary Image &nbsp; <i class="fas fa-check-circle"></i></h6>
                     </a>
                  </div>
                  <div>
                     <img src="<?php echo base_url(); ?>assets/images/Big-2.jpg" class="img-fluid"> 
                     <a href="#">
                        <h6 class="set-as">Set as Primary Image &nbsp; <i class="fas fa-check-circle"></i></h6>
                     </a>
                  </div>
               </div>
               <div id="myModal" class="modal">
                  <span class="close">&times;</span>
                  <img class="modal-content" id="img01">
                  <div id="caption"></div>
               </div>
               <div class="slider slider-nav">
                  <div><img src="<?php echo base_url(); ?>assets/uploads/<?php echo $mydata[0]->img_name; ?>" class="img-fluid"></div>
                  <div><img src="<?php echo base_url(); ?>assets/images/Big-2.jpg" class="img-fluid"></div>
                  <div><img src="<?php echo base_url(); ?>assets/images/Big-2.jpg" class="img-fluid"></div>
                  <div><img src="<?php echo base_url(); ?>assets/images/Big-2.jpg" class="img-fluid"></div>
               </div>
               <!--   <div class="action">
                  <a href="#" data-slide="3"></a>
                  <a href="#" data-slide="4"></a>
                  <a href="#" data-slide="5"></a>
                  </div> -->
               <a href="#" class="add-edt-btn"> Add / Edit Photos</a>
               <a href="#" class="mange-btn"> Manage Other Images</a>
            </div>
            <div class="col-md-12 pad-0">
               <img src="<?php echo base_url(); ?>assets/images/LEFT-1.png" class="img-fluid brdr-radius">
               <img src="<?php echo base_url(); ?>assets/images/LEFT-2.jpg" class="img-fluid brdr-radius">
               <img src="<?php echo base_url(); ?>assets/images/LEF-3.png" class="img-fluid brdr-radius">
            </div>
         </div>
         <div class="col-lg-8 col-md-8 col-sm-12 col-12 mx-wdth-56">
            <div class="edit-prof-wrap">
               <div class="row edit-row">
                  <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                     <h4 class="name-edit-prof"><i class="far fa-user icn-name-prf"></i>&nbsp;<?php echo strtoupper($mydata[0]->first_name); ?></h4>
                     <p><i class="far fa-check-circle icn-name-prf"></i>&nbsp;  Online Last Login: <span><?php echo date("d-m-Y", strtotime($mydata[0]->last_login));?></span></p>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 col-12 pd-edt">
                     <h6 class="prof-id">ID : <?php echo $mydata[0]->web_id; ?></h6>
                     <p>Profile Created By: <span><?php echo $personal_details[0]->profilefor; ?></span></p>
                  </div>
               </div>
               <hr>
               <div class="row detail-row">
                  <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                     <p><i class="far fa-user-circle"></i> &nbsp;
                        <?php 
                        $dob = new DateTime($mydata[0]->dob);
                        $now = new DateTime();
                        $difference = $now->diff($dob);
                        echo $difference->y;
                        ?> Years, <?php echo $personal_details[0]->height; ?> cm- 5 ft 6 in</p>
                     <p><i class="fas fa-birthday-cake"></i> &nbsp;<?php echo date("d-m-Y", strtotime($mydata[0]->dob));?></p>
                     <p><i class="fas fa-book-open"></i> &nbsp;<?php echo $mydata[0]->religion; ?> </p>
                     <p><i class="fab fa-fort-awesome-alt"></i> &nbsp;<?php echo $mydata[0]->cast; ?></p>

                     <p><i class="fas fa-graduation-cap"></i> &nbsp;
                        <?php
                        if(!$education_details[0]->education == NULL){
                           echo $education_details[0]->education;
                        }
                        else{
                         echo 'Not Specified';
                        }
                        ?>
                     </p>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                     <p><i class="fas fa-map-marker-alt"></i> &nbsp;<?php echo $current_address[0]->district; ?>, <?php echo $current_address[0]->state; ?>, <?php echo $current_address[0]->name; ?></p>
                     <p><i class="fas fa-suitcase"></i> &nbsp;

                        <?php
                           if(!$education_details[0]->job_title == NULL){
                              echo $education_details[0]->job_title;
                           }
                           else{
                            echo 'Not Specified';
                           }
                        ?>
                     </p>
                     <p><img src="<?php echo base_url(); ?>assets/images/incomeb.png" class="img-fluid"> &nbsp;

                        <?php
                           if(!$education_details[0]->income == NULL){
                               echo $education_details[0]->income;
                           }
                           else{
                            echo 'Not Specified';
                           }
                        ?>
                        </p>
                     <p><img src="<?php echo base_url(); ?>assets/images/call.png" class="img-fluid"> &nbsp;<?php echo $mydata[0]->phone; ?></p>
                     <p><i class="fas fa-envelope"></i> &nbsp;<?php echo $mydata[0]->email; ?></p>
                  </div>
               </div>
            </div>
            <div class="edit-prof-secnd-wrap">
               <div class="row">
                  <div class="col-lg-10 col-12">
                     <h5 class="edit-call-actn-btn">How your profile looks to others, You can now view your own profile. </h5>
                  </div>
                  <div class="col-lg-2 col-12">
                     <a href="#" class="view-prof-btn-edit"> View Profile</a>
                  </div>
               </div>
            </div>
            <div class="edit-prof-form-wrap">
               <h5 class="prof-info-hed"><i class="fas fa-file-signature per-ic"></i>&nbsp; Personal Information</h5>
               <div class="sub-hed-edit row" id="cnt">
                  <h6 class="edit-detail-edi-sub-hed col-lg-11"><i class="far fa-address-book"></i>&nbsp;  About Yourself</h6>
                  <!-- <p id="cnt"></p> -->
                  <a class="col-lg-1 edt-btn" id="edt" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                  Edit
                  </a>
                  <div class="col-lg-12">
                     <p><?php
                     if(!$personal_details[0]->aboutme == NULL){
                        echo '<p>'.$personal_details[0]->aboutme.'</p>';
                     }
                     else{
                       echo '<p>Not Specified</p>';
                    }
                    ?></p>
                  </div>
               </div>
               <div class="collapse" id="collapseExample">
                  <form id="myform" method="post" action="<?php echo base_url(); ?>index.php/Register/aboutme" class="mrg-edt-form">
                     <div class="form-group">
                        <h6 class="edit-detail-edi-sub-hed"><i class="far fa-address-book"></i>&nbsp; About Yourself</h6>
                        <textarea name="aboutme" class="form-control" id="exampleFormControlTextarea1" value="<?php echo $personal_details[0]->aboutme ?>" rows="3"><?php echo $personal_details[0]->aboutme ?></textarea>
                     </div>
                  <a href="" id="sbmt" class="cancel-btn">Cancel</a>
                  <a href="javascript:submit();" class="save-btn">Save</a>
                  </form>
                  <!-- </div> -->
               </div>
            </div>
            <!-- <-----------------basic detals--------------------------> 
            <div class="edit-prof-form-wrap">
               <div class="sub-hed-edit row" id="cnt1">
                  <h5 class="prof-info-hed1 col-md-11"> <i class="fas fa-file-alt icn-sme"></i>&nbsp; Basic Details</h5>
                  <!-- <p id="cnt"></p> -->
                  <a class="col-lg-1 edt-btn" id="edt1" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
                  Edit
                  </a>
                  <div class="basic-row">
                     <div class="col-lg-6 col-12">
                        <table class="p-table">
                           <tbody>
                              <tr>
                                 <th>Name</th>
                                 <td class="p-sep">:</td>
                                 <td data-textbox="tb-name"><?php echo strtoupper($mydata[0]->first_name); ?></td>
                              </tr>
                              <tr>
                                 <th>Height</th>
                                 <td class="p-sep">:</td>
                                 <td><span data-select="select-body" data-opt="0"><?php echo $personal_details[0]->height; ?> cm</span></td>
                              </tr>
                              <tr>
                                 <th>Body Type</th>
                                 <td class="p-sep">:</td>
                                 <td data-select="select-complexion" data-opt="85"><?php echo $personal_details[0]->body_type; ?></td>
                              </tr>
                              <tr>
                                 <th>Complexion  </th>
                                 <td class="p-sep">:</td>
                                 <td data-select="select-physique" data-opt="94"><?php echo $personal_details[0]->complexion; ?></td>
                              </tr>
                              <tr>
                                 <th>Marital Status</th>
                                 <td class="p-sep">:</td>
                                 <td><span data-select="select-body" data-opt="0"><?php echo $personal_details[0]->marital_status; ?></span></td>
                              </tr>
                              <th>Whatsapp Number</th>
                              <td class="p-sep">:</td>
                              <td data-textbox="tb-age"> <?php echo $personal_details[0]->whatsapp; ?></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12">
                        <table class="p-table">
                           <tbody>
                              <tr>
                                 <th>Age</th>
                                 <td class="p-sep">:</td>
                                 <td><span data-select="select-Code" data-opt="103"><?php 
                                 $dob = new DateTime($mydata[0]->dob);
                                 $now = new DateTime();
                                 $difference = $now->diff($dob);
                                 echo $difference->y;
                                 ?> Years</span>  <span></span><span data-textbox="tb-whats"></span></td>
                              </tr>
                              <tr>
                                 <th>Weight</th>
                                 <td class="p-sep">:</td>
                                 <td data-textbox="tb-age"><?php echo $personal_details[0]->weight; ?></td>
                              </tr>
                              <tr>
                                 <th>Blood Group</th>
                                 <td class="p-sep">:</td>
                                 <td data-select="select-height" data-opt="0"> <?php echo $personal_details[0]->blood_group; ?></td>
                              </tr>
                              <tr>
                                 <th>Physical Status</th>
                                 <td class="p-sep">:</td>
                                 <td data-textbox="tb-name"><?php echo $personal_details[0]->physical_status; ?></td>
                              </tr>
                              <tr>
                                 <th>No Of Children</th>
                                 <td class="p-sep">:</td>
                                 <td><span data-select="select-Code" data-opt="103"><?php echo $personal_details[0]->no_of_child; ?></span>  <span></span><span data-textbox="tb-whats"></span></td>
                              </tr>
                              <tr>
                              <tr>
                                 <th>Aadhar Number</th>
                                 <td class="p-sep">:</td>
                                 <td data-select="select-complexion" data-opt="85"><?php echo $personal_details[0]->adhar_no; ?></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <div class="collapse" id="collapseExample1">
                  <form id="myform1" method="post" action="<?php echo base_url(); ?>index.php/Register/reg_personaldetails" class="mrg-edt-form" >
                     <div class="form-group">
                        <h5 class="prof-info-hed1 col-md-11"> <i class="fas fa-file-alt icn-sme"></i>&nbsp; Basic Details</h5>
                        <div class="row basic-form-row">
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Name</label>
                                 <input name="name" type="text" class="form-control" value="<?php echo strtoupper($mydata[0]->first_name); ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">Date Of Birth</label>
                                 <input type="date" name="dob" class="form-control" value="<?php echo $mydata[0]->dob; ?>" id="date" aria-describedby="emailHelp">
      
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">Height</label>
                                 <select class="form-control" name="height" id="exampleFormControlSelect1">
                                    <option value="<?php echo $personal_details[0]->height; ?>"><?php echo $personal_details[0]->height; ?></option>
                                    <?php foreach($height as $row){

                                    echo'<option value="'.$row->height.'">&nbsp&nbsp&nbsp;'.$row->height.'</option>';

                                    } ?>
                                 </select>

                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">Body Type</label>
                                 <select class="form-control" name="body_type" id="exampleFormControlSelect1">
                                    <option value="<?php echo $personal_details[0]->body_type_id; ?>"><?php echo $personal_details[0]->body_type; ?></option>
                                    <?php foreach($body_type as $row){

                                    echo'<option value="'.$row->body_type_id.'">&nbsp&nbsp&nbsp;'.$row->body_type.'</option>';

                                    } ?>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">Complexion</label>
                                 <select class="form-control" name="complexion" id="exampleFormControlSelect1">
                                    <option value="<?php echo $personal_details[0]->complexion_id; ?>"><?php echo $personal_details[0]->complexion; ?></option>
                                    <?php foreach($complexion as $row){

                                    echo'<option value="'.$row->complexion_id.'">&nbsp&nbsp&nbsp;'.$row->complexion.'</option>';

                                    } ?>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">Marital Status</label>
                                 <select class="form-control" name="marital_status" id="exampleFordfmControlSelect1">
                                    <option value="<?php echo $personal_details[0]->marital_status_id; ?>"><?php echo $personal_details[0]->marital_status; ?></option>
                                    <?php foreach($marital_status as $row){

                                    echo'<option value="'.$row->marital_status_id.'">&nbsp&nbsp&nbsp;'.$row->marital_status.'</option>';

                                    } ?>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">Country Code</label>
                                 <select class="form-control" name="phonecode" id="exampleFordfmControlSelect1">
                                    <option value="<?php echo $personal_details[0]->country_code; ?>">+<?php echo $personal_details[0]->phonecode; ?></option>
                                    <?php foreach($country as $row){

                                    echo'<option value="'.$row->phonecode.'">&nbsp&nbsp&nbsp;+'.$row->phonecode.'('.$row->nicename.')</option>';

                                    } ?>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">Aadhar Number</label>
                                 <input type="text" name="adhar_no" class="form-control" value="<?php echo $personal_details[0]->adhar_no; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">

                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">Gender</label>
                                 <select class="form-control" name="gender_id" id="exampleFormControlSelect1">
                                    <option value="<?php echo $personal_details[0]->gender_id; ?>"><?php echo $personal_details[0]->gender; ?></option>
                                    <option value="1">&nbsp;&nbsp;&nbsp;Male</option>
                                    <option value="2">&nbsp;&nbsp;&nbsp;Female</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">Age</label>
                                 <input type="email" name="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php 
                                 $dob = new DateTime($mydata[0]->dob);
                                 $now = new DateTime();
                                 $difference = $now->diff($dob);
                                 echo $difference->y;
                                 ?> Years" disabled>
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">Weight</label>
                                 <input type="email" name="weight" class="form-control" id="exampleInputEmail1" value="<?php echo $personal_details[0]->weight; ?>" aria-describedby="emailHelp">
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Blood Group</label>
                                 <select class="form-control" name="blood_group" id="exampleFordfmControlSelect1">
                                    <option value="<?php echo $personal_details[0]->bloodgroup_id; ?>"><?php echo $personal_details[0]->blood_group; ?></option>
                                    <?php foreach($blood_group as $row){

                                    echo'<option value="'.$row->bloodgroup_id.'">&nbsp&nbsp&nbsp;'.$row->blood_group.'</option>';

                                    } ?>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">Physical Status</label>
                                 <select class="form-control" name="physical_status" id="exampleFordfmControlSelect1">
                                    <option value="<?php echo $personal_details[0]->physical_status_id; ?>"><?php echo $personal_details[0]->physical_status; ?></option>
                                    <?php foreach($physical_status as $row){

                                    echo'<option value="'.$row->physical_status_id.'">&nbsp&nbsp&nbsp;'.$row->physical_status.'</option>';

                                    } ?>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">No Of Children</label>
                                 <input type="email" name="no_of_child" class="form-control" 
                                value="<?php echo $personal_details[0]->no_of_child; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">Whatsapp Number</label>
                                 <input type="email" name="whatsapp" class="form-control" id="exampleInputEmail1" value="<?php echo $personal_details[0]->whatsapp; ?>" aria-describedby="emailHelp">
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">Upload Aadhar</label>
                                 <div class="upload-btn-wrapper col-lg-12 dis-upld-blk">
                                    <a href="#" class="btn">Upload Aadhar</a>
                                    <input type="file" name="myfile">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
                  <a href=""id="sbmt1" class="cancel-btn">Cancel</a>
                  <a href="javascript:submit1();" id="sbmt1" class="save-btn">Save</a>
                  <!-- </div> -->
               </div>
            </div>
            <!-- <-----------------basic detals--------------------------> 
            <!-- <-----------------Address--------------------------> 
            <div class="edit-prof-form-wrap">
               <div class="sub-hed-edit row" id="cnt2">
                  <h5 class="prof-info-hed1 col-md-11"><i class="fas fa-map-marker-alt icn-sme"></i>&nbsp; Address</h5>
                  <!-- <p id="cnt"></p> -->
                  <a class="col-lg-1 edt-btn" id="edt2" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
                  Edit
                  </a>
                  <div class="basic-row">
                     <div class="col-lg-12 col-12">
                        <table class="p-table">
                           <tbody>
                              <tr>
                                 <th>Permanent Address </th>
                                 <td class="p-sep">:</td>
                                 <td data-textbox="tb-name"><?php echo $address[0]->permnt_address; ?></td>
                              </tr>
                              <tr>
                                 <th> Present Address</th>
                                 <td class="p-sep">:</td>
                                 <td><span data-select="select-Code" data-opt="103"><?php echo $address[0]->presnt_address; ?></span>  <span></span><span data-textbox="tb-whats"></span></td>
                              </tr>
                              <tr>
                                 <th>Communication Address  </th>
                                 <td class="p-sep">:</td>
                                 <td><span data-select="select-body" data-opt="0"><?php echo $address[0]->comm_address; ?></span></td>
                              </tr>
                              <tr>
                                 <th>Route To Residence</th>
                                 <td class="p-sep">:</td>
                                 <td data-textbox="tb-age"><?php echo $address[0]->route_recidence; ?></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <div class="collapse" id="collapseExample2">
                  <form id="myform2" class="mrg-edt-form" method="POST" action="<?php echo site_url('Register/reg_addressdetails');?>">
                     <div class="form-group">
                        <h5 class="prof-info-hed1 col-md-11"><i class="fas fa-map-marker-alt icn-sme"></i>&nbsp; Address</h5>
                        <div class="row basic-form-row">
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <label for="exampleFormControlTextarea1">Permanent Address </label>
                                 <textarea name="permnt_address" class="form-control"  id="exampleFormControlTextarea1" rows="3" placeholder="Permanent Address"><?php echo $address[0]->permnt_address; ?></textarea>
                              </div>
                              <div class="">
                                 <div class="form-group">
                                    <div class="prm-chk">
                                       <label for="exampleFormControlTextarea1"> Present Address </label> 
                                       <div class="form-check">
                                          <div class="col-auto pr-new-chk">
                                             <div class="custom-control custom-checkbox mr-sm-2" style="margin-top: 2px;">
                                                <input type="checkbox" name="same_pernt" class="custom-control-input" id="customControlAutosizing" value="1" checked>
                                                <label class="custom-control-label" for="customControlAutosizing">( Same as Permanent)</label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <textarea name="presnt_address" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Present Address"><?php echo $address[0]->presnt_address; ?></textarea>
                                 </div>
                              </div>
                              <div class="prb">
                                 <div class="form-group prb-left">
                                    <label for="exampleFormControlTextarea1"> Communication Address </label> 
                                    <div class="form-check">
                                    </div>
                                 </div>
                                 <div class="form-group prb-ryt">
                                    <div class="custom-control custom-radio custom-control-inline">
                                       <input type="radio" id="customRadioInline3" name="commu" class="custom-control-input" value="perm" checked>
                                       <label class="custom-control-label" for="customRadioInline3"> Permanent Address</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                       <input type="radio" id="customRadioInline4" name="commu" class="custom-control-input" value="pres">
                                       <label class="custom-control-label" for="customRadioInline4">Present Address</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlTextarea1">Route To Residence</label>
                                 <textarea name="route_recidence" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Route To Residence"><?php echo $address[0]->route_recidence; ?></textarea>
                              </div>
                              <div class="form-group form-check">
                                 <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                 <label class="form-check-label" for="exampleCheck1">Hide Address</label>
                              </div>
                              <div class="row">
                                 <div class="form-group col-lg-6 col-12">
                                    <label for="exampleFormControlSelect1">Residence Phone Number</label>
                                    <input type="email" name="reci_lanline" value="<?php echo $mydata[0]->reci_landline; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                 </div>
                                 <div class="form-group col-lg-6 col-12">
                                    <label for="exampleFormControlSelect1">Residence Mobile Number</label>
                                    <input type="email" value="<?php echo $mydata[0]->reci_mobile; ?>" name="reci_mobile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="form-group col-lg-6 col-12">
                                    <label for="exampleFormControlSelect1">Residence Whatsapp Number</label>
                                    <input type="email" value="<?php echo $mydata[0]->reci_whatsapp; ?>" name="reci_whstp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                 </div>
                                 <div class="form-group col-lg-6 col-12">
                                    <label for="exampleFormControlSelect1">Preferred Time To Call</label>
                                    <select class="form-control" name="contact_time" id="exampleFordfmControlSelect1">
                                    <option value="<?php echo $personal_details[0]->contact_time; ?>"><?php echo $personal_details[0]->cont_name; ?></option>
                                    <?php foreach($contact_time as $row){

                                    echo'<option value="'.$row->contact_time_id.'">&nbsp&nbsp&nbsp;'.$row->contact_time.'</option>';

                                    } ?>
                                 </select>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="form-group col-lg-6 col-12">
                                    <label for="exampleFormControlSelect1">Contact Person Name</label>
                                    <input type="email" name="reci_name" value="<?php echo $mydata[0]->contact_name; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                 </div>
                                 <div class="form-group col-lg-6 col-12">
                                    <label for="exampleFormControlSelect1">Relationship with candidate</label>
                                    <input type="text" name="reci_relat" value="<?php echo $mydata[0]->reci_relation_candinate; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
                  <a href=""id="sbmt2" class="cancel-btn">Cancel</a>
                  <a href="javascript:submit2();" id="sbmt2" class="save-btn">Save</a>
                  <!-- </div> -->
               </div>
            </div>
            <!-- <-----------------Address--------------------------> 
            <!-- <-----------------Religion Information--------------------------> 
            <div class="edit-prof-form-wrap">
               <div class="sub-hed-edit row" id="cnt3">
                  <h5 class="prof-info-hed1 col-md-11"><i class="fas fa-book-open icn-sme"></i>&nbsp; Religion Information</h5>
                  <!-- <p id="cnt"></p> -->
                  <a class="col-lg-1 edt-btn" id="edt3" type="button" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">
                  Edit
                  </a>
                  <div class="basic-row">
                     <div class="col-lg-6 col-12">
                        <table class="p-table">
                           <tbody>
                              <tr>
                                 <th>Religion</th>
                                 <td class="p-sep">:</td>
                                 <td data-textbox="tb-name"> <?php echo $mydata[0]->religion; ?></td>
                              </tr>
                              <tr>
                                 <th>Caste No Bar</th>
                                 <td class="p-sep">:</td>
                                 <td><span data-select="select-body" data-opt="0"><?php echo $mydata[0]->cast_bar; ?></span></td>
                              </tr>
                              <tr>
                                 <th>Raasi </th>
                                 <td class="p-sep">:</td>
                                 <td data-select="select-height" data-opt="0"><?php echo $personal_details[0]->rassi; ?> </td>
                              </tr>
                              <tr>
                                 <th>Parish/SNDP/NSS/Mahal</th>
                                 <td class="p-sep">:</td>
                                 <td data-textbox="tb-name"><?php echo $personal_details[0]->religion_area; ?></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <div class="col-lg-6 col-12">
                        <table class="p-table">
                           <tbody>
                              <tr>
                                 <th>Caste</th>
                                 <td class="p-sep">:</td>
                                 <td><span data-select="select-Code" data-opt="103"><?php echo $mydata[0]->cast; ?></span>  <span></span><span data-textbox="tb-whats"></span></td>
                              </tr>
                              <tr>
                                 <th>Star</th>
                                 <td class="p-sep">:</td>
                                 <td data-textbox="tb-age"><?php echo $personal_details[0]->star; ?></td>
                              </tr>
                              <tr>
                                 <th>Type Of Jathakam</th>
                                 <td class="p-sep">:</td>
                                 <td><span data-select="select-body" data-opt="0"><?php echo $personal_details[0]->typeof_jathakam; ?></span></td>
                              </tr>
                              <tr>
                                 <th>Religious Requirements</th>
                                 <td class="p-sep">:</td>
                                 <td data-textbox="tb-age"><?php echo $personal_details[0]->religion_requirement; ?></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <div class="collapse" id="collapseExample3">
                  <form id="myform3" class="mrg-edt-form" method="POST" action="<?php echo site_url('Register/reg_religioninfo');?>">
                     <div class="form-group">
                        <h5 class="prof-info-hed1 col-md-11"><i class="fas fa-book-open icn-sme"></i>&nbsp; Religion Information</h5>
                        <div class="row basic-form-row">
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Religion</label>
                                 <select class="form-control" name="religion" id="religion">
                                    <option value="<?php echo $personal_details[0]->religion_id; ?>"><?php echo $personal_details[0]->religion; ?></option>

                                    <?php foreach($religion as $row){

                                    echo'<option value="'.$row->religion_id.'">&nbsp&nbsp&nbsp;'.$row->religion.'</option>';

                                    } ?>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">Sub caste</label>
                                 <input type="text" name="sub_cast" class="form-control" value="<?php echo $mydata[0]->sub_cast; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                                 
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">Star</label>
                                 <select class="form-control" name="star" id="sss">
                                    <option value="<?php echo $personal_details[0]->star_id; ?>"><?php echo $personal_details[0]->star; ?></option>
                                    
                                    <?php foreach($star as $row){

                                    echo'<option value="'.$row->star_id.'">&nbsp&nbsp&nbsp;'.$row->star.'</option>';

                                    } ?>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Type Of Jathakam</label>

                                 <select class="form-control" name="jathakam" id="ddd">
                                    <option value="<?php echo $personal_details[0]->jathakam_id; ?>"><?php echo $personal_details[0]->typeof_jathakam; ?></option>
                                    
                                    <?php foreach($jathakam as $row){

                                    echo'<option value="'.$row->jathakam_id.'">&nbsp&nbsp&nbsp;'.$row->typeof_jathakam.'</option>';

                                    } ?>
                                 </select>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">Cast</label>
                                 <select class="form-control" name="cast" id="cast">
                                    <option value="<?php echo $personal_details[0]->cast_id; ?>"><?php echo $personal_details[0]->cast; ?></option>
                                 </select>
                              </div>
                              <div class="form-group" style="margin-top: 19px;">
                                 <label for="exampleFormControlSelect1">Caste No Bar</label>
                                 <div class="form-group form-check">
                                    <input type="checkbox" value="1" name="cast_bar" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1"></label>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">Raasi</label>
                                 <select class="form-control" name="rassi" id="ddd">
                                    <option value="<?php echo $personal_details[0]->rassi_id; ?>"><?php echo $personal_details[0]->rassi; ?></option>
                                    
                                    <?php foreach($rassi as $row){

                                    echo'<option value="'.$row->rassi_id.'">&nbsp&nbsp&nbsp;'.$row->rassi.'</option>';

                                    } ?>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">Parish/Edavaka/SNDP/NSS/Mahal</label>
                                 <select class="form-control" name="religion_area" id="ddd">
                                    <option value="<?php echo $personal_details[0]->religion_area_id; ?>"><?php echo $personal_details[0]->religion_area; ?></option>
                                    
                                    <?php foreach($religion_area as $row){

                                    echo'<option value="'.$row->area_id.'">&nbsp&nbsp&nbsp;'.$row->religion_area.'</option>';

                                    } ?>
                                 </select>
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="form-group ">
                                 <label for="exampleFormControlSelect1">Religious Requirements</label>
                                 <textarea class="form-control" name="religion_requirement" id="exampleFormControlTextarea1" rows="3"><?php echo $personal_details[0]->religion_requirement; ?></textarea>
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
                  <a href=""id="sbmt3" class="cancel-btn">Cancel</a>
                  <a href="javascript:submit3();" id="sbmt3" class="save-btn">Save</a>
                  <!-- </div> -->
               </div>

            </div>
            <!-- <-----------------Religion Information--------------------------> 
            <!-- <-----------------Grooms/Bride Location--------------------------> 
            <div class="edit-prof-form-wrap">
               <div class="sub-hed-edit row" id="cnt4">
                  <h5 class="prof-info-hed1 col-md-11"><i class="fas fa-street-view"></i>&nbsp; Groom's Location</h5>
                  <!-- <p id="cnt"></p> -->
                  <a class="col-lg-1 edt-btn" id="edt4" type="button" data-toggle="collapse" data-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample4">
                  Edit
                  </a>
                  <div class="basic-row">
                     <div class="col-lg-6 col-12">
                        <table class="p-table">
                           <tbody>
                              <tr>
                                 <th>Country</th>
                                 <td class="p-sep">:</td>
                                 <td data-textbox="tb-name"><?php echo $permanent_address[0]->name; ?></td>
                              </tr>
                              <tr>
                                 <th>District</th>
                                 <td class="p-sep">:</td>
                                 <td><span data-select="select-body" data-opt="0"><?php echo $permanent_address[0]->district; ?></span></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <div class="col-lg-6 col-12">
                        <table class="p-table">
                           <tbody>
                              <tr>
                                 <th>State</th>
                                 <td class="p-sep">:</td>
                                 <td><span data-select="select-Code" data-opt="103"><?php echo $permanent_address[0]->state; ?></span>  <span></span><span data-textbox="tb-whats"></span></td>
                              </tr>
                              <tr>
                                 <th>City</th>
                                 <td class="p-sep">:</td>
                                 <td data-textbox="tb-age"><?php echo $permanent_address[0]->p_city; ?></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <div class="collapse" id="collapseExample4">
                  <form id="myform4" class="mrg-edt-form" method="POST" action="<?php echo site_url('Register/reg_addressdetails1');?>">
                     <div class="form-group">
                        <h5 class="prof-info-hed1 col-md-11"><i class="fas fa-street-view"></i>&nbsp; Groom's Location</h5>
                        <div class="row basic-form-row">
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Country</label>
                                 <select style = "text-transform:capitalize;"   name="p_country" class="form-control"  >
                                    <option value="<?php echo $permanent_address[0]->id; ?>" ><?php echo $permanent_address[0]->name; ?></option>
                                    <?php foreach($country as $row)
                                    { 
                                     echo '<option value="'.$row->id.'">&nbsp&nbsp&nbsp;'.$row->name.'</option>';
                                  }
                                  ?>
                               </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">District</label>
                                 <select style = "text-transform:capitalize;"  id="p_district"  name="p_district" class="form-control" >
                                    <option value="<?php echo $permanent_address[0]->p_district_id; ?>" ><?php echo $permanent_address[0]->district; ?></option>

                                 </select>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">State</label>
                                 <select style = "text-transform:capitalize;"  id="p_state"  name="p_state" class="form-control" >
                                    <option value="<?php echo $permanent_address[0]->p_state_id; ?>" ><?php echo $permanent_address[0]->state; ?></option>
                                    <?php foreach($states as $row)
                                    { 
                                     echo '<option value="'.$row->id.'">&nbsp&nbsp&nbsp;'.$row->state.'</option>';
                                  }
                                  ?>
                               </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">City</label>
                                 <input type="text" name="p_city" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
                  <a href=""id="sbmt4" class="cancel-btn">Cancel</a>
                  <a href="javascript:submit4();" id="sbmt4" class="save-btn">Save</a>
                  <!-- </div> -->
               </div>
            </div>
            <!-- <-----------------Grooms/Bride Location--------------------------> 
            <!-- <-----------------Professional Information--------------------------> 
            <div class="edit-prof-form-wrap">
               <div class="sub-hed-edit row" id="cnt5">
                  <h5 class="prof-info-hed1 col-md-11"><i class="fas fa-user-tie icn-sme"></i>&nbsp; Professional Information</h5>
                  <!-- <p id="cnt"></p> -->
                  <a class="col-lg-1 edt-btn" id="edt5" type="button" data-toggle="collapse" data-target="#collapseExample5" aria-expanded="false" aria-controls="collapseExample5">
                  Edit
                  </a>
                  <div class="basic-row">
                     <div class="col-lg-6 col-12">
                        <table class="p-table">
                           <tbody>
                              <tr>
                                 <th>Education</th>
                                 <td class="p-sep">:</td>
                                 <td data-textbox="tb-name"><?php echo $education_details[0]->education; ?>  </td>
                              </tr>
                              <tr>
                                 <th>Job Category</th>
                                 <td class="p-sep">:</td>
                                 <td><span data-select="select-body" data-opt="0"><?php echo $education_details[0]->job_cat; ?></span></td>
                              </tr>
                              <tr>
                                 <th>Job Location</th>
                                 <td class="p-sep">:</td>
                                 <td><span data-select="select-body" data-opt="0"><?php echo $education_details[0]->name; ?>,<?php echo $education_details[0]->state; ?>, <br><?php echo $education_details[0]->district; ?></span></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <div class="col-lg-6 col-12">
                        <table class="p-table">
                           <tbody>
                              <tr>
                                 <th>Education In Detail</th>
                                 <td class="p-sep">:</td>
                                 <td ><span data-select="select-Code" data-opt="103" class="more"><?php echo $education_details[0]->education_details; ?>fffffffffffffffff</span>  <span></span><span data-textbox="tb-whats"></span></td>
                              </tr>
                              <tr>
                                 <th>Job In Detail  </th>
                                 <td class="p-sep">:</td>
                                 <td data-textbox="tb-age"><?php echo $education_details[0]->job_title; ?></td>
                              </tr>
                              <tr>
                                 <th>Monthly Income</th>
                                 <td class="p-sep">:</td>
                            
                                 <td data-textbox="tb-age" class="more"><?php echo $education_details[0]->income; ?></td>
                                 
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <div class="collapse" id="collapseExample5">
                  <form id="myform5" class="mrg-edt-form" method="POST" action="<?php echo site_url('Register/reg_education');?>">
                     <div class="form-group">
                        <h5 class="prof-info-hed1 col-md-11"><i class="fas fa-user-tie icn-sme"></i>&nbsp;  Professional Information</h5>
                        <div class="row basic-form-row">
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Highest Education</label>
                                 <select style = "text-transform:capitalize;"  name="edu_cat" id="edu_cat" class="form-control" >
                                   <option value="<?php echo $education_details[0]->edu_cat_id; ?>"><?php echo $education_details[0]->edu_category; ?></option>
                                   <?php foreach($edu_category as $row)
                                   { 
                                    echo '<option value="'.$row->cat_id.'">&nbsp&nbsp&nbsp;'.$row->edu_category.'</option>';
                                 }
                                 ?>
                              </select>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">.</label>
                                 <select class="form-control" name="highest_education" id="highest_education">
                                    <option value="<?php echo $education_details[0]->education_id; ?>"><?php echo $education_details[0]->education; ?></option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">Education In Detail</label>
                                 <input type="email" class="form-control" name="edu_details" id="exampleInputEmail1" value="<?php echo $education_details[0]->education_details; ?>" aria-describedby="emailHelp">
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">Additional Info On Education</label>
                                 <input type="email" class="form-control" name="edu_addition"value="<?php echo $education_details[0]->education_addition; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                           </div>
                           <div class="ed-row">
                              <div class="col-lg-6">
                                 <div class="form-group">
                                    <label for="exampleFormControlSelect1">Job Category</label>
                                    <select style = "text-transform:capitalize;"  name="job_cat" id="job_cat" class="form-control" >
                                      <option value="<?php echo $education_details[0]->job_cat_id; ?>"><?php echo $education_details[0]->job_cat; ?></option>
                                      <?php foreach($job_category as $row)
                                      { 
                                       echo '<option value="'.$row->job_cat_id.'">&nbsp&nbsp&nbsp;'.$row->job_cat.'</option>';
                                    }
                                    ?>
                                 </select>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="form-group">
                                    <label for="exampleFormControlSelect1">Job In Details</label>
                                    <select class="form-control" name="job" id="job">
                                       <option value="<?php echo $education_details[0]->jobtitle_id; ?>"><?php echo $education_details[0]->job_title; ?></option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">Profession Career Details And Official Address</label>
                                 <input type="email" class="form-control" name="pro_career" id="exampleInputEmail1" value="<?php echo $education_details[0]->education_details; ?>" aria-describedby="emailHelp">
  
                              </div>
                           </div>
                           <div class="ed-row">
                              <div class="col-lg-6">
                                 <div class="form-group">
                                    <label for="exampleFormControlSelect1">Job Location: Country</label>
                                    <select style = "text-transform:capitalize;" name="work_country" class="form-control"  >
                                       <option value="<?php echo $education_details[0]->id; ?>" ><?php echo $education_details[0]->name; ?></option>
                                       <?php foreach($country as $row)
                                       { 
                                        echo '<option value="'.$row->id.'">&nbsp&nbsp&nbsp;'.$row->name.'</option>';
                                     }
                                     ?>
                                  </select>
                                 </div>
                                 <div class="form-group">
                                    <label for="exampleFormControlSelect1">Job Location: District</label>
                                    <select style = "text-transform:capitalize;"  id="p_district1"  name="work_district" class="form-control" >
                                       <option value="<?php echo $education_details[0]->work_district; ?>" ><?php echo $education_details[0]->district; ?></option>

                                    </select>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="form-group">
                                    <label for="exampleFormControlSelect1">Job Location: State</label>
                                    <select style = "text-transform:capitalize;"  id="p_state1"  name="work_state" class="form-control" >
                                       <option value="<?php echo $education_details[0]->work_state; ?>" ><?php echo $education_details[0]->state; ?></option>
                                       <?php foreach($states as $row)
                                       { 
                                        echo '<option value="'.$row->id.'">&nbsp&nbsp&nbsp;'.$row->state.'</option>';
                                     }
                                     ?>
                                  </select>
                                 </div>
                                 <div class="form-group">
                                    <label for="exampleFormControlSelect1">Job Location: City</label>
                                    <input type="text" value="<?php echo $education_details[0]->work_city; ?>" data-pms-required="true" autofocus class="form-control" name="work_city" placeholder="City" >
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">Monthly Income</label>
                                 <select style = "text-transform:capitalize;"   name="annual_income" class="form-control" >
                                   <option value="<?php echo $education_details[0]->income_id; ?>" ><?php echo $education_details[0]->income; ?></option>
                                   <?php foreach($income as $row)
                                   { 
                                    echo '<option value="'.$row->income_id.'">&nbsp&nbsp&nbsp;'.$row->income.'</option>';
                                 }
                                 ?>
                              </select>
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
                  <a href=""id="sbmt4" class="cancel-btn">Cancel</a>
                  <a href="javascript:submit5();" id="sbmt4" class="save-btn">Save</a>
                  <!-- </div> -->
               </div>
            </div>
            <!-- <-----------------Professional Information--------------------------> 
            <!-- <-----------------Family Details--------------------------> 
            <div class="edit-prof-form-wrap">
               <div class="sub-hed-edit row" id="cnt6">
                  <h5 class="prof-info-hed1 col-md-11"><i class="fas fa-users icn-sme"></i>&nbsp; Family Details</h5>
                  <!-- <p id="cnt"></p> -->
                  <a class="col-lg-1 edt-btn" id="edt6" type="button" data-toggle="collapse" data-target="#collapseExample6" aria-expanded="false" aria-controls="collapseExample6">
                  Edit
                  </a>
                  <div class="basic-row">
                     <div class="col-lg-6 col-12">
                        <table class="p-table">
                           <tbody>
                              <tr>
                                 <th>Father's Name  </th>
                                 <td class="p-sep">:</td>
                                 <td data-textbox="tb-name"><?php echo $family[0]->father_name ?></td>
                              </tr>
                              <tr>
                                 <th>Father's Job    </th>
                                 <td class="p-sep">:</td>
                                 <td><span data-select="select-body" data-opt="0"><?php echo $family[0]->father_jobcat ?> </span></td>
                              </tr>
                              <tr>
                                 <th>Father's Job Detail </th>
                                 <td class="p-sep">:</td>
                                 <td><span data-select="select-body" data-opt="0"><?php echo $family[0]->f_job ?></span></td>
                              </tr>
                              <tr>
                                 <th>Father's Education  </th>
                                 <td class="p-sep">:</td>
                                 <td><span data-select="select-body" data-opt="0"><?php echo $family[0]->f_education ?> </span></td>
                              </tr>
                              <tr>
                                 <th>Brothers</th>
                                 <td class="p-sep">:</td>
                                 <td><span data-select="select-body" data-opt="0"><?php echo $family[0]->no_of_brothersmarried ?></span></td>
                              </tr>
                              <tr>
                                 <th>Guardian (If Any)</th>
                                 <td class="p-sep">:</td>
                                 <td><span data-select="select-body" data-opt="0"><?php echo $family[0]->guardian ?> </span></td>
                              </tr>
                              <tr>
                                 <th>Mother Tongue</th>
                                 <td class="p-sep">:</td>
                                 <td><span data-select="select-body" data-opt="0"><?php echo $family[0]->languages ?></span></td>
                              </tr>
                              <tr>
                                 <th>Family Type</th>
                                 <td class="p-sep">:</td>
                                 <td><span data-select="select-body" data-opt="0"><?php echo $family[0]->family_type ?></span></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <div class="col-lg-6 col-12">
                        <table class="p-table">
                           <tbody>
                              <tr>
                                 <th>Mother's Name</th>
                                 <td class="p-sep">:</td>
                                 <td><span data-select="select-Code" data-opt="103"><?php echo $family[0]->mother_name ?></span>  <span></span><span data-textbox="tb-whats"></span></td>
                              </tr>
                              <tr>
                                 <th>Mother's Job</th>
                                 <td class="p-sep">:</td>
                                 <td data-textbox="tb-age"><?php echo $family[0]->mother_jobcat ?></td>
                              </tr>
                              <tr>
                                 <th>Mother's Job Detail </th>
                                 <td class="p-sep">:</td>
                                 <td data-textbox="tb-age"><?php echo $family[0]->m_job ?></td>
                              </tr>
                              <tr>
                                 <th>Mother's Education   </th>
                                 <td class="p-sep">:</td>
                                 <td data-textbox="tb-age"><?php echo $family[0]->m_education ?></td>
                              </tr>
                              <tr>
                                 <th>Sisters  </th>
                                 <td class="p-sep">:</td>
                                 <td data-textbox="tb-age"><?php echo $family[0]->no_of_sistersmarried ?></td>
                              </tr>
                              <tr>
                                 <th>Job Profile Of Sibling</th>
                                 <td class="p-sep">:</td>
                                 <td data-textbox="tb-age"><?php echo $family[0]->profile_sibling ?></td>
                              </tr>
                              <tr>
                                 <th>Family Values</th>
                                 <td class="p-sep">:</td>
                                 <td data-textbox="tb-age"><?php echo $family[0]->family_value ?></td>
                              </tr>
                              <tr>
                                 <th>Financial Status</th>
                                 <td class="p-sep">:</td>
                                 <td data-textbox="tb-age"><?php echo $family[0]->family_status ?></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <div class="collapse" id="collapseExample6">
                  <form id="myform6" class="mrg-edt-form" method="POST" action="<?php echo site_url('Register/reg_family');?>">
                     <div class="form-group">
                        <h5 class="prof-info-hed1 col-md-11"><i class="fas fa-users icn-sme"></i>&nbsp; Family Details</h5>
                        <div class="row basic-form-row">
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Father's Name </label>
                                 <input type="email" class="form-control" value="<?php echo $family[0]->father_name ?>" name="father_name" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Father’s House Name </label>
                                 <input type="email" class="form-control" value="<?php echo $family[0]->father_familyname ?>" name="father_house_name" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Father’s Native Place </label>
                                 <input type="email" class="form-control" value="<?php echo $family[0]->father_nativeplace ?>" name="father_nativeplace" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Father's Job  </label>
                                 <select style = "text-transform:capitalize;"  name="father_job_cat" id="job_cat1" class="form-control" >
                                  <option value="<?php echo $family[0]->father_job_cat; ?>"><?php echo $family[0]->father_jobcat; ?></option>
                                  <?php foreach($job_category as $row)
                                  { 
                                    echo '<option value="'.$row->job_cat_id.'">&nbsp&nbsp&nbsp;'.$row->job_cat.'</option>';
                                 }
                                 ?>
                              </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Father's Job Detail </label>
                                 <select class="form-control" name="father_job" id="job1">
                                    <option value="<?php echo $family[0]->father_job; ?>"><?php echo $family[0]->f_job; ?></option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Father's Education </label>
                                 <select style = "text-transform:capitalize;"  name="father_edu_cat" id="edu_cat" class="form-control" >
                                  <option value="<?php echo $family[0]->father_edu_cat; ?>"><?php echo $family[0]->f_education; ?></option>

                                  <?php foreach($edu_category as $row)
                                  { 
                                    echo '<option value="'.$row->cat_id.'">&nbsp&nbsp&nbsp;'.$row->edu_category.'</option>';
                                 }
                                 ?>
                              </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Married Brothers</label>
                                 <select style = "text-transform:capitalize;"  name="numberofbrotherM" class="form-control" >
                                    <option value="<?php echo $family[0]->no_of_brothersmarried; ?>" ><?php echo $family[0]->no_of_brothersmarried; ?></option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Unmarried Brothers</label>
                                 <select style = "text-transform:capitalize;"  name="numberofbrotherUM" class="form-control" >
                                    <option value="<?php echo $family[0]->no_of_brothers_unmarried; ?>" ><?php echo $family[0]->no_of_brothers_unmarried; ?></option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Guardian (If Any)</label>
                                 <input type="email" class="form-control" value="<?php echo $family[0]->guardian ?>" name="guardian" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Mother Tongue</label>
                                 <select style = "text-transform:capitalize;"  name="mother_tongue" class="form-control" >
                                  <option value="<?php echo $family[0]->family_mother_tongue; ?>"><?php echo $family[0]->languages; ?></option>
                                  <?php foreach($languages as $row)
                                  { 
                                    echo '<option value="'.$row->id.'">&nbsp&nbsp&nbsp;'.$row->name.'</option>';
                                 }
                                 ?>
                              </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Family Type</label>
                                 <select style = "text-transform:capitalize;"   name="family_type" class="form-control"  >
                                    <option value="<?php echo $family[0]->family_type_id ?>"><?php echo $family[0]->family_type ?></option>
                                    <?php foreach($family_type as $row)
                                    { 
                                       echo '<option value="'.$row->family_type_id.'">&nbsp&nbsp&nbsp;'.$row->family_type.'</option>';
                                    }
                                    ?>
                                 </select>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Mother's Name</label>
                                 <input type="email" class="form-control" value="<?php echo $family[0]->mother_name ?>" name="mother_name" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Mother's House Name</label>
                                 <input type="email" class="form-control" value="<?php echo $family[0]->mother_familyname ?>" name="mother_house_name" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Mother's Native Place</label>
                                 <input type="email" class="form-control" value="<?php echo $family[0]->mother_nativeplace ?>" name="mother_nativeplace" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Mother's Job</label>
                                 <select style = "text-transform:capitalize;"  name="mother_job_cat" id="job_cat2" class="form-control" >
                                  <option value="<?php echo $family[0]->mother_job_cat; ?>"><?php echo $family[0]->mother_jobcat; ?></option>
                                  <?php foreach($job_category as $row)
                                  { 
                                    echo '<option value="'.$row->job_cat_id.'">&nbsp&nbsp&nbsp;'.$row->job_cat.'</option>';
                                 }
                                 ?>
                              </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Mother's Job Detail</label>
                                 <select class="form-control" name="mother_job" id="job2">
                                    <option value="<?php echo $family[0]->mother_job; ?>"><?php echo $family[0]->m_job; ?></option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Mother's Education</label>
                                 <select style = "text-transform:capitalize;"  name="mother_edu_cat" id="edu_cat" class="form-control" >
                                   <option value="<?php echo $family[0]->mother_edu_cat; ?>"><?php echo $family[0]->m_education; ?></option>
                                   <?php foreach($edu_category as $row)
                                   { 
                                    echo '<option value="'.$row->cat_id.'">&nbsp&nbsp&nbsp;'.$row->edu_category.'</option>';
                                 }
                                 ?>
                              </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Married Sisters</label>
                                 <select style = "text-transform:capitalize;"  name="numberofsisterM" class="form-control" >
                                    <option value="<?php echo $family[0]->no_of_sistersmarried; ?>" ><?php echo $family[0]->no_of_sistersmarried; ?></option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Unmarried Sisters</label>
                                 <select style = "text-transform:capitalize;"  name="numberofsisterUM" class="form-control" >
                                    <option value="<?php echo $family[0]->no_of_sisters_unmarried; ?>" ><?php echo $family[0]->no_of_sisters_unmarried; ?></option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Job Profile Of Sibling</label>
                                 <input type="email" class="form-control" value="<?php echo $family[0]->profile_sibling ?>" name="profile_sibling" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Family Values</label>
                                 <select style = "text-transform:capitalize;"  name="family_value" class="form-control" >
                                  <option value="<?php echo $family[0]->family_value_id; ?>"><?php echo $family[0]->family_value; ?></option>
                                  <?php foreach($family_value as $row)
                                  { 
                                    echo '<option value="'.$row->family_value_id.'">&nbsp&nbsp&nbsp;'.$row->family_value.'</option>';
                                 }
                                 ?>
                              </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Financial Status</label>
                                 <select style = "text-transform:capitalize;"   name="family_status" class="form-control" >
                                   <option value="<?php echo $family[0]->family_status_id ?>"><?php echo $family[0]->family_status ?></option>
                                   <?php foreach($family_status as $row)
                                   { 
                                    echo '<option value="'.$row->family_status_id.'">&nbsp&nbsp&nbsp;'.$row->family_status.'</option>';
                                 }
                                 ?>
                              </select>
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
                  <a href=""id="sbmt6" class="cancel-btn">Cancel</a>
                  <a href="javascript:submit6();" id="sbmt6" class="save-btn">Save</a>
                  <!-- </div> -->
               </div>
            </div>
            <!-- <-----------------Family Details--------------------------> 
            <!-- <-----------------Horoscope Details--------------------------> 
            <div class="edit-prof-form-wrap horos-rw">
               <div class="sub-hed-edit  row" id="cnt7">
                  <h5 class="prof-info-hed1 col-md-11"><img src="<?php echo base_url(); ?>assets/images/Horoscope.png" class="img-fluid prf-info-ic">&nbsp; Horoscope Details</h5>
                  <!-- <p id="cnt"></p> -->
                  <a class="col-lg-1 edt-btn" id="edt7" type="button" data-toggle="collapse" data-target="#collapseExample7" aria-expanded="false" aria-controls="collapseExample7">
                  Edit
                  </a>
                  <div class="basic-row">
                     <div class="col-lg-6 col-12">
                        <table class="p-table">
                           <tbody>
                              <tr>
                                 <th>Time Of Birth   </th>
                                 <td class="p-sep">:</td>
                                 <td data-textbox="tb-name">Not Specified</td>
                              </tr>
                              <tr>
                                 <th>Date Of Birth (Malayalam)</th>
                                 <td class="p-sep">:</td>
                                 <td><span data-select="select-body" data-opt="0">Not Specified</span></td>
                              </tr>
                              <tr>
                                 <th>Janma Sista Dasa End            </th>
                                 <td class="p-sep">:</td>
                                 <td><span data-select="select-body" data-opt="0">Not Specified</span></td>
                              </tr>
                              
                           </tbody>
                        </table>
                     </div>
                     <div class="col-lg-6 col-12">
                        <table class="p-table">
                           <tbody>
                              <tr>
                                 <th>Place Of Birth</th>
                                 <td class="p-sep">:</td>
                                 <td><span data-select="select-Code" data-opt="103">Not Specified</span>  <span></span><span data-textbox="tb-whats"></span></td>
                              </tr>
                              <tr>
                                 <th>Janma Sista Dasa  </th>
                                 <td class="p-sep">:</td>
                                 <td data-textbox="tb-age">Not specified</td>
                              </tr>
                              <tr>
                                 <th>Horoscope File </th>
                                 <td class="p-sep">:</td>
                                 <td data-textbox="tb-age">Not specified</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <div class="col-md-12">
               
                                 <h6 class="hed-cmpt">Computer Horoscope File
                                 </h6>
                           
                     <div class="p-horo-grahanila-wrap">
                        <div class="p-horo-itm">
                           <div class="p-table-wrap">
                              <table class="p-horo-table" id="grahanila">
                                 <tbody>
                                    <tr>
                                       <td class="ltr-shu " data-cell="12">
                                          <span class="p-ltrs horo-bu"></span>
                                          <span class="p-ltrs horo-cha"></span>
                                          <span class="p-ltrs horo-gu"></span>
                                          <span class="p-ltrs horo-ku"></span>
                                          <span class="p-ltrs horo-la"></span>
                                          <span class="p-ltrs horo-ma"></span>
                                          <span class="p-ltrs horo-maa"></span>
                                          <span class="p-ltrs horo-ra"></span>
                                          <span class="p-ltrs horo-sa"></span>
                                          <span class="p-ltrs horo-shi"></span>
                                          <span class="p-ltrs horo-shu"></span>
                                       </td>
                                       <td class="ltr-cha " data-cell="1">
                                          <span class="p-ltrs horo-bu"></span>
                                          <span class="p-ltrs horo-cha"></span>
                                          <span class="p-ltrs horo-gu"></span>
                                          <span class="p-ltrs horo-ku"></span>
                                          <span class="p-ltrs horo-la"></span>
                                          <span class="p-ltrs horo-ma"></span>
                                          <span class="p-ltrs horo-maa"></span>
                                          <span class="p-ltrs horo-ra"></span>
                                          <span class="p-ltrs horo-sa"></span>
                                          <span class="p-ltrs horo-shi"></span>
                                          <span class="p-ltrs horo-shu"></span>
                                       </td>
                                       <td class="ltr-bu ltr-gu " data-cell="2">
                                          <span class="p-ltrs horo-bu"></span>
                                          <span class="p-ltrs horo-cha"></span>
                                          <span class="p-ltrs horo-gu"></span>
                                          <span class="p-ltrs horo-ku"></span>
                                          <span class="p-ltrs horo-la"></span>
                                          <span class="p-ltrs horo-ma"></span>
                                          <span class="p-ltrs horo-maa"></span>
                                          <span class="p-ltrs horo-ra"></span>
                                          <span class="p-ltrs horo-sa"></span>
                                          <span class="p-ltrs horo-shi"></span>
                                          <span class="p-ltrs horo-shu"></span>
                                       </td>
                                       <td data-cell="3">
                                          <span class="p-ltrs horo-bu"></span>
                                          <span class="p-ltrs horo-cha"></span>
                                          <span class="p-ltrs horo-gu"></span>
                                          <span class="p-ltrs horo-ku"></span>
                                          <span class="p-ltrs horo-la"></span>
                                          <span class="p-ltrs horo-ma"></span>
                                          <span class="p-ltrs horo-maa"></span>
                                          <span class="p-ltrs horo-ra"></span>
                                          <span class="p-ltrs horo-sa"></span>
                                          <span class="p-ltrs horo-shi"></span>
                                          <span class="p-ltrs horo-shu"></span>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td data-cell="11">
                                          <span class="p-ltrs horo-bu"></span>
                                          <span class="p-ltrs horo-cha"></span>
                                          <span class="p-ltrs horo-gu"></span>
                                          <span class="p-ltrs horo-ku"></span>
                                          <span class="p-ltrs horo-la"></span>
                                          <span class="p-ltrs horo-ma"></span>
                                          <span class="p-ltrs horo-maa"></span>
                                          <span class="p-ltrs horo-ra"></span>
                                          <span class="p-ltrs horo-sa"></span>
                                          <span class="p-ltrs horo-shi"></span>
                                          <span class="p-ltrs horo-shu"></span>
                                       </td>
                                       <td colspan="2" rowspan="2" class="p-horo-title">
                                          <span class="p-tle">Grahanila</span>
                                       </td>
                                       <td data-cell="4">
                                          <span class="p-ltrs horo-bu"></span>
                                          <span class="p-ltrs horo-cha"></span>
                                          <span class="p-ltrs horo-gu"></span>
                                          <span class="p-ltrs horo-ku"></span>
                                          <span class="p-ltrs horo-la"></span>
                                          <span class="p-ltrs horo-ma"></span>
                                          <span class="p-ltrs horo-maa"></span>
                                          <span class="p-ltrs horo-ra"></span>
                                          <span class="p-ltrs horo-sa"></span>
                                          <span class="p-ltrs horo-shi"></span>
                                          <span class="p-ltrs horo-shu"></span>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="ltr-ku ltr-sa ltr-maa " data-cell="10">
                                          <span class="p-ltrs horo-bu"></span>
                                          <span class="p-ltrs horo-cha"></span>
                                          <span class="p-ltrs horo-gu"></span>
                                          <span class="p-ltrs horo-ku"></span>
                                          <span class="p-ltrs horo-la"></span>
                                          <span class="p-ltrs horo-ma"></span>
                                          <span class="p-ltrs horo-maa"></span>
                                          <span class="p-ltrs horo-ra"></span>
                                          <span class="p-ltrs horo-sa"></span>
                                          <span class="p-ltrs horo-shi"></span>
                                          <span class="p-ltrs horo-shu"></span>
                                       </td>
                                       <td class="ltr-ra " data-cell="5">
                                          <span class="p-ltrs horo-bu"></span>
                                          <span class="p-ltrs horo-cha"></span>
                                          <span class="p-ltrs horo-gu"></span>
                                          <span class="p-ltrs horo-ku"></span>
                                          <span class="p-ltrs horo-la"></span>
                                          <span class="p-ltrs horo-ma"></span>
                                          <span class="p-ltrs horo-maa"></span>
                                          <span class="p-ltrs horo-ra"></span>
                                          <span class="p-ltrs horo-sa"></span>
                                          <span class="p-ltrs horo-shi"></span>
                                          <span class="p-ltrs horo-shu"></span>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="ltr-ma " data-cell="9">
                                          <span class="p-ltrs horo-bu"></span>
                                          <span class="p-ltrs horo-cha"></span>
                                          <span class="p-ltrs horo-gu"></span>
                                          <span class="p-ltrs horo-ku"></span>
                                          <span class="p-ltrs horo-la"></span>
                                          <span class="p-ltrs horo-ma"></span>
                                          <span class="p-ltrs horo-maa"></span>
                                          <span class="p-ltrs horo-ra"></span>
                                          <span class="p-ltrs horo-sa"></span>
                                          <span class="p-ltrs horo-shi"></span>
                                          <span class="p-ltrs horo-shu"></span>
                                       </td>
                                       <td data-cell="8">
                                          <span class="p-ltrs horo-bu"></span>
                                          <span class="p-ltrs horo-cha"></span>
                                          <span class="p-ltrs horo-gu"></span>
                                          <span class="p-ltrs horo-ku"></span>
                                          <span class="p-ltrs horo-la"></span>
                                          <span class="p-ltrs horo-ma"></span>
                                          <span class="p-ltrs horo-maa"></span>
                                          <span class="p-ltrs horo-ra"></span>
                                          <span class="p-ltrs horo-sa"></span>
                                          <span class="p-ltrs horo-shi"></span>
                                          <span class="p-ltrs horo-shu"></span>
                                       </td>
                                       <td class="ltr-la ltr-shi " data-cell="7">
                                          <span class="p-ltrs horo-bu"></span>
                                          <span class="p-ltrs horo-cha"></span>
                                          <span class="p-ltrs horo-gu"></span>
                                          <span class="p-ltrs horo-ku"></span>
                                          <span class="p-ltrs horo-la"></span>
                                          <span class="p-ltrs horo-ma"></span>
                                          <span class="p-ltrs horo-maa"></span>
                                          <span class="p-ltrs horo-ra"></span>
                                          <span class="p-ltrs horo-sa"></span>
                                          <span class="p-ltrs horo-shi"></span>
                                          <span class="p-ltrs horo-shu"></span>
                                       </td>
                                       <td data-cell="6">
                                          <span class="p-ltrs horo-bu"></span>
                                          <span class="p-ltrs horo-cha"></span>
                                          <span class="p-ltrs horo-gu"></span>
                                          <span class="p-ltrs horo-ku"></span>
                                          <span class="p-ltrs horo-la"></span>
                                          <span class="p-ltrs horo-ma"></span>
                                          <span class="p-ltrs horo-maa"></span>
                                          <span class="p-ltrs horo-ra"></span>
                                          <span class="p-ltrs horo-sa"></span>
                                          <span class="p-ltrs horo-shi"></span>
                                          <span class="p-ltrs horo-shu"></span>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                        <div class="p-horo-itm">
                           <div class="p-table-wrap">
                              <table class="p-horo-table" id="navam">
                                 <tbody>
                                    <tr>
                                       <td class="ltr-shu " data-cell="12">
                                          <span class="p-ltrs horo-bu"></span>
                                          <span class="p-ltrs horo-cha"></span>
                                          <span class="p-ltrs horo-gu"></span>
                                          <span class="p-ltrs horo-ku"></span>
                                          <span class="p-ltrs horo-la"></span>
                                          <span class="p-ltrs horo-ma"></span>
                                          <span class="p-ltrs horo-maa"></span>
                                          <span class="p-ltrs horo-ra"></span>
                                          <span class="p-ltrs horo-sa"></span>
                                          <span class="p-ltrs horo-shi"></span>
                                          <span class="p-ltrs horo-shu"></span>
                                       </td>
                                       <td class="ltr-gu " data-cell="1">
                                          <span class="p-ltrs horo-bu"></span>
                                          <span class="p-ltrs horo-cha"></span>
                                          <span class="p-ltrs horo-gu"></span>
                                          <span class="p-ltrs horo-ku"></span>
                                          <span class="p-ltrs horo-la"></span>
                                          <span class="p-ltrs horo-ma"></span>
                                          <span class="p-ltrs horo-maa"></span>
                                          <span class="p-ltrs horo-ra"></span>
                                          <span class="p-ltrs horo-sa"></span>
                                          <span class="p-ltrs horo-shi"></span>
                                          <span class="p-ltrs horo-shu"></span>
                                       </td>
                                       <td class="ltr-la ltr-shi " data-cell="2">
                                          <span class="p-ltrs horo-bu"></span>
                                          <span class="p-ltrs horo-cha"></span>
                                          <span class="p-ltrs horo-gu"></span>
                                          <span class="p-ltrs horo-ku"></span>
                                          <span class="p-ltrs horo-la"></span>
                                          <span class="p-ltrs horo-ma"></span>
                                          <span class="p-ltrs horo-maa"></span>
                                          <span class="p-ltrs horo-ra"></span>
                                          <span class="p-ltrs horo-sa"></span>
                                          <span class="p-ltrs horo-shi"></span>
                                          <span class="p-ltrs horo-shu"></span>
                                       </td>
                                       <td data-cell="3">
                                          <span class="p-ltrs horo-bu"></span>
                                          <span class="p-ltrs horo-cha"></span>
                                          <span class="p-ltrs horo-gu"></span>
                                          <span class="p-ltrs horo-ku"></span>
                                          <span class="p-ltrs horo-la"></span>
                                          <span class="p-ltrs horo-ma"></span>
                                          <span class="p-ltrs horo-maa"></span>
                                          <span class="p-ltrs horo-ra"></span>
                                          <span class="p-ltrs horo-sa"></span>
                                          <span class="p-ltrs horo-shi"></span>
                                          <span class="p-ltrs horo-shu"></span>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="ltr-ra " data-cell="11">
                                          <span class="p-ltrs horo-bu"></span>
                                          <span class="p-ltrs horo-cha"></span>
                                          <span class="p-ltrs horo-gu"></span>
                                          <span class="p-ltrs horo-ku"></span>
                                          <span class="p-ltrs horo-la"></span>
                                          <span class="p-ltrs horo-ma"></span>
                                          <span class="p-ltrs horo-maa"></span>
                                          <span class="p-ltrs horo-ra"></span>
                                          <span class="p-ltrs horo-sa"></span>
                                          <span class="p-ltrs horo-shi"></span>
                                          <span class="p-ltrs horo-shu"></span>
                                       </td>
                                       <td colspan="2" rowspan="2" class="p-horo-title">
                                          <span class="p-tle">Navamshakam</span>
                                       </td>
                                       <td data-cell="4">
                                          <span class="p-ltrs horo-bu"></span>
                                          <span class="p-ltrs horo-cha"></span>
                                          <span class="p-ltrs horo-gu"></span>
                                          <span class="p-ltrs horo-ku"></span>
                                          <span class="p-ltrs horo-la"></span>
                                          <span class="p-ltrs horo-ma"></span>
                                          <span class="p-ltrs horo-maa"></span>
                                          <span class="p-ltrs horo-ra"></span>
                                          <span class="p-ltrs horo-sa"></span>
                                          <span class="p-ltrs horo-shi"></span>
                                          <span class="p-ltrs horo-shu"></span>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="ltr-bu ltr-sa " data-cell="10">
                                          <span class="p-ltrs horo-bu"></span>
                                          <span class="p-ltrs horo-cha"></span>
                                          <span class="p-ltrs horo-gu"></span>
                                          <span class="p-ltrs horo-ku"></span>
                                          <span class="p-ltrs horo-la"></span>
                                          <span class="p-ltrs horo-ma"></span>
                                          <span class="p-ltrs horo-maa"></span>
                                          <span class="p-ltrs horo-ra"></span>
                                          <span class="p-ltrs horo-sa"></span>
                                          <span class="p-ltrs horo-shi"></span>
                                          <span class="p-ltrs horo-shu"></span>
                                       </td>
                                       <td class="ltr-maa " data-cell="5">
                                          <span class="p-ltrs horo-bu"></span>
                                          <span class="p-ltrs horo-cha"></span>
                                          <span class="p-ltrs horo-gu"></span>
                                          <span class="p-ltrs horo-ku"></span>
                                          <span class="p-ltrs horo-la"></span>
                                          <span class="p-ltrs horo-ma"></span>
                                          <span class="p-ltrs horo-maa"></span>
                                          <span class="p-ltrs horo-ra"></span>
                                          <span class="p-ltrs horo-sa"></span>
                                          <span class="p-ltrs horo-shi"></span>
                                          <span class="p-ltrs horo-shu"></span>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td class="ltr-ma " data-cell="9">
                                          <span class="p-ltrs horo-bu"></span>
                                          <span class="p-ltrs horo-cha"></span>
                                          <span class="p-ltrs horo-gu"></span>
                                          <span class="p-ltrs horo-ku"></span>
                                          <span class="p-ltrs horo-la"></span>
                                          <span class="p-ltrs horo-ma"></span>
                                          <span class="p-ltrs horo-maa"></span>
                                          <span class="p-ltrs horo-ra"></span>
                                          <span class="p-ltrs horo-sa"></span>
                                          <span class="p-ltrs horo-shi"></span>
                                          <span class="p-ltrs horo-shu"></span>
                                       </td>
                                       <td class="ltr-cha " data-cell="8">
                                          <span class="p-ltrs horo-bu"></span>
                                          <span class="p-ltrs horo-cha"></span>
                                          <span class="p-ltrs horo-gu"></span>
                                          <span class="p-ltrs horo-ku"></span>
                                          <span class="p-ltrs horo-la"></span>
                                          <span class="p-ltrs horo-ma"></span>
                                          <span class="p-ltrs horo-maa"></span>
                                          <span class="p-ltrs horo-ra"></span>
                                          <span class="p-ltrs horo-sa"></span>
                                          <span class="p-ltrs horo-shi"></span>
                                          <span class="p-ltrs horo-shu"></span>
                                       </td>
                                       <td data-cell="7">
                                          <span class="p-ltrs horo-bu"></span>
                                          <span class="p-ltrs horo-cha"></span>
                                          <span class="p-ltrs horo-gu"></span>
                                          <span class="p-ltrs horo-ku"></span>
                                          <span class="p-ltrs horo-la"></span>
                                          <span class="p-ltrs horo-ma"></span>
                                          <span class="p-ltrs horo-maa"></span>
                                          <span class="p-ltrs horo-ra"></span>
                                          <span class="p-ltrs horo-sa"></span>
                                          <span class="p-ltrs horo-shi"></span>
                                          <span class="p-ltrs horo-shu"></span>
                                       </td>
                                       <td class="ltr-ku " data-cell="6">
                                          <span class="p-ltrs horo-bu"></span>
                                          <span class="p-ltrs horo-cha"></span>
                                          <span class="p-ltrs horo-gu"></span>
                                          <span class="p-ltrs horo-ku"></span>
                                          <span class="p-ltrs horo-la"></span>
                                          <span class="p-ltrs horo-ma"></span>
                                          <span class="p-ltrs horo-maa"></span>
                                          <span class="p-ltrs horo-ra"></span>
                                          <span class="p-ltrs horo-sa"></span>
                                          <span class="p-ltrs horo-shi"></span>
                                          <span class="p-ltrs horo-shu"></span>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="collapse" id="collapseExample7">
                  <form class="mrg-edt-form" >
                     <div class="form-group">
                        <h5 class="prof-info-hed1 col-md-11"><img src="<?php echo base_url(); ?>assets/images/Horoscope.png" class="img-fluid prf-info-ic">&nbsp; Horoscope Details</h5>
                        <div class="row basic-form-row">
                           <div class="col-lg-12">
                              <h6 class="horo-subhed">Time Of Birth</h6>
                           </div>
                           <div class="col-lg-4">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Hour</label>
                                 <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Minute</label>
                                 <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Second</label>
                                 <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                           </div>
                        </div>
                        <div class="row basic-form-row">
                           <div class="col-lg-12">
                              <h6 class="horo-subhed">Place Of Birth</h6>
                           </div>
                           <div class="col-lg-4">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Country</label>
                                 <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Region</label>
                                 <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Place</label>
                                 <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                           </div>
                        </div>
                        <div class="row basic-form-row">
                           <div class="col-lg-12">
                              <h6 class="horo-subhed">Date Of Birth (Malayalam)</h6>
                           </div>
                           <div class="col-lg-4">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Day</label>
                                 <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Month</label>
                                 <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Year</label>
                                 <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                           </div>
                        </div>
                        <div class="row basic-form-row">
                           <div class="col-lg-12">
                              <h6 class="horo-subhed">Janma Sista Dasa Details</h6>
                           </div>
                           <div class="col-lg-4">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Janma Sista Dasa
                                 </label>
                                 <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                           </div>
                           <div class="col-lg-4">
                            <div class="row">

                                   <div class="col-lg-6">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">End Day</label>
                                 <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                           </div>
                     
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">End Month</label>
                                 <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                           </div>
                               </div>
                         </div>
                           <div class="col-lg-4">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">End Year</label>
                                 <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                           </div>
                        </div>
                        <div class=" row mrg-upload">
                           <div class="col-lg-3">
                              <div class="form-group">
                                 <label for="exampleInputEmail1" class="up-labl mrg-upload">Upload Horoscope</label>
                              </div>
                           </div>
                           <div class="upload-btn-wrapper col-lg-3">
                              <a href="#" class="btn">Upload a file</a>
                              <input type="file" name="myfile" />
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-sm-3">
                              <div class="graham">
                                 <em class="horo-bu"></em>
                                 <span class="select-holder">
                                    <select data-type="gnBu" data-val="true" data-val-number="The field edtGBu must be a number." id="edtGBu" name="edtGBu" onchange="ChngGrahanila(tp='edtGBu')" class="valid">
                                       <option value="0">Select</option>
                                       <option value="1">1</option>
                                       <option selected="selected" value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                    </select>
                                 </span>
                              </div>
                              <div class="graham">
                                 <em class="horo-cha"></em>
                                 <span class="select-holder">
                                    <select data-type="gnCha" data-val="true" data-val-number="The field edtGCha must be a number." id="edtGCha" name="edtGCha" onchange="ChngGrahanila(tp='edtGCha')" class="valid">
                                       <option value="0">Select</option>
                                       <option selected="selected" value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                    </select>
                                 </span>
                              </div>
                              <div class="graham">
                                 <em class="horo-gu"></em>
                                 <span class="select-holder">
                                    <select data-type="gnGu" data-val="true" data-val-number="The field edtGGu must be a number." id="edtGGu" name="edtGGu" onchange="ChngGrahanila(tp='edtGGu')">
                                       <option value="0">Select</option>
                                       <option value="1">1</option>
                                       <option selected="selected" value="2">2</option>
                                       <option value="3">3</option>
                                    </select>
                                 </span>
                              </div>
                              <div class="graham">
                                 <em class="horo-ku"></em>
                                 <span class="select-holder">
                                    <select data-type="gnKu" data-val="true" data-val-number="The field edtGKu must be a number." id="edtGKu" name="edtGKu" onchange="ChngGrahanila(tp='edtGKu')">
                                       <option value="0">Select</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                    </select>
                                 </span>
                              </div>
                              <div class="graham">
                                 <em class="horo-la"></em>
                                 <span class="select-holder">
                                    <select data-type="gnLa" data-val="true" data-val-number="The field edtGLa must be a number." id="edtGLa" name="edtGLa" onchange="ChngGrahanila(tp='edtGLa')">
                                       <option value="0">Select</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                    </select>
                                 </span>
                              </div>
                              <div class="graham">
                                 <em class="horo-ma"></em>
                                 <span class="select-holder">
                                    <select data-type="gnMa" data-val="true" data-val-number="The field edtGMa must be a number." id="edtGMa" name="edtGMa" onchange="ChngGrahanila(tp='edtGMa')">
                                       <option value="0">Select</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                    </select>
                                 </span>
                              </div>
                              <div class="graham">
                                 <em class="horo-maa"></em>
                                 <span class="select-holder">
                                    <select data-type="gnMaa" data-val="true" data-val-number="The field edtGMaa must be a number." id="edtGMaa" name="edtGMaa" onchange="ChngGrahanila(tp='edtGMaa')">
                                       <option value="0">Select</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                    </select>
                                 </span>
                              </div>
                              <div class="graham">
                                 <em class="horo-ra"></em>
                                 <span class="select-holder">
                                    <select data-type="gnRa" data-val="true" data-val-number="The field edtGRa must be a number." id="edtGRa" name="edtGRa" onchange="ChngGrahanila(tp='edtGRa')">
                                       <option value="0">Select</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                    </select>
                                 </span>
                              </div>
                              <div class="graham">
                                 <em class="horo-sa"></em>
                                 <span class="select-holder">
                                    <select data-type="gnSa" data-val="true" data-val-number="The field edtGSa must be a number." id="edtGSa" name="edtGSa" onchange="ChngGrahanila(tp='edtGSa')">
                                       <option value="0">Select</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                    </select>
                                 </span>
                              </div>
                              <div class="graham">
                                 <em class="horo-shi"></em>
                                 <span class="select-holder">
                                    <select data-type="gnShi" data-val="true" data-val-number="The field edtGShi must be a number." id="edtGShi" name="edtGShi" onchange="ChngGrahanila(tp='edtGShi')">
                                       <option value="0">Select</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                    </select>
                                 </span>
                              </div>
                              <div class="graham">
                                 <em class="horo-shu"></em>
                                 <span class="select-holder">
                                    <select data-type="gnShu" data-val="true" data-val-number="The field edtGShu must be a number." id="edtGShu" name="edtGShu" onchange="ChngGrahanila(tp='edtGShu')">
                                       <option value="0">Select</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option selected="selected" value="12">12</option>
                                    </select>
                                 </span>
                              </div>
                           </div>
                           <div class="col-sm-9 p-horo-grahanila-wrap horo-wp">
                              <div class="p-horo-itm">
                                 <div class="p-table-wrap">
                                    <table class="p-horo-table">
                                       <tbody>
                                          <tr>
                                             <td data-block="12" class="twelve ltr-shu ">
                                                <span class="p-ltrs horo-bu"></span>
                                                <span class="p-ltrs horo-cha"></span>
                                                <span class="p-ltrs horo-gu"></span>
                                                <span class="p-ltrs horo-ku"></span>
                                                <span class="p-ltrs horo-la"></span>
                                                <span class="p-ltrs horo-ma"></span>
                                                <span class="p-ltrs horo-maa"></span>
                                                <span class="p-ltrs horo-ra"></span>
                                                <span class="p-ltrs horo-sa"></span>
                                                <span class="p-ltrs horo-shi"></span>
                                                <span class="p-ltrs horo-shu"></span>
                                             </td>
                                             <td data-block="1" class="one ltr-cha ">
                                                <span class="p-ltrs horo-bu"></span>
                                                <span class="p-ltrs horo-cha"></span>
                                                <span class="p-ltrs horo-gu"></span>
                                                <span class="p-ltrs horo-ku"></span>
                                                <span class="p-ltrs horo-la"></span>
                                                <span class="p-ltrs horo-ma"></span>
                                                <span class="p-ltrs horo-maa"></span>
                                                <span class="p-ltrs horo-ra"></span>
                                                <span class="p-ltrs horo-sa"></span>
                                                <span class="p-ltrs horo-shi"></span>
                                                <span class="p-ltrs horo-shu"></span>
                                             </td>
                                             <td data-block="2" class="two ltr-bu ltr-gu ">
                                                <span class="p-ltrs horo-bu"></span>
                                                <span class="p-ltrs horo-cha"></span>
                                                <span class="p-ltrs horo-gu"></span>
                                                <span class="p-ltrs horo-ku"></span>
                                                <span class="p-ltrs horo-la"></span>
                                                <span class="p-ltrs horo-ma"></span>
                                                <span class="p-ltrs horo-maa"></span>
                                                <span class="p-ltrs horo-ra"></span>
                                                <span class="p-ltrs horo-sa"></span>
                                                <span class="p-ltrs horo-shi"></span>
                                                <span class="p-ltrs horo-shu"></span>
                                             </td>
                                             <td data-block="3" class="three">
                                                <span class="p-ltrs horo-bu"></span>
                                                <span class="p-ltrs horo-cha"></span>
                                                <span class="p-ltrs horo-gu"></span>
                                                <span class="p-ltrs horo-ku"></span>
                                                <span class="p-ltrs horo-la"></span>
                                                <span class="p-ltrs horo-ma"></span>
                                                <span class="p-ltrs horo-maa"></span>
                                                <span class="p-ltrs horo-ra"></span>
                                                <span class="p-ltrs horo-sa"></span>
                                                <span class="p-ltrs horo-shi"></span>
                                                <span class="p-ltrs horo-shu"></span>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td data-block="11" class="eleven">
                                                <span class="p-ltrs horo-bu"></span>
                                                <span class="p-ltrs horo-cha"></span>
                                                <span class="p-ltrs horo-gu"></span>
                                                <span class="p-ltrs horo-ku"></span>
                                                <span class="p-ltrs horo-la"></span>
                                                <span class="p-ltrs horo-ma"></span>
                                                <span class="p-ltrs horo-maa"></span>
                                                <span class="p-ltrs horo-ra"></span>
                                                <span class="p-ltrs horo-sa"></span>
                                                <span class="p-ltrs horo-shi"></span>
                                                <span class="p-ltrs horo-shu"></span>
                                             </td>
                                             <td colspan="2" rowspan="2" class="p-horo-title">
                                                <span class="p-tle">Grahanila</span>
                                             </td>
                                             <td data-block="4" class="four">
                                                <span class="p-ltrs horo-bu"></span>
                                                <span class="p-ltrs horo-cha"></span>
                                                <span class="p-ltrs horo-gu"></span>
                                                <span class="p-ltrs horo-ku"></span>
                                                <span class="p-ltrs horo-la"></span>
                                                <span class="p-ltrs horo-ma"></span>
                                                <span class="p-ltrs horo-maa"></span>
                                                <span class="p-ltrs horo-ra"></span>
                                                <span class="p-ltrs horo-sa"></span>
                                                <span class="p-ltrs horo-shi"></span>
                                                <span class="p-ltrs horo-shu"></span>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td data-block="10" class="ten ltr-ku ltr-sa ltr-maa ">
                                                <span class="p-ltrs horo-bu"></span>
                                                <span class="p-ltrs horo-cha"></span>
                                                <span class="p-ltrs horo-gu"></span>
                                                <span class="p-ltrs horo-ku"></span>
                                                <span class="p-ltrs horo-la"></span>
                                                <span class="p-ltrs horo-ma"></span>
                                                <span class="p-ltrs horo-maa"></span>
                                                <span class="p-ltrs horo-ra"></span>
                                                <span class="p-ltrs horo-sa"></span>
                                                <span class="p-ltrs horo-shi"></span>
                                                <span class="p-ltrs horo-shu"></span>
                                             </td>
                                             <td data-block="5" class="five ltr-ra ">
                                                <span class="p-ltrs horo-bu"></span>
                                                <span class="p-ltrs horo-cha"></span>
                                                <span class="p-ltrs horo-gu"></span>
                                                <span class="p-ltrs horo-ku"></span>
                                                <span class="p-ltrs horo-la"></span>
                                                <span class="p-ltrs horo-ma"></span>
                                                <span class="p-ltrs horo-maa"></span>
                                                <span class="p-ltrs horo-ra"></span>
                                                <span class="p-ltrs horo-sa"></span>
                                                <span class="p-ltrs horo-shi"></span>
                                                <span class="p-ltrs horo-shu"></span>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td data-block="9" class="nine ltr-ma ">
                                                <span class="p-ltrs horo-bu"></span>
                                                <span class="p-ltrs horo-cha"></span>
                                                <span class="p-ltrs horo-gu"></span>
                                                <span class="p-ltrs horo-ku"></span>
                                                <span class="p-ltrs horo-la"></span>
                                                <span class="p-ltrs horo-ma"></span>
                                                <span class="p-ltrs horo-maa"></span>
                                                <span class="p-ltrs horo-ra"></span>
                                                <span class="p-ltrs horo-sa"></span>
                                                <span class="p-ltrs horo-shi"></span>
                                                <span class="p-ltrs horo-shu"></span>
                                             </td>
                                             <td data-block="8" class="eight">
                                                <span class="p-ltrs horo-bu"></span>
                                                <span class="p-ltrs horo-cha"></span>
                                                <span class="p-ltrs horo-gu"></span>
                                                <span class="p-ltrs horo-ku"></span>
                                                <span class="p-ltrs horo-la"></span>
                                                <span class="p-ltrs horo-ma"></span>
                                                <span class="p-ltrs horo-maa"></span>
                                                <span class="p-ltrs horo-ra"></span>
                                                <span class="p-ltrs horo-sa"></span>
                                                <span class="p-ltrs horo-shi"></span>
                                                <span class="p-ltrs horo-shu"></span>
                                             </td>
                                             <td data-block="7" class="seven ltr-la ltr-shi ">
                                                <span class="p-ltrs horo-bu"></span>
                                                <span class="p-ltrs horo-cha"></span>
                                                <span class="p-ltrs horo-gu"></span>
                                                <span class="p-ltrs horo-ku"></span>
                                                <span class="p-ltrs horo-la"></span>
                                                <span class="p-ltrs horo-ma"></span>
                                                <span class="p-ltrs horo-maa"></span>
                                                <span class="p-ltrs horo-ra"></span>
                                                <span class="p-ltrs horo-sa"></span>
                                                <span class="p-ltrs horo-shi"></span>
                                                <span class="p-ltrs horo-shu"></span>
                                             </td>
                                             <td data-block="6" class="six">
                                                <span class="p-ltrs horo-bu"></span>
                                                <span class="p-ltrs horo-cha"></span>
                                                <span class="p-ltrs horo-gu"></span>
                                                <span class="p-ltrs horo-ku"></span>
                                                <span class="p-ltrs horo-la"></span>
                                                <span class="p-ltrs horo-ma"></span>
                                                <span class="p-ltrs horo-maa"></span>
                                                <span class="p-ltrs horo-ra"></span>
                                                <span class="p-ltrs horo-sa"></span>
                                                <span class="p-ltrs horo-shi"></span>
                                                <span class="p-ltrs horo-shu"></span>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-sm-3">
                              <div class="graham">
                                 <em class="horo-bu"></em>
                                 <span class="select-holder">
                                    <select data-type="navBu" data-val="true" data-val-number="The field edtNBu must be a number." id="edtNBu" name="edtNBu" onchange="ChngNavamsakam(tp='edtNBu')">
                                       <option value="0">Select</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                       <option value="6">6</option>
                                       <option value="7">7</option>
                                       <option value="8">8</option>
                                       <option value="9">9</option>
                                       <option selected="selected" value="10">10</option>
                                       <option value="11">11</option>
                                       <option value="12">12</option>
                                    </select>
                                 </span>
                              </div>
                              <div class="graham">
                                 <em class="horo-cha"></em>
                                 <span class="select-holder">
                                    <select data-type="navCha" data-val="true" data-val-number="The field edtNCha must be a number." id="edtNCha" name="edtNCha" onchange="ChngNavamsakam(tp='edtNCha')">
                                       <option value="0">Select</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                       <option value="6">6</option>
                                       <option value="7">7</option>
                                       <option selected="selected" value="8">8</option>
                                       <option value="9">9</option>
                                       <option value="10">10</option>
                                       <option value="11">11</option>
                                       <option value="12">12</option>
                                    </select>
                                 </span>
                              </div>
                              <div class="graham">
                                 <em class="horo-gu"></em>
                                 <span class="select-holder">
                                    <select data-type="navGu" data-val="true" data-val-number="The field edtNGu must be a number." id="edtNGu" name="edtNGu" onchange="ChngNavamsakam(tp='edtNGu')">
                                       <option value="0">Select</option>
                                       <option selected="selected" value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                       <option value="6">6</option>
                                       <option value="7">7</option>
                                       <option value="8">8</option>
                                       <option value="9">9</option>
                                       <option value="10">10</option>
                                       <option value="11">11</option>
                                       <option value="12">12</option>
                                    </select>
                                 </span>
                              </div>
                              <div class="graham">
                                 <em class="horo-ku"></em>
                                 <span class="select-holder">
                                    <select data-type="navKu" data-val="true" data-val-number="The field edtNKu must be a number." id="edtNKu" name="edtNKu" onchange="ChngNavamsakam(tp='edtNKu')">
                                       <option value="0">Select</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                       <option selected="selected" value="6">6</option>
                                       <option value="7">7</option>
                                       <option value="8">8</option>
                                       <option value="9">9</option>
                                       <option value="10">10</option>
                                       <option value="11">11</option>
                                       <option value="12">12</option>
                                    </select>
                                 </span>
                              </div>
                              <div class="graham">
                                 <em class="horo-la"></em>
                                 <span class="select-holder">
                                    <select data-type="navLa" data-val="true" data-val-number="The field edtNLa must be a number." id="edtNLa" name="edtNLa" onchange="ChngNavamsakam(tp='edtNLa')">
                                       <option value="0">Select</option>
                                       <option value="1">1</option>
                                       <option selected="selected" value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                       <option value="6">6</option>
                                       <option value="7">7</option>
                                       <option value="8">8</option>
                                       <option value="9">9</option>
                                       <option value="10">10</option>
                                       <option value="11">11</option>
                                       <option value="12">12</option>
                                    </select>
                                 </span>
                              </div>
                              <div class="graham">
                                 <em class="horo-ma"></em>
                                 <span class="select-holder">
                                    <select data-type="navMa" data-val="true" data-val-number="The field edtNMa must be a number." id="edtNMa" name="edtNMa" onchange="ChngNavamsakam(tp='edtNMa')">
                                       <option value="0">Select</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                       <option value="6">6</option>
                                       <option value="7">7</option>
                                       <option value="8">8</option>
                                       <option selected="selected" value="9">9</option>
                                       <option value="10">10</option>
                                       <option value="11">11</option>
                                       <option value="12">12</option>
                                    </select>
                                 </span>
                              </div>
                              <div class="graham">
                                 <em class="horo-maa"></em>
                                 <span class="select-holder">
                                    <select data-type="navMaa" data-val="true" data-val-number="The field edtNMaa must be a number." id="edtNMaa" name="edtNMaa" onchange="ChngNavamsakam(tp='edtNMaa')">
                                       <option value="0">Select</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option selected="selected" value="5">5</option>
                                       <option value="6">6</option>
                                       <option value="7">7</option>
                                       <option value="8">8</option>
                                       <option value="9">9</option>
                                       <option value="10">10</option>
                                       <option value="11">11</option>
                                       <option value="12">12</option>
                                    </select>
                                 </span>
                              </div>
                              <div class="graham">
                                 <em class="horo-ra"></em>
                                 <span class="select-holder">
                                    <select data-type="navRa" data-val="true" data-val-number="The field edtNRa must be a number." id="edtNRa" name="edtNRa" onchange="ChngNavamsakam(tp='edtNRa')">
                                       <option value="0">Select</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                       <option value="6">6</option>
                                       <option value="7">7</option>
                                       <option value="8">8</option>
                                       <option value="9">9</option>
                                       <option value="10">10</option>
                                       <option selected="selected" value="11">11</option>
                                       <option value="12">12</option>
                                    </select>
                                 </span>
                              </div>
                              <div class="graham">
                                 <em class="horo-sa"></em>
                                 <span class="select-holder">
                                    <select data-type="navSa" data-val="true" data-val-number="The field edtNSa must be a number." id="edtNSa" name="edtNSa" onchange="ChngNavamsakam(tp='edtNSa')">
                                       <option value="0">Select</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                       <option value="6">6</option>
                                       <option value="7">7</option>
                                       <option value="8">8</option>
                                       <option value="9">9</option>
                                       <option selected="selected" value="10">10</option>
                                       <option value="11">11</option>
                                       <option value="12">12</option>
                                    </select>
                                 </span>
                              </div>
                              <div class="graham">
                                 <em class="horo-shi"></em>
                                 <span class="select-holder">
                                    <select data-type="navShi" data-val="true" data-val-number="The field edtNShi must be a number." id="edtNShi" name="edtNShi" onchange="ChngNavamsakam(tp='edtNShi')">
                                       <option value="0">Select</option>
                                       <option value="1">1</option>
                                       <option selected="selected" value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                       <option value="6">6</option>
                                       <option value="7">7</option>
                                       <option value="8">8</option>
                                       <option value="9">9</option>
                                       <option value="10">10</option>
                                       <option value="11">11</option>
                                       <option value="12">12</option>
                                    </select>
                                 </span>
                              </div>
                              <div class="graham">
                                 <em class="horo-shu"></em>
                                 <span class="select-holder">
                                    <select data-type="navShu" data-val="true" data-val-number="The field edtNShu must be a number." id="edtNShu" name="edtNShu" onchange="ChngNavamsakam(tp='edtNShu')">
                                       <option value="0">Select</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                       <option value="6">6</option>
                                       <option value="7">7</option>
                                       <option value="8">8</option>
                                       <option value="9">9</option>
                                       <option value="10">10</option>
                                       <option value="11">11</option>
                                       <option selected="selected" value="12">12</option>
                                    </select>
                                 </span>
                              </div>
                           </div>
                           <div class="col-sm-9 p-horo-grahanila-wrap horo-wp">
                              <div class="p-horo-itm">
                                 <div class="p-table-wrap">
                                    <table class="p-horo-table">
                                       <tbody>
                                          <tr>
                                             <td data-block="12" class="twelve ltr-shu ">
                                                <span class="p-ltrs horo-bu"></span>
                                                <span class="p-ltrs horo-cha"></span>
                                                <span class="p-ltrs horo-gu"></span>
                                                <span class="p-ltrs horo-ku"></span>
                                                <span class="p-ltrs horo-la"></span>
                                                <span class="p-ltrs horo-ma"></span>
                                                <span class="p-ltrs horo-maa"></span>
                                                <span class="p-ltrs horo-ra"></span>
                                                <span class="p-ltrs horo-sa"></span>
                                                <span class="p-ltrs horo-shi"></span>
                                                <span class="p-ltrs horo-shu"></span>
                                             </td>
                                             <td data-block="1" class="one ltr-gu ">
                                                <span class="p-ltrs horo-bu"></span>
                                                <span class="p-ltrs horo-cha"></span>
                                                <span class="p-ltrs horo-gu"></span>
                                                <span class="p-ltrs horo-ku"></span>
                                                <span class="p-ltrs horo-la"></span>
                                                <span class="p-ltrs horo-ma"></span>
                                                <span class="p-ltrs horo-maa"></span>
                                                <span class="p-ltrs horo-ra"></span>
                                                <span class="p-ltrs horo-sa"></span>
                                                <span class="p-ltrs horo-shi"></span>
                                                <span class="p-ltrs horo-shu"></span>
                                             </td>
                                             <td data-block="2" class="two ltr-la ltr-shi ">
                                                <span class="p-ltrs horo-bu"></span>
                                                <span class="p-ltrs horo-cha"></span>
                                                <span class="p-ltrs horo-gu"></span>
                                                <span class="p-ltrs horo-ku"></span>
                                                <span class="p-ltrs horo-la"></span>
                                                <span class="p-ltrs horo-ma"></span>
                                                <span class="p-ltrs horo-maa"></span>
                                                <span class="p-ltrs horo-ra"></span>
                                                <span class="p-ltrs horo-sa"></span>
                                                <span class="p-ltrs horo-shi"></span>
                                                <span class="p-ltrs horo-shu"></span>
                                             </td>
                                             <td data-block="3" class="three">
                                                <span class="p-ltrs horo-bu"></span>
                                                <span class="p-ltrs horo-cha"></span>
                                                <span class="p-ltrs horo-gu"></span>
                                                <span class="p-ltrs horo-ku"></span>
                                                <span class="p-ltrs horo-la"></span>
                                                <span class="p-ltrs horo-ma"></span>
                                                <span class="p-ltrs horo-maa"></span>
                                                <span class="p-ltrs horo-ra"></span>
                                                <span class="p-ltrs horo-sa"></span>
                                                <span class="p-ltrs horo-shi"></span>
                                                <span class="p-ltrs horo-shu"></span>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td data-block="11" class="eleven ltr-ra ">
                                                <span class="p-ltrs horo-bu"></span>
                                                <span class="p-ltrs horo-cha"></span>
                                                <span class="p-ltrs horo-gu"></span>
                                                <span class="p-ltrs horo-ku"></span>
                                                <span class="p-ltrs horo-la"></span>
                                                <span class="p-ltrs horo-ma"></span>
                                                <span class="p-ltrs horo-maa"></span>
                                                <span class="p-ltrs horo-ra"></span>
                                                <span class="p-ltrs horo-sa"></span>
                                                <span class="p-ltrs horo-shi"></span>
                                                <span class="p-ltrs horo-shu"></span>
                                             </td>
                                             <td colspan="2" rowspan="2" class="p-horo-title">
                                                <span class="p-tle">Navamshakam</span>
                                             </td>
                                             <td data-block="4" class="four">
                                                <span class="p-ltrs horo-bu"></span>
                                                <span class="p-ltrs horo-cha"></span>
                                                <span class="p-ltrs horo-gu"></span>
                                                <span class="p-ltrs horo-ku"></span>
                                                <span class="p-ltrs horo-la"></span>
                                                <span class="p-ltrs horo-ma"></span>
                                                <span class="p-ltrs horo-maa"></span>
                                                <span class="p-ltrs horo-ra"></span>
                                                <span class="p-ltrs horo-sa"></span>
                                                <span class="p-ltrs horo-shi"></span>
                                                <span class="p-ltrs horo-shu"></span>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td data-block="10" class="ten ltr-bu ltr-sa ">
                                                <span class="p-ltrs horo-bu"></span>
                                                <span class="p-ltrs horo-cha"></span>
                                                <span class="p-ltrs horo-gu"></span>
                                                <span class="p-ltrs horo-ku"></span>
                                                <span class="p-ltrs horo-la"></span>
                                                <span class="p-ltrs horo-ma"></span>
                                                <span class="p-ltrs horo-maa"></span>
                                                <span class="p-ltrs horo-ra"></span>
                                                <span class="p-ltrs horo-sa"></span>
                                                <span class="p-ltrs horo-shi"></span>
                                                <span class="p-ltrs horo-shu"></span>
                                             </td>
                                             <td data-block="5" class="five ltr-maa ">
                                                <span class="p-ltrs horo-bu"></span>
                                                <span class="p-ltrs horo-cha"></span>
                                                <span class="p-ltrs horo-gu"></span>
                                                <span class="p-ltrs horo-ku"></span>
                                                <span class="p-ltrs horo-la"></span>
                                                <span class="p-ltrs horo-ma"></span>
                                                <span class="p-ltrs horo-maa"></span>
                                                <span class="p-ltrs horo-ra"></span>
                                                <span class="p-ltrs horo-sa"></span>
                                                <span class="p-ltrs horo-shi"></span>
                                                <span class="p-ltrs horo-shu"></span>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td data-block="9" class="nine ltr-ma ">
                                                <span class="p-ltrs horo-bu"></span>
                                                <span class="p-ltrs horo-cha"></span>
                                                <span class="p-ltrs horo-gu"></span>
                                                <span class="p-ltrs horo-ku"></span>
                                                <span class="p-ltrs horo-la"></span>
                                                <span class="p-ltrs horo-ma"></span>
                                                <span class="p-ltrs horo-maa"></span>
                                                <span class="p-ltrs horo-ra"></span>
                                                <span class="p-ltrs horo-sa"></span>
                                                <span class="p-ltrs horo-shi"></span>
                                                <span class="p-ltrs horo-shu"></span>
                                             </td>
                                             <td data-block="8" class="eight ltr-cha ">
                                                <span class="p-ltrs horo-bu"></span>
                                                <span class="p-ltrs horo-cha"></span>
                                                <span class="p-ltrs horo-gu"></span>
                                                <span class="p-ltrs horo-ku"></span>
                                                <span class="p-ltrs horo-la"></span>
                                                <span class="p-ltrs horo-ma"></span>
                                                <span class="p-ltrs horo-maa"></span>
                                                <span class="p-ltrs horo-ra"></span>
                                                <span class="p-ltrs horo-sa"></span>
                                                <span class="p-ltrs horo-shi"></span>
                                                <span class="p-ltrs horo-shu"></span>
                                             </td>
                                             <td data-block="7" class="seven">
                                                <span class="p-ltrs horo-bu"></span>
                                                <span class="p-ltrs horo-cha"></span>
                                                <span class="p-ltrs horo-gu"></span>
                                                <span class="p-ltrs horo-ku"></span>
                                                <span class="p-ltrs horo-la"></span>
                                                <span class="p-ltrs horo-ma"></span>
                                                <span class="p-ltrs horo-maa"></span>
                                                <span class="p-ltrs horo-ra"></span>
                                                <span class="p-ltrs horo-sa"></span>
                                                <span class="p-ltrs horo-shi"></span>
                                                <span class="p-ltrs horo-shu"></span>
                                             </td>
                                             <td data-block="6" class="six ltr-ku ">
                                                <span class="p-ltrs horo-bu"></span>
                                                <span class="p-ltrs horo-cha"></span>
                                                <span class="p-ltrs horo-gu"></span>
                                                <span class="p-ltrs horo-ku"></span>
                                                <span class="p-ltrs horo-la"></span>
                                                <span class="p-ltrs horo-ma"></span>
                                                <span class="p-ltrs horo-maa"></span>
                                                <span class="p-ltrs horo-ra"></span>
                                                <span class="p-ltrs horo-sa"></span>
                                                <span class="p-ltrs horo-shi"></span>
                                                <span class="p-ltrs horo-shu"></span>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
                  <a href=""id="sbmt7" class="cancel-btn">Cancel</a>
                  <a href=""id="sbmt7" class="save-btn">Save</a>
                  <!-- </div> -->
               </div>
            </div>
            <!-- <-----------------Horoscope Details--------------------------> 
            <!-- <-----------------Life Style Details--------------------------> 
            <div class="edit-prof-form-wrap">
               <div class="sub-hed-edit row" id="cnt8">
                  <h5 class="prof-info-hed1 col-md-11"><i class="fas fa-walking "></i>&nbsp; Life Style</h5>
                  <!-- <p id="cnt"></p> -->
                  <a class="col-lg-1 edt-btn" id="edt8" type="button" data-toggle="collapse" data-target="#collapseExample8" aria-expanded="false" aria-controls="collapseExample8">
                  Edit
                  </a>
                  <div class="basic-row">
                     <div class="col-lg-6 col-12">
                        <table class="p-table">
                           <tbody>
                              <tr>
                                 <th>Eating Habits </th>
                                 <td class="p-sep">:</td>
                                 <td data-textbox="tb-name"><?php echo $lifestyle[0]->eating_habbit; ?></td>
                              </tr>
                              <tr>
                                 <th>Smoking Habits</th>
                                 <td class="p-sep">:</td>
                                 <td><span data-select="select-body" data-opt="0"><?php echo $lifestyle[0]->s_habbi; ?></span></td>
                              </tr>
                              <tr>
                                 <th>Hobbies</th>
                                 <td class="p-sep">:</td>
                                 <td data-textbox="tb-age"><?php echo $lifestyle[0]->hobby; ?></td>
                              </tr>
                              <tr>
                                 <th>Blog</th>
                                 <td class="p-sep">:</td>
                                 <td><span data-select="select-body" data-opt="0"><?php echo $lifestyle[0]->blog; ?></span></td>
                              </tr>
                              <tr>
                                 <th>Other Social Network</th>
                                 <td class="p-sep">:</td>
                                 <td><span data-select="select-body" data-opt="0"><?php echo $lifestyle[0]->othe_social; ?></span></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <div class="col-lg-6 col-12">
                        <table class="p-table">
                           <tbody>
                              <tr>
                                 <th>Drinking Habits</th>
                                 <td class="p-sep">:</td>
                                 <td><span data-select="select-Code" data-opt="103"><?php echo $lifestyle[0]->d_habbi; ?></span>  <span></span><span data-textbox="tb-whats"></span></td>
                              </tr>
                              <tr>
                                 <th>Languages Known</th>
                                 <td class="p-sep">:</td>
                                 <td data-textbox="tb-age"><?php echo $lifestyle[0]->language; ?></td>
                              </tr>
                              <tr>
                                 <th>Interests</th>
                                 <td class="p-sep">:</td>
                                 <td data-textbox="tb-age"><?php echo $lifestyle[0]->interest; ?></td>
                              </tr>
                              <tr>
                                 <th>Facebook Link</th>
                                 <td class="p-sep">:</td>
                                 <td data-textbox="tb-age"><?php echo $lifestyle[0]->facebook; ?></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <div class="collapse" id="collapseExample8">
                  <form id="myform8" class="mrg-edt-form" method="POST" action="<?php echo site_url('Register/reg_lifestyle');?>">
                     <div class="form-group">
                        <h5 class="prof-info-hed1 col-md-11"><i class="fas fa-walking"></i>&nbsp; Life Style</h5>
                        <div class="row basic-form-row">
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Eating Habits </label>
                                 <select style = "text-transform:capitalize;"  class="form-control x2"   name="eating" >
                                    <option value="<?php echo $lifestyle[0]->eating_id; ?>"><?php echo $lifestyle[0]->eating_habbit; ?></option>

                                    <?php foreach($eating_habbit as $row)
                                    { 
                                     echo '<option value="'.$row->eating_id.'">&nbsp&nbsp&nbsp;'.$row->eating_habbit.'</option>';
                                  }
                                  ?>
                               </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Smoking Habits </label>
                                 <select style = "text-transform:capitalize;"  class="form-control x2"   name="smoking" >
                                    <option value="<?php echo $lifestyle[0]->smoking_id; ?>"><?php echo $lifestyle[0]->s_habbi; ?></option>

                                    <?php foreach($habbit_type as $row)
                                    { 
                                     echo '<option value="'.$row->habbit_type_id.'">&nbsp&nbsp&nbsp;'.$row->habbit_type.'</option>';
                                  }
                                  ?>
                               </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Hobbies</label>
                                 <select style = "text-transform:capitalize;"  class="form-control x2"   name="hobbies" >
                                    <option value="<?php echo $lifestyle[0]->hobbies; ?>"><?php echo $lifestyle[0]->hobby; ?></option>
                                    <?php foreach($hobbies as $row)
                                    { 
                                     echo '<option value="'.$row->hobby_id.'">&nbsp&nbsp&nbsp;'.$row->hobby.'</option>';
                                  }
                                  ?>
                                  </select>
                              </div>

                              <div class="form-group">
                                 <label for="exampleInpufftEmail1">Blog</label>
                                 <input type="email" class="form-control" value="<?php echo $lifestyle[0]->blog; ?>" name="blog" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Other Social Network</label>
                                 <input type="email" class="form-control" value="<?php echo $lifestyle[0]->othe_social; ?>" name="othe_social" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Drinking Habits</label>
                                 <select style = "text-transform:capitalize;"  class="form-control x2"   name="drinking" >
                                    <option value="<?php echo $lifestyle[0]->drinking_id; ?>"><?php echo $lifestyle[0]->d_habbi; ?></option> 

                                    <?php foreach($habbit_type as $row)
                                    { 
                                     echo '<option value="'.$row->habbit_type_id.'">&nbsp&nbsp&nbsp;'.$row->habbit_type.'</option>';
                                  }
                                  ?>
                               </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Languages Known</label>
                                 <select style = "text-transform:capitalize;"  class="form-control x2"   name="languages_known" >
                                    <option value="<?php echo $lifestyle[0]->language_known; ?>"><?php echo $lifestyle[0]->language; ?></option> 

                                    <?php foreach($languages_known as $row)
                                    { 
                                       echo '<option value="'.$row->id.'">&nbsp&nbsp&nbsp;'.$row->language.'</option>';
                                  }
                                  ?>
                               </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Interests</label>
                                 <select style = "text-transform:capitalize;"  class="form-control x2"   name="interest" >
                                    <option value="<?php echo $lifestyle[0]->interests; ?>"><?php echo $lifestyle[0]->interest; ?></option> 

                                    <?php foreach($interest as $row)
                                    { 
                                       echo '<option value="'.$row->interest_id.'">&nbsp&nbsp&nbsp;'.$row->interest.'</option>';
                                  }
                                  ?>
                               </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Facebook Link</label>
                                 <input type="email" value="<?php echo $lifestyle[0]->facebook; ?>" class="form-control" id="exampleInputEmail1" name="facebook" aria-describedby="emailHelp">
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
                  <a href=""id="sbmt8" class="cancel-btn">Cancel</a>
                  <a href="javascript:submit8();" id="sbmt8" class="save-btn">Save</a>
                  <!-- </div> -->
               </div>
            </div>
            <!-- <-----------------Partner Preferences--------------------------> 
            <div class="edit-prof-form-wrap">
               <h5 class="prof-info-hed"><i class="far fa-heart prt-ic"></i>&nbsp; Edit Partner Preferences</h5>
               <div class="sub-hed-edit row" id="cnt9">
                  <h6 class="edit-detail-edi-sub-hed col-lg-11"><i class="fas fa-file-alt icn-sme"></i>&nbsp;  Basic Preferences</h6>
                  <!-- <p id="cnt"></p> -->
                  <a class="col-lg-1 edt-btn" id="edt9" type="button" data-toggle="collapse" data-target="#collapseExample9" aria-expanded="false" aria-controls="collapseExample9">
                  Edit
                  </a>
                  <div class="basic-row">
                     <div class="col-lg-6 col-12">
                        <table class="p-table">
                           <tbody>
                              <tr>
                                 <th>Partner Age</th>
                                 <td class="p-sep">:</td>
                                 <td data-textbox="tb-name"><?php echo $partner[0]->age_from; ?>yrs&nbsp;TO&nbsp;<?php echo $partner[0]->age_to; ?>yrs</td>
                              </tr>
                              <tr>
                                 <th>Body Type</th>
                                 <td class="p-sep">:</td>
                                 <td><span data-select="select-body" data-opt="0"><?php echo $partner[0]->body_type; ?></span></td>
                              </tr>
                              <tr>
                                 <th>Marital Status </th>
                                 <td class="p-sep">:</td>
                                 <td><span data-select="select-body" data-opt="0"><?php echo $partner[0]->marital_status; ?></span></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <div class="col-lg-6 col-12">
                        <table class="p-table">
                           <tbody>
                              <tr>
                                 <th>Partner Height</th>
                                 <td class="p-sep">:</td>
                                 <td><span data-select="select-Code" data-opt="103"><?php echo $partner[0]->height_from; ?>cm&nbsp;TO&nbsp;<?php echo $partner[0]->height_to; ?>cm</span>  <span></span><span data-textbox="tb-whats"></span></td>
                              </tr>
                              <tr>
                                 <th>Complexion</th>
                                 <td class="p-sep">:</td>
                                 <td data-textbox="tb-age"><?php echo $partner[0]->complexion; ?></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <div class="collapse" id="collapseExample9">
                  <form id="myform9" class="mrg-edt-form" method="POST" action="<?php echo site_url('Register/reg_basicpartner');?>">
                  <div class="form-group">
                  <form class="mrg-edt-form" >
                  <div class="form-group">
                  <h5 class="prof-info-hed1 col-md-11"><i class="fas fa-file-alt icn-sme"></i>&nbsp;  Basic Preferences</h5> 
                  <div class="row basic-form-row">
                  <div class="col-lg-6"> 
                  <div class="form-group">
                  <label for="exampleInputEmail1">Partner Age: From</label>
                  <select style = "text-transform:capitalize;"  class="form-control x2" name="agefrom" >
                     <option value="<?php echo $partner[0]->age_from; ?>"><?php echo $partner[0]->age_from; ?></option>
                     <?php 
                     for($age=18; $age<=70; $age++){

                        echo '<option value="'.$age.'">'.$age.'</option>';
                     }

                     ?>
                  </select>
                  </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Partner Height: From</label>
                  <select style = "text-transform:capitalize;"  class="form-control x2" name="height_from" >
                     <option value="<?php echo $partner[0]->height_from; ?>" ><?php echo $partner[0]->height_from; ?></option>
                     <?php foreach($height as $row)
                     { 
                      echo '<option value="'.$row->height.'">&nbsp&nbsp&nbsp;'.$row->height.'cm</option>';
                   }
                   ?>
                </select>
                  </div>

                  <div class="form-group">
                     <label for="exampleInputEmail1">Body Type</label>
                     <select class="js-select2 " multiple="multiple" name="body_type[]" placeholder="Body Type">

                        <?php $pbodytype_ar = explode(',',$partner[0]->body_type_id);
                        foreach($body_type as $row){ ?>
                           <option value="<?php echo $row->body_type_id ?>" <?php if(in_array($row->body_type_id,$pbodytype_ar)) echo 'selected';?>><?php echo $row->body_type; ?></option>

                        <?php }
                        ?> 
                     </select>
                  </div>

                  <div class="form-group">
                  <label for="exampleInputEmail1">Physical Status</label>
                  <select class="js-select2 " multiple="multiple" name="physical_status_id[]" placeholder="Religion">
                     <?php $physical_status_ar = explode(',',$partner[0]->physical_status_id);
                     foreach($physical_status as $row){ ?>
                        <option value="<?php echo $row->physical_status_id ?>" <?php if(in_array($row->physical_status_id,$physical_status_ar)) echo 'selected';?>><?php echo $row->physical_status; ?></option>

                     <?php }

                     ?>
                  </select>
                  </div>    
                  <div class="form-group">
                  <label for="exampleInputEmail1">Family Status</label>
                  <select class="js-select2 " multiple="multiple" name="family_status_id[]" placeholder="Religion">
                     <?php $family_status_ar = explode(',',$partner[0]->family_status_id);
                     foreach($family_status as $row){ ?>
                        <option value="<?php echo $row->family_status_id ?>" <?php if(in_array($row->family_status_id,$family_status_ar)) echo 'selected';?>><?php echo $row->family_status; ?></option>

                     <?php }

                     ?>
                  </select>
                  </div>    
                  </div>
                  <div class="col-lg-6"> 
                  <div class="form-group">
                  <label for="exampleInputEmail1">Partner Age: To</label>
                  <select style = "text-transform:capitalize;"  class="form-control x2"name="ageto" >
                     <option value="<?php echo $partner[0]->age_to; ?>"><?php echo $partner[0]->age_to; ?></option>
                     <?php 
                     for($age=18; $age<=70; $age++){

                        echo '<option value="'.$age.'">'.$age.'</option>';
                     }

                     ?>
                  </select>
                  </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Partner Height: To</label>
                  <select style = "text-transform:capitalize;"  class="form-control x2" name="height_to" >
                     <option value="<?php echo $partner[0]->height_to; ?>"><?php echo $partner[0]->height_to; ?></option>
                     <?php foreach($height as $row)
                     { 
                      echo '<option value="'.$row->height.'">&nbsp&nbsp&nbsp;'.$row->height.'cm</option>';
                   }
                   ?>
                </select>
                  </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Complexion</label>
                  <select class="js-select2 " multiple="multiple" name="complexion[]" placeholder="Religion">
                     <?php $pcomplexion_ar = explode(',',$partner[0]->complexion_id);
                     foreach($complexion as $row){ ?>
                        <option value="<?php echo $row->complexion_id ?>" <?php if(in_array($row->complexion_id,$pcomplexion_ar)) echo 'selected';?>><?php echo $row->complexion; ?></option>

                     <?php }

                     ?> 
                  </select>
                  </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Marital Status</label>
                  <select class="js-select2 " multiple="multiple" name="marital_status[]" placeholder="Marital Status">
                     <?php $marital_status_ar = explode(',',$partner[0]->marital_status_id);
                     foreach($marital_status as $row){ ?>
                        <option value="<?php echo $row->marital_status_id ?>" <?php if(in_array($row->marital_status_id,$marital_status_ar)) echo 'selected';?>><?php echo $row->marital_status; ?></option>

                     <?php }

                     ?>
                  </select>
                  </div>
                  </div>
                  </div>
                  </div>
                  </form>
                  </div>
                  </form>
                  <a href=""id="sbmt9" class="cancel-btn">Cancel</a>
                  <a href="javascript:submit9();" id="sbmt9" class="save-btn">Save</a>
                  <!-- </div> -->
               </div>
            </div>
            <!-- <-----------------Partner Preferences--------------------------> 
            <!-- <-----------------Professional Preferences--------------------------> 
            <div class="edit-prof-form-wrap">
               <div class="sub-hed-edit row" id="cnt10">
                  <h5 class="prof-info-hed1 col-md-11"><i class="fas fa-user-tie icn-sme"></i>&nbsp; Professional Preferences</h5>
                  <!-- <p id="cnt"></p> -->
                  <a class="col-lg-1 edt-btn" id="edt10" type="button" data-toggle="collapse" data-target="#collapseExample10" aria-expanded="false" aria-controls="collapseExample10">
                  Edit
                  </a>
                  <div class="basic-row">
                     <div class="col-lg-6 col-12">
                        <table class="p-table">
                           <tbody>
                              <tr>
                                 <th>Education Category</th>
                                 <td class="p-sep">:</td>
                                 <td data-textbox="tb-name"><?php echo $partner[0]->edu_category; ?></td>
                              </tr>
                              <tr>
                                 <th>Job Category</th>
                                 <td class="p-sep">:</td>
                                 <td><span data-select="select-body" data-opt="0"><?php echo $partner[0]->edu_category; ?></span></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <div class="col-lg-6 col-12">
                        <table class="p-table">
                           <tbody>
                              <tr>
                                 <th> Education Detail</th>
                                 <td class="p-sep">:</td>
                                 <td><span data-select="select-Code" data-opt="103" class="more"><?php echo $partner[0]->education; ?></span>  <span></span><span data-textbox="tb-whats"></span></td>
                              </tr>
                              <tr>
                                 <th>Job Detail</th>
                                 <td class="p-sep">:</td>
                                 <td data-textbox="tb-age" class="more"><?php echo $partner[0]->job_title; ?></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <div class="collapse" id="collapseExample10">
                  <form id="myform10" class="mrg-edt-form" method="POST" action="<?php echo site_url('Register/reg_profession_partner');?>">
                     <div class="form-group">
                        <h5 class="prof-info-hed1 col-md-11"><i class="fas fa-user-tie icn-sme"></i>&nbsp; Professional Preferences</h5>
                        <div class="row basic-form-row">
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Education Category</label>
                                 <select class="js-select2 " multiple="multiple" name="edu_cat_id[]" placeholder="Marital Status">
                                    <?php $educat_ar = explode(',',$partner[0]->edu_cat);
                                    foreach($edu_category as $row){ ?>
                                       <option value="<?php echo $row->cat_id ?>" <?php if(in_array($row->cat_id, $educat_ar)) echo 'selected';?>><?php echo $row->edu_category; ?></option>

                                    <?php }

                                    ?>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">Job Category</label>
                                 <select class="js-select2 " multiple="multiple" name="job_cat_id[]" placeholder="Marital Status">
                                    <?php $jobcat_ar = explode(',',$partner[0]->job_cat);
                                    foreach($job_category as $row){ ?>
                                       <option value="<?php echo $row->job_cat_id ?>" <?php if(in_array($row->job_cat_id, $jobcat_ar)) echo 'selected';?>><?php echo $row->job_cat; ?></option>

                                    <?php }

                                    ?>
                                 </select>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">Education Detail</label>
                                 <select class="js-select2 " multiple="multiple" name="h_education_id[]" placeholder="Marital Status">
                                    <?php $h_education_ar = explode(',',$partner[0]->h_education_id);
                                    foreach($education as $row){ ?>
                                       <option value="<?php echo $row->education_id ?>" <?php if(in_array($row->education_id,$h_education_ar)) echo 'selected';?>><?php echo $row->education; ?></option>

                                    <?php }

                                    ?>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">Job Detail</label>
                                 <select class="js-select2 " multiple="multiple" name="job_id[]" placeholder="Marital Status">
                                    <?php $job_ar = explode(',',$partner[0]->job_title_id);
                                    foreach($job as $row){ ?>
                                       <option value="<?php echo $row->job_id ?>" <?php if(in_array($row->job_id,$job_ar)) echo 'selected';?>><?php echo $row->job_title; ?></option>

                                    <?php }

                                    ?>
                                 </select>
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
                  <a href=""id="sbmt10" class="cancel-btn">Cancel</a>
                  <a href="javascript:submit10();" id="sbmt10" class="save-btn">Save</a>
                  <!-- </div> -->
               </div>
            </div>
            <!-- <-----------------Professional Preferences--------------------------> 
            <!-- <-----------------Religious Preferences --------------------------> 
            <div class="edit-prof-form-wrap">
               <div class="sub-hed-edit row" id="cnt11">
                  <h5 class="prof-info-hed1 col-md-11"><i class="fas fa-book-open icn-sme"></i>&nbsp; Religious Preferences </h5>
                  <!-- <p id="cnt"></p> -->
                  <a class="col-lg-1 edt-btn" id="edt11" type="button" data-toggle="collapse" data-target="#collapseExample11" aria-expanded="false" aria-controls="collapseExample11">
                  Edit
                  </a>
                  <div class="basic-row">
                     <div class="col-lg-6 col-12">
                        <table class="p-table">
                           <tbody>
                              <tr>
                                 <th>Religion</th>
                                 <td class="p-sep">:</td>
                                 <td data-textbox="tb-name"><?php echo $partner[0]->religion; ?></td>
                              </tr>
                              <tr>
                                 <th>Caste No Bar</th>
                                 <td class="p-sep">:</td>
                                 <td><span data-select="select-body" data-opt="0">Not specified</span></td>
                              </tr>
                              <tr>
                                 <th>Type Of Jathakam</th>
                                 <td class="p-sep">:</td>
                                 <td><span data-select="select-body" data-opt="0" class="more"><?php echo $partner[0]->typeof_jathakam; ?></span></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <div class="col-lg-6 col-12">
                        <table class="p-table">
                           <tbody>
                              <tr>
                                 <th>Caste</th>
                                 <td class="p-sep">:</td>
                                 <td><span data-select="select-Code" data-opt="103" class="more"><?php echo $partner[0]->cast; ?></span>  <span></span><span data-textbox="tb-whats"></span></td>
                              </tr>
                              <tr>
                                 <th>Matching Stars</th>
                                 <td class="p-sep">:</td>
                                 <td data-textbox="tb-age" class="more"><?php echo $partner[0]->star; ?></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <div class="collapse" id="collapseExample11">
                  <form id="myform11" class="mrg-edt-form" method="POST" action="<?php echo site_url('Register/reg_religion_partner');?>">
                     <div class="form-group">
                        <h5 class="prof-info-hed1 col-md-11"><i class="fas fa-book-open icn-sme"></i>&nbsp;Religious Preferences </h5>
                        <div class="row basic-form-row">
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Religion</label>
                                 <select class="form-control" id="religion1" name="religion">
                                    <option value="<?php echo $partner[0]->religion_id; ?>"><?php echo $partner[0]->religion; ?></option>
                                    <?php foreach($religion as $row)
                                    { 
                                     echo '<option value="'.$row->religion_id.'">&nbsp&nbsp&nbsp;'.$row->religion.'</option>';
                                  }
                                  ?>
                                 </select>
                              </div>
                              <div class="form-group" style="margin-top: 19px;">
                                 <label for="exampleFormControlSelect1">Caste No Bar</label>
                                 <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1"></label>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">Matching Stars</label>
                                 <select class="js-select2 " multiple="multiple" id="star" name="star[]">
                                    <?php $star_cas = explode(',',$partner[0]->star_id);
                                    foreach($star as $row){ ?>
                                       <option value="<?php echo $row->star_id ?>" <?php if(in_array($row->star_id,$star_cas)) echo 'selected';?>><?php echo $row->star; ?></option>

                                    <?php }

                                    ?>
                                 </select>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">Caste</label>
                                 <select class="js-select2 " multiple="multiple" id="cast1" name="cast[]">
                                    <?php $pedulist_cas = explode(',',$partner[0]->cast_id);
                                    foreach($cast as $row){ ?>
                                       <option value="<?php echo $row->cast_id ?>" <?php if(in_array($row->cast_id,$pedulist_cas)) echo 'selected';?>><?php echo $row->cast; ?></option>

                                    <?php }

                                    ?>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">Sub Caste</label>
                                 <input type="email" class="form-control" value="<?php echo $partner[0]->sub_cast; ?>" name="sub_cast" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">Type Of Jathakam</label>
                                 <select class="js-select2 " multiple="multiple" id="jathakam" name="jathakam[]">
                                 <?php $jathakam_cas = explode(',',$partner[0]->jathakam_id);
                                 foreach($jathakam as $row){ ?>
                                    <option value="<?php echo $row->jathakam_id ?>" <?php if(in_array($row->jathakam_id,$jathakam_cas)) echo 'selected';?>><?php echo $row->typeof_jathakam; ?></option>

                                 <?php }

                                 ?>
                                 </select>
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
                  <a href=""id="sbmt11" class="cancel-btn">Cancel</a>
                  <a href="javascript:submit11();" id="sbmt11" class="save-btn">Save</a>
                  <!-- </div> -->
               </div>
            </div>
            <!-- <-----------------Religious Preferences --------------------------> 
            <!-- <-----------------Location Preferences --------------------------> 
            <div class="edit-prof-form-wrap">
               <div class="sub-hed-edit row" id="cnt12">
                  <h5 class="prof-info-hed1 col-md-11"><i class="fas fa-map-marker-alt icn-sme"></i>&nbsp; Location Preferences</h5>
                  <!-- <p id="cnt"></p> -->
                  <a class="col-lg-1 edt-btn" id="edt12" type="button" data-toggle="collapse" data-target="#collapseExample12" aria-expanded="false" aria-controls="collapseExample12">
                  Edit
                  </a>
                  <div class="basic-row">
                     <div class="col-lg-6 col-12">
                        <table class="p-table">
                           <tbody>
                              <tr>
                                 <th>Country</th>
                                 <td class="p-sep">:</td>
                                 <td data-textbox="tb-name"><?php echo $partner[0]->name; ?></td>
                              </tr>
                              <tr>
                                 <th>District</th>
                                 <td class="p-sep">:</td>
                                 <td><span data-select="select-body" data-opt="0"><?php echo $partner[0]->district; ?></span></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <div class="col-lg-6 col-12">
                        <table class="p-table">
                           <tbody>
                              <tr>
                                 <th>State</th>
                                 <td class="p-sep">:</td>
                                 <td><span data-select="select-Code" data-opt="103"><?php echo $partner[0]->state; ?></span>  <span></span><span data-textbox="tb-whats"></span></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <div class="collapse" id="collapseExample12">
                  <form id="myform12" class="mrg-edt-form" method="POST" action="<?php echo site_url('Register/reg_location_partner');?>">
                     <div class="form-group">
                        <h5 class="prof-info-hed1 col-md-11"><i class="fas fa-map-marker-alt icn-sme"></i>&nbsp;Location Preferences</h5>
                        <div class="row basic-form-row">
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Country</label>
                                 <select class="form-control" name="partner_country" id="exampleFormControlSelect1">
                                    <option value="<?php echo $partner[0]->country_id; ?>" ><?php echo $partner[0]->name; ?></option>
                                    <?php foreach($country as $row)
                                    { 
                                      echo '<option value="'.$row->id.'">&nbsp&nbsp&nbsp;'.$row->name.'</option>';
                                   }
                                   ?>
                                </select>
                              </div>
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">District</label>
                                 <select class="js-select2 " multiple="multiple"  id="district3"  name="partner_dist[]" class="form-control" >

                                    <?php $district_cas = explode(',',$partner[0]->district);
                                    foreach($districts as $row){ ?>
                                    <option value="<?php echo $row->id ?>" <?php if(in_array($row->district,$district_cas)) echo 'selected';?>><?php echo $row->district; ?></option>
                                    <?php }

                                    ?>
                                 </select>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <label for="exampleFormControlSelect1">State</label>
                                 <select class="form-control" id="state3" name="partner_state">
                                    <option value="<?php echo $partner[0]->state; ?>" ><?php echo $partner[0]->state; ?></option>
                                    <?php foreach($states as $row)
                                    { 
                                      echo '<option value="'.$row->id.'">'.$row->state.'</option>';
                                   }
                                   ?>
                                </select>
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
                  <a href=""id="sbmt12" class="cancel-btn">Cancel</a>
                  <a href="javascript:submit12();" id="sbmt12" class="save-btn">Save</a>
                  <!-- </div> -->
               </div>
            </div>
            <!-- <-----------------Location Preferences --------------------------> 
            <!-- <-----------------What You Are Looking For --------------------------> 
            <div class="edit-prof-form-wrap">
               <div class="sub-hed-edit row" id="cnt13">
                  <h5 class="prof-info-hed1 col-md-11"><i class="fas fa-eye"></i>&nbsp; What You Are Looking For</h5>
                  <!-- <p id="cnt"></p> -->
                  <a class="col-lg-1 edt-btn" id="edt13" type="button" data-toggle="collapse" data-target="#collapseExample13" aria-expanded="false" aria-controls="collapseExample13">
                  Edit
                  </a>
                  <div class="basic-row">
                     <div class="col-lg-12 col-12">
                        <table class="p-table">
                           <tbody>
                              <tr>
                                 <th>What You Are Looking For</th>
                                 <td class="p-sep">:</td>
                                 <td data-textbox="tb-name"><?php echo $partner[0]->looking_for; ?></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <div class="collapse" id="collapseExample13">
                  <form id="myform13" class="mrg-edt-form" method="POST" action="<?php echo site_url('Register/reg_looking_partner');?>">
                     <div class="form-group">
                        <h5 class="prof-info-hed1 col-md-11"><i class="fas fa-eye"></i>&nbsp; What You Are Looking For</h5>
                        <div class="row basic-form-row">
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <textarea class="form-control" name="looking_for"><?php echo $partner[0]->looking_for; ?></textarea>
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
                  <a href=""id="sbmt13" class="cancel-btn">Cancel</a>
                  <a href="javascript:submit13();" id="sbmt13" class="save-btn">Save</a>
                  <!-- </div> -->
               </div>
            </div>
            <!-- <-----------------What You Are Looking For --------------------------> 
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


      <script type="text/javascript">

            function submit()
            {
            document.forms["myform"].submit();
            }

            function submit1()
            {
            document.forms["myform1"].submit();
            }
            function submit2()
            {
            document.forms["myform2"].submit();
            }
            function submit3()
            {
            document.forms["myform3"].submit();
            }
            function submit4()
            {
            document.forms["myform4"].submit();
            }
            function submit5()
            {
            document.forms["myform5"].submit();
            }
            function submit6()
            {
            document.forms["myform6"].submit();
            }

            function submit8()
            {
            document.forms["myform8"].submit();
            }

            function submit9()
            {
            document.forms["myform9"].submit();
            }

            function submit10()
            {
            document.forms["myform10"].submit();
            }

            function submit11()
            {
            document.forms["myform11"].submit();
            }

            function submit12()
            {
            document.forms["myform12"].submit();
            }

            function submit13()
            {
            document.forms["myform13"].submit();
            }

      </script>