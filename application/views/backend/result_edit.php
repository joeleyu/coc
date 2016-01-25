<?php 
//$specific_field = isset($_POST['specific_field']) ?  $this->input->post('specific_field') : '0';
foreach ($user_result as $v) {
    $level = $v->level;
    $type = $v->type;
    $result= $v->result;
}
?>
<div class="col-md-10 main-col">
    <h2 class="page-title">Edit Result - <?php echo $comptent_id ?></h2>
    <hr/>
    <?php echo form_open('result/edit/'.$comptent_id.'/'.$rid, array('role'=>"form","class"=>"form-horizontal", 'autocomplete'=>"off" ));?>
    <?php echo $this->session->flashdata('msg'); ?>       

    <div class="form-group">
        <label for="get_level" class="col-sm-2 control-label">Level</label>
        <div class="col-sm-10">
            <select id="get_level" class="form-control" name="get_level">
                <?php 
                foreach ($get_level as $l) {
                    if( $l->id == $level || $this->input->post('get_level') == $l->id)
                        echo '<option  selected value="'.$l->id.'">'.$l->level_val.'</option>';
                    else
                        echo '<option value="'.$l->id.'">'.$l->level_val.'</option>';
                }
                ?>
            </select>             
        </div>
    </div>

    <div class="form-group">
        <label for="asses_type" class="col-sm-2 control-label">Type</label>
        <div class="col-sm-10">
            <select id="asses_type" class="form-control" name="asses_type">
                <?php 
                foreach ($asses_type as $l) {
                    if( $l->id == $type || $this->input->post('asses_type') == $l->id)
                        echo '<option  selected value="'.$l->id.'">'.$l->type_val.'</option>';
                    else
                        echo '<option value="'.$l->id.'">'.$l->type_val.'</option>';
                }
                ?>
            </select>             
        </div>
    </div> 

    <div class="form-group">
        <label for="result_type" class="col-sm-2 control-label">Result</label>
        <div class="col-sm-10">
            <select id="result_type" class="form-control" name="result_type">
                <?php 
                foreach ($result_type as $l) {
                    if( $l->id == $result || $this->input->post('result_type') == $l->id)
                        echo '<option  selected value="'.$l->id.'">'.$l->res_val.'</option>';
                    else
                        echo '<option value="'.$l->id.'">'.$l->res_val.'</option>';
                }
                ?>
            </select>             
        </div>
    </div>        

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <input class="btn btn-success" name="edit-result" value="Submit" type="submit">
        </div>
    </div>
    </form>     
</div>