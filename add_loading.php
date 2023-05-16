<?php
	session_start();
	include_once('config.php');

	if(isset($_POST['add'])){
		$ifsno = $_POST['ifsno'];
		$tireno = $_POST['tireno'];
		$lstarttime = $_POST['lstarttime'];
        $lepfno = $_POST['lepfno'];
		$sql = "INSERT INTO loading (ifsno, tireno, lstarttime, lepfno) VALUES ('$ifsno', '$tireno', '$lstarttime', '$lepfno')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Details added successfully';
		}
		

		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: loading.php');
?>



