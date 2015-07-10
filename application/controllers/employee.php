<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee extends CI_Controller {

	
	  function __construct() {
		parent::__construct();
		$this->data[]="";
		$this->data['url'] = base_url();
		$this->load->model('organization_model');
		$this->load->model('department_model');
		$this->load->model('designation_model');
		$this->load->model('employee_model');
		$this->load->library('authority');
		$this->load->model('authority_model');
		$this->load->library('parser');
		$this->load->library('session');
		$this->data['base_url']=base_url();
	 }
	

				/* manage Employee */
	public function manage_emp()
	{
		Authority::is_logged_in();
		Authority::checkAuthority('manage_emp');
		$userdata = $this->session->userdata('user_data');
		$organization=$userdata['organization_id'];
		$fetch_org = $this->data['fetch_org'] = $this->employee_model->fetch_org();
		$fetch_dep = $this->data['fetch_dep'] = $this->employee_model->fetch_dep();
	//	print_r($fetch_dep);die; 
		//$list_employee = $this->data['list_employee'] = $this->employee_model->list_employee($organization);
		//$list_designation = $this->data['list_designation'] = $this->designation_model->list_designation();
		//$list_department= $this->data['list_department'] = $this->department_model->list_department();
		$su_list_employee = $this->data['su_list_employee'] = $this->employee_model->su_list_employee();
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/left_menu',$this->data);
		$this->load->view('manage_emp',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	
	
			/* function for create new employee */
public function insert_employee($info=false)
	{	
		Authority::is_logged_in();
		if(Authority::checkAuthority('insert_employee')==true)
			{
				redirect('employee/manage_emp');
			}
		$userdata = $this->session->userdata('user_data');
		$role=$userdata['role_id'];
		if($role=='superuser')
		{
			$info=$this->input->post('organization_name');
		}
		$dep=$this->input->post('department_name');
		if($dep=='0')
		{
			$dep=NULL;
		}
		$des=$this->input->post('designation_name');
		if($des=='0')
		{
			$des=NULL;
		}
		$employee_id=$this->input->post('employee_id');
		$first_name=$this->input->post('first_name');
			$_FILES['image']['name'];
					move_uploaded_file($_FILES['image']['tmp_name'],"img/".$employee_id.$_FILES['image']['name']);
						
				
				$image = $employee_id.$_FILES['image']['name'];
				
		$_FILES['resume']['name'];
					move_uploaded_file($_FILES['resume']['tmp_name'],"img/".$employee_id.$_FILES['resume']['name']);
						
				
				$resume = $employee_id.$_FILES['resume']['name'];	

		$_FILES['offerletter']['name'];
					move_uploaded_file($_FILES['offerletter']['tmp_name'],"img/".$employee_id.$_FILES['offerletter']['name']);
						
				
				$offerletter = $employee_id.$_FILES['offerletter']['name'];	
				
		$_FILES['joiningletter']['name'];
					move_uploaded_file($_FILES['joiningletter']['tmp_name'],"img/".$employee_id.$_FILES['joiningletter']['name']);
						
				
				$joiningletter = $employee_id.$_FILES['joiningletter']['name'];

	    $_FILES['idproof']['name'];
					move_uploaded_file($_FILES['idproof']['tmp_name'],"img/".$employee_id.$_FILES['idproof']['name']);
						
				
				$idproof = $employee_id.$_FILES['idproof']['name'];
				
		
			if($first_name!=='')
		{
			$data=array(
							'employee_id'=>$this->input->post('employee_id'),
							'organization_id'=>$info,
							'department_id'=>$dep,
							'designation_id'=>$des,
							'username'=>$this->input->post('username'),
							'password'=>$this->input->post('password'),
							'salary_frquency'=>$this->input->post('frquency'),
							'joining_date'=>$this->input->post('joining_date'),
							'first_name'=>$this->input->post('first_name'),
							'last_name'=>$this->input->post('last_name'),
							'birthdate'=>$this->input->post('birthdate'),
							'gender'=>$this->input->post('gender'),
							'image'=>$image,
							'martial_status'=>$this->input->post('maratial_status'),
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
							'resume'=>$resume,
							'offerletter'=>$offerletter,
							'joiningletter'=>$joiningletter,
							'idproof'=>$idproof,
							'bank_name'=>$this->input->post('bank_name'),
							'branch_name'=>$this->input->post('branch_name'),
							'acc_name'=>$this->input->post('acc_name'),
							'acc_no'=>$this->input->post('acc_no')
						);
						//echo '<pre>';
						//print_r($data);
						//echo '</pre>';die;
		
		
			$this->employee_model->insert_employee('employee',$data);
			$this->session->set_flashdata('category_success', 'success message');        
			$this->session->set_flashdata('message', $this->config->item("user").' Employee Add successfully');
			redirect('employee/manage_emp');
		}
		
	}
	
	public function update_employee($id=false,$info=false,$img=false)
	{	
		Authority::is_logged_in();
		if(Authority::checkAuthority('update_employee')==true)
			{
				redirect('employee/manage_emp');
			}
		$userdata = $this->session->userdata('user_data');
		$role=$userdata['role_id'];
		$employee_id=$id;
		$first_name=$this->input->post('first_name');
			if($role=='superuser')
		{
			$info=$this->input->post('organization_name');
		}
		$dep=$this->input->post('department_name');
		if($dep=='0')
		{
			$dep=NULL;
		}
		$des=$this->input->post('designation_name');
		if($des=='0')
		{
			$des=NULL;
		}
		//print_r($info);die;
			if($first_name!=='')
		{
				if($_FILES['image']['name']!=='')
					{
						//print_r($_FILES['image']['name']);
						$_FILES['image']['name'];
								move_uploaded_file($_FILES['image']['tmp_name'],"img/".$employee_id.$_FILES['image']['name']);
								$image = $employee_id.$_FILES['image']['name'];
								$img['image']=$image;
					}
				if($_FILES['resume']['name']!=='')
					{	
						//print_r($_FILES['image']['name']);
						$_FILES['resume']['name'];
								move_uploaded_file($_FILES['resume']['tmp_name'],"img/".$employee_id.$_FILES['resume']['name']);
								$resume = $employee_id.$_FILES['resume']['name'];	
								$img['resume']=$resume;
					}
					
				if($_FILES['offerletter']['name']!=='')
					{		
							//print_r($_FILES['image']['name']);
						$_FILES['offerletter']['name'];
								move_uploaded_file($_FILES['offerletter']['tmp_name'],"img/".$employee_id.$_FILES['offerletter']['name']);
								$offerletter = $employee_id.$_FILES['offerletter']['name'];
								$img['offerletter']=$offerletter;
					}
					
				if($_FILES['joiningletter']['name']!=='')
					{	
							//print_r($_FILES['image']['name']);
						$_FILES['joiningletter']['name'];
								move_uploaded_file($_FILES['joiningletter']['tmp_name'],"img/".$employee_id.$_FILES['joiningletter']['name']);
								$joiningletter = $employee_id.$_FILES['joiningletter']['name'];
								$img['joiningletter']=$joiningletter;
					}
				if($_FILES['idproof']['name']!=='')
					{		
							//print_r($_FILES['image']['name']);
						$_FILES['idproof']['name'];
								move_uploaded_file($_FILES['idproof']['tmp_name'],"img/".$employee_id.$_FILES['idproof']['name']);
								$idproof = $employee_id.$_FILES['idproof']['name'];
								$img['idproof']=$idproof;
					}
					if($_FILES['image']['name']!=='' || $_FILES['resume']['name']!=='' || $_FILES['offerletter']['name']!=='' || $_FILES['joiningletter']['name']!=='' || $_FILES['idproof']['name']!=='')
					{
						$this->employee_model->update_image_employee('employee',$img,$id);
					}
			
			$data=array(
							'employee_id'=>$id,
							'organization_id'=>$info,
							'department_id'=>$dep,
							'designation_id'=>$des,
							'username'=>$this->input->post('username'),
							'password'=>$this->input->post('password'),
							'salary_frquency'=>$this->input->post('frquency'),
							'joining_date'=>$this->input->post('joining_date'),
							'first_name'=>$this->input->post('first_name'),
							'last_name'=>$this->input->post('last_name'),
							'birthdate'=>$this->input->post('birthdate'),
							'gender'=>$this->input->post('gender'),
							//'image'=>$image,
							'martial_status'=>$this->input->post('maratial_status'),
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
							//'resume'=>$resume,
							//'offerletter'=>$offerletter,
							//'joiningletter'=>$joiningletter,
							//'idproof'=>$idproof,
							'bank_name'=>$this->input->post('bank_name'),
							'branch_name'=>$this->input->post('branch_name'),
							'acc_name'=>$this->input->post('acc_name'),
							'acc_no'=>$this->input->post('acc_no')
						);
						//echo '<pre>';
						//print_r($data);
						//echo '</pre>';
						//echo '<pre>';
						//print_r($img);
						////echo '</pre>';die;
						
			$this->employee_model->update_employee('employee',$data,$id);
			$this->session->set_flashdata('category_success', 'success message');        
			$this->session->set_flashdata('message', $this->config->item("user").' Employee update successfully');
			redirect('employee/manage_emp');
		}
	}
	
	/* function for delete department */
	public function delete_emp($info)
	{
		Authority::is_logged_in();
		$this->employee_model->delete_emp($info);
		$this->session->set_flashdata('category_success','success message');
		$this->session->set_flashdata('message', $this->config->item("user").' Employee delete successfully');
		redirect('employee/manage_emp');
	}
	
	
						//Add employee
	public function add_emp($info=false)
	{	
		Authority::is_logged_in();
		if(Authority::checkAuthority('add_emp')==true)
			{
				redirect('employee/manage_emp');
			}
		$userdata = $this->session->userdata('user_data');
		$organization=$userdata['organization_id'];
		if($info){
			$select_emp = $this->data['select_emp'] = $this->employee_model->select_emp($info);
			
				 }
		$list_organization = $this->data['list_organization'] = $this->organization_model->list_organization();
		$list_department= $this->data['list_department'] = $this->department_model->list_department($organization);
		$list_designation = $this->data['list_designation'] = $this->designation_model->list_designation($organization);
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
