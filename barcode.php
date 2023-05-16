<html>
<head>
<style>
p.inline {display: inline-block;}
span { font-size: 13px;}
</style>
<style type="text/css" media="print">
    @page 
    {
        size: auto;   /* auto is the initial value */
        margin: 0mm;  /* this affects the margin in the printer settings */

    }
</style>
</head>
<body onload="window.print();">
	<div style="margin-left: 5%">
		<?php
		include 'generate.php';
		$tireno = $_POST['tireno'];
		$visualinspectionchecklist = $_POST['visualinspectionchecklist'];
		$hardness = $_POST['hardness'];
        $ultrasonictestresults = $_POST['ultrasonictestresults'];
		$rate = $_POST['rate'];

		for($i=1;$i<=$_POST['print_qty'];$i++){
			echo "<p class='inline'><span ><b> </b></span>".bar128(stripcslashes($_POST['tireno']))."<span ><b> ".$rate." </b><span></p>&nbsp&nbsp&nbsp&nbsp";
		}

		?>
	</div>
</body>
</html>