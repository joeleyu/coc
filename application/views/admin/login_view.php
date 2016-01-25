<div class="col-md-10">
    <div class="col-md-4">
        <h1>Login</h1>
        <hr>
        <?php echo $this->session->flashdata('message');?>
        <?php echo form_open('',array('class'=>''));?>
        <div class="form-group">
            <?php echo form_label('Username','identity');?>
            <?php echo form_input('identity','','class="form-control"');?>
            <?php echo form_error('identity');?>
        </div>
        <div class="form-group">
            <?php echo form_label('Password','password');?>
            <?php echo form_password('password','','class="form-control"');?>
            <?php echo form_error('password');?>
        </div>
        <div class="form-group">
            <label>
                <?php echo form_checkbox('remember','1',FALSE);?> Remember me
            </label>
        </div>
        <?php echo form_submit('submit', 'Log in', 'class="btn btn-primary btn-md btn-block"');?>
        <?php echo form_close();?>
    </div>
</div>