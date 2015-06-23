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
		$this->load->view('signup',$this->data);//login page view
		$this->parser->parse('include/footer',$this->data);
	}
	//signup
	public function login()
	{
		$this->parser->parse('include/header',$this->data);
		$this->load->view('login',$this->data);//login page view
		$this->parser->parse('include/footer',$this->data);
	}
	//add organization 
	public function add_organization()
	{   
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/left_menu',$this->data);
		$this->load->view('add_organization',$this->data);//login page view
		$this->parser->parse('include/footer',$this->data);
	}
	//manage organization
	public function manage_organization()
	{   
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/left_menu',$this->data);
		$this->load->view('manage_organization',$this->data);//login page view
		$this->parser->parse('include/footer',$this->data);
	}
		//add departments
	public function add_departments()
	{   
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/left_menu',$this->data);
		$this->load->view('add_departments',$this->data);//login page view
		$this->parser->parse('include/footer',$this->data);
	}
	//manage departments
	public function manage_departments()
	{   
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/left_menu',$this->data);
		$this->load->view('manage_departments',$this->data);//login page view
		$this->parser->parse('include/footer',$this->data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */