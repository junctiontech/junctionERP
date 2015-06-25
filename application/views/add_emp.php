<!-- Add emp  added by palak on 22ndjune -->
<!-- Add emp body starts -->

		<div class="page-title">
				
				<div class="title-env">
					<h1 class="title">Add Employee</h1>
					<p class="description">Add Your Employee</p>
				</div>
				
					<div class="breadcrumb-env">
					
					<ol class="breadcrumb bc-1">
						<li>
							<a href="javascript:;"><i class="fa-home"></i>Home</a>
						</li>
								<li>
							<a href="javascript:;"><i class="fa-home"></i>Manage Employee</a>
						</li>
							<li class="active">
						
										<strong>Add Employee</strong>
								</li>
							
								</ol>
								
				</div>
					
			</div>
			<!-- Form starts -->
		
			
			
			<script type="text/javascript">
				jQuery(document).ready(function($)
				{
					$(".multi-select").multiSelect({
						afterInit: function()
						{
							// Add alternative scrollbar to list
							this.$selectableContainer.add(this.$selectionContainer).find('.ms-list').perfectScrollbar();
						},
						afterSelect: function()
						{
							// Update scrollbar size
							this.$selectableContainer.add(this.$selectionContainer).find('.ms-list').perfectScrollbar('update');
						}
					});
					
					$(".selectboxit").selectBoxIt().on('open', function()
					{
						// Adding Custom Scrollbar
						$(this).data('selectBoxSelectBoxIt').list.perfectScrollbar();
					});
				});
			</script>
			
			<form role="forl" id="rootwizard" class="form-wizard validate">
				
				<ul class="tabs">
					<li class="active">
						<a href="#fwv-1" data-toggle="tab">
							Personal Details
							<span>1</span>
						</a>
					</li>
					<li>
						<a href="#fwv-2" data-toggle="tab">
							Contact Details
							<span>2</span>
						</a>
					</li>
					<li>
						<a href="#fwv-3" data-toggle="tab">
							Employee Documents
							<span>3</span>
						</a>
					</li>
					<li>
						<a href="#fwv-4" data-toggle="tab">
							Bank Information
							<span>4</span>
						</a>
					</li>
					<li>
						<a href="#fwv-5" data-toggle="tab">
							Official Status
							<span>5</span>
						</a>
					</li>
				</ul>
				
				<div class="progress-indicator">
					<span></span>
				</div>
				
				<div class="tab-content no-margin">
					
					<!-- Tabs Content -->
					<div class="tab-pane with-bg active" id="fwv-1">
						
						<div class="row">
							
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label" for="first_name">First Name *</label>
									<input class="form-control" name="first_name" id="first_name" data-validate="required" placeholder="Your first name" />
								</div>
							</div>
								<div class="col-md-6">
								<div class="form-group">
									<label class="control-label" for="last_name">Last Name *</label>
									<input class="form-control" name="last_name" id="last_name" data-validate="required" placeholder="Your last name" />
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label" for="birthdate">Date of Birth</label>
									<input class="form-control" name="birthdate" id="birthdate" data-validate="required" data-mask="date" placeholder="Pre-formatted birth date" />
								</div>
							</div>
							<div class="col-md-6">
							   <div class="form-group">
									<label class="control-label">Gender</label>
									<br>
										<label class="cbr-inline">
												<input type="radio" name="radio-2" class="cbr" checked>
												Male
											</label>
											<label class="cbr-inline">
												<input type="radio" name="radio-2" class="cbr">
												Female
											</label>
								</div>	
							</div>
						</div>
						<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									<label class=" control-label" for="photo">Photo</label>
										<input type="file" class="form-control" id="photo">
									</div>
								</div>
						</div>
						<div class="row">
							<div class="col-md-6">
										<div class="form-group">
									<label class="control-label">Maratial Status</label>
									
									<script type="text/javascript">
										jQuery(document).ready(function($)
										{
											$("#s2example-1").select2({
												placeholder: 'Maratial Status...',
												allowClear: true
											}).on('select2-open', function()
											{
												// Adding Custom Scrollbar
												$(this).data('select2').results.addClass('overflow-hidden').perfectScrollbar();
											});
											
										});
									</script>
									
									<select class="form-control " id="s2example-1">
										<option></option>
										<optgroup label="Maratial Status">
											<option>Married</option>
											<option>Unmarried</option>
										</optgroup>
									</select>
									
								</div>
							</div>
								<div class="col-md-6">
										<div class="form-group">
									<label class="control-label">Nationality</label>
														
									<select class="form-control " id="s2example-1">
										<option></option>
										<optgroup label="Nationality">
											<option>Indian</option>
											<option>United States</option>
										</optgroup>
									</select>
									
								</div>
							</div>
						</div>
						
						<div class="row">
							
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label" for="father_name">Father's Name </label>
									<input class="form-control" name="father_name" id="father_name" data-validate="required" placeholder="Your father's name" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label" for="passport">Passport</label>
									<input class="form-control" name="passport" id="passport" data-validate="required" placeholder="Your Passport Number" />
								</div>
							</div>
						</div>
					</div><!-- tab1 closed -->
					<div class="tab-pane with-bg" id="fwv-2">
					
						<div class="row">
						<div class="col-md-12">
								<div class="form-group">
									<label class="control-label" for="address_line_2">Present Address</label>
									<input class="form-control" name="address_line_2" data-validate="required" id="address_line_2" placeholder="Enter Present Address" />
								</div>
							</div>
							
						</div>
						<div class="row">
							<div class="col-md-4">
							<div class="form-group">
									<label class="control-label">Mobile</label>
									
									<div class="input-group input-group-sm input-group-minimal">
										<span class="input-group-addon">
											<i class="linecons-mobile"></i>
										</span>
										<input type="text" class="form-control" data-mask="phone">
									</div>
								</div>
							</div>
							<div class="col-md-4">
							<div class="form-group">
									<label class="control-label">Email id</label>
									
									<div class="input-group input-group-sm input-group-minimal">
										<span class="input-group-addon">
											<i class="linecons-mail"></i>
										</span>
										<input type="text" class="form-control" data-mask="email">
									</div>
								</div>
							</div>
									<div class="col-md-4">
							<div class="form-group">
									<label class="control-label">Country</label>
												
									<select class="form-control" id="s2example-1">
										<option></option>
																
										<optgroup label="Asia">
											<option>Afghanistan</option>
											<option>Bahrain</option>
											<option>Bangladesh</option>
											<option>Bhutan</option>
											<option>Brunei</option>
											<option>Cambodia</option>
											<option>China</option>
											<option>East Timor</option>
											<option>India</option>
											<option>Indonesia</option>
											<option>Iran</option>
											<option>Iraq</option>
											<option>Israel</option>
											<option>Japan</option>
											<option>Jordan</option>
											<option>Kazakhstan</option>
											<option>Korea North</option>
											<option>Korea South</option>
											<option>Kuwait</option>
											<option>Kyrgyzstan</option>
											<option>Laos</option>
											<option>Lebanon</option>
											<option>Malaysia</option>
											<option>Maldives</option>
											<option>Mongolia</option>
											<option>Myanmar (Burma)</option>
											<option>Nepal</option>
											<option>Oman</option>
											<option>Pakistan</option>
											<option>The Philippines</option>
											<option>Qatar</option>
											<option>Russia</option>
											<option>Saudi Arabia</option>
											<option>Singapore</option>
											<option>Sri Lanka</option>
											<option>Syria</option>
											<option>Taiwan</option>
											<option>Tajikistan</option>
											<option>Thailand</option>
											<option>Turkey</option>
											<option>Turkmenistan</option>
											<option>United Arab Emirates</option>
											<option>Uzbekistan</option>
											<option>Vietnam</option>
											<option>Yemen</option>
										</optgroup>
									</select>
										
										
								</div>
								
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label" for="state">State</label>
									
									<select name="test" class="selectboxit">
										<optgroup label="United States">
											<option value="1">Alabama</option>
											<option value="2">Boston</option>
											<option value="3">Ohaio</option>
											<option value="4">New York</option>
											<option value="5">Washington</option>
										</optgroup>
									</select>
								</div>
							</div>
								<div class="col-md-4">
								<div class="form-group">
									<label class="control-label" for="city">City</label>
									<select name="test" class="selectboxit">
										<optgroup label="City">
											<option value="1">Bhopal</option>
											<option value="2">Indore</option>
										</optgroup>
									</select>
							</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label" for="zip">Zip</label>
									<input class="form-control" name="zip" id="zip" data-mask="** *** **" data-validate="required" placeholder="Zip Code" />
								</div>
							</div>
							
						</div>
						
					</div>
					<!-- tab 2 closed -->
					<div class="tab-pane with-bg" id="fwv-3">
						<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									<label class=" control-label" for="resume">Resume</label>
										<input type="file" class="form-control" id="resume">
									</div>
								</div>
						</div>
						<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									<label class=" control-label" for="offerletter">Offer Letter</label>
										<input type="file" class="form-control" id="offerletter">
									</div>
								</div>
						</div>
						<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									<label class=" control-label" for="joiningletter">Joining Letter</label>
										<input type="file" class="form-control" id="joiningletter">
									</div>
								</div>
						</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									<label class=" control-label" for="idproof">ID Proof</label>
										<input type="file" class="form-control" id="idproof">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									<label class=" control-label" for="otherdoc">Other Documents</label>
										<input type="file" class="form-control" id="otherdoc">
									</div>
								</div>
							</div>
					
					</div><!-- tab 3 closed -->
					
					<div class="tab-pane with-bg" id="fwv-4">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label" for="bank_name">Bank Name </label>
									<input class="form-control" name="bank_name" id="bank_name" data-validate="required" placeholder="Bank Name" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label" for="branch_name">Branch Name</label>
									<input class="form-control" name="branch_name" id="branch_name" data-validate="required" placeholder="Branch Name" />
								</div>
							</div>
						</div>	
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label" for="acc_name">Account Name </label>
									<input class="form-control" name="acc_name" id="acc_name" data-validate="required" placeholder="Account Name" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label" for="acc_no">Account No.</label>
									<input class="form-control" name="acc_no" id="acc_no" data-validate="required" placeholder="Account No." />
								</div>
							</div>
						</div>
				</div>
					
					<div class="tab-pane with-bg" id="fwv-5">
					<div class="row">
											
							<div class="col-md-6">						
						<div class="form-group">
							<label class="control-label">Employee ID</label>
							
							<div class="input-group">
								<div class="input-group-addon">
									<i class="linecons-user"></i>
								</div>
								
								<input type="text" class="form-control" name="empid" id="empid" data-validate="required,minlength[5]" data-message-minlength="Emp id must have minimum of 5 chars." placeholder="Enter Emp id" />
							</div>
						</div>
						</div>
						<div class="col-md-6">	
							<div class="form-group">
									<label class="col-sm-3 control-label">Joining Date</label>
									
									<div class="col-sm-9">
										<input type="text" class="form-control datepicker" data-start-view="1">
									</div>
								</div>
								</div>
							</div>
						<div class="row">
						<div class="col-md-6">						
								<div class="form-group">
									<label class="control-label" for="city">Department</label>
									<select name="test" class="selectboxit">
										<optgroup label="Designations">
											<option value="1">PHP</option>
											<option value="2">Design</option>
										</optgroup>
									</select>
							</div>
							</div>
						<div class="col-md-6">						
								<div class="form-group">
									<label class="control-label" for="city">Designations</label>
									<select name="test" class="selectboxit">
										<optgroup label="Designations">
											<option value="1">Developer</option>
											<option value="2">Designer</option>
										</optgroup>
									</select>
							</div>
							</div>
						</div>
						<div class="row">
											
							<div class="col-md-6">						
						<div class="form-group">
							<label class="control-label">Username</label>
							
							<div class="input-group">
								<div class="input-group-addon">
									<i class="linecons-user"></i>
								</div>
								
								<input type="text" class="form-control" name="username" id="username" data-validate="required,minlength[5]" data-message-minlength="User Name must have minimum of 5 chars." placeholder="Could be email id" />
							</div>
						</div>
						</div>
						<div class="col-md-6">						
							<div class="form-group">
									<label class="control-label">Choose Password</label>
									
									<div class="input-group">
										<div class="input-group-addon">
											<i class="linecons-lock"></i>
										</div>
										
										<input type="password" class="form-control" name="password" id="password" data-validate="required" placeholder="Enter strong password" />
									</div>
								</div>
							</div>
							</div>
							<div class="row">
								<div class="col-md-12">
							   <div class="form-group">
									<label class="control-label">Frquency</label>
									<br>
										<label class="cbr-inline">
												<input type="radio" name="radio-2" class="cbr" checked>
												Weekly
											</label>
											<label class="cbr-inline">
												<input type="radio" name="radio-2" class="cbr">
												Monthly
											</label>
								</div>	
							</div>
							</div>
							<div class="form-group">
							<button type="submit" class="btn btn-primary">Add Employee</button>
						</div>
					
			</div>
					
					
					<!-- Tabs Pager -->
					
					<ul class="pager wizard">
						<li class="previous">
							<a href="#"><i class="entypo-left-open"></i> Previous</a>
						</li>
						
						<li class="next">
							<a href="#">Next <i class="entypo-right-open"></i></a>
						</li>
					</ul>
					
				</div>
				
			</form>
			<!-- Form Ends -->
			</div>
	</div>