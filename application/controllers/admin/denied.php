<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Denied extends Admin_Controller
{
    var $data;

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->data['page_title'] = 'Access Denied';
        $this->render('admin/denied');
	}
}