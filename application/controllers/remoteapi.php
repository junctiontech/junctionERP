<?php 

/* Controller for login Functionality */
class Remoteapi{
	
	function locationUpdate(){
		$CONNECTION=mysqli_connect("localhost",'root','bitnami','hr');
		if($CONNECTION)
		{
			$data=json_decode($_POST['employeeData']);
			$imei=$data->employeeIMEI;//echo $imei;
			foreach ($data->employeeLocationList as $list)
				{
					$result = "INSERT INTO tracking VALUES('".$imei."','".$list->employeeLocationDate."','".$list->employeeLocationTime."','".$list->employeeLocationLatitude."','".$list->employeeLocationLongitude."','".$list->employeeLocationProviderName."','".$list->employeeLocationBatteryLevel."')";
					$sql=mysqli_query($CONNECTION,$result);
				}
				if($sql)
				{
					/*$data=array(
							
							'code'=>'200',
							'result'=>'true',
								);
					print_r($data);die;*/
					 echo 'true'; die;
				}
				else 
				{
					/*$data=array(
					
							'code'=>'400',
							'result'=>'false',
					);*/
					echo 'false'; die;
				}
		}
		else
		{
			echo 'connection error';
		}
	}	
	/* Function for Image Update For Androide Application */
	function image_project_update()
	{
		$CONNECTION=mysqli_connect("localhost",'root','bitnami','junction_erp');
		if($CONNECTION)
		{
			$data=json_decode($json);
			foreach($data as $value)
			{
				$query="insert into project_image(project_id,task_id,image) values ('".$value->project_id."','".$value->task_id."','".$value->image."')";
				$sql=mysqli_query($CONNECTION,$query);
				if($sql)
				{
					$image=move_uploaded_file($_FILES['image']['tmp_name'], "project_image".$value->image);
					echo 'Image Successfully Insert';
				}
				else
				{
					echo 'Image Not Insert';
				}
			}
		}
		else
		{
			echo 'Server Error Connection Not Found';
		}
	}
	function task_update()
	{
		// task update body hear
	}
	
	
}
/* End of login controller */