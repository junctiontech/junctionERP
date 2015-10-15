<?php
class User_management_model extends CI_Model{
	
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
    
    function clone_db($database_name=false,$data=false)
    {
    	$this->db->query('CREATE DATABASE '.$database_name);
    	$connect=mysqli_connect('localhost','root','',$database_name);
    	$db_file=file_get_contents('junction_erp.sql');
    	mysqli_multi_query($connect, $db_file);
    	do {
    			mysqli_store_result($connect);
    	   }
    	   while(mysqli_more_results($connect) && mysqli_next_result($connect));
    	  return true;
    }
   
    function set_user($data=false)
    {
    	$this->load->database('default',TRUE);
    	$qry=	$this->db->insert('user',$data);
   	   	return true;
    }
}