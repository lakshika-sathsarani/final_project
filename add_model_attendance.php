<!-- Add New -->
<div class="modal fade" id="addnewAttendance" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
            </div>

            <div class="modal-body">
			<div class="container-fluid">



			<form method="POST" action="add_attendance.php">

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">EPFno:</label>
					</div>
					<div class="col-sm-10">
					<select name="epfno" class="form-control">
					<option value="BOC4563987">BOC4563987</option>
                       <option value="ZCM4528745">ZCM4528745</option>
					   <option value="QWE4563987">QWE4563987</option>
                       <option value="POI4528745">POI4528745</option>
                    </select>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Starttime:</label>
					</div>
                    <div class="col-sm-10">
						<input type="datetime-local" class="form-control" name="starttime" required>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Finishtime:</label>
					</div>
					<div class="col-sm-10">
						<input type="datetime-local" class="form-control" name="finishtime" required>
					</div>
				</div>
                
               
            </div> <!-- //container-fluid -->
			</div> <!-- // Body -->

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel
                </button>

                <button type="submit" name="add" class="btn btn-primary">
                	<span class="glyphicon glyphicon-floppy-disk"></span> Save</a>

		 </form>





            </div>

        </div>
    </div>
</div>
