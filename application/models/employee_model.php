<?php 
//Model Class 
class Employee_model extends CI_Model {
	
	 /**
	 # Programmer : 
	 # employee Model
	 
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
		/* Function for insert employee */
	public function insert_employee($table,$data)
	{
		$this->db->insert($table,$data);
	}
	
	/*function for employee list*/
	public function list_employee()
	{
		$this->db->select('*');
		$qry=$this->db->get('employee');
		return $qry->result();
	}
	
	/* Function For fetch select employee*/
	public function select_employee($info)
	{
		$this->db->select('*');
		$this->db->where('designation_id',$info);
		$qry = $this->db->get('employee');
		return $qry->result();
	}
	
	/* function for update employee*/
	public function update_employee($info,$data)
	{
		$this->db->where('designation_id',$info);
		$this->db->update('employee',$data);
		return true;
	}
}
//Model Class for Employee end
?>
