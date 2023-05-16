<?php
	session_start();
	include_once('config.php');

	if(isset($_POST['add'])){
		$ifsno = $_POST['ifsno'];
		$tireno = $_POST['tireno'];
		$cstarttime = $_POST['cstarttime'];
        $cepfno = $_POST['cepfno'];
		$sql = "INSERT INTO cushion (ifsno, tireno, cstarttime, cepfno) VALUES ('$ifsno', '$tireno', '$cstarttime', '$cepfno')";

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

	header('location: cushion.php');
?>



