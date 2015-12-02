<?php 

/* Controller for login Functionality */
class Remoteapi{
	
	function locationUpdate()
	{
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
			echo 'Server Error Connection Not Found';
		}
	}	
	/* Function for Image Update For Androide Application */
	function project_image_update()
	{
		$CONNECTION=mysqli_connect("localhost",'root','bitnami','junction_erp');
		if($CONNECTION)
		{
			//$data=json_decode($image);
			//echo $_POST['project_id']; echo $_FILES['image_name']['name']; echo $_POST['task_id'];die;
				
				$query="insert into project_image(project_id,task_id,image) values ('".$_POST['project_id']."','".$_POST['task_id']."','".$_FILES['image_name']['name']."')";
				$sql=mysqli_query($CONNECTION,$query);
				if($sql) 
				{
					$img=$_FILES['image_name']['name'];
					$valueImage=str_replace(',','_',$img);
					$image=move_uploaded_file($_FILES['image_name']['tmp_name'],"project_image/".$valueImage); 
					echo 'Image Successfully Insert';
				}
				
				else
				{
					echo 'Image Not Insert';
				}
				echo 'hii';
				$img="select image from project_image";
				$sql=mysqli_query($CONNECTION,$img);
				//$count=mysqli_fetch_rows($sql);
				while($imga=mysqli_fetch_assoc($sql))
				{ print_r($count);die;
					?>
						<img src="project_image/<?php echo $imga[image];?>"/>
					<?php
				}
		}
		else
		{
			echo 'Server Error Connection Not Found';
		}
		
	}

	/* Function for Update Task For Androide Application */
	function project_update()
	{
		$data=json_decode($_POST['json']);
		$CONNECTION=mysqli_connect("localhost",'root','bitnami',$data->db_name);
		if($CONNECTION)
		{
			foreach ($data as $value)
			{
				$insert="insert into expenser(task_id,date,amount,type,description) values ('".$value->task_id."','".$value->date."','".$value->amount."','".$value->type."','".$value->description."')";
				$query=mysqli_query($CONNECTION,$insert);
			}
		}
	}
	
	
	
	
}
/* End of login controller */