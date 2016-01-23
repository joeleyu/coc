<div class="container">
    <div class="col-md-9">
        <h2>Welcome to COC Agency</h2>
        Sub-heading Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
        Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. 
        Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
        <br><br>
        <h2>Official Certification Verification</h2>
        <hr>
        <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
                <label for="fullname">Full Name:</label>
                <input type="text" class="form-control" placeholder="">
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
    <div class="row">
        <div class="col-md-3">
            <h1>Login</h1>
            <hr>
            <?php echo $this->session->flashdata('message');?>
            <?php echo form_open('',array('class'=>'form-horizontal'));?>
            <div class="form-group">
                <?php echo form_label('Username','identity');?>
                <?php echo form_error('identity');?>
                <?php echo form_input('identity','','class="form-control"');?>
            </div>
            <div class="form-group">
                <?php echo form_label('Password','password');?>
                <?php echo form_error('password');?>
                <?php echo form_password('password','','class="form-control"');?>
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
</div>