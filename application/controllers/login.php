<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Controller for login Functionality */
class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->data[]="";
		$this->data['user_data']="";
		$this->data['url'] = base_url();
		$this->load->model('login_model');
		$this->load->model('organization_model');
		$this->load->library('parser');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->data['base_url']=base_url();
		$this->load->library('session');
	}
	
	//signup
	public function index()
	{	
		$list_organization = $this->data['list_organization'] = $this->organization_model->list_organization();
		$this->parser->parse('include/header',$this->data);
		$this->load->view('signup',$this->data);//login page view
		$this->parser->parse('include/footer',$this->data);
	}
	
					/*login view*/
	public function login_view()
	{
		$list_organization = $this->data['list_organization'] = $this->organization_model->list_organization();
		$this->parser->parse('include/header',$this->data);
		$this->load->view('login',$this->data);//login page view
		//$this->parser->parse('include/footer',$this->data);
	}
				
				/* Function for login and create session */	
	function login_user($info=false)
	{		
		$email = $this->input->post('user_id');
		if($email)
		{	
			$orgnization = $this->input->post('organization_name');
				if($orgnization=='')
				{
					
						if('superuser'==$email && 'initial'==$this->input->post('password'))
						{
						
							if($email)
								{
									
												$user_data = array(
																	 'role_id' => $email,
																	 'user_id' => $email,
																	 'organization_id' =>'',
																	 'organization_name'=>''
																  );
												$this->session->set_userdata('user_data',$user_data);
												$user_session_data = $this->session->userdata('user_data');
												redirect('home');
											
									
								}
						}
						else
						{
							$this->session->set_flashdata('category_error', 'Error message');
							$this->session->set_flashdata('message',$this->config->item("user").'your user mailid and password wrong');
							redirect('login/login_view');
						}
						
				}
				elseif($orgnization!=='')
				{
							$orgnization=array(
									'organization_id'=>$this->input->post('organization_name')
											  );
							$data=array(
									'user_id'=>$this->input->post('user_id'),
									'password'=>$this->input->post('password'),
									'organization_id'=>$this->input->post('organization_name')
							);
							$list_organization =$this->login_model->list_organization('organization',$orgnization);
							$row=$this->login_model->login_check('users',$data);
							if($row->role_id=='blocked')
						{
							$this->session->set_flashdata('category_error','error');
							$this->session->set_flashdata('message',$this->config->item("user").'Your id have a blocked please contact administrator');
							redirect('login/login_view');
						}
							if($row){
								$user_data = array(
										'usermailid' => $row->usermailid,
										'user_id' => $row->user_id,
										'role_id'=>$row->role_id,
										'organization_id'=>$list_organization->organization_id,
										'organization_name'=>$list_organization->organization_name
												   );
								$this->session->set_userdata('user_data',$user_data);
								$user_session_data = $this->session->userdata('user_data');
								redirect('home');
							}
							else
							 {
							 	$this->session->set_flashdata('category_error', 'Error message');
							 	$this->session->set_flashdata('message',$this->config->item("user").'your user mailid and password wrong');
							 	redirect('login/login_view');
							 }
						}
		}
				else
						{	
							$this->session->set_flashdata('category_error', 'Error message');
							$this->session->set_flashdata('message',$this->config->item("user").'Please select your organization');
							  redirect('login/login_view');
						}
			
	
		
	}
	
		
					/* Function for sign up for new user */
	function sign_up()
	{
		$organization_name=$this->input->post('organization_name');
		if($organization_name)
		{
			$organization=$this->data['organization']=$this->login_model->insert_organization($organization_name);
			$organization_id=$this->data['organization_id']=$this->login_model->organization_id($organization_name);
			$org_id=$organization_id->organization_id;
			$data=array(
						'organization_id'=>$org_id,
						'user_id'=>$this->input->post('username'),
						'usermailid'=>$this->input->post('usermailid'),
						'password'=>$this->input->post('password'),
					   );
			$organization=$this->data['organization']=$this->login_model->insert_users($data,'users');
			$this->session->set_flashdata('category_success', 'success message	');
			$this->session->set_flashdata('message', $this->config->item("user").' Please login with your organization');
			redirect('login/login_view');
		}
		
	}
	
	
	function check_org()
	{
		$val= $this->input->post('val');
		$check_org=$this->data['check_org']=$this->login_model->check_org($val);
		if($check_org)
		{
			?>
				<span class="alert alert-danger"> Organization Is Already Exist </span>
			<?php 
		}
	}
	
	
	function org_list()
	{
		$val=$this->input->post('val');
		?>
	
   <?php// $c='24.5730313'; ?>
 
    <body>
    <div id="map-canvas"></div>
  </body>
		<?php
	}
	
}
/* End of login controller */
