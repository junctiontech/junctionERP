<!-- manage users added by palak on 20 th june -->
<!-- manage users body starts -->

		<div class="page-title">
				
				<div class="title-env">
					<h1 class="title">Add User</h1>
					<p class="description">Add Your User </p>
				</div>
				<!-- breadcrumbs starts -->
					<div class="breadcrumb-env">
					
								<ol class="breadcrumb bc-1">
									<li>
							<a href="javascript:;"><i class="fa-home"></i>Home</a>
						</li>
							<li class="active">
						
										<strong>Manage User</strong>
								</li>
							<li class="active">
						
										<strong>Add User</strong>
								</li>
								</ol>
								
				</div>
				<!-- breadcrumbs ends -->	
			</div>
			<!-- page title closed -->
			<!-- body container  starts -->
			<div class="row">
			<?php  if($this->session->flashdata('category_error')) { ?>
								<div class="form-group">
									<div class="alert alert-danger">
			
									<strong><?=$this->session->flashdata('message')?></strong> 
									</div>
									</div>
							<?php }?>
					
					<?php  if($this->session->flashdata('message_type')) { ?>
								<div class="form-group">
									<div class="alert alert-danger">
			
									<strong><?=$this->session->flashdata('message')?></strong> 
									</div>
									</div>
							<?php }?>
					<?php  if($this->session->flashdata('category_success')) {  ?>
									<div class="form-group">
										<div class="alert alert-success">
										<a href="javascript:;" class="goto-register"><strong><?=$this->session->flashdata('message')?></strong></a>
	
										</div>
										</div>
								<?php }?> 
				<div class="col-sm-12">
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Manage User</h3>
								
						</div>
						
						<div class="panel-body">
							<form role="form" class="form-horizontal" method="post" action="<?=base_url();?>role/user_add">
									<div class="form-group">
									<select class="selectboxit " id="" name="organization_name">
										<option></option>
										<optgroup label="Organizations">
										<?php foreach($list_organization as $list){?>
											<option value="<?php echo $list->organization_id?>"><?php echo $list->organization_name; ?></option>
										<?php } ?>
										</optgroup>
									</select>
									</div> 
									<div class="form-group">
										<label class="col-sm-2 control-label" for="email">Email</label>
										
										<div class="col-sm-10">
											<input type="text" class="form-control" name="usermailid" id="email" placeholder="Email"  >
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="email">Role</label>
										
										<div class="col-sm-10">
											<select name="role" class="selectboxit">
										<optgroup label="Role">
											<?php  foreach($role_list as $lists){ ?>
													<option value="<?=$lists->role_id?>" ><?=$lists->role_id; ?></option>
												<?php } ?>
										</optgroup>
									</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label" for="password">Password</label>
										
										<div class="col-sm-10">
											<input type="text" class="form-control" name="password" id="password" placeholder="password"  >
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