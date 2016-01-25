<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Person extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('person_model','person');
		$this->load->helper('url');
	}

	public function index()
	{
		//$this->load->view('templates/menu-bar');
		
		//$this->load->view('templates/admin_master_view');
		$this->render('backend/person_view');
	}

	public function ajax_list()
	{
		$list = $this->person->get_datatables();
		$data = array();
		$no = isset($_POST['start'])? $_POST['start']: 0;
		foreach ($list as $person) {
			$no++;
			$row = array();
			$row[] = $person->firstName.' '.$person->lastName;
			$row[] = $person->reg_no;
			$row[] = date("d-m-Y",strtotime($person->reg_date));
			//$row[] = $person->gender;
			$row[] = $person->address;
			//$row[] = $person->dob;

			//add html for action
			if($this->data['is_admin'] == TRUE || $this->data['data_encoder'] == TRUE) { 
			$row[] = '<a class="btn btn-xs btn-primary" href="javascript:void()" title="Edit" onclick="edit_person('."'".$person->id."'".')"><i class="glyphicon glyphicon-pencil"></i></a>
				  <a class="btn btn-xs btn-danger" href="javascript:void()" title="Hapus" onclick="delete_person('."'".$person->id."'".')"><i class="glyphicon glyphicon-trash"></i></a>';
			}
			else if($this->data['is_admin'] == TRUE || $this->data['data_expert'] == TRUE) { 
				$row[] = '';
			}

			$data[] = $row;
		}

		$output = array(
						"draw" => isset($_POST['draw'])? $_POST['draw']: '',
						"recordsTotal" => $this->person->count_all(),
						"recordsFiltered" => $this->person->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->person->get_by_id($id);
		$data->dob = ($data->dob == '0000-00-00') ? '' : $data->dob; // if 0000-00-00 set tu empty for datepicker compatibility
		echo json_encode($data);
	}

	public function ajax_add()
	{
		$this->_validate();
		$data = array(
				'reg_no' => $this->input->post('reg_no'),
				'reg_date' => $this->input->post('reg_date'),
				'firstName' => $this->input->post('firstName'),
				'lastName' => $this->input->post('lastName'),
				'gender' => $this->input->post('gender'),
				'address' => $this->input->post('address'),
				'dob' => $this->input->post('dob'),
				'officer_id' => $this->data['officer_id']
			);
		$insert = $this->person->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$this->_validate();
		$data = array(
				'reg_no' => $this->input->post('reg_no'),
				'reg_date' => $this->input->post('reg_date'),
				'firstName' => $this->input->post('firstName'),
				'lastName' => $this->input->post('lastName'),
				'gender' => $this->input->post('gender'),
				'address' => $this->input->post('address'),
				'dob' => $this->input->post('dob'),
			);
		$this->person->update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->person->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}


	private function _validate()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		if($this->input->post('reg_no') == '')
		{
			$data['inputerror'][] = 'reg_no';
			$data['error_string'][] = 'Registration Number is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('reg_date') == '')
		{
			$data['inputerror'][] = 'reg_date';
			$data['error_string'][] = 'Registration Date is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('firstName') == '')
		{
			$data['inputerror'][] = 'firstName';
			$data['error_string'][] = 'First name is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('lastName') == '')
		{
			$data['inputerror'][] = 'lastName';
			$data['error_string'][] = 'Last name is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('dob') == '')
		{
			$data['inputerror'][] = 'dob';
			$data['error_string'][] = 'Date of Birth is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('gender') == '')
		{
			$data['inputerror'][] = 'gender';
			$data['error_string'][] = 'Please select gender';
			$data['status'] = FALSE;
		}

		if($this->input->post('address') == '')
		{
			$data['inputerror'][] = 'address';
			$data['error_string'][] = 'Addess is required';
			$data['status'] = FALSE;
		}

		if($data['status'] === FALSE)
		{
			echo json_encode($data);
			exit();
		}
	}

}
