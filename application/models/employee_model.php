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
	public function insert_customer($table,$data,$email=false)
	{
		if ($this->db->field_exists($email, $table))
		{
		//return true;
		}else{
			$this->db->insert($table,$data);
			$id = $this->db->insert_id();
			return $id;
		}
		
	}
	
	public function insert_follow_up($table,$data)
	{
		//$this->db->where('customer_id',$info);
		$this->db->insert($table, $data);
	}
	
	/*function for employee list*/
	public function list_employee($info)
	{	
		$this->db->select('*');
		$this->db->where('organization_id',$info);
		$qry=$this->db->get('employee');
		return $qry->result();
	}
	
	/* function for superuser employee list */
	public function su_list_employee()
	{
		
		$qry= $this->db->query("SELECT employee.* , department.* , designation.* ,organization.* FROM   employee , department ,designation , organization WHERE employee.organization_id=organization.organization_id AND employee.department_id=department.department_id AND employee.designation_id=designation.designation_id");
		$qry= $this->db->query("SELECT employee.*  , designation.* , organization.* FROM   employee , designation, organization WHERE employee.organization_id=organization.organization_id AND employee.designation_id=designation.designation_id ");
		$qry= $this->db->query("SELECT employee.*  , department.* , organization.* FROM   employee , department, organization WHERE employee.organization_id=organization.organization_id AND employee.department_id=department.department_id ");
		$qry= $this->db->query("SELECT employee.*  , organization.* FROM   employee , organization WHERE employee.organization_id=organization.organization_id ");
		//print_r($qry);die;
		return $qry->result(); 
	}
	
	/* Function For fetch select employee*/
	public function select_emp($info)
	{
		$this->db->select('*');
		$this->db->where('employee_id',$info);
		$qry = $this->db->get('employee');
		return $qry->result();
		return true;
	}
	
	/* Function For fetch select image employee*/
	public function select_emp_img($info)
	{
		$this->db->select('image,resume,offerletter,joiningletter,idproof');
		$this->db->where('employee_id',$info);
		$qry = $this->db->get('employee');
		return $qry->row();
		return true;
	}
	
	
	/* function for update employee*/
	public function update_employee($table,$data,$id)
	{
		$this->db->where('employee_id',$id);
		$this->db->update($table,$data);
		return true;
	}
	
	/* function for image update */
	public function update_image_employee($table,$images,$id)
	{
		$this->db->where('employee_id',$id);
		$qry=$this->db->update($table,$images);
		return true;
	}
	
	
	/*function for delete employee*/
			public function delete_emp($info=false)
	{
		$this->db->query("DELETE FROM `employee` WHERE `employee_id`='".$info."' ");
	}
	/*customer list */
	function get_customer_list($table=false,$filter=false)
	{
		$query=$this->db->query("select * from customers,follow_up where
							
													customers.customer_id=follow_up.customer_id AND follow_up.date_of_call!=''
													");
		//echo $this->db->last_query();die;
		return $query->Result();
	}
	/* Function For fetch select employee*/
	public function select_customer($info)
	{
		//echo $info;die;
		$qry= $this->db->query("SELECT follow_up.* , customers.*  FROM   follow_up , customers  WHERE customers.customer_id='".$info."' AND  follow_up.customer_id='".$info."' ");
		//print_r($qry);die;
		return $qry->result();
	}
	 
	function get_followup_list($table=false,$filter=false)
	{
		$query = $this->db->get_where($table,$filter);
		//print_r($query);die;
		return $query->Result();
	}
	/* function for update employee*/
	public function update_customers($table,$data,$id)
	{
		$this->db->where('customer_id',$id);
		$this->db->update($table,$data);
		return true;
	}
	/* function for update follow up */
	public function update_follow_up($table,$data1,$id)
	{
		$this->db->where('customer_id',$id);
		$this->db->update($table,$data1);
		return true;
	}
	
}
//Model Class for Employee end
?>
