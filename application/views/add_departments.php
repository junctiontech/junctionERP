<!-- add departments page added by palak on 21 st june -->
<!-- add departments body starts -->

		<div class="page-title">
				
				<div class="title-env">
					<h1 class="title">Add Departments</h1>
					<p class="description">Add Your Departments</p>
				</div>
				<!-- breadcrumbs starts -->
					<div class="breadcrumb-env">
					
								<ol class="breadcrumb bc-1">
									<li>
							<a href="javascript:;"><i class="fa-home"></i>Home</a>
						</li>
							<li class="active">
						
										<strong>Manage Departments</strong>
								</li>
							<li class="active">
						
										<strong>Add Department</strong>
								</li>
								</ol>
								
				</div>
				<!-- breadcrumbs ends -->	
			</div>
			<!-- page title closed -->
			<!-- body container  starts -->
			<div class="row">
				<div class="col-sm-12">
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Add Department</h3>
								
						</div>
							<div class="panel-body">
								
								<form role="form" class="form-horizontal">
									
								<div class="form-group">
									<label class="control-label">Select your organization</label>
									
									<script type="text/javascript">
										jQuery(document).ready(function($)
										{
											$("#s2example-1").select2({
												placeholder: 'Select your organization...',
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
										<optgroup label="Organizations">
											<option>Junction</option>
											<option>Tech</option>
										</optgroup>
									</select>
								</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="field-1">Department Name</label>
										
										<div class="col-sm-10">
											<input type="text" class="form-control" id="field-1" placeholder="Department Name">
										</div>
									</div>
										<div class="form-group">
										<label class="col-sm-2 control-label" for="field-1">Designation Name</label>
										
										<div class="col-sm-10">
											<input type="text" class="form-control" id="field-1" placeholder="Designation Name">
										</div>
									</div>
									<div class="form-group-separator"></div>
									<div class="form-group">
										<button type="submit" class="btn btn-success">Submit</button>
										<button type="reset" class="btn btn-white" onClick="window.history.back();">Cancel</button>
									</div>
								</form>
								
							</div>
					</div>
					
				</div>
			</div>
			<!-- body container ends starts -->
		</div><!-- main content div end -->
	</div><!-- page container div end -->