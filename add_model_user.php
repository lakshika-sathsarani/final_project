<!-- Add New -->
<div class="modal fade" id="addnewUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
            </div>

            <div class="modal-body">
			<div class="container-fluid">



			<form method="POST" action="add_user.php">

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">First Name:</label>
					</div>
					<div class="col-sm-10">
                    <input type="text" class="form-control" name="firstname">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Last Name:</label>
					</div>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="lastname">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">EPF No:</label>
					</div>
					<div class="col-sm-10">
                    <input type="text" class="form-control" name="epfno">
					</div>
				</div>
                
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Phone:</label>
					</div>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="phone">
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
