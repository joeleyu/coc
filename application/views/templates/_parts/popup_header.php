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
        ?>
        <script src="<?php echo base_url('js/bootstrap.min.js');?>"></script>
    </head>
<body style="margin-bottom: 0px;">