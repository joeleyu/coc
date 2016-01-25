<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Public_Controller
{
    var $data;

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->data['page_title'] = 'Home';
        $this->load->view('public/home_view', $this->data);

    }
}