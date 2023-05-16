<?php
	session_start();
	include_once('config.php');

	if(isset($_POST['edit'])){
        $ifsno = $_POST['ifsno'];
		$tireno = $_POST['tireno'];
		$ustarttime = $_POST['ustarttime'];
        $uepfno = $_POST['uepfno'];
		$sql = "UPDATE unloading SET ifsno = '$ifsno', tireno = '$tireno', ustarttime = '$ustarttime' , uepfno = '$uepfno' WHERE tireno = '$tireno'";

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

	header('location: unloading.php');

?>