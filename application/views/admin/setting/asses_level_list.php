<div class="col-md-10 main-col">
    <?php $this->load->view('admin/setting/partial/setting_nav'); ?>
    <h2 class="page-header">Assesment Level</h2>
    <a href="<?php echo base_url(); ?>index.php/setting/item_add/asses_level" class="btn btn-success btn-sm pull-right"><span class="glyphicon glyphicon-add "></span> Add New</a>
    <?php if(!empty($get_level)) { ?>
    <div class="bg-border">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                <th>#</th>
                <th>Value</th>
                <th></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($get_level as $r) { ?>
                <tr>                    
                    <td><?php echo $r->id;  ?></td>
                    <td><?php echo $r->level_val;  ?></td>
                    <td>
                    <a href="<?php echo base_url().'index.php/setting/item_edit/asses_level/'.$r->id ; ?>"><i class="glyphicon glyphicon-edit"></i></a> &nbsp;
                    <a onclick="return confirm('Are you sure?')" href="<?php echo base_url().'index.php/setting/remove_item/asses_level/'.$r->id ; ?>"><i class="glyphicon glyphicon-remove"></i></a>
                    </td>
                </tr>            
            <?php } ?>
            </tbody>
        </table>
        
    </div>
    
    <?php }
    else {
        echo '<p>No Record Found</p>';
        }
    ?>

</div>