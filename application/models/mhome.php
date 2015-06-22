<?php 
//Model Class 
class Mhome extends CI_Model {
	
	 /**
	 # Programmer : 
	 # Mhome Model
	 
	 */
	 
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
    
	
	

	
	
	
}
//Model Class for department end
?>
