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
		include 'generate_barcode.php';
		$ifsno = $_POST['ifsno'];
		$tireno = $_POST['tireno'];
		
		for($i=1;$i<=$_POST['print_qty'];$i++){
			echo "<p class='inline'><span ><b> $ifsno</b></span>".bar128(stripcslashes($_POST['tireno']))."</p>&nbsp&nbsp&nbsp&nbsp";
		}

		?>
	</div>
</body>
</html>