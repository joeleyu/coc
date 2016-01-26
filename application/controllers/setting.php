<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Setting extends Admin_Controller
{

	function __construct()
	{
		parent::__construct();

		if($this->data['is_admin'] !== TRUE){
			if( $this->data['data_expert'] !== TRUE ){
            $this->session->set_flashdata('message','You are not allowed to access this page');
            redirect('admin/denied');			
			}
		}

		$this->load->helper(array('form', 'url'));
		$this->load->library('Form_validation');
		// load setting model
		$this->load->model('setting_model');

	}

	function index($comptent_id = NULL){
		$this->data['page_title'] = $comptent_id. 'Competent Result';
		
		if($comptent_id == NULL){
			redirect('person');
		}
		$this->show_list($comptent_id);

	}

	function asses_type(){
		$this->data['page_title'] = 'Assessment Types';
		
		$this->data['asses_type'] = $this->setting_model->get_asses_type();		

		$this->render('admin/setting/asses_type_list');
	}

	function asses_level(){
		$this->data['page_title'] = 'Assessment Levels';

		$this->data['get_level'] = $this->setting_model->get_level();

		$this->render('admin/setting/asses_level_list');
	}	

	function asses_result(){
		$this->data['page_title'] = 'Assessment Results';

		$this->data['result_type'] = $this->setting_model->get_result_type();	

		$this->render('admin/setting/asses_result_list');
	}		

	function item_add($item_type=NULL){
		$this->data['page_title'] = 'Add Item';
		$this->data['item_type'] = $item_type;
		$this->data['item_name'] = '';
		if($item_type == 'asses_type'){
			$this->data['item_name'] = 'Assesment Type';
		}
		else if($item_type == 'asses_level'){
			$this->data['item_name'] = 'Assesment Level';
		}
		else if($item_type == 'asses_result'){
			$this->data['item_name'] = 'Assesment Result';
		}		
		
		if(isset($_POST['add-item']))
		{
			$this->form_validation->set_rules('item_val','Item Value','trim|required');
					
			if($this->form_validation->run() == FALSE){
				$this->render('admin/setting/item_add');
			}
			else{
				
				$this->setting_model->add_item($item_type);
	            //display success message
	            $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">'.$this->data['item_name'].' Added Successfully!</div>');
	            redirect('setting/'.$item_type);
			}
		}
		else{
			$this->render('admin/setting/item_add');
		}
	}

	function item_edit($item_type=NULL, $item_id=NULL){
		
		$this->data['item_type'] = $item_type;
		$this->data['item_id'] = $item_id;

		if($item_type == 'asses_type'){
			$this->data['item_name'] = 'Assesment Type';
		}
		else if($item_type == 'asses_level'){
			$this->data['item_name'] = 'Assesment Level';
		}
		else if($item_type == 'asses_result'){
			$this->data['item_name'] = 'Assesment Result';
		}
		$this->data['page_title'] = $this->data['item_name'].' - Edit';

		$this->data['item_val'] = $this->setting_model->get_item($item_type, $item_id);
		
		if(isset($_POST['edit-item']))
		{
			$this->form_validation->set_rules('item_val','Item Value','trim|required');
					
			if($this->form_validation->run() == FALSE){
				$this->render('admin/setting/item_edit');
			}
			else{
				
				$this->setting_model->edit_item($item_type, $item_id);
	            //display success message
	            $this->session->set_flashdata('msg', '<div class="alert alert-success text-center"> '.$this->data['item_name'].' Updated Successfully!</div>');
	            redirect('setting/'.$item_type);
			}
		}
		else{
			$this->render('admin/setting/item_edit');
		}
	}	

	function remove_item($item_type = NULL, $item_id = NULL){

		$this->db->where('id', $item_id);

		if($item_type == 'asses_type'){
			$this->db->delete('asses_type');
		}
		else if($item_type == 'asses_level'){
			$this->db->delete('asses_level');	
		}
		else if($item_type == 'asses_result'){
			$this->db->delete('asses_result');	
		}
        $this->load->driver('cache', array('adapter' => 'file'));
        $this->cache->delete($item_type);		
        
        $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Item Deleted Successfully!</div>');		
        redirect('setting/'.$item_type);
	}	
}