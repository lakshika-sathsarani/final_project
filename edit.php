<?php
	session_start();
	include_once('config.php');

	if(isset($_POST['edit'])){
        $ifsno = $_POST['ifsno'];
		$tireno = $_POST['tireno'];
		$starttime = $_POST['starttime'];
        $epfno = $_POST['epfno'];
		$sql = "UPDATE base SET ifsno = '$ifsno', tireno = '$tireno', starttime = '$starttime' , epfno = '$epfno' WHERE id = '$id'";

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

	header('location: base.php');

?>