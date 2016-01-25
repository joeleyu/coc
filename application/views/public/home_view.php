<?php defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('templates/_parts/admin_master_header_view'); 
?>

   <div class="col-md-9">
        <h2>Official Certification Verification</h2>
        <hr>
        <?php echo form_open('home/search', array("class"=>"col-md-5", "role"=>"search")); ?>
        <?php echo $this->session->flashdata('message');?>
            <div class="form-group">
                <label for="fullname">Registration Number:</label>
                <input required="required" type="text" class="form-control" placeholder="" name="reg_no" value="<?php echo isset($_POST['reg_no'])? $this->input->post('reg_no'):''; ?>">
                <span class="text-danger"><?php echo form_error('reg_no');?></span>
            </div>

            <div class="form-group">
                <label for="fullname">Birth Date</label>
                <input required="required" type="text" class="form-control" placeholder="D-M-Y" name="bdate" value="<?php echo isset($_POST['bdate'])? $this->input->post('bdate'):''; ?>">
                <span class="text-danger"><?php echo form_error('bdate');?></span>
            </div>            

            <button type="submit" name="search-result" class="btn btn-success">Search</button>
        </form>
        <div class="col-md-5">
        <?php if (isset($_POST['reg_no']) ) { ?>
        <h3>Search Result</h3> <hr/>
        <?php if(!empty($user_result)) { ?>
            <?php foreach ($user_result as $r) {
                echo 'Reg No - '.$r->reg_no.'<br/>';
                echo 'Level -  '.$r->level.'<br/>';
                echo 'Type - '.$r->type.'<br/>';
                echo 'Result - '.$r->result.'<br/>';
                echo '<hr/>';
            }
            ?>
            
        <?php }
        else{
            echo '<p class="alert alert-danger">No Result Found</p>';
            } 
        }
        ?>
        </div>
        <div class="clearfix"></div>

        <h2>Welcome to COC Agency</h2>
        Sub-heading Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
        Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. 
        Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
        <br><br>

    </div>

<?php $this->load->view('templates/_parts/admin_master_footer_view');  ?>