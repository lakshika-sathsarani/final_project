<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP Barcode Generator Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color:gray;">

<div class="container">
  <div style="margin: 10%;">
  	<h2 class="text-center">PHP BARCODE GENERATOR</h2>
  	<form class="form-horizontal" method="post" action="barcode.php" target="_blank">
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
    <div class="form-group">
      <label class="control-label col-sm-2" for="print_qty">Barcode Quantity</label>
      <div class="col-sm-10">          
        <input autocomplete="OFF" type="print_qty" class="form-control" id="print_qty"  name="print_qty" required="">
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
  </div>
</div>

</body>
</html>
