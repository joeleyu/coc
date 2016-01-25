<div class="col-md-10 main-col">
    <h2 class="page-header">Competent Result - <?php echo $comptent_id; ?></h2>
    <a href="<?php echo base_url(); ?>index.php/result/add/<?php echo $comptent_id; ?>" class="btn btn-warning pull-right"><span class="glyphicon glyphicon-add "></span> Add Result</a>
    <?php if(!empty($user_result)) { ?>
    <div class="bg-border">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                <th>Level</th>
                <th>Type</th>
                <th>Result</th>
                <th>Date</th>
                <th>Exp. Date</th>
                <th></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($user_result as $r) { ?>
                <tr>
                    <?php 
                    foreach ($get_level as $l) {
                        if($r->level == $l->id)
                            echo '<td>'.$l->level_val.'</td>';
                    }
                    ?>
                    <?php 
                    foreach ($asses_type as $l) {
                        if($r->type == $l->id)
                            echo '<td>'.$l->type_val.'</td>';
                    }
                    ?>  

                    <?php 
                    foreach ($result_type as $l) {
                        if($r->result == $l->id)
                            echo '<td>'.$l->res_val.'</td>';
                    }
                    ?>                                     
                    
                    <td><?php echo $r->date;  ?></td>
                    <td><?php echo $r->exp_date;  ?></td>
                    <td>
                    <a href="<?php echo base_url().'index.php/result/edit/'.$comptent_id.'/'.$r->id ; ?>"><i class="glyphicon glyphicon-edit"></i></a> &nbsp;
                    <a onclick="return confirm('Are you sure?')" href="<?php echo base_url().'index.php/result/remove/'.$comptent_id.'/'.$r->id ; ?>"><i class="glyphicon glyphicon-remove"></i></a>
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