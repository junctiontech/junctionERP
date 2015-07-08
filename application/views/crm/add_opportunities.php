<!-- Add Opportunities added by palak on 7th July-->
<!-- Add Opportunities  body starts -->

		<div class="page-title">
				
				<div class="title-env">
					<h1 class="title">Add Opportunities</h1>
					<p class="description">Add Your  Opportunities</p>
				</div>
				
					<div class="breadcrumb-env">
					
								<ol class="breadcrumb bc-1">
									<li>
							<a href="javascript:;"><i class="fa-home"></i>Home</a>
						</li>
							<li class="active">
						
										<strong>Add  Opportunities</strong>
								</li>
							
								</ol>
								
				</div>
					
			</div>
			<div class="row">
				<div class="col-md-12">
				<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Opportunities</h3>
						
						</div>
						<div class="panel-body">
					<form role="forl" id="rootwizard" class="form-wizard validate ">
				
				<ul class="tabs">
					<li class="active">
						<a href="#fwv-1" data-toggle="tab">
						New
							<span>1</span>
						</a>
					</li>
					<li>
						<a href="#fwv-2" data-toggle="tab">
							Proposition
							<span>2</span>
						</a>
					</li>
					<li>
						<a href="#fwv-3" data-toggle="tab">
							Qualification
							<span>3</span>
						</a>
					</li>
					<li>
						<a href="#fwv-4" data-toggle="tab">
							Negotiation
							<span>4</span>
						</a>
					</li>
					<li>
						<a href="#fwv-5" data-toggle="tab">
							Won
							<span>5</span>
						</a>
					</li>
						<li>
						<a href="#fwv-6" data-toggle="tab">
							Lost
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
							<div class="col-md-5">
									<div class="form-group">
										<label class="control-label" for="opportunity">Opportunity</label>
										<input class="form-control" name="opportunity" id="opportunity" placeholder="e.g. Product Pricing">
									</div>
									<div class="row">
							
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label" for="exp_revenue">Expected Revenue</label>
											<input class="form-control" name="exp_revenue" id="exp_revenue"  placeholder="Expected Revenue">
										</div>
									</div>
									<div class="col-md-2">
									<p class="at">at</p>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label" for="propability">Probability</label>
											<div class="input-group">
													<input type="text" class="form-control">
													<span class="input-group-addon">%</span>
												</div>
										</div>
									</div>
								</div>
							</div>
							
							
							<div class="col-md-4 col-md-offset-3">
									<div class="col-sm-6">
														<button class="btn btn-white    btn-icon btn-icon-standalone">
														<i class="fa-phone"></i>
															<span>0  Calls</span>
															
														</button>
													</div>
										
													<div class="col-sm-6">
													<button class="btn btn-white   btn-icon btn-icon-standalone">
														<i class="fa-calendar"></i>
															 <span>0 Meetings</span>
															
														</button>
													</div>
									</div>
							</div>
							<div class="row">
							
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label tooltip-primary" for="customer"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Linked partner (optional). Usually created when converting the lead.">Customer</label>
									<input class="form-control" name="customer" id="customer"  placeholder="Customer">
								</div>
								<div class="form-group">
									<label class="control-label tooltip-primary" for="email"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Email address of the contact">Email</label>
									<input class="form-control" name="email" id="email" data-validate="required" placeholder="Email">
								</div>
								<div class="form-group">
									<label class="control-label" for="phone">Phone</label>
									<input type="text" class="form-control" data-mask="phone">
								</div>
							</div>
							
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label" for="nextaction">Next Action</label>
										<div class="input-group">
											<input type="text" class="form-control datepicker" data-format="D, dd MM yyyy">
											
											<div class="input-group-addon">
												<a href="#"><i class="linecons-calendar"></i></a>
											</div>
										</div>
								</div>
								<div class="form-group">
									<label class="control-label" for="customer">Call for Purpose</label>
									<input class="form-control" name="customer" id="customer"  placeholder="Call for Purpose">
								</div>
								<div class="form-group">
									<label class="control-label tooltip-primary" for="expectedclosing"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Estimate of the date on which the opportunity will be won.">Expected Closing</label>
										<div class="input-group">
											<input type="text" class="form-control datepicker" data-format="D, dd MM yyyy">
											
											<div class="input-group-addon">
												<a href="#"><i class="linecons-calendar"></i></a>
											</div>
										</div>
								</div>
							</div>
							
						</div>
									<div class="row">
							
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label" for="salesperson">Salesperson</label>
									<input class="form-control" name="salesperson" id="salesperson"  placeholder="Salesperson">
								</div>
								<div class="form-group">
									<label class="control-label" for="priorties">Priorties</label>
									<input class="form-control" name="priorties" id="priorties" data-validate="required" placeholder="Priorties">
								</div>
								
							</div>
							
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label" for="nextaction">Tags</label>
										<script type="text/javascript">
										jQuery(document).ready(function($)
										{
											$("#s2example-1").select2({
												placeholder: 'Select your country...',
												allowClear: true
											}).on('select2-open', function()
											{
												// Adding Custom Scrollbar
												$(this).data('select2').results.addClass('overflow-hidden').perfectScrollbar();
											});
											
										});
									</script>
									
									<select class="form-control" id="s2example-1">
										<option></option>
										<optgroup label="North America">
											<option>Alabama</option>
											<option>Alaska</option>
											<option>Arizona</option>
										</optgroup>
							</select>
								</div>
								<div class="form-group">
									<label class="control-label" for="customer">Lost Reason</label>
									<input class="form-control" name="customer" id="lostreason"  placeholder="Lost Reason">
								</div>
							
							</div>
							
						</div>
					</div>
					
					<div class="tab-pane with-bg" id="fwv-2">
					
						
					</div>
					
					<div class="tab-pane with-bg" id="fwv-3">
						
						<strong>Primary School</strong>
						<br />
						<br />
			
					</div>
					
					<div class="tab-pane with-bg" id="fwv-4">
						
						<strong>Current &amp; Past Jobs</strong>
						<br />
						<br />
			
					</div>
					
					<div class="tab-pane with-bg" id="fwv-5">
						
						
						
					</div>
							<div class="tab-pane with-bg" id="fwv-6">
						
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Finish Registration</button>
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
				</div>
			</div>
				
				</div>
			</div>