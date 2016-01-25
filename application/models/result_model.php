<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Result_model extends CI_Model {
	
	var $data;

	public function __construct()
	{
		parent::__construct();
	}

    //fetch all result of user
    function get_user_result($reg_no)
    {
        $sql = "select * from competent_result where reg_no = '$reg_no'";
        $query = $this->db->query($sql);
        return $query->result();
    }

    //fetch specific result
    function specific_user_result($reg_no, $id)
    {
        $sql = "select * from competent_result where reg_no = '$reg_no' and id = '$id' ";
        $query = $this->db->query($sql);
        return $query->result();
    }    

    function add($reg_no){
        $data=array(
            'reg_no'=>$reg_no,
            "level"=>$this->input->post('get_level'),
            "result"=>$this->input->post('result_type'),
            "type"=>$this->input->post('asses_type'),               
        );        
        $this->db->insert('competent_result',$data);
    }

    function update($reg_no, $rid){
        $data=array(
            "level"=>$this->input->post('get_level'),
            "result"=>$this->input->post('result_type'),
            "type"=>$this->input->post('asses_type'),               
        );
        $this->db->where('id',$rid);
        $this->db->where('reg_no',$reg_no);
        $this->db->update('competent_result',$data);          
    }

    //fetch assesment level
    function get_level()
    {
        $sql = "select * from asses_level ";
        $query = $this->db->query($sql);
        return $query->result();
    }  

    //fetch assesment result types
    function get_result_type()
    {
        $sql = "select * from asses_result ";
        $query = $this->db->query($sql);
        return $query->result();
    }   

    //fetch assesment result types
    function get_asses_type()
    {
        $sql = "select * from asses_type ";
        $query = $this->db->query($sql);
        return $query->result();
    }        
    
}