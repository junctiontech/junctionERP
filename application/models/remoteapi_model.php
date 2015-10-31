<?php
/* Model for login and sign up   */

class Remoteapi_model extends CI_Model 
{
	//variable initialize
    var $title   = '';
    var $content = '';
    var $date    = '';
	
      function __construct()
      {
        // Call the Model constructor
        parent::__construct();
		
		//Load database connection
		$this->load->database();
      }
    
    /* function for login check email id ragisterd or not   */
   function locationUpdate($data=false)
   {
   		//$this->load->database('default',TRUE);
   		print_r($data);die;
   		$CONNECTION=mysqli_connect("localhost",'root','bitnami','hr');
   		if($CONNECTION)
   		{
	  	 	$imei=$data->employeeIMEI;
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
   }
}