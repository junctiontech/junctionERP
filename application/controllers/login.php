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
		$this->parser->parse('include/footer',$this->data);
	}
				
				/* Function for login and create session */	
	function login_user($info=false)
	{		
		$email = $this->input->post('usermailid');
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
									'usermailid'=>$this->input->post('usermailid'),
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
		$a = $this->input->post('usermailid');
		$q = $this->login_model->insert_sign('ssr_t_users',$a);
	    if($q)
			{
				$this->session->set_flashdata('category_error', 'Error message');  
				$this->session->set_flashdata('message',$this->config->item("user").'Email id already exist'); 
				$this->session->$a;
				  redirect('login');
			}
		else
		   {
				$this->session->set_flashdata('category_success', 'success message	');        
				$this->session->set_flashdata('message', $this->config->item("user").' Data Inserted successfully');
				redirect('login/login_view');
		   }
		
	}
	
}
/* End of login controller */
