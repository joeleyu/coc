<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Result extends Admin_Controller
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
		// load result model
		$this->load->model('result_model');

	}

	function index($comptent_id = NULL){
		$this->data['page_title'] = $comptent_id. 'Competent Result';
		
		if($comptent_id == NULL){
			redirect('person');
		}
		$this->show_list($comptent_id);

	}

	function show_list($comptent_id = NULL){
		$this->data['page_title'] = $comptent_id.' Competent Result';
		
		if($comptent_id == NULL){
			redirect('person');
		}
		$this->data['comptent_id'] = $comptent_id;
		$this->data['user_result'] = $this->result_model->get_user_result($comptent_id);

		$this->data['get_level'] = $this->result_model->get_level();
		$this->data['result_type'] = $this->result_model->get_result_type();
		$this->data['asses_type'] = $this->result_model->get_asses_type();		

		$this->render('backend/result_list');
	}	

	function add($comptent_id = NULL){
		$this->data['page_title'] = $comptent_id.' - Add Result';
		$this->data['comptent_id'] = $comptent_id;
		if($comptent_id == NULL){
			redirect('person');
		}

		$this->data['get_level'] = $this->result_model->get_level();
		$this->data['result_type'] = $this->result_model->get_result_type();
		$this->data['asses_type'] = $this->result_model->get_asses_type();

		if(isset($_POST['add-result']))
		{
			$this->form_validation->set_rules('get_level','Assessment Level','trim|required');
			$this->form_validation->set_rules('asses_type','Assessment Type','trim|required');
			$this->form_validation->set_rules('result_type','Result Type','trim|required');
					
			if($this->form_validation->run() == FALSE){
				$this->render('backend/result_add');
			}
			else{
				
				$this->result_model->add($comptent_id);
	            //display success message
	            $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Result Added Successfully!</div>');
	            //$this->render('backend/result_list');	
	            redirect('result/show_list/'.$comptent_id);
			}
		}
		else{
			$this->render('backend/result_add');
		}
	}

	function edit($comptent_id = NULL, $rid = NULL){
		$this->data['page_title'] = $comptent_id.' - Edit Result';
		$this->data['comptent_id'] = $comptent_id;
		$this->data['rid'] = $rid;
		if($comptent_id == NULL || $rid == NULL){
			redirect('result/show_list/'.$comptent_id);
		}

		$this->data['get_level'] = $this->result_model->get_level();
		$this->data['result_type'] = $this->result_model->get_result_type();
		$this->data['asses_type'] = $this->result_model->get_asses_type();
		$this->data['user_result'] = $this->result_model->specific_user_result($comptent_id, $rid);

		if(isset($_POST['edit-result']))
		{
			$this->form_validation->set_rules('get_level','Assessment Level','trim|required');
			$this->form_validation->set_rules('asses_type','Assessment Type','trim|required');
			$this->form_validation->set_rules('result_type','Result Type','trim|required');
					
			if($this->form_validation->run() == FALSE){
				$this->render('backend/result_edit');
			}
			else{
				
				$this->result_model->update($comptent_id,$rid);
	            //display success message
	            $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Result Updated Successfully!</div>');
	            redirect('result/show_list/'.$comptent_id);
			}
		}
		else{
			$this->render('backend/result_edit');
		}
	}

	function remove($comptent_id = NULL, $rid = NULL){
		$this->data['comptent_id'] = $comptent_id;
		$this->data['rid'] = $rid;
		if($comptent_id == NULL || $rid == NULL){
			redirect('result/show_list/'.$comptent_id);
		}

		$this->db->where('id', $rid);
		$this->db->where('reg_no', $comptent_id);
        $this->db->delete('competent_result');
        $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Result Deleted Successfully!</div>');		
        redirect('result/show_list/'.$comptent_id);
	}	
}