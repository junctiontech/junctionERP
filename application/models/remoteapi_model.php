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
   		$this->load->database('default',TRUE);
  	 	$imei=$data->employeeIMEI;
   		foreach ($data->employeeLocationList as $list)
		   	{
		   		$query = $this->db->query("INSERT INTO tracking VALUES('".$imei."','".$list->employeeLocationDate."','".$list->employeeLocationTime."','".$list->employeeLocationLatitude."','".$list->employeeLocationLongitude."','".$list->employeeLocationProviderName."','".$list->employeeLocationBatteryLevel."')");
		   	}
		return $query->Result();
   }
}