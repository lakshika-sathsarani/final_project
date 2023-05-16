<!-- Add New -->
<div class="modal fade" id="addnewUnloading" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
            </div>

            <div class="modal-body">
			<div class="container-fluid">



			<form method="POST" action="add_unloading.php">

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">IFSno:</label>
					</div>
					<div class="col-sm-10">
					<select name="ifsno" class="form-control">
						<?php  
							$select_product = mysqli_query($conn, "SELECT * FROM `product`") or die('query failed');
							if(mysqli_num_rows($select_product) > 0){
								while($fetch_product = mysqli_fetch_assoc($select_product)){
						?>
						<form action="add_unloading.php" method="post">
							<?php echo $fetch_product['ifsno']; ?>
							<option value="<?php echo $fetch_product['ifsno'];?>"><?php echo $fetch_product['ifsno']; ?></option>
						</form>
						<?php
							}
						}else{
							echo '<p class="empty">no products added yet!</p>';
						}
						?>
                    </select>
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Tire no:</label>
					</div>
				<div class="col-sm-10">
				<select name="tireno" class="form-control">
						<?php  
							$select_tireno = mysqli_query($conn, "SELECT * FROM `base`") or die('query failed');
							if(mysqli_num_rows($select_tireno) > 0){
								while($fetch_tireno = mysqli_fetch_assoc($select_tireno)){
						?>
						<form action="add_unloading.php" method="post">
							<?php echo $fetch_tireno['tireno']; ?>
							<option value="<?php echo $fetch_tireno['tireno'];?>"><?php echo $fetch_tireno['tireno']; ?></option>
						</form>
						<?php
							}
						}else{
							echo '<p class="empty">no products added yet!</p>';
						}
						?>
                    </select>
				</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Start time:</label>
					</div>
					<div class="col-sm-10">
						<input type="datetime-local" class="form-control" name="ustarttime" required>
					</div>
				</div>
                
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">EPF no:</label>
					</div>
                    <div class="col-sm-10">
                      <select name="uepfno" class="form-control">
					  <option value="cal4563987">cal4563987</option>
                       <option value="xal4528745">xal4528745</option>
					   <option value="tal4563987">tal4563987</option>
                       <option value="ral4528745">ral4528745</option>
                     </select>
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
