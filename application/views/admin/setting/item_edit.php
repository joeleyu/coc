<?php 
foreach ($item_val as $v) {
    $id = $v->id;
    if($item_type == 'asses_type'){
        $item_value = $v->type_val;
    }
    else if($item_type == 'asses_level'){
        $item_value = $v->level_val;
    }
    else if($item_type == 'asses_result'){
        $item_value = $v->res_val;
    }    
}
?>
<div class="col-md-10 main-col">
    <h2 class="page-title">Edit <?php echo $item_name; ?></h2>
    <hr/>
    <?php echo form_open('setting/item_edit/'.$item_type.'/'.$id, array('role'=>"form","class"=>"form-horizontal", 'autocomplete'=>"off" ));?>
    <?php echo $this->session->flashdata('msg'); ?>       

    <div class="form-group">
        <label for="item_val" class="col-sm-2 control-label">Value</label>
        <div class="col-sm-10">
            <input id="item_val" type="text" value="<?php echo $item_value; ?>" name="item_val" class="form-control" >             
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <input class="btn btn-success" name="edit-item" value="Submit" type="submit">
        </div>
    </div>
    </form>     
</div>