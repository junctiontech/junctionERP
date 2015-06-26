<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	
	  function __construct() {
		parent::__construct();
		$this->data[]="";
		$this->data['url'] = base_url();
		
		$this->load->model('mhome');
		$this->load->model('department_model');
		$this->load->library('parser');
		$this->load->library('session');
		$this->data['base_url']=base_url();
	 }
	

	//add organization 
	public function add_organization($info=false)
	{   
		$select_organization = $this->data['select_organization'] = $this->mhome->select_organization($info);
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/left_menu',$this->data);
		$this->load->view('add_organization',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	
			/*	function for Insert new orgnization */
	public function insert_organization()
	{
		$org_name=$this->input->post('orgnization_name');
		if($org_name!=='')
		{
			$data=array(
							'orgnization_name'=>$this->input->post('orgnization_name'),
							'orgnization_desc'=>$this->input->post('orgnization_desc')
						);
			$this->mhome->insert_organization('orgnization',$data);
			$this->session->set_flashdata('category_success', 'success message	');        
			$this->session->set_flashdata('message', $this->config->item("user").' orgnization Inserted successfully');
			redirect('home/manage_organization');
		}
		
	}
	
				/* function for edit orgnization */
	public function update_organization($info)
	{
		$data=array(
						'orgnization_name'=>$this->input->post('orgnization_name'),
						'orgnization_desc'=>$this->input->post('orgnization_desc')
					);
		$update_organization = $this->data['update_organization'] = $this->mhome->update_organization($info,$data);
		$this->session->set_flashdata('category_success','success mesage');
		$this->session->set_flashdata('message', $this->config->item("user").' orgnization Edit successfully');
		redirect('home/manage_organization');
	}
	//manage organization
	public function manage_organization()
	{   
		$list_organization = $this->data['list_organization'] = $this->mhome->list_organization();
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/left_menu',$this->data);
		$this->load->view('manage_organization',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
		//add departments
	public function add_departments()
	{   
		//$select_department = $this->data['select_department'] = $this->department_model->select_department($info);
		$list_organization = $this->data['list_organization'] = $this->mhome->list_organization();
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/left_menu',$this->data);
		$this->load->view('add_departments',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	
			/* function for insert department */
	public function insert_department()
	{
		$org_name=$this->input->post('orgnization_name');
		$dep=$this->input->post('department_name');
		$implode = (implode(",",$dep));
		if($dep_name!=='')
		{
			$data=array(
					'orgnization_id'=>$this->input->post('orgnization_name'),
					'department_name'=>$implode
			);
			$this->department_model->insert_department('department',$data);
			$this->session->set_flashdata('category_success', 'success message	');
			$this->session->set_flashdata('message', $this->config->item("user").' Department Inserted successfully');
			redirect('home/manage_departments');
		}
	
	}
	
	//manage departments
	public function manage_departments()
	{ 
		$list_department= $this->data['list_department'] = $this->department_model->list_department();
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/left_menu',$this->data);
		$this->load->view('manage_departments',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	//manage Employee
	public function manage_emp()
	{
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/left_menu',$this->data);
		$this->load->view('manage_emp',$this->data);
		$this->parser->parse('include/footer',$this->data);
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
	public function add_designation()
	{
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/left_menu',$this->data);
		$this->load->view('add_designation',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	public function manage_designation()
	{
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/left_menu',$this->data);
		$this->load->view('manage_designation',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
