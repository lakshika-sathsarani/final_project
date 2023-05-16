<!-- Add New -->
<div class="modal fade" id="addnewProduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
            </div>

            <div class="modal-body">
			<div class="container-fluid">

			<form method="POST" action="add_product.php">

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Patch no:</label>
					</div>
					<div class="col-sm-10">
					    <input type="text" class="form-control" name="patchno" >
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">IFS no:</label>
					</div>
				<div class="col-sm-10">
                    <input type="text" class="form-control" name="ifsno" >
				</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Discription:</label>
					</div>
					<div class="col-sm-10">
                    <input type="text" class="form-control" name="description">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Order Qty:</label>
					</div>
					<div class="col-sm-10">
                    <input type="text" class="form-control" name="orderqty">
					</div>
				</div>
                

                </div> <!-- //container-fluid -->
                </div> <!-- // Body -->

                <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                <button type="submit" name="add" class="btn btn-primary">
                <span class="glyphicon glyphicon-floppy-disk"></span> Save</a></button>

                

		    </form>





            </div>

        </div>
    </div>
</div>
