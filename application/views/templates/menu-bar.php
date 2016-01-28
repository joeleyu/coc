<div class="col-md-2">
	<ul id="sidebar" class="nav nav-pills nav-stacked">
	<?php if($this->ion_auth->in_group('admin')) { ?>
	    <li class="active"><a href="<?php echo site_url('admin/Groups');?>">Groups</a></li>
	    <li class="active"><a href="<?php echo site_url('admin/Users');?>">Users</a></li>
	    <li class="active"><a href="<?php echo site_url('setting/asses_type');?>">Setting</a></li>
	<?php } ?>
	    <li class="active"><a href="<?php echo site_url('person');?>">Competents</a></li>
        <li><a href="<?php echo site_url('admin/user/profile');?>">Edit Profile</a></li>
        <li class="divider"></li>
        <li><a href="<?php echo site_url('admin/user/logout');?>">Logout</a></li>	    
    </ul>
</div>