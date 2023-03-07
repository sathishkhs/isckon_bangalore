<main id="wt-main" class="wt-main wt-haslayout">
				<!--Sidebar Start-->
				
				<!--Sidebar Start-->
				<!--Register Form Start-->

				
				<section class="wt-haslayout container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-xl-11">
							<?php
							$msg = $this->session->flashdata('msg');
									if (!empty($msg['txt'])):
							?>
									<div class="alert alert-block alert-<?php echo $msg['type']; ?>">
										<button type="button" class="wt-btn badge" data-dismiss="alert" style="padding: 0 15px;">
									<i class="fa fa-remove"></i>
									</button>
										<i class="<?php echo $msg['icon']; ?> badge"></i>
										<span class="lead"><?php echo $msg['txt']; ?> </span>
								</div>
								<?php endif ?>
								
								<?php if($userdata->account_active_status == 0){ ?>
									<div class="alert alert-danger" role="alert">
										Your Account is Rejected. Wait For Admin To Activate.
									</div>
									
									<?php }elseif($userdata->account_active_status == 1){ ?>
										<div class="alert alert-danger" role="alert">
											Your Account is Under Review. Wait For Admin To Activate.
										</div>
										<?php } ?>
							<div class="wt-haslayout wt-dbsectionspace">
								<div class="wt-dashboardbox wt-dashboardtabsholder">
									<div class="wt-dashboardboxtitle">
										<h2>My Profile</h2>
									</div>
									<div class="wt-dashboardtabs">
										<ul class="wt-tabstitle nav navbar-nav">
											<li class="nav-item">
												<a class="active show" data-toggle="tab" href="#wt-skills">Personal Details &amp; Skills</a>
											</li>
											<li class="nav-item"><a data-toggle="tab" href="#wt-education" class="">Education, Qualification &amp; Experience</a></li>
											<!-- <li class="nav-item"><a data-toggle="tab" href="#wt-awards" class="">Family Members & Relations</a></li> -->
										</ul>
									</div>
									<div class="wt-tabscontent tab-content">
										<div class="wt-personalskillshold tab-pane fade active show" id="wt-skills">
											<div class="wt-yourdetails wt-tabsinfo">
												<div class="wt-tabscontenttitle">
													<h2>Your Details</h2>
												</div>
												<form id="personal_form" class="wt-formtheme wt-userform" action="myaccount/account_update" role="form" method="post" enctype="multipart/form-data">
													<input type="hidden" name="customer_id" value="<?php echo (!empty($userdata->customer_id)) ? $userdata->customer_id : '' ?> " />
													<fieldset>
													<span class="mt-1 mb-1 wt-companyinfo" id="error" style="color:#ff5851"></span>
														<div class="form-group form-group-half">
														<label class="label label-default" >Select Gender:</label>
															<span class="wt-select">
																<select id='gender' name="gender" >
																	<option value="" >Select Gender</option>
																	<option value="1" <?php echo (!empty($userdata->gender) && $userdata->gender ==1 ) ? 'selected' : '' ?>>Male</option>
																	<option value="2" <?php echo (!empty($userdata->gender) && $userdata->gender ==2 ) ? 'selected' : '' ?>>Female</option>
																	<option value="3" <?php echo (!empty($userdata->gender) && $userdata->gender ==3 ) ? 'selected' : '' ?>>Others</option>
																</select>
															</span>
														</div>
														<div class="form-group form-group-half">
														<label class="label label-default" >Select Marital Status:</label>
															<span class="wt-select">
																<select id='marital_status' name="marital_status" >
																	<option value="" disabled="">Select Marital Status</option>
																	<option value="1" <?php echo (!empty($userdata->marital_status) && $userdata->marital_status ==1 ) ? 'selected' : '' ?>>Single</option>
																	<option value="2" <?php echo (!empty($userdata->marital_status) && $userdata->marital_status ==2 ) ? 'selected' : '' ?>>Married</option>
																	<option value="3" <?php echo (!empty($userdata->marital_status) && $userdata->marital_status ==3 ) ? 'selected' : '' ?>>Others</option>
																</select>
															</span>
														</div>
														<div class="form-group form-group-half">
														<label class="label label-default" >Date Of Birth:</label>
															<input type="date" name="dob" class="form-control" placeholder="Date Of Birth" value="<?php echo (!empty($userdata->dob)) ? $userdata->dob : '' ?>">
														</div>
														<div class="form-group form-group-half">
														<label class="label label-default" >Nationality:</label>
															<input type="text" name="nationality" class="form-control" placeholder="Nationality" value="<?php echo (!empty($userdata->nationality)) ? $userdata->nationality : '' ?>">
														</div>
														<div class="form-group form-group-half">
														<label class="label label-default" >Select Country:</label>
														<span class="wt-select">
															<select name="country_id" id="country_id" class=" countries" onChange="return getstate(this.value)">
																<option value="" >Select Country</option>
																<?php foreach ($countries as $row): ?>
																<option value="<?php echo $row->country_id; ?>" <?php echo (!empty($userdata->country_id) && $row->country_id == $userdata->country_id) ? 'selected' : ''; ?>><?php echo $row->country_name; ?></option>
																<?php endforeach ?>
															</select>
															</span>
														</div>
														<div class="form-group form-group-half">
														<label class="label label-default" >Select State:</label>
														<span class="wt-select">
															<select name="state_id" id="state_id" class=" states" onChange="return getcity(this.value)">
																<option value="" >Select State</option>
																<?php foreach ($states as $row): ?>
																<option value="<?php echo $row->state_id; ?>" <?php echo (!empty($userdata->state_id) && $row->state_id == $userdata->state_id) ? 'selected' : ''; ?>><?php echo $row->state_name; ?></option>
																<?php endforeach ?>
															</select>
															</span>
														</div>
														<div class="form-group form-group-half">
														<label class="label label-default" >Select City:</label>
														<span class="wt-select">
															<select name="city_id" id="city_id" class="cities" >
																<option value="" >Select City</option>
																<?php foreach ($cities as $row): ?>
																<option value="<?php echo $row->city_id; ?>" <?php echo (!empty($userdata->city_id) && $row->city_id == $userdata->city_id) ? 'selected' : ''; ?>><?php echo $row->city_name; ?></option>
																<?php endforeach ?>					
															</select>
															</span>
														</div>
														
														<div class="form-group ">
														<label class="label label-default" >Area:</label>
															<input type="text" name="area" class="form-control" placeholder="Area" value="<?php echo (!empty($userdata->area)) ? $userdata->area : '' ?>">
														</div>
														<div class="form-group">
														<label class="label label-default" >Address:</label>
															<textarea style="height:auto" id="address" rows="2" name="address" class="form-control" placeholder="Address"><?php echo (!empty($userdata->address)) ? $userdata->address : '' ?> </textarea>
														</div>
															
														<div class="form-group form-group-label">
														<label class="label label-default" >Upload Personal Photo:</label>
															<div class="wt-labelgroup">
																<label >
																	<span class="wt-btn">Select Files</span>
																	<input type="file" name="personal_photo" id="personal_photo">
																</label>
																<span>Upload Personal Photo</span>
																<em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
															</div>
														</div>
															<?php if(!empty($userdata->personal_photo)) { ?>
															<div class="form-group">
																<ul class="wt-attachfile wt-attachfilevtwo">
																	<li class="wt-uploadingholder wt-companyimg-uploading">
																		<div class="wt-uploadingbox">
																			<figure><img src="<?php echo !empty($userdata->personal_photo) ? PERSONAL_PHOTO_PATH.$userdata->personal_photo : '' ?>" alt="Personal Photo"></figure>
																			<!-- <div class="wt-uploadingbar "> -->
																				<!-- <span class="uploadprogressbar"></span>	 -->
																			
																			<!-- </div> -->
																		</div>
																	</li>
																</ul>
															</div>
															<?php } ?>

														<div class="form-group form-group-label">
														<label class="label label-default" >Upload Documents:</label>
															<div class="wt-labelgroup">
																<label >
																	<span class="wt-btn">Select Files</span>
																	<input type="file" name="customer_documents[]" id="costumer_documents" multiple>
																</label>
																<span>Governmental Identities Front and Back Side</span>
																<em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
															</div>
														</div>
														<?php if(!empty($customer_documents)) { ?>
															<div class="form-group">
																<ul class="wt-attachfile wt-attachfilevtwo">
															<?php foreach($customer_documents as $document){ ?>
															
													
																	<li class="wt-uploadingholder wt-companyimg-uploading">
																		<div class="wt-uploadingbox">
																			<figure><img src="<?php echo !empty($document->document) ? CUSTOMER_DOCUMENTS_PATH.$document->document : '' ?>" alt="Personal Photo"></figure>
																			<div class="wt-uploadingbar ">
																				<!-- <span class="uploadprogressbar"></span>	 -->
																				
																				<a class="" title="Delete" href="myaccount/delete_customer_document/<?php echo $document->customer_document_id; ?>/<?php echo $document->document; ?>">
																				<em style="font-size:22px; margin: 0 auto;">Delete<a  class="lnr lnr-cross" style="font-size:22px"></a></em>
																				</a>
																			</div>
																		</div>
																	</li>
															<?php } ?>
																</ul>
															</div>
															<?php } ?>
													<div class="form-group">
														<button type="submit" class="wt-btn btn" id="">Update</button>
													</div>
													</fieldset>
													
												</form>
											</div>
											
											</>
											
										</div>
										<div class="wt-educationholder tab-pane fade" id="wt-education">
											<div class="wt-userexperience wt-tabsinfo">
												<div class="wt-yourdetails wt-tabsinfo">
													<div class="wt-tabscontenttitle">
														<h2>Education Information</h2>
													</div>
													<form id="education_form" class="wt-formtheme wt-userform" action="myaccount/education_update" role="form" method="post" enctype="multipart/form-data">
													<input name="customer_details_id" type="hidden" value="<?php echo (!empty($customer_details->customer_details_id)) ? $customer_details->customer_details_id : ''; ?>"  />
														<fieldset>
														<span class="mt-1 mb-1 wt-companyinfo" id="error" style="color:#ff5851"></span>
															<div class="form-group form-group-half">
															<label class="label label-default" >Select Univesity Degree:</label>
																<span class="wt-select">
																	<select id='university_degree' name="university_degree" >
																		<option value="" >Select University Degree</option>
																		<option value="1" <?php echo (!empty($customer_details->university_degree) && $customer_details->university_degree ==1 ) ? 'selected' : '' ?>>Non-University degree</option>
																		<option value="2" <?php echo (!empty($customer_details->university_degree) && $customer_details->university_degree ==2 ) ? 'selected' : '' ?>>Diploma</option>
																		<option value="3" <?php echo (!empty($customer_details->university_degree) && $customer_details->university_degree ==3 ) ? 'selected' : '' ?>>B.Sc.</option>
																		<option value="4" <?php echo (!empty($customer_details->university_degree) && $customer_details->university_degree ==4 ) ? 'selected' : '' ?>>Master</option>
																		<option value="5" <?php echo (!empty($customer_details->university_degree) && $customer_details->university_degree ==5 ) ? 'selected' : '' ?>>Doctorate</option>
																		<option value="6" <?php echo (!empty($customer_details->university_degree) && $customer_details->university_degree ==6 ) ? 'selected' : '' ?>>Other</option>
																	</select>
																</span>
															</div>
															
															<div class="form-group form-group-half">
															<label class="label label-default" >University:</label>
																<input autocomplete="on" type="text" name="university" class="form-control" placeholder="University" value="<?php echo (!empty($customer_details->university)) ? $customer_details->university : '' ?>">
															</div>
															<div class="form-group form-group-half">
															<label class="label label-default" >Faculty:</label>
																<input type="text" name="faculty" class="form-control" placeholder="Faculty" value="<?php echo (!empty($customer_details->faculty)) ? $customer_details->faculty : '' ?>">
															</div>
															
															<div class="form-group form-group-half">
															<label class="label label-default" >Graduation date:</label>
																<input type="date" name="graduation_date" class="form-control" placeholder="Graduation date" value="<?php echo (!empty($customer_details->graduation_date)) ? $customer_details->graduation_date : '' ?>">
															</div>
															<div class="form-group form-group-half">
															<label class="label label-default" >Major:</label>
																<input type="text" name="major" class="form-control" placeholder="Major" value="<?php echo (!empty($customer_details->major)) ? $customer_details->major : '' ?>">
															</div>
															<div class="form-group form-group-half">
															<label class="label label-default" >Skills:</label>
																<input type="text" name="skills" class="form-control" placeholder="Skills" value="<?php echo (!empty($customer_details->skills)) ? $customer_details->skills : '' ?>">
																<span>Enter Skills separated with comma</span>
															</div>
															
															
														<div class="form-group">
															<button type="submit" class="wt-btn" id="">Update</button>
														</div>
														</fieldset>
														
													</form>
												</div>
											
											</div>

											<div class="wt-userexperience wt-tabsinfo">
												<div class="wt-yourdetails wt-tabsinfo">
													<div class="wt-tabscontenttitle">
														<h2>Qualification & Experience Information</h2>
													</div>
													<form id="education_form" class="wt-formtheme wt-userform" action="myaccount/experience_update" role="form" method="post" enctype="multipart/form-data">
													<input name="customer_details_id" type="hidden" value="<?php echo (!empty($customer_details->customer_details_id)) ? $customer_details->customer_details_id : ''; ?>"  />
														<fieldset>
														<span class="mt-1 mb-1 wt-companyinfo" id="error" style="color:#ff5851"></span>
															<div class="form-group form-group-half">
															<label class="label label-default" >Current Job Title:</label>
																<input autocomplete="on" type="text" name="current_job_title" class="form-control" placeholder="Current Job Title" value="<?php echo (!empty($customer_details->current_job_title)) ? $customer_details->current_job_title : '' ?>">
															</div>
															<div class="form-group form-group-half">
															<label class="label label-default" >Company Name:</label>
																<input type="text" name="company_name" class="form-control" placeholder="Company Name" value="<?php echo (!empty($customer_details->company_name)) ? $customer_details->company_name : '' ?>">
															</div>
															<div class="form-group">
																<label class="label label-default" >Description & Responsibilities:</label>
																<textarea style="height:auto" id="desc_responsibility" rows="3" name="desc_responsibility" class="form-control" placeholder="Description & Responsibilities"><?php echo (!empty($customer_details->desc_responsibility)) ? $customer_details->desc_responsibility : '' ?> </textarea>
															</div>
															<div class="form-group form-group-label">
																<label class="label label-default" >Upload Resume:</label>
																<div class="wt-labelgroup">
																	<label >
																		<span class="wt-btn">Select File</span>
																		<input type="file" name="resume" id="resume">
																	</label>
																	<span>Upload Resume</span>
																	<em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
																</div>
															</div>	
														<div class="form-group">
															<button type="submit" class="wt-btn" id="">Update</button>
														</div>
														</fieldset>
														
													</form>
												</div>
											
											</div>
											
										</div>
										
										<!-- <div class="wt-awardsholder tab-pane fade" id="wt-awards">
											<div class="wt-addprojectsholder wt-tabsinfo">
											<?php if(count($family_details) < 5) { ?>
													<div class="wt-tabscontenttitle">
														<h2>Add Family Members & Relations Details</h2>
													</div>
													<form id="education_form" class="wt-formtheme wt-userform" action="myaccount/family_data_save" role="form" method="post" enctype="multipart/form-data">
													<input name="family_details_id" type="hidden" value="<?php echo (!empty($family_details->family_details_id)) ? $family_details->family_details_id : ''; ?>"  />
														<fieldset>
														<span class="mt-1 mb-1 wt-companyinfo" id="error" style="color:#ff5851"></span>
															
															<div class="form-group form-group-half">
															<label class="label label-default" >Full Name:</label>
																<input autocomplete="on" type="text" name="full_name" class="form-control" placeholder="Full Name" value="<?php echo (!empty($family_details->full_name)) ? $family_details->full_name : '' ?>" required>
															</div>
															<div class="form-group form-group-half">
															<label class="label label-default" >Select Relationship:</label>
																<span class="wt-select">
																	<select id='relationship' name="relationship" required>
																		<option value="" >Select Relationship</option>
																		<option value="1" <?php echo (!empty($family_details->relationship) && $family_details->relationship ==1 ) ? 'selected' : '' ?>>Child (Son/Daughter)</option>
																		<option value="2" <?php echo (!empty($family_details->relationship) && $family_details->relationship ==2 ) ? 'selected' : '' ?>>Parent (Mother/Father)</option>
																		<option value="3" <?php echo (!empty($family_details->relationship) && $family_details->relationship ==3 ) ? 'selected' : '' ?>>Sibiling (Brother/Sister)</option>
																		<option value="4" <?php echo (!empty($family_details->relationship) && $family_details->relationship ==4 ) ? 'selected' : '' ?>>Spouse (Husband/Wife)</option>
																		<option value="5" <?php echo (!empty($family_details->relationship) && $family_details->relationship ==5 ) ? 'selected' : '' ?>>Other</option>
																		
																	</select>
																</span>
															</div>
															<div class="form-group form-group-half">
															<label class="label label-default" >Select Gender:</label>
																<span class="wt-select">
																	<select id='gender' name="gender" >
																		<option value="" >Select Gender</option>
																		<option value="1" <?php echo (!empty($family_details->gender) && $family_details->gender ==1 ) ? 'selected' : '' ?>>Male</option>
																		<option value="2" <?php echo (!empty($family_details->gender) && $family_details->gender ==2 ) ? 'selected' : '' ?>>Female</option>
																		<option value="3" <?php echo (!empty($family_details->gender) && $family_details->gender ==3 ) ? 'selected' : '' ?>>Others</option>
																	</select>
																</span>
															</div>

															<div class="form-group form-group-half">
															<label class="label label-default" >Date Of Birth:</label>
																<input type="date" name="dob" class="form-control" placeholder="Date Of Birth" value="<?php echo (!empty($family_details->dob)) ? $family_details->dob : '' ?>" required>
															</div>
														<div class="form-group">
														
															<button type="submit" class="wt-btn" id="">Add</button>
														
														</div>
														</fieldset>
														
													</form>
											<?php } ?>
													<div class="wt-tabscontenttitle" style="margin-top: 20px;">
														<h2>Added Family Members & Relations Details</h2>
													</div>

													<?php if(empty($family_details)){ ?>

													<h4>No members are added under Your account...!</h4>

													<?php } ?>

													<ul class="wt-experienceaccordion accordion">
													<?php foreach($family_details as $family_member){ ?>
													<li style="margin: 20px auto">
														<div class="wt-accordioninnertitle">
															<div class="wt-projecttitle collapsed" data-toggle="collapse" data-target="#<?php echo $family_member->family_details_id; ?>" aria-expanded="false">
																
																<h3><?php echo strtoupper($family_member->full_name); ?><samp>
																<?php if($family_member->relationship == 1){
																	echo "Child (Son/Daughter)";
																}elseif($family_member->relationship == 2){
																	echo "Parent (Mother/Father)";
																}elseif($family_member->relationship == 3){
																	echo "Sibiling (Brother/Sister)";
																}elseif($family_member->relationship == 4){
																	echo "Spouse (Husband/Wife)";
																}elseif($family_member->relationship == 5){
																	echo "Others";
																} ?>
																</samp>Click To Expand </h3>
																
															</div>
															<div class="wt-rightarea">
																<a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo collapsed" data-toggle="collapse" data-target="#<?php echo $family_member->family_details_id; ?>" aria-expanded="false"><i class="lnr lnr-pencil"></i></a>
																<a href="myaccount/delete_family_member/<?php echo $family_member->family_details_id ?>" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
															</div>
														</div>
														<div class="wt-collapseexp collapse " id="<?php echo $family_member->family_details_id ?>" aria-labelledby="accordioninnertitle" data-parent="#accordion" style="">
															<form id="education_form" class="wt-formtheme wt-userform" action="myaccount/family_data_save" role="form" method="post" enctype="multipart/form-data">
															<input name="family_details_id" type="hidden" value="<?php echo (!empty($family_member->family_details_id)) ? $family_member->family_details_id : ''; ?>"  />
															<fieldset>
															<span class="mt-1 mb-1 wt-companyinfo" id="error" style="color:#ff5851"></span>
																
																<div class="form-group form-group-half">
																<label class="label label-default" >Full Name:</label>
																	<input autocomplete="on" type="text" name="full_name" class="form-control" placeholder="Full Name" value="<?php echo (!empty($family_member->full_name)) ? $family_member->full_name : '' ?>">
																</div>
																<div class="form-group form-group-half">
																<label class="label label-default" >Select Relationship:</label>
																	<span class="wt-select">
																		<select id='relationship' name="relationship" >
																			<option value="" >Select Relationship</option>
																			<option value="1" <?php echo (!empty($family_member->relationship) && $family_member->relationship ==1 ) ? 'selected' : '' ?>>Child (Son/Daughter)</option>
																			<option value="2" <?php echo (!empty($family_member->relationship) && $family_member->relationship ==2 ) ? 'selected' : '' ?>>Parent (Mother/Father)</option>
																			<option value="3" <?php echo (!empty($family_member->relationship) && $family_member->relationship ==3 ) ? 'selected' : '' ?>>Sibiling (Brother/Sister)</option>
																			<option value="4" <?php echo (!empty($family_member->relationship) && $family_member->relationship ==4 ) ? 'selected' : '' ?>>Spouse (Husband/Wife)</option>
																			<option value="5" <?php echo (!empty($family_member->relationship) && $family_member->relationship ==5 ) ? 'selected' : '' ?>>Other</option>
																			
																		</select>
																	</span>
																</div>
																<div class="form-group form-group-half">
																<label class="label label-default" >Select Gender:</label>
																	<span class="wt-select">
																		<select id='gender' name="gender" >
																			<option value="" >Select Gender</option>
																			<option value="1" <?php echo (!empty($family_member->gender) && $family_member->gender ==1 ) ? 'selected' : '' ?>>Male</option>
																			<option value="2" <?php echo (!empty($family_member->gender) && $family_member->gender ==2 ) ? 'selected' : '' ?>>Female</option>
																			<option value="3" <?php echo (!empty($family_member->gender) && $family_member->gender ==3 ) ? 'selected' : '' ?>>Others</option>
																		</select>
																	</span>
																</div>

																<div class="form-group form-group-half">
																<label class="label label-default" >Date Of Birth:</label>
																	<input type="date" name="dob" class="form-control" placeholder="Date Of Birth" value="<?php echo (!empty($family_member->dob)) ? $family_member->dob : '' ?>">
																</div>
															<div class="form-group">
																<button type="submit" class="wt-btn" id="">Edit</button>
															</div>
															</fieldset>
															
														</form>
														</div>
													</li>
													<?php } ?>
													
												</ul>	
												
											</div>
																					
										</div> -->
									</div>
								</div>
							</div>
							
						</div>
						
					</div>
				</section>
				<!--Register Form End-->
			</main>