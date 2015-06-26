<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Controller for login Functionality */
class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->data[]="";
		$this->data['user_data']="";
		$this->data['url'] = base_url();
		$this->load->model('login_model');
		$this->load->model('mhome');
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
		$list_organization = $this->data['list_organization'] = $this->mhome->list_organization();
		$this->parser->parse('include/header',$this->data);
		$this->load->view('login',$this->data);//login page view
		$this->parser->parse('include/footer',$this->data);
	}
				
				/* Function for login and create session */	
	function login_user($info=false)
	{	
			$email=$this->input->post('usermailid');
			if($email)
			{
			$orgnization=array(
							'orgnization_id'=>$this->input->post('orgnization_name')
							  );
			$data=array(
						'usermailid'=>$this->input->post('usermailid'),
						'password'=>$this->input->post('password'),
						);		
			$list_organization =$this->login_model->list_organization('orgnization',$orgnization);
			$row=$this->login_model->login_check('users',$data);
			if($row){ 
						$user_data = array(
											 'usermailid' => $row->usermailid,
											 'user_id' => $row->user_id,
											 'user_name'=>$row->user_name,
											'orgnization_id'=>$list_organization->orgnization_id,
											'orgnization_name'=>$list_organization->orgnization_name
										  );
						$this->session->set_userdata('user_data',$user_data);
						$user_session_data = $this->session->userdata('user_data');
						redirect('home/manage_organization');
					}
			}
			
			else{	
				$this->session->set_flashdata('category_error', 'Error message');
				$this->session->set_flashdata('message',$this->config->item("user").'your user mailid and password wrong');
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