<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_management extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->data[]='';
		$this->data['url']=base_url();
		$this->data['base_url']=base_url();
		$this->load->model('user_management_model');
	}
	
	function clone_db()
	{
		$json_data=$_GET['data'];
		$var=json_decode($json_data);
		$database_name=$var->db_name;
		$this->session->set_userdata('db_name',$database_name);
		$this->session->userdata('db_name');
		$json_data=$_GET['data'];	
		$set_user=$this->data['set_user']=$this->user_management_model->clone_db($database_name);
		redirect('user_management/set_user?data='.$json_data);
		//return true;
	}
	
	function set_user($json_data=false)
	{
		$json_data=$_GET['data'];
		$var=json_decode($json_data);
		$data=array(
					'Username'=>$var->Username,
					'Password'=>$var->Password,
					'role_id'=>'admin'
				   );
		$status=$this->user_management_model->set_user($data);
		if($status)
		{
			
			$this->session->set_flashdata('category_success', 'success message');        
			$this->session->set_flashdata('message', $this->config->item("user").' Organization Add for Application successfully');
			redirect('http://junctionerp.com/manage/login/application_login');
		}
		else 
		{
			redirect('http://localhost/manage_application/login/application_login');
		}
	}
}