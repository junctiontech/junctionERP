<?php  
$userdata = $this->session->userdata('user_data');
 if($this->session->flashdata('category_error_block')) { ?>
								<div class="row-fluid">
									<div class="alert alert-danger">
										<strong><?=$this->session->flashdata('message')?></strong> 
									</div>
								</div>
<?php }
echo "Junction Erp ";
?> <h2>
<?php 
echo  "welcome   " .$userdata['role_id'] ;
?>
</h2>