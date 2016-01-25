<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Public_Controller
{
    var $data;

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('Form_validation');                
    }

    public function index()
    {
        $this->data['page_title'] = 'Home';
        $this->load->view('public/home_view', $this->data);

    }

    public function search()
    {
        $this->data['page_title'] = 'Competent Search Result';
        
        $this->load->model('search_model');

        if(isset($_POST['search-result']))
        {
            $this->form_validation->set_rules('bdate','Date Of Birth','trim|required');
            $this->form_validation->set_rules('reg_no','Registration Number','trim|required');

            if($this->form_validation->run() == FALSE){
                //show error
            }
            else{
             $this->load->model('result_model');
             $this->data['user_result'] = $this->search_model->search();
             $this->data['get_level'] = $this->result_model->get_level();
             $this->data['result_type'] = $this->result_model->get_result_type();
             $this->data['asses_type'] = $this->result_model->get_asses_type();               
            }
        }
        
        $this->load->view('public/home_view', $this->data);
    }    
}