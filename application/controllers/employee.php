<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee extends CI_Controller {

	
	  function __construct() {
		parent::__construct();
		$this->data[]="";
		$this->data['url'] = base_url();
		$this->load->model('employee_model');
		$this->load->library('parser');
		$this->load->library('session');
		$this->data['base_url']=base_url();
	 }
	

				/* manage Employee */
	public function manage_emp()
	{
		$list_employee = $this->data['list_employee'] = $this->employee_model->list_employee();
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/left_menu',$this->data);
		$this->load->view('manage_emp',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	
			/* function for create new employee */
public function insert_employee()
	{
		$first_name=$this->input->post('first_name');
		if($first_name!=='')
		{
			$data=array(
							'employee_id'=>$this->input->post('employee_id'),//org_id
							'organization_desc'=>$this->input->post('organization_desc'),
							'department_name'=>$this->input->post('department_name'),
							'designations_name'=>$this->input->post('designations_name'),
							'username'=>$this->input->post('username'),
							'password'=>$this->input->post('password'),
							'frquency'=>$this->input->post('frquency'),
							'joining_date'=>$this->input->post('joining_date'),
							'first_name'=>$this->input->post('first_name'),
							'last_name'=>$this->input->post('last_name'),
							'birthdate'=>$this->input->post('birthdate'),
							'gender'=>$this->input->post('gender'),
							'photo'=>$this->input->post('photo'),
							'maratial_status'=>$this->input->post('maratial_status'),
							'nationality'=>$this->input->post('nationality'),
							'father_name'=>$this->input->post('father_name'),
							'passport'=>$this->input->post('passport'),
							'present_address'=>$this->input->post('present_address'),
							'mobile'=>$this->input->post('mobile'),
							'email'=>$this->input->post('email'),
							'country'=>$this->input->post('country'),
							'state'=>$this->input->post('state'),
							'city'=>$this->input->post('city'),
							'zip'=>$this->input->post('zip'),
							'resume'=>$this->input->post('resume'),
							'offerletter'=>$this->input->post('offerletter'),
							'joiningletter'=>$this->input->post('joiningletter'),
							'idproof'=>$this->input->post('idproof'),
							'otherdoc'=>$this->input->post('otherdoc'),
							'bank_name'=>$this->input->post('bank_name'),
							'branch_name'=>$this->input->post('branch_name'),
							'acc_name'=>$this->input->post('acc_name'),
							'acc_no'=>$this->input->post('acc_no'),
						);
			$this->employee_model->insert_employee('employee',$data);
			$this->session->set_flashdata('category_success', 'success message	');        
			$this->session->set_flashdata('message', $this->config->item("user").' Employee Add successfully');
			redirect('employee/manage_emp');
		}
		
	}
	
					//Add employee
	public function add_emp()
	{
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/left_menu',$this->data);
		$this->load->view('add_emp',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	
	public function emp_award()
	{
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/left_menu',$this->data);
		$this->load->view('emp_award',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
