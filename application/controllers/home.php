<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	
	  function __construct() {
		parent::__construct();
		$this->data[]="";
		$this->data['url'] = base_url();
		
		$this->load->model('mhome');
		//Load html parser
		$this->load->library('parser');
		
		$this->data['base_url']=base_url();
	 }
	
	public function index()
	{   
		$this->parser->parse('include/header',$this->data);
		$this->load->view('signup',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	//signup
	public function login()
	{
		$this->parser->parse('include/header',$this->data);
		$this->load->view('login',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	//add organization 
	public function add_organization()
	{   
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/left_menu',$this->data);
		$this->load->view('add_organization',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	//manage organization
	public function manage_organization()
	{   
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/left_menu',$this->data);
		$this->load->view('manage_organization',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
		//add departments
	public function add_departments()
	{   
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/left_menu',$this->data);
		$this->load->view('add_departments',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	//manage departments
	public function manage_departments()
	{   
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
	//employee award
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