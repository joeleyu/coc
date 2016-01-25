<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $page_title;?></title>
        <link href="<?php echo base_url('css/bootstrap.min.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('css/local.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('css/style.css');?>" rel="stylesheet">        
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
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"
                   href="<?php echo site_url('home');?>"><?php echo $this->config->item('cms_title');?></a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#">Calendar</a></li>
                    <li><a href="#">News & Events</a></li>
                </ul>
                <?php
                if($this->ion_auth->logged_in()) {
                ?>
                <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $this->ion_auth->user()->row()->username;?> <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo site_url('admin/user/profile');?>">Profile page</a></li>
                            <?php echo $current_user_menu;?>
                            <li class="divider"></li>
                            <li><a href="<?php echo site_url('admin/user/logout');?>">Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <?php
                }
                ?>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
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
    ?>
<?php
if($this->ion_auth->logged_in()) {
 $this->load->view('templates/menu-bar'); 
}
 ?>
