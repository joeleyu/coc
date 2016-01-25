<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $page_title;?></title>
        <link href="<?php echo base_url('css/bootstrap.min.css');?>" rel="stylesheet">
         <link href="<?php echo base_url('css/custom.css');?>" rel="stylesheet">      
        <script src="<?php echo base_url('js/jquery.js')?>"></script>
        <?php
        if($this->ion_auth->logged_in()) {
        ?>
        <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')?>" rel="stylesheet">
        <script src="<?php echo base_url('js/datatables.min.js')?>"></script>
        <?php
        }
        echo isset($before_head) ? $before_head : '';
        ?>
        <script src="<?php echo base_url('js/bootstrap.min.js');?>"></script>
    </head>
<body>

  <div class="header">
    <div class="container header-inner">   
    <ul class="nav nav-pills pull-right">
      <li class="active"><a href="<?php echo site_url('home');?>">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
        <?php
        if($this->ion_auth->logged_in()) {
        ?>
            <li><a href="<?php echo site_url('admin/user/profile');?>">
            <?php echo $this->ion_auth->user()->row()->username;?>
            </a></li>       
        <div class="clearfix"></div>
        <?php
        }
        else{
        ?>
        <li><a href="<?php echo site_url('admin/user/login');?>">Login</a></li>
        <?php
        }
        ?>          
    </ul>
    <h3 class="text-muted">
    <a href="<?php echo site_url('home');?>">COC Confirmation System</a></h3>
    </div>
  </div>

<div class="container main-container">      

    <?php if($this->session->flashdata('message')) {
        ?>
        <div class="container" style="padding-top:0px;">
            <div class="alert alert-info alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <?php echo $this->session->flashdata('message');?>
            </div>
        </div>
    <?php
    }

    if($this->ion_auth->logged_in()) {
     $this->load->view('templates/menu-bar'); 
    }
    ?>