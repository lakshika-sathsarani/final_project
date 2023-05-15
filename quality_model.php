<!-- Add New -->
<div class="modal fade" id="addnewq" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
            </div>

            <div class="modal-body">
			<div class="container-fluid">

			<form method="POST" action="add.php">

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">IFSno:</label>
					</div>
					<div class="col-sm-10">
					<select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Tireno:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="tireno" required>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Starttime:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="starttime" required>
					</div>
				</div>
                
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">EPFno:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="epfno" required>
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
