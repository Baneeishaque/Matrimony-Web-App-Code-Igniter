<section>
	<div class="container-fluid default-container" style="padding-top: 10px !important;">
		<div class="row">
			<div class="col-lg-2 col-md-2 col-sm-12 col-12 prof-pad-zero user-side-wrap mx-wdth-22 mrg-5">
				<div class="filterleft-wrap-main">
					<h5 class="filter-hed"><i class="fas fa-filter"></i>&nbsp; Filter your soulmate</h5>
					<div class="row">
						<div class=" col-lg-12 col-12">
							<a href="#"><h6 class="clear-btn">Clear</h6></a>
						</div>
					</div>
					<div class="row ser-coll-resu">
						<div class="col-lg-12 col-12">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingOne">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion"
											   href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												Matches
											</a>
										</h4>
									</div>
									<div id="collapseOne" class="panel-collapse collapse show" role="tabpanel"
										 aria-labelledby="headingOne">
										<div class="panel-body">
											<ul class="filtr-innr-ul">
												<a href="#">
													<li>New Matches</li>
												</a>
												<a href="#">
													<li>Partner Preferences</li>
												</a>
											</ul>
										</div>
									</div>
								</div>
								<div class="panel panel-default pft-type">
									<div class="panel-heading" role="tab" id="headingTwo">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse"
											   data-parent="#accordion" href="#collapseTwo" aria-expanded="true"
											   aria-controls="collapseTwo">
												Profile Type
											</a>
										</h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse show" role="tabpanel"
										 aria-labelledby="headingTwo">
										<div class="panel-body">
											<div class="custom-control custom-radio">
												<input type="radio" id="customRadio1" name="customRadio"
													   class="custom-control-input">
												<label class="custom-control-label cst-ser-res-label"
													   for="customRadio1">Only Show with Photo</label>
											</div>
											<div class="custom-control custom-radio">
												<input type="radio" id="customRadio2" name="customRadio"
													   class="custom-control-input">
												<label class="custom-control-label cst-ser-res-label"
													   for="customRadio2">Don't Show Already Viewed</label>
											</div>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingThree">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse"
											   data-parent="#accordion" href="#collapseThree" aria-expanded="true"
											   aria-controls="collapseThree">
												Age
											</a>
										</h4>
									</div>
									<div id="collapseThree" class="panel-collapse collapse show" role="tabpanel"
										 aria-labelledby="headingThree">
										<div class="panel-body">
											<!--  <div class="middle">
										 <div class="multi-range-slider">
										   <div class="slider">
											 <div class="track"></div>
											 <div class="range"></div>
											 <div class="thumb left"></div>
											 <div class="thumb right"></div>
										   </div>
									   <input type="range" id="input-left" min="0" max="100" value="25"> <span min="0" max="100" value="25">25</span>
										   <input type="range" id="input-right" min="0" max="100" value="75">
										 </div>
									   </div> -->
											<div slider id="slider-distance">
												<div>
													<div inverse-left style="width:100%;"></div>
													<div inverse-right style="width:100%;"></div>
													<div range style="left:30%;right:40%;"></div>
													<span thumb style="left:30%;"></span>
													<span thumb style="left:60%;"></span>
													<div sign style="left:30%;">
														<span id="value">25</span>
													</div>
													<div sign style="left:60%;">
														<span id="value">30</span>
													</div>
												</div>
												<input type="range" tabindex="0" value="25" max="80" min="18" step="1"
													   oninput="
  this.value=Math.min(this.value,this.parentNode.childNodes[5].value-1);
  var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
  var children = this.parentNode.childNodes[1].childNodes;
  children[1].style.width=value+'%';
  children[5].style.left=value+'%';
  children[7].style.left=value+'%';children[11].style.left=value+'%';
  children[11].childNodes[1].innerHTML=this.value;"/>
												<input type="range" tabindex="0" value="30" max="80" min="18" step="1"
													   oninput="
  this.value=Math.max(this.value,this.parentNode.childNodes[3].value-(-1));
  var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
  var children = this.parentNode.childNodes[1].childNodes;
  children[3].style.width=(100-value)+'%';
  children[5].style.right=(100-value)+'%';
  children[9].style.left=value+'%';children[13].style.left=value+'%';
  children[13].childNodes[1].innerHTML=this.value;"/>
											</div>
										</div>
									</div>
								</div>
								<script>
									$(document).ready(function () {
										$('#price_range').slider({
											range: true,
											min: 1000,
											max: 65000,
											values: [1000, 65000],
											step: 500,
											stop: function (event, ui) {
												alert("hi");
												//$('#price_show').show();
												$('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
												$('#hidden_minimum_price').val(ui.values[0]);
												$('#hidden_maximum_price').val(ui.values[1]);
												alert("rannge");
												filter_data(1);
											}
										});
									});
								</script>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="heading4">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse"
											   data-parent="#accordion" href="#collapse4" aria-expanded="true"
											   aria-controls="collapse4">
												Height
											</a>
										</h4>
									</div>
									<div id="collapse4" class="panel-collapse collapse show" role="tabpanel"
										 aria-labelledby="heading4">
										<div class="panel-body">
											<div slider id="slider-distance1">
												<div>
													<div inverse-left style="width:100%;"></div>
													<div inverse-right style="width:100%;"></div>
													<div range style="left:30%;right:40%;"></div>
													<span thumb style="left:30%;"></span>
													<span thumb style="left:60%;"></span>
													<div sign style="left:30%;">
														<span id="value">165</span>
													</div>
													<div sign style="left:60%;">
														<span id="value">175</span>
													</div>
												</div>
												<input type="range" tabindex="0" value="165" max="250" min="60" step="1"
													   oninput="
        this.value=Math.min(this.value,this.parentNode.childNodes[5].value-1);
        var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
        var children = this.parentNode.childNodes[1].childNodes;
        children[1].style.width=value+'%';
        children[5].style.left=value+'%';
        children[7].style.left=value+'%';children[11].style.left=value+'%';
        children[11].childNodes[1].innerHTML=this.value;" id="heightLeft"/>
												<input type="range" tabindex="0" value="175" max="250" min="60" step="1"
													   oninput="
        this.value=Math.max(this.value,this.parentNode.childNodes[3].value-(-1));
        var value=(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.value)-(100/(parseInt(this.max)-parseInt(this.min)))*parseInt(this.min);
        var children = this.parentNode.childNodes[1].childNodes;
        children[3].style.width=(100-value)+'%';
        children[5].style.right=(100-value)+'%';
        children[9].style.left=value+'%';children[13].style.left=value+'%';
        children[13].childNodes[1].innerHTML=this.value;" id="heightRight"/>
											</div>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="heading5">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse"
											   data-parent="#accordion" href="#collapse5" aria-expanded="true"
											   aria-controls="collapse5">
												Marital Status
											</a>
										</h4>
									</div>
									<div id="collapse5" class="panel-collapse collapse show" role="tabpanel"
										 aria-labelledby="heading5">
										<div class="panel-body">
											<select class="js-select2 " multiple="multiple" placeholder="Religion">
												<?php
												foreach ($marital_status as $row) { ?>
													<option value="<?php echo $row->marital_status_id; ?>"
															data-badge=""><?php echo $row->marital_status; ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="heading6">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse"
											   data-parent="#accordion" href="#collapse6" aria-expanded="false"
											   aria-controls="collapse6">
												Religion
											</a>
										</h4>
									</div>
									<div id="collapse6" class="panel-collapse collapse" role="tabpanel"
										 aria-labelledby="heading6">
										<div class="panel-body">
											<select class="js-select2" id="religion2" placeholder="Religion">
												<?php
												foreach ($religion as $row) { ?>
													<option value="<?php echo $row->religion_id; ?>"
															data-badge=""><?php echo $row->religion; ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="heading7">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse"
											   data-parent="#accordion" href="#collapse7" aria-expanded="false"
											   aria-controls="collapse7">
												Caste
											</a>
										</h4>
									</div>
									<div id="collapse7" class="panel-collapse collapse" role="tabpanel"
										 aria-labelledby="heading7">
										<div class="panel-body">
											<select class="js-select2" multiple="multiple" id="cast2">
											</select>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="heading8">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse"
											   data-parent="#accordion" href="#collapse8" aria-expanded="false"
											   aria-controls="collapse8">
												Education
											</a>
										</h4>
									</div>
									<div id="collapse8" class="panel-collapse collapse" role="tabpanel"
										 aria-labelledby="heading8">
										<div class="panel-body">
											<select class="js-select2 " multiple="multiple" placeholder="Religion">
												<?php
												foreach ($education as $row) { ?>
													<option value="<?php echo $row->education_id; ?>"
															data-badge=""><?php echo $row->education; ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="heading9">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse"
											   data-parent="#accordion" href="#collapse9" aria-expanded="false"
											   aria-controls="collapse9">
												Occupation
											</a>
										</h4>
									</div>
									<div id="collapse9" class="panel-collapse collapse" role="tabpanel"
										 aria-labelledby="heading9">
										<div class="panel-body">
											<select class="js-select2 " multiple="multiple" placeholder="Religion">
												<?php
												foreach ($job_category as $row) { ?>
													<option value="<?php echo $row->job_cat_id; ?>"
															data-badge=""><?php echo $row->job_cat; ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="heading10">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse"
											   data-parent="#accordion" href="#collapse10" aria-expanded="false"
											   aria-controls="collapse10">
												Location
											</a>
										</h4>
									</div>
									<div id="collapse10" class="panel-collapse collapse" role="tabpanel"
										 aria-labelledby="heading10">
										<div class="panel-body">
											<select class="js-select2 " multiple="multiple" placeholder="Religion">
												<?php
												foreach ($states as $row) { ?>
													<option value="<?php echo $row->id; ?>"
															data-badge=""><?php echo $row->state; ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="heading11">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse"
											   data-parent="#accordion" href="#collapse11" aria-expanded="false"
											   aria-controls="collapse11">
												Complexion
											</a>
										</h4>
									</div>
									<div id="collapse11" class="panel-collapse collapse" role="tabpanel"
										 aria-labelledby="heading11">
										<div class="panel-body">
											<select class="js-select2 " multiple="multiple" placeholder="Religion">
												<?php
												foreach ($complexion as $row) { ?>
													<option value="<?php echo $row->complexion_id; ?>"
															data-badge=""><?php echo $row->complexion; ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="heading12">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse"
											   data-parent="#accordion" href="#collapse12" aria-expanded="false"
											   aria-controls="collapse12">
												Star
											</a>
										</h4>
									</div>
									<div id="collapse12" class="panel-collapse collapse" role="tabpanel"
										 aria-labelledby="heading12">
										<div class="panel-body">
											<select class="js-select2 " multiple="multiple" placeholder="Religion">
												<?php
												foreach ($star as $row) { ?>
													<option value="<?php echo $row->star_id; ?>"
															data-badge=""><?php echo $row->star; ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="heading13">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse"
											   data-parent="#accordion" href="#collapse13" aria-expanded="false"
											   aria-controls="collapse13">
												Type Of Jathakam
											</a>
										</h4>
									</div>
									<div id="collapse13" class="panel-collapse collapse" role="tabpanel"
										 aria-labelledby="heading13">
										<div class="panel-body">
											<select class="js-select2 " multiple="multiple" placeholder="Religion">
												<?php
												foreach ($jathakam as $row) { ?>
													<option value="<?php echo $row->jathakam_id; ?>"
															data-badge=""><?php echo $row->typeof_jathakam; ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="heading14">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse"
											   data-parent="#accordion" href="#collapse14" aria-expanded="false"
											   aria-controls="collapse14">
												Mother Tongue
											</a>
										</h4>
									</div>
									<div id="collapse14" class="panel-collapse collapse" role="tabpanel"
										 aria-labelledby="heading14">
										<div class="panel-body">
											<select class="js-select2 " multiple="multiple" placeholder="Religion">
												<?php
												foreach ($languages as $row) { ?>
													<option value="<?php echo $row->id; ?>"
															data-badge=""><?php echo $row->name; ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="heading15">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse"
											   data-parent="#accordion" href="#collapse15" aria-expanded="false"
											   aria-controls="collapse15">
												Physical Status
											</a>
										</h4>
									</div>
									<div id="collapse15" class="panel-collapse collapse" role="tabpanel"
										 aria-labelledby="heading15">
										<div class="panel-body">
											<select class="js-select2 " multiple="multiple" placeholder="Religion">
												<?php
												foreach ($physical_status as $row) { ?>
													<option value="<?php echo $row->physical_status_id; ?>"
															data-badge=""><?php echo $row->physical_status; ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="heading16">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse"
											   data-parent="#accordion" href="#collapse16" aria-expanded="false"
											   aria-controls="collapse16">
												Annual Income
											</a>
										</h4>
									</div>
									<div id="collapse16" class="panel-collapse collapse" role="tabpanel"
										 aria-labelledby="heading16">
										<div class="panel-body">
											<select class="js-select2 " multiple="multiple" placeholder="Religion">
												<?php
												foreach ($income as $row) { ?>
													<option value="<?php echo $row->income_id; ?>"
															data-badge=""><?php echo $row->income; ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="heading17">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse"
											   data-parent="#accordion" href="#collapse17" aria-expanded="false"
											   aria-controls="collapse17">
												Family Status
											</a>
										</h4>
									</div>
									<div id="collapse17" class="panel-collapse collapse" role="tabpanel"
										 aria-labelledby="heading17">
										<div class="panel-body">
											<select class="js-select2 " multiple="multiple" placeholder="Religion">
												<?php
												foreach ($family_status as $row) { ?>
													<option value="<?php echo $row->family_status_id; ?>"
															data-badge=""><?php echo $row->family_status; ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 pad-0">
					<img src="<?php echo base_url(); ?>assets/images/LEFT-1.png" class="img-fluid brdr-radius">
					<img src="<?php echo base_url(); ?>assets/images/LEFT-2.jpg" class="img-fluid brdr-radius">
					<img src="<?php echo base_url(); ?>assets/images/LEF-3.png" class="img-fluid brdr-radius">
				</div>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-12 col-12 mx-wdth-56">
				<h2 class="ser-res-foun"><img src="<?php echo base_url(); ?>assets/images/serch.png" class="img-fluid">
					&nbsp;<div id="searchResultsCount"><?php echo count($search_results_unique); ?></div>
					Search Results Found! &nbsp;<i
						class="fas fa-level-down-alt"></i></h2>
				<div id="searchResults">

					<?php foreach ($search_results_unique
								   as $result) { ?>

						<div class="search-res-wrap">
							<div class="row">
								<div class="col-lg-3 col-md-3 col-sm-3 col-12 pd-ser-ryt-0">
									<img src="<?php echo base_url(); ?>assets/uploads/<?php echo $result->img_name; ?>"
										 class="img-fluid ser-res-img">
								</div>
								<div class="col-lg-9 col-md-9 col-sm-9 col-12">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-12 nme-wrp">
											<h3 class="ser-res-name"><?php echo $result->first_name . ' ' . $result->last_name; ?> </h3>
											&nbsp;| &nbsp;<span> <?php echo $result->web_id; ?></span>
										</div>
										<div class="col-lg-6 col-md-6 col-12 dis-flx">
											<h3 class="prem-mem"><i
													class="fas fa-crown comn-icon"></i>&nbsp; <?php echo $result->title; ?>
												Member
											</h3>
											<a href="#"><h6 class="chaticon">Chat&nbsp; <i class="fas fa-comments"></i>
												</h6>
											</a>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12 col-12 dis-flx"><i
												class="fas fa-quote-left icn-qutes icn-qute"></i>
											<!-- <i class="fas fa-quote-left "></i> -->
											<p class="moree ser-res-para"><?php echo $result->aboutme; ?></span>
										</div>
									</div>
									<hr>
									<div class="row rw-bordr">
										<div class="col-lg-6 col-md-6 col-sm-6 col-12">
											<h6 class="ser-res-details"><i class="far fa-user-circle icn-res"></i>&nbsp;
												27
												Yrs
												| <?php echo $result->height; ?>cm-5 ft 2 in</h6>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-12">
											<h6 class="ser-res-details"><i
													class="fas fa-map-marker-alt icn-res loct-ser-res"></i>&nbsp;
												<?php echo $result->p_city . ' ' . $result->state . '' . $result->name; ?>
											</h6>
										</div>
									</div>
									<hr>
									<div class="row rw-bordr">
										<div class="col-lg-6 col-md-6 col-sm-6 col-12">
											<h6 class="ser-res-details"><i class="fas fa-book-open icn-res"
																		   style="font-size: 11px;"></i>&nbsp;
												<?php echo $result->religion; ?></h6>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-12">
											<h6 class="ser-res-details"><i class="fab fa-fort-awesome-alt icn-res"></i>&nbsp;
												<?php echo $result->cast; ?></h6>
										</div>
									</div>
									<hr>
									<div class="row rw-bordr">
										<div class="col-lg-6 col-md-6 col-sm-6 col-12">
											<h6 class="ser-res-details"><i class="fas fa-graduation-cap icn-res"></i>&nbsp;
												<?php echo $result->education; ?></h6>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-12">
											<h6 class="ser-res-details"><i class="fas fa-suitcase icn-res"></i>&nbsp;
												<?php echo $result->job_title; ?></h6>
										</div>
									</div>
									<hr>
									<div class="row det-btn-rw">
										<div class="col-lg-3 col-md-3 col-6 brdr-btn">
											<a href="#" class="det-res-btn"><i class="fas fa-eye"></i>&nbsp;View Profile</a>
										</div>
										<div class="col-lg-3 col-md-3 col-6 brdr-btn">
											<a href="#" class="det-res-btn"><i class="fas fa-heart"></i>&nbsp;Intrest
												Send</a>
										</div>
										<div class="col-lg-3 col-md-3 col-6 brdr-btn">
											<a href="#" class="det-res-btn"><i class="fas fa-check"></i>&nbsp;Shortlist</a>
										</div>
										<div class="col-lg-3 col-md-3 col-6 brdr-btn">
											<a href="#" class="det-res-btn"><i
													class="fas fa-mobile-alt"></i>&nbsp;Contact</a>
										</div>
									</div>
								</div>
							</div>
						</div>

					<?php } ?>
				</div>
				<nav aria-label="..." class="paginatn">
					<ul class="pagination pagination-lg">
						<li class="page-item"><a class="page-link" href="#" aria-label="Previous">&laquo;</a></li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item active"><a class="page-link " href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" href="#">4</a></li>
						<li class="page-item"><a class="page-link" href="#" aria-label="Next">&raquo;</a></li>
					</ul>
				</nav>
			</div>

			<div class="col-lg-2 col-md-2 col-sm-12 col-12 prof-pad-zero mx-wdth-22">
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
<script>
	const heightRightSlider = document.getElementById("heightRight");
	const heightLeftSlider = document.getElementById("heightLeft");
	heightRightSlider.onchange = onHeightSliderChanged;
	heightLeftSlider.onchange = onHeightSliderChanged;

	function onHeightSliderChanged() {

		const minimumHeight = heightLeftSlider.value;
		const maximumHeight = heightRightSlider.value;
		console.log("Limits : " + minimumHeight + " " + maximumHeight);

		$.ajax({
			url: "<?php echo site_url('PreferredMatch/getHeightMatchesFromRegisteredUsers');?>",
			method: "POST",
			data: {minHeight: minimumHeight, maxHeight: maximumHeight},
			success: function (filteredResultsJsonString) {

				filteredResultsJsonString = filteredResultsJsonString.replace(/null/g, "\"\"");
				console.log("Filter Results JSON String: " + filteredResultsJsonString);

				const filteredResultsJson = JSON.parse(filteredResultsJsonString)
				console.log("Filter Status : " + filteredResultsJson.status);

				if (filteredResultsJson.status == 1) {

					document.getElementById("searchResultsCount").innerHTML = "0";
					document.getElementById("searchResults").innerHTML = "";

				} else if (filteredResultsJson.status == 0) {

					const filteredData = filteredResultsJson.data;
					document.getElementById("searchResultsCount").innerHTML = Object.keys(filteredData).length.toString();
					console.log("Filter Data : " + filteredData);
					let html = "";
					for (let i in filteredData) {

						console.log("HTML : " + html);

						console.log(filteredData[i].toString());
						html = html +
							"<div class=\"search-res-wrap\">" +
							"<div class=\"row\">" +
							"<div class=\"col-lg-3 col-md-3 col-sm-3 col-12 pd-ser-ryt-0\">" +
							"<img src=\"<?php echo base_url(); ?>assets/uploads/" + filteredData[i].img_name + "\"class=\"img-fluid ser-res-img\">" +
							"</div>" +

							'<div class="col-lg-9 col-md-9 col-sm-9 col-12">' +
							'<div class="row">' +
							'<div class="col-lg-6 col-md-6 col-12 nme-wrp">' +
							'<h3 class="ser-res-name">' + filteredData[i].first_name + ' ' + filteredData[i].last_name + '</h3>' +
							'&nbsp;| &nbsp;<span>' + filteredData[i].web_id + '</span>' +
							'</div>' +
							'<div class="col-lg-6 col-md-6 col-12 dis-flx">' +
							'<h3 class="prem-mem"><i class="fas fa-crown comn-icon"></i>&nbsp; ' + filteredData[i].title + ' Member' +
							'</h3>' +
							'<a href="#"><h6 class="chaticon">Chat&nbsp; <i class="fas fa-comments"></i>' +
							'</h6>' +
							'</a>' +
							'</div>' +
							'</div>' +
							'<div class="row">' +
							'<div class="col-lg-12 col-md-12 col-sm-12 col-12 dis-flx">' +
							'<i class="fas fa-quote-left icn-qutes icn-qute"></i>' +
							'<p class="moree ser-res-para">' + filteredData[i].aboutme + '</span>' +
							'</div>' +
							'</div>' +
							'<hr>' +
							'<div class="row rw-bordr">' +
							'<div class="col-lg-6 col-md-6 col-sm-6 col-12">' +
							'<h6 class="ser-res-details"><i class="far fa-user-circle icn-res"></i>&nbsp;' +
							+getAgeFromDob(filteredData[i].dob) +
							' Yrs' +
							' | ' + filteredData[i].height + 'cm - ' + centimeterToFeet(filteredData[i].height) + '</h6>' +
							'</div>' +
							'<div class="col-lg-6 col-md-6 col-sm-6 col-12">' +
							'<h6 class="ser-res-details">' +
							'<i class="fas fa-map-marker-alt icn-res loct-ser-res"></i>&nbsp;' +
							filteredData[i].p_city + ', ' + filteredData[i].state + ', ' + filteredData[i].name +
							'</h6>' +
							'</div>' +
							'</div>' +
							'<hr>' +
							'<div class="row rw-bordr">' +
							'<div class="col-lg-6 col-md-6 col-sm-6 col-12">' +
							'<h6 class="ser-res-details"><i class="fas fa-book-open icn-res"' +
							'style="font-size: 11px;"></i>&nbsp;' +
							filteredData[i].religion + '</h6>' +
							'</div>' +
							'<div class="col-lg-6 col-md-6 col-sm-6 col-12">' +
							'<h6 class="ser-res-details"><i class="fab fa-fort-awesome-alt icn-res"></i>&nbsp;' +
							filteredData[i].cast + '</h6>' +
							'</div>' +
							'</div>' +
							'<hr>' +
							'<div class="row rw-bordr">' +
							'<div class="col-lg-6 col-md-6 col-sm-6 col-12">' +
							'<h6 class="ser-res-details"><i class="fas fa-graduation-cap icn-res"></i>&nbsp;' +
							filteredData[i].education + '</h6>' +
							'</div>' +
							'<div class="col-lg-6 col-md-6 col-sm-6 col-12">' +
							'<h6 class="ser-res-details"><i class="fas fa-suitcase icn-res"></i>&nbsp;' +
							filteredData[i].job_title + '</h6>' +
							'</div>' +
							'</div>' +
							'<hr>' +
							'<div class="row det-btn-rw">' +
							'<div class="col-lg-3 col-md-3 col-6 brdr-btn">' +
							'<a href="#" class="det-res-btn"><i class="fas fa-eye"></i>&nbsp;View Profile</a>' +
							'</div>' +
							'<div class="col-lg-3 col-md-3 col-6 brdr-btn">' +
							'<a href="#" class="det-res-btn"><i class="fas fa-heart"></i>&nbsp;Intrest Send</a>' +
							'</div>' +
							'<div class="col-lg-3 col-md-3 col-6 brdr-btn">' +
							'<a href="#" class="det-res-btn"><i class="fas fa-check"></i>&nbsp;Shortlist</a>' +
							'</div>' +
							'<div class="col-lg-3 col-md-3 col-6 brdr-btn">' +
							'<a href="#" class="det-res-btn">' +
							'<i class="fas fa-mobile-alt"></i>&nbsp;Contact</a>' +
							'</div>' +
							'</div>' +
							'</div>' +
							"</div>" +
							"</div>";
					}
					document.getElementById("searchResults").innerHTML = html;
				}
			}
		});

		function getAgeFromDob(date) {

			const dob = new Date(date);
			console.log(dob);

			//calculate month difference from current date in time
			const month_diff = Date.now() - dob.getTime();

			//convert the calculated difference in date format
			const age_dt = new Date(month_diff);

			//extract year from date
			const year = age_dt.getUTCFullYear();

			//now calculate the age of the user
			const age = Math.abs(year - 1970);

			console.log(age);
			return age;
		}

		function centimeterToFeet(n) {

			var realFeet = ((n * 0.393700) / 12);
			var feet = Math.floor(realFeet);
			var inches = Math.round((realFeet - feet) * 12);
			return feet + " ft " + inches + ' in';
		}
	}
</script>
