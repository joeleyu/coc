<div class="col-md-2">
	<ul id="sidebar" class="nav nav-pills nav-stacked" style="max-width: 200px;">
	<?php if($this->ion_auth->in_group('admin')) { ?>
	    <li class="active"><a href="<?php echo site_url('admin/Groups');?>">Groups</a></li>
	    <li class="active"><a href="<?php echo site_url('admin/Users');?>">Users</a></li>
	<?php } ?>
	    <li class="active"><a href="<?php echo site_url('person');?>">Competent</a></li>
	    <li class="active"><a href="#">Cources</a></li>
    </ul>
</div>