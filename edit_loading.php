<?php
	session_start();
	include_once('config.php');

	if(isset($_POST['edit'])){
        $ifsno = $_POST['ifsno'];
		$tireno = $_POST['tireno'];
		$lstarttime = $_POST['lstarttime'];
        $lepfno = $_POST['lepfno'];
		$sql = "UPDATE loading SET ifsno = '$ifsno', tireno = '$tireno', lstarttime = '$lstarttime' , lepfno = '$lepfno' WHERE tireno = '$tireno'";

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

	header('location: loading.php');

?>