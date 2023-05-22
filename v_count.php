<div class="modal fade" id="count_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Count details</h4></center>
            </div>
            <div class="modal-body">
                <?php 
                    $select_ifs = mysqli_query($conn, "SELECT * FROM `base`WHERE ifsno = 'MOIU-82014'") or die('query failed');
                    $number_of_ifs = mysqli_num_rows($select_ifs);
                ?>
                <center>
                    <h2><?php echo $number_of_ifs; ?></h2>
                    
                </center>
			</div>
            
        </div>
    </div>
</div>
