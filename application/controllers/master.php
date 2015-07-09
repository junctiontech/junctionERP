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
		Authority::is_logged_in();
		$select_organization = $this->data['select_organization'] = $this->organization_model->select_organization($info);
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/left_menu',$this->data);
		$this->load->view('add_organization',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	
				/*	function for Insert new organization */
	public function insert_organization()
	{	
		Authority::is_logged_in();
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
		Authority::is_logged_in();
		$data=array(
						'organization_name'=>$this->input->post('organization_name'),
						'organization_desc'=>$this->input->post('organization_desc')
					);
		$update_organization = $this->data['update_organization'] = $this->organization_model->update_organization($info,$data);
		$this->session->set_flashdata('category_success','success mesage');
		$this->session->set_flashdata('message', $this->config->item("user").' Organization Edit successfully');
		redirect('master/manage_organization');
	}
	
	
			/* function for delete organization */
	public function delete_organization($info)
	{
		Authority::is_logged_in();
		$this->organization_model->delete_organization($info);
		$this->session->set_flashdata('category_success','success mesage');
		$this->session->set_flashdata('message', $this->config->item("user").' Organization delete successfully');
		redirect('master/manage_organization');
	}
	
	
			/* manage organization */
	public function manage_organization()
	{   
		Authority::is_logged_in();
		Authority::checkAuthority('manage_organization');
		$list_organization = $this->data['list_organization'] = $this->organization_model->list_organization();
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/left_menu',$this->data);
		$this->load->view('manage_organization',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	
	
							/* add departments */
	public function add_departments($info=false)
	{   
		Authority::is_logged_in();
		if(Authority::checkAuthority('add_departments')==true)
	 	{
	 		redirect('master/manage_departments');
	 	}
		$list_organization = $this->data['list_organization'] = $this->organization_model->list_organization();
		$select_department = $this->data['select_department'] = $this->department_model->select_department($info);
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/left_menu',$this->data);
		$this->load->view('add_departments',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	
		/* function for edit department */
	public function update_department($info=false)
	{	
		Authority::is_logged_in();
		if(Authority::checkAuthority('update_department')==true)
	 	{
	 		redirect('master/manage_departments');
	 	}
		$data=array(
						'department_name'=>$this->input->post('department_name')
					);
		$update_department = $this->data['update_department'] = $this->department_model->update_department($info,$data);
		$this->session->set_flashdata('category_success','success mesage');
		$this->session->set_flashdata('message', $this->config->item("user").' Department update successfully');
		redirect('master/manage_departments');
	}
	
			/* function for delete department */
	public function delete_departments($info=false)
	{	
		Authority::is_logged_in();
		if(Authority::checkAuthority('delete_departments')==true)
	 	{
	 		redirect('master/manage_departments');
	 	}
		if($info)
			{
				$data=array(
								'department_id'=>0
							);
			}
			//print_r($data);die;
		$this->department_model->edit_emp($info,$data);
			
		$this->department_model->delete_department($info);
		$this->session->set_flashdata('category_success','success mesage');
		$this->session->set_flashdata('message', $this->config->item("user").' Department delete successfully');
		redirect('master/manage_departments');
	}
	
	
						/* function for insert department */
	public function insert_department($info=false)
	{
		Authority::is_logged_in();
		if(Authority::checkAuthority('insert_department')==true)
	 	{
	 		redirect('master/manage_departments');
	 	}
		$dep=$this->input->post('department_name');
		for($i=0;$i<count($dep);$i++)
		{
			$data=array(
								'organization_id'=>$info,
								'department_name'=>$dep[$i]
							);
		
				$this->department_model->insert_department('department',$data);
		}
		
				$this->session->set_flashdata('category_success', 'success message	');
				$this->session->set_flashdata('message', $this->config->item("user").' Department Inserted successfully');
				redirect('master/manage_departments');
			
		
	
	}
	
						/*  manage departments */
	public function manage_departments()
	{ 
		Authority::is_logged_in();
		Authority::checkAuthority('manage_departments');
		$userdata = $this->session->userdata('user_data');
		$organization=$userdata['organization_id'];
		$list_department= $this->data['list_department'] = $this->department_model->list_department($organization);
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/left_menu',$this->data);
		$this->load->view('manage_departments',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	
	
							/* Add Designation */
	public function add_designation($info=false)
	{	
		Authority::is_logged_in();
		if(Authority::checkAuthority('add_designation')==true)
	 	{
	 		redirect('master/manage_designation');
	 	}
		$list_organization = $this->data['list_organization'] = $this->organization_model->list_organization();
		$select_designation = $this->data['select_designation'] = $this->designation_model->select_designation($info);
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/left_menu',$this->data);
		$this->load->view('add_designation',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	
	
							/*	insert new designation	*/
	public function insert_designation($info=false)
	{	
		Authority::is_logged_in();
		if(Authority::checkAuthority('insert_designation')==true)
	 	{
	 		redirect('master/manage_designation');
	 	}
		$designation=$this->input->post('designation_name');
		for($i=0;$i<count($designation);$i++)
		{
			$data=array(
								'organization_id'=>$info,
								'designation_name'=>$designation[$i]
						);
		
				$this->designation_model->insert_designation('designation',$data);
		}
			$this->session->set_flashdata('category_success', 'success message	');        
			$this->session->set_flashdata('message', $this->config->item("user").' designation add successfully');
			redirect('master/manage_designation');
		
		
	}
	
	/* function for delete department */
	public function delete_designation($info=false)
	{	
		Authority::is_logged_in();
		if(Authority::checkAuthority('delete_designation')==true)
	 	{
	 		redirect('master/manage_designation');
	 	}
		if($info)
			{
				$data=array(
								'designation_id'=>0
							);
			}
			//print_r($data);die;
		$this->designation_model->edit_emp($info,$data);
		$this->designation_model->delete_designation($info);
		$this->session->set_flashdata('category_success','success mesage');
		$this->session->set_flashdata('message', $this->config->item("user").' Department delete successfully');
		redirect('master/manage_designation');
	}
	
				/* Function for Manage designation  */
	public function manage_designation()
	{	
		Authority::is_logged_in();
		Authority::checkAuthority('manage_designation');
		$userdata = $this->session->userdata('user_data');
		$organization=$userdata['organization_id'];
		$list_designation = $this->data['list_designation'] = $this->designation_model->list_designation($organization);
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/left_menu',$this->data);
		$this->load->view('manage_designation',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
				
							/* function for edit designation */
	public function update_designation($info)
	{	
		Authority::is_logged_in();
		if(Authority::checkAuthority('update_designation')==true)
	 	{
	 		redirect('master/manage_designation');
	 	}
		$data=array(
						'designation_name'=>$this->input->post('designation_name')
					);
		$update_designation = $this->data['update_designation'] = $this->designation_model->update_designation($info,$data);
		$this->session->set_flashdata('category_success','success mesage');
		$this->session->set_flashdata('message', $this->config->item("user").' designation Edit successfully');
		redirect('master/manage_designation');
	}
	
								
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
