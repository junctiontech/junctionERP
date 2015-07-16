<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crm extends CI_Controller {

	
	  function __construct() {
		parent::__construct();
		$this->data[]="";
		$this->data['url'] = base_url();
		
		$this->load->model('customer_model');
		$this->load->library('parser');
		$this->load->library('session');
		$this->data['base_url']=base_url();
	 }
	

	//customers
	public function customers($info=false)
	{
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/left_menu',$this->data);
		$this->load->view('crm/customers',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}

	//add customers
	public function add_customer($info=false)
	{
		//print_r($info);die;
		if($info){
					$select_customer = $this->data['select_customer'] = $this->customer_model->select_customer($info);
					//print_r($select_emp);die;
				}
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/left_menu',$this->data);
		$this->load->view('crm/add_customer',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}

	//add opportunities
	public function add_opportunities($info=false)
	{
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/left_menu',$this->data);
		$this->load->view('crm/add_opportunities',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	public function manage_opportunities($info=false)
	{
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/left_menu',$this->data);
		$this->load->view('crm/manage_opportunities',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	public function customequick($info=false)
	{	 	
			
		$this->data['customer_info'] = $this->customer_model->get_customer_list();
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/left_menu',$this->data);
		$this->load->view('crm/customequick',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	
	/*insert customer function*/
	public function insert_customer($info=false)
	{
		
		$customer_name=$this->input->post('name');
		if($customer_name!=='')
		{
			$email=array(
					'email'=>$this->input->post('email'),
						);
			//print_r($email);die;
			$data=array(
					'company_name'=>$this->input->post('company_name'),
					'name'=>$this->input->post('name'),
					'email'=>$this->input->post('email'),
					'mobile'=>$this->input->post('mobile'),
					'present_address'=>$this->input->post('present_address'),
					'reference'=>$this->input->post('reference')
			);
			
			$id=$this->customer_model->insert_customer('customers',$data,$email);
			if($id=='')
			{
				$this->session->set_flashdata('category_success', 'success message');
				$this->session->set_flashdata('message', $this->config->item("user").' Email id already exist');
				redirect('crm/crm/customequick');
			}
			if($id!=='')
			{
			$this->session->set_flashdata('category_success', 'success message');
			$this->session->set_flashdata('message', $this->config->item("user").' Customer Add successfully');
			redirect('crm/crm/customequick');
			}
		}
		
	}
	
	
	public function update_customer($id=false)
	{
		//print_r($id);
	//	die;
		$customer_id=$id;
		$customer_name=$this->input->post('customer_name');
	
		if($customer_name!=='')
		{
			
			$data=array(
					'customer_id'=>$customer_id,
					'company_name'=>$this->input->post('company_name'),
					'name'=>$this->input->post('name'),
					'email'=>$this->input->post('email'),
					'mobile'=>$this->input->post('mobile'),
					'present_address'=>$this->input->post('present_address'),
					'reference'=>$this->input->post('reference')
					
			);
			$this->customer_model->update_customers('customers',$data,$customer_id);
			$this->session->set_flashdata('category_success', 'success message');
			$this->session->set_flashdata('message', $this->config->item("user").' Customer Updated successfully');
			redirect('crm/crm/customequick');
	
		}
	}
	public function insert_followup($info=false)
	{
		//print_r($info);
		$follow_up_date=$this->input->post('follow_up_date');
	
		if($follow_up_date!=='')
		{
			
				$data=array(
							'note'=>$this->input->post('note'),
							'follow_up_date'=>$this->input->post('follow_up_date'),
							'next_follow_up'=>$this->input->post('next_follow_up'),
							'follow_up_time'=>$this->input->post('follow_up_time'),
							'follow_up_type'=>$this->input->post('follow_up_type'),
							'follow_up_by'=>$this->input->post('follow_up_by'),
							'customer_id'=>$info
						   );
		}
		
			$this->customer_model->insert_follow_up('customers_follow_up',$data);
			$this->session->set_flashdata('category_success', 'success message');
			$this->session->set_flashdata('message', $this->config->item("user").' Followup Add successfully');
			redirect('crm/crm/customequick');
		}
	

	
	function modal($userid=false)
	{	
		//print_r($userid);die;
		$filter=array('customer_id'=>$userid);
		$get_followup_list=$this->data['get_followup_list'] = $this->customer_model->get_followup_list('customers_follow_up',$filter);
		//print_r($get_followup_list);die;
		$this->data['userid']=$userid;
		
	$this->load->view('crm/modal/modal',$this->data);
	//redirect('crm/crm/customequick');
	}
	
}

/* End of file attendance.php */
/* Location: ./application/controllers/attendance.php */
