<?php
/* Model for login and sign up   */

class Remoteapi_model extends CI_Model 
{
	//variable initialize
    var $title   = '';
    var $content = '';
    var $date    = '';
	
      function __construct()
      {
        // Call the Model constructor
        parent::__construct();
		
		//Load database connection
		$this->load->database();
      }
    
    /* function for login check email id ragisterd or not   */
    
}