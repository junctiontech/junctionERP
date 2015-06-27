<!-- manage Employee page added by palak on 22nd june -->
<!-- manage Employee body starts -->

		<div class="page-title">
				
				<div class="title-env">
					<h1 class="title">Manage Employees</h1>
					<p class="description">Manage Your Employees</p>
				</div>
				
					<div class="breadcrumb-env">
					
								<ol class="breadcrumb bc-1">
									<li>
							<a href="javascript:;"><i class="fa-home"></i>Home</a>
						</li>
							<li class="active">
						
										<strong>Manage Employee</strong>
								</li>
							
								</ol>
								
				</div>
					
			</div>
			<div class="row">
				<div class="col-sm-12">
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Manage Employees</h3>
							<div class="panel-options">
									<a href="<?php echo base_url(); ?>employee/add_emp"><button class="btn btn-info btn-icon btn-sm">
									<i class="fa-plus"></i>
									<span>Add Employees</span>
								</button></a>
								
								</div>	
						</div>
							<div class="panel-body">
								
							<script type="text/javascript">
					jQuery(document).ready(function($)
					{
						$("#example-1").dataTable({
							aLengthMenu: [
								[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]
							]
						});
					});
					</script>
			
					<table id="example-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>Emp id </th>
								<th>Employee</th>
								<th>Dept > Designation</th>
								<th>Mobile</th>
								<th>View</th>
								<th>Action</th>
							</tr>
						</thead>
					
						<tfoot>
							<tr>
								<th>Emp id </th>
								<th>Employee</th>
								<th>Dept > Designation</th>
								<th>Mobile</th>
								<th>View</th>
								<th>Action</th>
								
							</tr>
						</tfoot>
					
						<tbody>
							<tr>
								<td>M00001</td>
								<td>Paul Ho</td>
								<td>PHP > Senior Developer</td>
								<td>07031964411</td>
								<td><a href="<?php echo base_url(); ?>employee/view_emp" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"><span class="fa fa-list-alt"></span></a></td>
								<td>
									<a href="<?php echo base_url(); ?>employee/add_emp" class="btn btn-secondary btn-sm btn-icon icon-left">
											Edit
									</a>
									<a href="javascript:;" class="btn btn-danger btn-sm btn-icon icon-left">
											Delete
									</a>
								</td>
							</tr>
					
						
					
						</tbody>
					</table>
								
							</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>