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
		/* Function for insert ogganization */
	public function insert_organization($table,$data)
	{
		$this->db->insert($table,$data);
	}
	
	/*function for organization list*/
	public function list_organization()
	{
		$this->db->select('*');
		$qry=$this->db->get('orgnization');
		return $qry->result();
	}
	
	/* Function For fetch select orgnistion*/
	public function select_organization($info)
	{
		$this->db->select('*');
		$this->db->where('orgnization_id',$info);
		$qry = $this->db->get('orgnization');
		return $qry->result();
	}
	
	/* function for update orgnisation*/
	public function update_organization($info,$data)
	{
		$this->db->where('orgnization_id',$info);
		$this->db->update('orgnization',$data);
		return true;
	}
}
//Model Class for department end
?>
