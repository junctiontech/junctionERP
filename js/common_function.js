function check_organization(val)
{
	$.ajax({
			type: 'POST',
			url :'login/check_org',
			data:{val:val},
		  })	
		 .done(function(msg){
			 //alert(msg);
			 $("#chk_org").html(msg);
			 return false;
		 }); 
	return false;
}

function org_list(val)
{
	//alert(val);
	$.ajax({
		type: 'POST',
		url: 'login/org_list',
		data:{val:val},
	})
	.done(function(msg){
		alert(msg);
		$("#map-canvas").html(msg);
	});
}