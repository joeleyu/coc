<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Setting_model extends CI_Model {
	
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

    function add_item($item_type){
             
        if($item_type == 'asses_type'){
            $data=array("type_val"=>$this->input->post('item_val'));
            $this->db->insert('asses_type',$data);
        }
        else if($item_type == 'asses_level'){
            $data=array("level_val"=>$this->input->post('item_val'));
            $this->db->insert('asses_level',$data);
        }
        else if($item_type == 'asses_result'){
            $data=array("res_val"=>$this->input->post('item_val'));
            $this->db->insert('asses_result',$data);
        }
        $this->load->driver('cache', array('adapter' => 'file'));
        $this->cache->delete($item_type);
        
    }

    function edit_item($item_type, $item_id){
             
        $this->db->where('id',$item_id);

        if($item_type == 'asses_type'){
            $data=array("type_val"=>$this->input->post('item_val'));
            $this->db->update('asses_type',$data);             
        }
        else if($item_type == 'asses_level'){
            $data=array("level_val"=>$this->input->post('item_val'));
            $this->db->update('asses_level',$data); 
        }
        else if($item_type == 'asses_result'){
            $data=array("res_val"=>$this->input->post('item_val'));
            $this->db->update('asses_result',$data); 
        }
        $this->load->driver('cache', array('adapter' => 'file'));
        $this->cache->delete($item_type);
        
    }    

    function get_item($item_type, $item_id){
             
        if($item_type == 'asses_type'){
            $sql = "select * from asses_type where id='$item_id' ";
            $query = $this->db->query($sql);
            return $query->result();            
        }
        else if($item_type == 'asses_level'){
            $sql = "select * from asses_level where id='$item_id' ";
            $query = $this->db->query($sql);
            return $query->result();               
        }
        else if($item_type == 'asses_result'){
            $sql = "select * from asses_result where id='$item_id' ";
            $query = $this->db->query($sql);
            return $query->result();
        }       
    }    

    //fetch assesment level
    function get_level()
    {
        $this->load->driver('cache', array('adapter' => 'file'));
        if ( ! $asses_level = $this->cache->get('asses_level'))
        {
            $sql = "select * from asses_level ";
            $query = $this->db->query($sql);
            foreach ($query->result() as $value) {
                $data[] = $value;
            }
            // Save into the cache
            $this->cache->save('asses_level', $data, 0);
            return $query->result();
        }
        
        return $asses_level;
    }  

    //fetch assesment result types
    function get_result_type()
    {
        $this->load->driver('cache', array('adapter' => 'file'));
        if ( ! $asses_result = $this->cache->get('asses_result'))
        {
            $sql = "select * from asses_result ";
            $query = $this->db->query($sql);
            foreach ($query->result() as $value) {
                $data[] = $value;
            }
            // Save into the cache
            $this->cache->save('asses_result', $data, 0);
            return $query->result();
        }
        
        return $asses_result;        
    }   

    //fetch assesment result types
    function get_asses_type()
    {
        $this->load->driver('cache', array('adapter' => 'file'));
        if ( ! $asses_type = $this->cache->get('asses_type'))
        {
            $sql = "select * from asses_type ";
            $query = $this->db->query($sql);
            foreach ($query->result() as $value) {
                $data[] = $value;
            }
            // Save into the cache
            $this->cache->save('asses_type', $data, 0);
            return $query->result();
        }
        
        return $asses_type;          
    }
    
}