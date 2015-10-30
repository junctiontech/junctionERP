<?php 

/* Controller for login Functionality */
class Remoteapi {
	
	function locationUpdate(){
		//print_r(json_decode($_POST['employeeData']));die;
		$CONNECTION=mysqli_connect("localhost",'root','bitnami','hr');
		if($CONNECTION)
		{
			$data=json_decode($_POST['employeeData']);
			$imei=$data->employeeIMEI;//echo $imei;
			//print_r($data->employeeLocationList);die;
			foreach ($data->employeeLocationList as $list)
				{
					$result = "INSERT INTO tracking VALUES('".$imei."','".$list->employeeLocationDate."','".$list->employeeLocationTime."','".$list->employeeLocationLatitude."','".$list->employeeLocationLongitude."','".$list->employeeLocationProviderName."','".$list->employeeLocationBatteryLevel."')";
					$sql=mysqli_query($CONNECTION,$result);
				}
				if($sql)
				{
					$data=array(
							
							'code'=>'200',
							'result'=>'true',
								);
					print_r($data);die;
				}
				else 
				{
					$data=array(
					
							'code'=>'400',
							'result'=>'false',
					);
					print_r($data);die;
				}
		}
		else
		{
			echo 'connection error';
		}
	}
}
/* End of login controller */