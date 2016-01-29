<?php defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('templates/_parts/admin_master_header_view'); ?>

<div class="col-lg-8 col-sm-8">
        <?php $attributes = array("class" => "form-horizontal", "name" => "home");
        echo form_open("home/contact", $attributes);?>
        <fieldset>
        <legend>Contact Form</legend>
        <div class="form-group">
            <div class="col-md-12">
                <label for="name" class="control-label">Name</label>
            </div>
            <div class="col-md-12">
                <input class="form-control" name="name" placeholder="Your Full Name" type="text" value="<?php echo set_value('name'); ?>" />
                <span class="text-danger"><?php echo form_error('name'); ?></span>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <label for="email" class="control-label">Email</label>
            </div>
            <div class="col-md-12">
                <input class="form-control" name="email" placeholder="Your Email" type="text" value="<?php echo set_value('email'); ?>" />
                <span class="text-danger"><?php echo form_error('email'); ?></span>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <label for="subject" class="control-label">Subject</label>
            </div>
            <div class="col-md-12">
                <input class="form-control" name="subject" placeholder="Your Subject" type="text" value="<?php echo set_value('subject'); ?>" />
                <span class="text-danger"><?php echo form_error('subject'); ?></span>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <label for="message" class="control-label">Message</label>
            </div>
            <div class="col-md-12">
                <textarea class="form-control" name="message" rows="4" placeholder="Your Message"><?php echo set_value('message'); ?></textarea>
                <span class="text-danger"><?php echo form_error('message'); ?></span>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <input name="submit" type="submit" class="btn btn-success" value="Send" />
            </div>
        </div>
        </fieldset>
        <?php echo form_close(); ?>
        <?php echo $this->session->flashdata('msg'); ?>
</div>
<div class="clearfix"></div>
   
<?php $this->load->view('templates/_parts/admin_master_footer_view');  ?>