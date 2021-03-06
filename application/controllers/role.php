<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* controller for role management and user management */
/* junction software pvt ltd  */
class Role extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->data[]="";
		$this->data['user_data']="";
		$this->data['url'] = base_url();
		$this->load->model('login_model');
		$this->load->model('organization_model');
		$this->load->model('authority_model');
		$this->load->library('parser');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->data['base_url']=base_url();
		$this->load->library('session');
		$this->load->library('authority');	
		$this->load->helper('inflector');
	
	 }
	public function index()
	{
		$this->breadcrumb->clear();
		$this->breadcrumb->add_crumb('Home', base_url().'index.php/role');
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('role',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}

			/* Function for log out */
	function logout($info=false)
	{
		$url=$this->session->userdata('url');
		$this->data['user_data']=$this->session->userdata('user_data');
		$userdata=$this->session->userdata('user_data');
		$unset_userdata=$this->session->unset_userdata($userdata);
		$this->session->sess_destroy();
		redirect($url);
	}
	
			/* Function for account settings view */
	function acc_setting($info=false)
	{ 
		Authority::is_logged_in();
		if(Authority::checkAuthority('acc_setting')==true)
	 	{
	 		redirect('home');
	 	}
		//$user_data=$user_session_data = $this->session->userdata('user_data');
		//$this->data['user_data']=$this->session->userdata('user_data');
		//$userdata=$this->session->userdata('user_data');
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/left_menu',$this->data);
		$this->load->view('acc_setting',$this->data);
		$this->parser->parse('include/footer',$this->data);
		
	}
	
			/* Function for change password */
	function change_pass($info=false)
	{
			Authority::is_logged_in();
			if(Authority::checkAuthority('change_pass')==true)
				{
					redirect('home');
				}
			$user_data=$user_session_data = $this->session->userdata('user_data');
			$check=array(
				'password'=>$this->input->post('old_password')	
						);
			$check=$this->data['check']=$this->login_model->check_pwd($check,'user');
			if($check)
				 {
					$data = array(
						'password' => $this->input->post('password')
						);
						$filter=array(
						'user_id' => $user_data['user_id']
						);
						$this->login_model->change($filter,$data);
						$this->session->set_flashdata('category_success', 'success');        
						$this->session->set_flashdata('message', $this->config->item("user").'Password updated successfully');
						redirect('home');
				 }
			else {
					$this->session->set_flashdata('category_error', 'success');
					$this->session->set_flashdata('message', $this->config->item("user").'Old Password Does Not Match');
					redirect('role/acc_setting');
				 }
				
	}
	
			/* function for user role view */
	function user_role()
	{	
				Authority::is_logged_in();
				Authority::checkAuthority('user_role');
		$userdata = $this->session->userdata('user_data');
		$organization=$userdata['organization_id'];
		$su= $userdata['role_id'];
		$role_list=$this->data['role_list']=$this->authority_model->role_list();
		if($su!=='superuser')
		{
			$verify_list=$this->data['verify_list']=$this->authority_model->verify_list($organization);
		}
		$su_verify_list=$this->data['su_verify_list']=$this->authority_model->su_verify_list();
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/left_menu',$this->data);
		$this->load->view('user_role',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	
		/* Function for role assign in user management view */
	function role_assign($info=false)
	{	
		Authority::is_logged_in();
		if(Authority::checkAuthority('role_assign')==true)
	 	{
	 		redirect('role/user_role');
	 	}
		$name= $this->input->post('role');
		if($name!=='')
		{
			$data=array('role_id'=>$name);
		}
		$role_assign=$this->data['role_assign']=$this->authority_model->role_assign($data,$info);
		$this->session->set_flashdata('message_type', 'success');
		$this->session->set_flashdata('message', $this->config->item("user").' Role Assign Successfully');
		redirect('role/user_role');
	}
	
		/*function for delete user from user_role view*/
	function delete_user($user=false)
	{
		Authority::is_logged_in();
		if(Authority::checkAuthority('delete_user')==true)
	 	{
	 		redirect('role/user_role');
	 	}
		if($user){
					  
						$filter = array('user_id'=>$user);
						$this->authority_model->delete_user($filter,'user');
						$this->session->set_flashdata('message_type', 'success');        
                        $this->session->set_flashdata('message', $this->config->item("user").' Delete Successfully');
						redirect('role/user_role');		
						}
	}	
	
			/* function for blocked user */
	function blocked_user($user=false)
	{	
		Authority::is_logged_in();
		if(Authority::checkAuthority('blocked_user')==true)
	 	{
	 		redirect('role/user_role');
	 	}
		if($user)
		{
			$data = array('role_id'=>'blocked');
		}
		$this->authority_model->blocked_user($data,$user);
		$this->session->set_flashdata('message_type', 'success');
		$this->session->set_flashdata('message',$this->config->item('user').'User Blocked Sucessfully');
		redirect('role/user_role');
	}
	
		/* Function for role management view */
	function role_management($info=false)
	{
				Authority::is_logged_in();
				Authority::checkAuthority('role_management');
		$list_permsn =$this->data['list_permsn']=$this->authority_model->list_permsn();
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/left_menu',$this->data);
		$this->load->view('role_management',$this->data);
		$this->parser->parse('include/footer',$this->data);
		
	}

		/* function for role permission */
	function role_permission($info=false)
	{	
			Authority::is_logged_in();
			if(Authority::checkAuthority('role_permission')==true)
				{
					redirect('role/role_management');
				}
			$functions_list=$this->data['functions_list']=$this->authority_model->functions_list();
			$permissions=$this->data['permissions']=$this->authority_model->permissions($info);
			$this->parser->parse('include/header',$this->data);
			$this->parser->parse('include/left_menu',$this->data);
			$this->load->view('role_permission',$this->data);
			$this->parser->parse('include/footer',$this->data);
		
	}
	
		/*function for update role permissions*/
		function update_role_permission($info1)
		{	
			Authority::is_logged_in();
			if(Authority::checkAuthority('update_role_permission')==true)
				{
					redirect('role/role_management');
				}
			$this->input->post('role');
			$filter = array('role_id'=>$info1);
			$data=$this->input->post();
			$value='';
			 if($this->input->post('role_permsn')==1)
			{	
				for($i=0;$i<=count($data['function'])-1; $i++)
				{
					$value .= "('".$data['role']."','".$data['function'][$i]."','".$data['read'][$i]."','".$data['execute'][$i]."')".",";
				}
				if($this->authority_model->update_role_permission(rtrim($value,","),$filter))
				{
					
					$this->session->set_flashdata('category_success', 'success message	');
					$this->session->set_flashdata('message', $this->config->item("user").' Role updated successfully');
					redirect("role/role_management");
					
				}
				else
				{
					echo "Error while Editing SubItem";
				}
			}
		}
		
		/*End function for updte role permission*/
	function manage_users($info=false)
	{
		Authority::is_logged_in();
		if(Authority::checkAuthority('update_role_permission')==true)
				{
					redirect('role/user_role');
				}
		$list_organization = $this->data['list_organization'] = $this->organization_model->list_organization();
		$role_list=$this->data['role_list']=$this->authority_model->role_list();	
	    $this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/left_menu',$this->data);
		$this->load->view('manage_users',$this->data);
		$this->parser->parse('include/footer',$this->data);
		
	}
	
			/* Function for new user add in user management view  */
		function user_add($info=false)
		{	
			Authority::is_logged_in();
			if(Authority::checkAuthority('user_add')==true)
				{
					redirect('role/user_role');
				}
			$userdata = $this->session->userdata('user_data');
			$role=$userdata['role_id'];
			$first_name=$this->input->post('first_name');
			if($role=='superuser')
				{
					$info=$this->input->post('organization_name');
				}
			$email=$this->input->post('usermailid');
			if($email!=='')
			{
				$data=array(
								'organization_id'=>$info,
								'user_id'=>$this->input->post('user_id'),
								'usermailid'=>$this->input->post('usermailid'),
								'role_id'=>$this->input->post('role'),
								'password'=>$this->input->post('password')
							);
				$qry =   $this->authority_model->user_add('user',$data,$email);
				if($qry)
				   {
						$this->session->set_flashdata('category_error', 'Error message');  
						$this->session->set_flashdata('message',$this->config->item("user").'email id already exist'); 
						   redirect('role/manage_users');
					  
				   }
				else
				   {
						$this->session->set_flashdata('category_success', 'success message	');        
						$this->session->set_flashdata('message', $this->config->item("user").' User Inserted successfully');
							redirect('role/user_role');
				   }
					
			}
		
		}
		
			/* Function for add role view */
		function add_role($info=false)
	{
		Authority::is_logged_in();
		if(Authority::checkAuthority('add_role')==true)
				{
					redirect('role/role_management');
				}
		$list_function=	$this->data['list_function']=$this->authority_model->list_function();
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/left_menu',$this->data);
		$this->load->view('add_role',$this->data);
		$this->parser->parse('include/footer',$this->data);
			
	}
	
	/*function for delete role from role manager view*/
	function delete_role($role=false)
	{
		Authority::is_logged_in();
		if(Authority::checkAuthority('delete_user')==true)
		{
			redirect('role/user_role');
		}
		if($role){
			$this->authority_model->delete_role($role);
			$this->session->set_flashdata('message_type', 'success');
			$this->session->set_flashdata('message', $this->config->item("user").' Delete Successfully');
			redirect('role/role_management');
		}
	}
	
		/* Function for insert_role and his permission */
  function insert_role()
	{	
		Authority::is_logged_in();
		if(Authority::checkAuthority('insert_role')==true)
				{
					redirect('role/role_management');
				}
				//$data=
				$role=array(
								'role_id'=>underscore($this->input->post('role')),
								'role_description'=>$this->input->post('role_description')
							);
				//echo '<pre>';
				//print_r($role);
				//echo '</pre>';die;
		$data = $this->input->post();
		$value = "";
		  if($this->input->post('edit_costing')==1)
		   {	
				for($i=0;$i<=count($data['function'])-1; $i++)
				{
					$value .= "('".$data['role']."','".$data['function'][$i]."','".$data['read'][$i]."','".$data['execute'][$i]."')".",";
				}
				$this->authority_model->insert_role_table($role);
				if($this->authority_model->insert_role(rtrim($value,",")))
				{
					
					$this->session->set_flashdata('category_success', 'success message	');
					$this->session->set_flashdata('message', $this->config->item("user").' Role Inserted successfully');
					redirect("role/role_management");
				}
				else
				{
					echo "Error while Editing SubItem";
				}
			}
	}
	
}
