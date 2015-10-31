<?php 

/* Class for Rempte Api Functionality */
class Remoteapi extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->data[]="";
		$this->data['user_data']="";
		$this->data['url'] = base_url();
		$this->load->model('remoteapi_model');
		$this->load->helper('url');
		$this->data['base_url']=base_url();
		$this->load->library('session');
	}
	
	function locationUpdate(){
		//$this->load->library('session'); //if it's not autoloaded in your CI setup
		//$this->session->set_userdata('db_name','hr');
		//$this->session->userdata('db_name');
		$data=json_decode($_POST['employeeData']);
		if($data)
		{
			$result=$this->remoteapi_model->locationUpdate($data=false);
			if($result)
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
	/*
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
					print_r($data);die;
					 echo 'true'; die;
				}
				else 
				{
					/*$data=array(
					
							'code'=>'400',
							'result'=>'false',
					);
					echo 'false'; die;
				}
		}
		else
		{
			echo 'connection error';
		}
	} */
	
	function task_update()
	{
		// task update body hear
	}
	
	
}
/* End of login controller */