<!-- Add New -->
<div class="modal fade" id="addnewQuality" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
            </div>

            <div class="modal-body">
			<div class="container-fluid">

			<form method="POST" action="add_quality.php">

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
						<form action="add_quality.php" method="post">
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
						<label class="control-label modal-label">Visual Inspection Check list:</label>
					</div>
				<div class="col-sm-10">
				   <select name="visualinspectionchecklist" class="form-control">
				       <option value="spew">spew</option>
                       <option value="offset">offset</option>
					   <option value="B/G">B/G</option>
                       <option value="A/T">A/T</option>
                       <option value="S/M">S/M</option>
                       <option value="B/H">B/H</option>
                       <option value="B/M">B/M</option>
                       <option value="C/V">C/V</option>
                       <option value="M/D">M/D</option>
                    </select>
				</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Hardness:</label>
					</div>
					<div class="col-sm-10">
                        <select name="hardness" class="form-control">
                        <option value="01">01</option>
                        <option value="02">02</option>
                        </select>
					</div>
				</div>
                
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Ultrasonic Test results:</label>
					</div>
                    <div class="col-sm-10">
                      <select name="ultrasonictestresults" class="form-control">
					  <option value="1">1</option>
                       <option value="2">2</option>
					   <option value="3">3</option>
                       <option value="4">4</option>
                       <option value="Hot/Normal">Hot/Normal</option>
                     </select>
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
