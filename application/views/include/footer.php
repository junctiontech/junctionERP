	<footer class="main-footer sticky footer-type-1">
				
				<div class="footer-inner">
				
					<!-- Add your copyright text here -->
					<div class="footer-text">
						&copy; 2015 
						<strong>Junction</strong> 
						HRMS
					</div>
					
					
					<!-- Go to Top Link, just add rel="go-top" to any link to add this functionality -->
					<div class="go-up">
					
						<a href="#" rel="go-top">
							<i class="fa-angle-up"></i>
						</a>
						
					</div>
					
				</div>
				
			</footer>
			
				<script type="text/javascript">
			
				$(document).ready(function(){
				    var next = 1;
				    $(".add-more").click(function(e){
				        e.preventDefault();
				        var addto = "#field" + next;
				        var addRemove = "#field" + (next);
				        next = next + 1;
				        var newIn = '<input autocomplete="off" class="input form-control" id="field' + next + '" name="field' + next + '" type="text">';
				        var newInput = $(newIn);
				        var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >-</button></div><div id="field">';
				        var removeButton = $(removeBtn);
				        $(addto).after(newInput);
				        $(addRemove).after(removeButton);
				        $("#field" + next).attr('data-source',$(addto).attr('data-source'));
				        $("#count").val(next);  
				        
				            $('.remove-me').click(function(e){
				                e.preventDefault();
				                var fieldNum = this.id.charAt(this.id.length-1);
				                var fieldID = "#field" + fieldNum;
				                $(this).remove();
				                $(fieldID).remove();
				            });
				    });
				    
			
				    
				});
				</script>	

<!-- Bottom Scripts -->
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/TweenMax.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/resizeable.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/joinable.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/xenon-api.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/xenon-toggles.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery-validate/jquery.validate.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/toastr/toastr.min.js"></script>
<!-- Bottom Scripts -->

	
	<!-- select 2 Scripts -->
	<script src="<?php echo base_url(); ?>assets/js/select2/select2.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery-ui/jquery-ui.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/selectboxit/jquery.selectBoxIt.min.js"></script>
	<!-- form wizardScripts -->
	<!-- Imported scripts on this page -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-validate/jquery.validate.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/inputmask/jquery.inputmask.bundle.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/formwizard/jquery.bootstrap.wizard.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/datepicker/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/multiselect/js/jquery.multi-select.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/selectboxit/jquery.selectBoxIt.min.js"></script>
	<!-- form wizardScripts -->
	
	<!-- JavaScripts initializations and stuff -->
	<script src="<?php echo base_url(); ?>assets/js/xenon-custom.js"></script>

</body>
</html>
