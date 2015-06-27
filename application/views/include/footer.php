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
				        var newIn = '<input autocomplete="off" class="input form-control" id="field' + next + '" name="department_name[]" type="text">';
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
				<script type="text/javascript">
				$(document).on('click', '#close-preview', function(){ 
				    $('.image-preview').popover('hide');
				    // Hover befor close the preview
				    $('.image-preview').hover(
				        function () {
				           $('.image-preview').popover('show');
				        }, 
				         function () {
				           $('.image-preview').popover('hide');
				        }
				    );    
				});

				$(function() {
				    // Create the close button
				    var closebtn = $('<button/>', {
				        type:"button",
				        text: 'x',
				        id: 'close-preview',
				        style: 'font-size: initial;',
				    });
				    closebtn.attr("class","close pull-right");
				    // Set the popover default content
				    $('.image-preview').popover({
				        trigger:'manual',
				        html:true,
				        title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
				        content: "There's no image",
				        placement:'bottom'
				    });
				    // Clear event
				    $('.image-preview-clear').click(function(){
				        $('.image-preview').attr("data-content","").popover('hide');
				        $('.image-preview-filename').val("");
				        $('.image-preview-clear').hide();
				        $('.image-preview-input input:file').val("");
				        $(".image-preview-input-title").text("Browse"); 
				    }); 
				    // Create the preview image
				    $(".image-preview-input input:file").change(function (){     
				        var img = $('<img/>', {
				            id: 'dynamic',
				            width:250,
				            height:200
				        });      
				        var file = this.files[0];
				        var reader = new FileReader();
				        // Set preview image into the popover data-content
				        reader.onload = function (e) {
				            $(".image-preview-input-title").text("Change");
				            $(".image-preview-clear").show();
				            $(".image-preview-filename").val(file.name);            
				            img.attr('src', e.target.result);
				            $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
				        }        
				        reader.readAsDataURL(file);
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

	<!-- JavaScripts initializations and stuff -->
	<script src="<?php echo base_url(); ?>assets/js/xenon-custom.js"></script>
			<!-- Imported scripts on this page -->
	<script src="<?php echo base_url(); ?>assets/js/datatables/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/datatables/dataTables.bootstrap.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/datatables/yadcf/jquery.dataTables.yadcf.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/datatables/tabletools/dataTables.tableTools.min.js"></script>
	
	<!-- select 2 Scripts -->
	<script src="<?php echo base_url(); ?>assets/js/select2/select2.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery-ui/jquery-ui.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/selectboxit/jquery.selectBoxIt.min.js"></script>
	<!-- select 2 Scripts -->
	
	<!-- Imported scripts on this page -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-validate/jquery.validate.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/inputmask/jquery.inputmask.bundle.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/formwizard/jquery.bootstrap.wizard.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/datepicker/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/multiselect/js/jquery.multi-select.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/selectboxit/jquery.selectBoxIt.min.js"></script>
	<!-- form wizardScripts -->


</body>
</html>
