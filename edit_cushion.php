<?php
	session_start();
	include_once('config.php');

	if(isset($_POST['edit'])){
        $ifsno = $_POST['ifsno'];
		$tireno = $_POST['tireno'];
		$cstarttime = $_POST['cstarttime'];
        $epfno = $_POST['epfno'];
		$sql = "UPDATE cushion SET ifsno = '$ifsno', tireno = '$tireno', cstarttime = '$cstarttime' , epfno = '$epfno' WHERE tireno = '$tireno'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'detail updated successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating detail';
		}
	}
	else{
		$_SESSION['error'] = 'Select detail to edit first';
	}

	header('location: cushion.php');

?>