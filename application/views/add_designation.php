<!-- add designations page added by palak on 25ht june -->
<!-- add designations body starts -->

		<div class="page-title">
				
				<div class="title-env">
					<h1 class="title">Add Designation</h1>
					<p class="description">Add Your Designation</p>
				</div>
				<!-- breadcrumbs starts -->
					<div class="breadcrumb-env">
					
								<ol class="breadcrumb bc-1">
									<li>
							<a href="javascript:;"><i class="fa-home"></i>Home</a>
						</li>
							<li class="active">
						
										<strong>Manage Designation</strong>
								</li>
							<li class="active">
						
										<strong>Add Designation</strong>
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
							<h3 class="panel-title">Add Designation</h3>
								
						</div>
						<?php  if(empty($select_designation)) { ?>
							<div class="panel-body">
								<form  class="form-horizontal" method="post" action="<?=base_url();?>master/insert_designation">
									<div class="form-group">
									<label class="control-label col-sm-2">Select your organization</label>
									
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
									<div class="col-sm-10">
									<select class="form-control " id="" name="orgnization_name">
										<option></option>
										<optgroup label="Organizations">
										<?php foreach($list_organization as $list){?>
											<option value="<?php echo $list->organization_id?>"><?php echo $list->organization_name; ?></option>
										<?php } ?>
										</optgroup>
									</select>
									</div>
								</div>
								<!--<div class="form-group">
									<label class="control-label col-sm-2">Select your Department</label>
								
									<div class="col-sm-10">
									<select class="form-control " id="" name="department_name">
										<option></option>
										<optgroup label="Organizations">
											<option value="">Department</option>
										</optgroup>
									</select>
									</div>
								</div>-->
									<div class="form-group">
										<label class="col-sm-2 control-label" for="field-1">Designation Name</label>
										
										<div class="col-sm-10">
											<input type="text" class="form-control" name="designation_name" id="field-1" placeholder="Designation Name"  >
										</div>
									</div>
									<div class="form-group" >
										<button type="submit" class="btn btn-success">Submit</button>
										<button type="reset" class="btn btn-white" onClick="window.history.back();">Cancel</button>
									</div>
									
								</form>
								</div>
								<?php }	if(!empty($select_designation)) { ?>
								<div class="panel-body">
								<?php  foreach($select_designation as $list ){?>
								<form  class="form-horizontal" method="post" action="<?=base_url();?>master/update_designation/<?=$list->designation_id?>">
									<div class="form-group">
									<label class="control-label col-sm-2">Select your organization</label>
									
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
									<div class="col-sm-10">
									<select class="form-control " id="" name="orgnization_name">
										<option></option>
										<optgroup label="Organizations">
										<?php foreach($list_organization as $list2){?>
											<option value="<?php echo $list2->organization_id?>" <?php if($list->organization_id==$list2->organization_id){ echo 'select'; }?> ><?php echo $list2->organization_name; ?></option>
										<?php } ?>
										</optgroup>
									</select>
									</div>
								</div>
								<!--<div class="form-group">
									<label class="control-label col-sm-2">Select your Department</label>
								
									<div class="col-sm-10">
									<select class="form-control " id="" name="department_name">
										<option></option>
										<optgroup label="Organizations">
											<option value="">Department</option>
										</optgroup>
									</select>
									</div>
								</div>-->
									<div class="form-group">
										<label class="col-sm-2 control-label" for="field-1">Designation Name</label>
										
										<div class="col-sm-10">
											<input type="text" class="form-control" name="designation_name" id="field-1" placeholder="Designation Name" value="<?=(!empty($list->designation_name))?$list->designation_name:"";?>" >
										</div>
									</div>
									<div class="form-group" >
										<button type="submit" class="btn btn-success">Submit</button>
										<button type="reset" class="btn btn-white" onClick="window.history.back();">Cancel</button>
									</div>
									
								</form>
								<?php }  ?>
							</div>	<!--panel close -->	
							<?php } ?>
						</div>
					</div>
					
				</div>
			
			<!-- body container ends starts -->
		</div><!-- main content div end -->
	</div><!-- page container div end -->