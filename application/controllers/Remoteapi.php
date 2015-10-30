<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Controller for login Functionality */
class Remoteapi extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->data[]="";
		$this->data['user_data']="";
		$this->data['url'] = base_url();
		$this->load->model('Remoteapi_model');
		$this->load->helper('url');
		$this->data['base_url']=base_url();
		$this->load->library('session');
	}
	
	function locationUpdate(){
		echo 'hiii';die;
	}
}
/* End of login controller */