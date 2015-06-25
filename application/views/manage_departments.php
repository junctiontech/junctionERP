<!-- manage departments page added by palak on 21st june -->
<!-- manage departments body starts -->

		<div class="page-title">
				
				<div class="title-env">
					<h1 class="title">Manage Departments</h1>
					<p class="description">Manage Your Departments</p>
				</div>
				
					<div class="breadcrumb-env">
					
								<ol class="breadcrumb bc-1">
									<li>
							<a href="javascript:;"><i class="fa-home"></i>Home</a>
						</li>
							<li class="active">
						
										<strong>Manage Departments</strong>
								</li>
							
								</ol>
								
				</div>
					
			</div>
			<div class="row">
				<div class="col-sm-12">
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Manage Departments</h3>
							<div class="panel-options">
									<a href="<?php echo base_url(); ?>home/add_departments"><button class="btn btn-info btn-icon btn-sm">
									<i class="fa-plus"></i>
									<span>Add Departments</span>
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
					<div class="row">
								<div class="col-sm-12">
									
																
									<ul class="list-unstyled line-height-default">
										<li>
											<b>Organization -</b>
											<span >Junction </span>
										</li>
										
									
									</ul>
									<span>
									<a href="<?php echo base_url(); ?>home/add_departments" class="btn btn-secondary btn-sm btn-icon icon-left">
											Edit
									</a>
									<a href="javascript:;" class="btn btn-danger btn-sm btn-icon icon-left">
											Delete
									</a>
								</span>
								</div>
							
								
							</div>
						<div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk" data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">
					<table id="example-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>S.no</th>
								<th>Departments</th>
								<th>Action</th>
								
							</tr>
						</thead>
					
						<tfoot>
							<tr>
								<th>S.no</th>
								<th>Departments</th>
								<th>Action</th>
							</tr>
						</tfoot>
					
						<tbody>
							<tr>
								<td>1</td>
								<td>WEB</td>
								<td>
								<a href="<?php echo base_url(); ?>home/add_departments" class="btn btn-secondary btn-sm btn-icon icon-left">
											Edit
									</a>
									<a href="javascript:;" class="btn btn-danger btn-sm btn-icon icon-left">
											Delete
									</a>
								
								</td>
								
							</tr>
							<tr>
								<td>2</td>
								<td>Accounts</td>
								<td>
								<a href="<?php echo base_url(); ?>home/add_departments" class="btn btn-secondary btn-sm btn-icon icon-left">
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
	</div>