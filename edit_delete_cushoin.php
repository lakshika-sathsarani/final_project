<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit details</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit_cushion.php">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">IFS no:</label>
                    </div>
                    <div class="col-sm-10">
                        <select name="ifsno">
                        <option value="<?php echo $row['ifsno']; ?>">BOC4563987</option>
                        <option value="<?php echo $row['ifsno']; ?>">ZCM4528745</option>
                        <option value="<?php echo $row['ifsno']; ?>">QWE4563987</option>
                        <option value="<?php echo $row['ifsno']; ?>">POI4528745</option>
                        </select>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Tire no:</label>
					</div>
					<div class="col-sm-10">
                    <select name="tireno">
                        <option value="<?php echo $row['tireno']; ?>">BOC4563987</option>
                        <option value="<?php echo $row['tireno']; ?>">ZCM4528745</option>
                        <option value="<?php echo $row['tireno']; ?>">QWE4563987</option>
                        <option value="<?php echo $row['tireno']; ?>">POI4528745</option>
                        </select>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Start time:</label>
					</div>
					<div class="col-sm-10">
                    <input type="datetime-local" class="form-control" name="cstarttime" value="<?php echo $row['cstarttime']; ?>" required>
					</div>
				</div>

                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">EPF no:</label>
					</div>
					<div class="col-sm-10">
                    <select name="cepfno">
                        <option value="<?php echo $row['epfno']; ?>">BOC4563987</option>
                        <option value="<?php echo $row['epfno']; ?>">ZCM4528745</option>
                        <option value="<?php echo $row['epfno']; ?>">QWE4563987</option>
                        <option value="<?php echo $row['epfno']; ?>">POI4528745</option>
                        </select>
					</div>
				</div>

            </div>
			</div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete details</h4></center>
            </div>
            <div class="modal-body">
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['ifsno'].' '.$row['tireno']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete_cushion.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>
