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

    public function about()
    {
        $this->data['page_title'] = 'About';
        $this->load->view('public/about', $this->data);

    }

    function contact()
    {
        $this->data['page_title'] = 'Contact Us';
        //set validation rules
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Emaid ID', 'trim|required|valid_email');
        $this->form_validation->set_rules('subject', 'Subject', 'trim|required');
        $this->form_validation->set_rules('message', 'Message', 'trim|required');
        
        //run validation on post data
        if ($this->form_validation->run() == FALSE)
        {   //validation fails
            $this->load->view('public/contact', $this->data);
        }
        else
        {
            //insert the contact form data into database
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'subject' => $this->input->post('subject'),
                'message' => $this->input->post('message')
            );

            if ($this->db->insert('contacts', $data))
            {
                // success
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">We received your message! Will get back to you shortly!!!</div>');
                redirect('home/contact');
            }
            else
            {
                // error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Some Error.  Please try again later!!!</div>');
                redirect('home/contact');
            }
        }
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
             $this->load->model('setting_model');
             $this->data['user_result'] = $this->search_model->search();
             $this->data['get_level'] = $this->setting_model->get_level();
             $this->data['result_type'] = $this->setting_model->get_result_type();
             $this->data['asses_type'] = $this->setting_model->get_asses_type();               
            }
        }
        
        $this->load->view('public/home_view', $this->data);
    }    
}