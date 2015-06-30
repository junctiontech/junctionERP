<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Master extends CI_Controller {

	
	  function __construct() {
		parent::__construct();
		$this->data[]="";
		$this->data['url'] = base_url();
		$this->load->model('designation_model');
		$this->load->model('organization_model');
		$this->load->model('department_model');
		$this->load->library('parser');
		$this->load->library('authority');
		$this->load->model('authority_model');
		$this->load->library('session');
		$this->data['base_url']=base_url();
	 }
	

					/* add organization */
	public function add_organization($info=false)
	{   
		$select_organization = $this->data['select_organization'] = $this->organization_model->select_organization($info);
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/left_menu',$this->data);
		$this->load->view('add_organization',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	
				/*	function for Insert new organization */
	public function insert_organization()
	{
		$org_name=$this->input->post('organization_name');
		if($org_name!=='')
		{
			$data=array(
							'organization_name'=>$this->input->post('organization_name'),
							'organization_desc'=>$this->input->post('organization_desc')
						);
			$this->organization_model->insert_organization('organization',$data);
			$this->session->set_flashdata('category_success', 'success message	');        
			$this->session->set_flashdata('message', $this->config->item("user").' Organization Add successfully');
			redirect('master/manage_organization');
		}
		
	}
	
				/* function for edit organization */
	public function update_organization($info)
	{
		$data=array(
						'orgnization_name'=>$this->input->post('orgnization_name'),
						'orgnization_desc'=>$this->input->post('orgnization_desc')
					);
		$update_organization = $this->data['update_organization'] = $this->organization_model->update_organization($info,$data);
		$this->session->set_flashdata('category_success','success mesage');
		$this->session->set_flashdata('message', $this->config->item("user").' Organization Edit successfully');
		redirect('master/manage_organization');
	}
	
	
							/* manage organization */
	public function manage_organization()
	{   
		Authority::checkAuthority('manage_organization');
		$list_organization = $this->data['list_organization'] = $this->organization_model->list_organization();
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/left_menu',$this->data);
		$this->load->view('manage_organization',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	
	
							/* add departments */
	public function add_departments()
	{   
		//$select_department = $this->data['select_department'] = $this->department_model->select_department($info);
		$list_organization = $this->data['list_organization'] = $this->master_model->list_organization();
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
			redirect('master/manage_departments');
		}
	
	}
	
						/*  manage departments */
	public function manage_departments()
	{ 
		$list_department= $this->data['list_department'] = $this->department_model->list_department();
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/left_menu',$this->data);
		$this->load->view('manage_departments',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	
	
							/* Add Designation */
	public function add_designation($info=false)
	{
		$select_designation = $this->data['select_designation'] = $this->designation_model->select_designation($info);
		$list_organization = $this->data['list_organization'] = $this->mhome->list_organization();
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/left_menu',$this->data);
		$this->load->view('add_designation',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	
	
							/*	insert new designation	*/
	public function insert_designation()
	{
		$org_name=$this->input->post('orgnization_name');
		if($org_name!=='')
		{
			$data=array(
							'orgnization_id'=>$this->input->post('orgnization_name'),
							'designation_name'=>$this->input->post('designation_name')
						);
			$this->designation_model->insert_designation('designation',$data);
			$this->session->set_flashdata('category_success', 'success message	');        
			$this->session->set_flashdata('message', $this->config->item("user").' designation Inserted successfully');
			redirect('master/manage_designation');
		}
		
	}
							
							/* function for edit designation */
	public function update_designation($info)
	{
		$data=array(
						'orgnization_name'=>$this->input->post('orgnization_name'),
						'designation_name'=>$this->input->post('designation_name')
					);
		$update_designation = $this->data['update_designation'] = $this->designation_model->update_designation($info,$data);
		$this->session->set_flashdata('category_success','success mesage');
		$this->session->set_flashdata('message', $this->config->item("user").' designation Edit successfully');
		redirect('master/manage_designation');
	}
	
								/* Function for Manage designation  */
	public function manage_designation()
	{
		$list_designation = $this->data['list_designation'] = $this->designation_model->list_designation();
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/left_menu',$this->data);
		$this->load->view('manage_designation',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
