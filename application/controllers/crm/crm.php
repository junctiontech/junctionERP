<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crm extends CI_Controller {

	
	  function __construct() {
		parent::__construct();
		$this->data[]="";
		$this->data['url'] = base_url();
		
		//$this->load->model('mhome');
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
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/left_menu',$this->data);
		$this->load->view('crm/add_customer',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
}

/* End of file attendance.php */
/* Location: ./application/controllers/attendance.php */
