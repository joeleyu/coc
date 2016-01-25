<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Search_model extends CI_Model {
	
	var $data;

	public function __construct()
	{
		parent::__construct();
	}

    //fetch specific result
    function search()
    {
        $reg_no = $this->input->post('reg_no');
        $bdate =$this->input->post('bdate');        
        $sql = "select * from competent_result as c JOIN persons AS p ON c.reg_no = p.reg_no where c.reg_no = '$reg_no' AND p.dob = '$bdate' ";
        $query = $this->db->query($sql);
        return $query->result();
    }    
}