<!-- manage Designation page added by palak on 25th june -->
<!-- manage Designation body starts -->

		<div class="page-title">
				
				<div class="title-env">
					<h1 class="title">Manage Designation</h1>
					<p class="description">Manage Your Designation</p>
				</div>
				
					<div class="breadcrumb-env">
					
								<ol class="breadcrumb bc-1">
									<li>
							<a href="javascript:;"><i class="fa-home"></i>Home</a>
						</li>
							<li class="active">
						
										<strong>Manage Designation</strong>
								</li>
							
								</ol>
								
				</div>
					
			</div>
			<div class="row">
				<div class="col-sm-12">
					<?php  if($this->session->flashdata('category_success')) { ?>
								<div class="row-fluid">
									<div class="alert alert-success">
										<strong><?=$this->session->flashdata('message')?></strong> 
									</div>
								</div>
<?php } ?>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Manage Designation</h3>
							<div class="panel-options">
									<a href="<?php echo base_url(); ?>master/add_designation"><button class="btn btn-info btn-icon btn-sm">
									<i class="fa-plus"></i>
									<span>Add Designation</span>
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
					<div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk" data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">					
					<table id="example-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>S.no</th>
								<th>Organization</th>
								<th>Designation</th>
								<th>Action</th>
								
							</tr>
						</thead>
					
						<tfoot>
							<tr>
								<th>S.no</th>
								<th>Organization</th>
								<th>Designation</th>
								<th>Action</th>
							</tr>
						</tfoot>
					
						<tbody>
							<tr>
							<?php foreach( $list_designation as $list){ ?>
								<td>1</td>
								<td><?php echo $list->organization_id?></td>
								<td><?php echo $list->designation_name; ?></td>
								<td>
								<a href="<?php echo base_url(); ?>master/add_designation/<?=$list->designation_id;?>" class="btn btn-secondary btn-sm btn-icon icon-left">
											Edit
									</a>
									<a href="javascript:;" class="btn btn-danger btn-sm btn-icon icon-left">
											Delete
									</a>
								
								</td>
								
							</tr>
							<?php } ?>
						
					
						</tbody>
					</table>
					</div>			
							</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>