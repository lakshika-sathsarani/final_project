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
			<form method="POST" action="edit_quality.php">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Tire No:</label>
					</div>
					<div class="col-sm-10">
					<select name="tireno">
					<option value="BOC4563987">BOC4563987</option>
                       <option value="ZCM4528745">ZCM4528745</option>
					   <option value="QWE4563987">QWE4563987</option>
                       <option value="POI4528745">POI4528745</option>
                    </select>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Visual Inspection Check list:</label>
					</div>
				<div class="col-sm-10">
				   <select name="visualinspectionchecklist">
				       <option value="BOC4563987">BOC4563987</option>
                       <option value="ZCM4528745">ZCM4528745</option>
					   <option value="QWE4563987">QWE4563987</option>
                       <option value="POI4528745">POI4528745</option>
                    </select>
				</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Hardness:</label>
					</div>
					<div class="col-sm-10">
                        <select name="hardness">
                        <option value="BOC4563987">BOC4563987</option>
                        <option value="ZCM4528745">ZCM4528745</option>
                        <option value="QWE4563987">QWE4563987</option>
                        <option value="POI4528745">POI4528745</option>
                        </select>
					</div>
				</div>
                
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Ultrasonic Test results:</label>
					</div>
                    <div class="col-sm-10">
                      <select name="ultrasonictestresults">
					  <option value="BOC4563987">BOC4563987</option>
                       <option value="ZCM4528745">ZCM4528745</option>
					   <option value="QWE4563987">QWE4563987</option>
                       <option value="POI4528745">POI4528745</option>
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
				<h2 class="text-center"><?php echo $row['tireno']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete_quality.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>
