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
			//$sql="select * from project_image where image='".$_FILES['image_name']['name']."'";
			//$query=mysqli_query($CONNECTION,$query);
			$query="insert into project_image(project_id,task_id,image) values ('".$_POST['project_id']."','".$_POST['task_id']."','".$_FILES['image_name']['name']."')";
			$sql=mysqli_query($CONNECTION,$query);
			if($sql) 
			{
				$image=move_uploaded_file($_FILES['image_name']['tmp_name'],"project_image/".$_FILES['image_name']['name']); 
				echo 'Image Successfully Insert';
			}
			else
			{
				echo 'Image Not Insert';
			}
			/*echo 'hii';
			$img="select image from project_image";
			$sql=mysqli_query($CONNECTION,$img);
			//$count=mysqli_fetch_rows($sql);
			while($imga=mysqli_fetch_assoc($sql))
			{ 
				?> 
					<img src="project_image/<?=$imga['image'];?>" style="max-width: 120px; max-height: 120px; line-height: 20px;" />
				<?php
			}*/
		}
		else
		{
			echo 'Server Error Connection Not Found';
		}
		
	}

	/* Function for Update Task For Androide Application */
	function project_update()   
	{ 
		/*$data=json_decode($_POST['projectData']); 
		$ProjectId=$data->project_id;
		$TaskList=$data->task_list;print_r($TaskList[0]->expense_list);die;
		foreach($TaskList[0]->expense_list as $value)
		{
			$insert="insert into expenser(task_id,date,amount,type,description) values ('".$TaskList->task_id."','".now()."','".$value->amount."','".$value->type."','".$value->description."')";
		}
		//print_r($data->task_list);
		die;*/
		$CONNECTION=mysqli_connect("localhost",'root','bitnami','junction_erp');
		if($CONNECTION)
		{
			$data=json_decode($_POST['projectData']);
			$ProjectId=$data->project_id;
			$TaskList=$data->task_list; //echo count($TaskList[0]->expense_list);die; echo $TaskList[1]->task_id;die; //$task_id=1;print_r($TaskList[1]->expense_list);die;
				if(count($TaskList[0]->expense_list)>0)
				{
					$i=0;
					$taskid= $TaskList[$i]->task_id;
					foreach ($TaskList[0]->expense_list as $value)
					{		//echo $value->amount;
						$insert="insert into expenser(project_id,task_id,date,amount,type,description) values ('".$ProjectId."','".$taskid."','".$task_id."','".$value->amount."','".$value->type."','".$value->description."')";
						$query=mysqli_query($CONNECTION,$insert);
					} 
					if($query)
					{
						echo ' Expense Insert Successfully ';
					}
					else
					{
						echo ' Expense Does Not Insert Successfully ';
					}
					$i++;
				}
				
					if(count($TaskList[0]->receipt_list)>0)
				{	$i=0;
					$taskid=$TaskList[$i]->task_id;
					foreach ($TaskList[0]->receipt_list as $value)
					{		//echo $value->amount;
						$insert="insert into reciepts(project_id,task_id,material,quantity,rate,unit) values ('".$ProjectId."','".$taskid."','".$value->material."','".$value->quantity."','".$value->rate."','".$value->unit."')";
						$query=mysqli_query($CONNECTION,$insert);
					}
					if($query)
					{
						echo ' Receipt Insert Successfully';
					}
					else
					{
						echo 'Receipt Does Not Insert Successfully';
					}
				}
		}
	}
	
	
	
	
}
/* End of login controller */