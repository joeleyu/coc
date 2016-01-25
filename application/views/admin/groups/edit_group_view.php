<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="col-md-10">
    <div class="row">
        <div class="col-md-6">
            <h1>Edit group</h1>
            <hr>
            <?php echo form_open('',array('class'=>''));?>
            <div class="form-group">
                <?php echo form_label('Group name','group_name');?>
                <?php echo form_error('group_name');?>
                <?php echo form_input('group_name',set_value('group_name',$group->name),'class="form-control"');?>
            </div>
            <div class="form-group">
                <?php echo form_label('Group description','group_description');?>
                <?php echo form_error('group_description');?>
                <?php echo form_input('group_description',set_value('group_description',$group->description),'class="form-control"');?>
            </div>
            <?php echo form_hidden('group_id',set_value('group_id',$group->id));?>
            <?php echo form_submit('submit', 'Edit group', 'class="btn btn-success btn-lg btn-block"');?>
            <?php echo form_close();?>
        </div>
    </div>
</div>