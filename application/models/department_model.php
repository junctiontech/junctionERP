<?php 
//Model Class 
class Department_model extends CI_Model {
	
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

    
    /* Function for insert ogganization */
    public function insert_department($table,$data)
    {
    	$this->db->insert($table,$data);
    }
    
    
     /* Function for list deaprtment */
    
    /*function for organization list*/
    public function list_department()
    {
    	$this->db->select('*');
		$qry=$this->db->get('department');
	     return $qry->result(); 
			  
    }
  
    /* Function For fetch select orgnistion*/
    public function select_department($info)
    {
    	$this->db->select('*');
    	$this->db->where('department_id',$info);
    	$qry = $this->db->get('department');
    	return $qry->result();
    }
}
//Model Class for department end
?>
