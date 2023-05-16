<?php
	session_start();
	include_once('config.php');

	if(isset($_POST['add'])){
		$ifsno = $_POST['ifsno'];
		$tireno = $_POST['tireno'];
		$starttime = $_POST['starttime'];
        $epfno = $_POST['epfno'];
		$sql = "INSERT INTO base (ifsno, tireno, starttime, epfno) VALUES ('$ifsno', '$tireno', '$starttime', '$epfno')";

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

	header('location: base.php');
?>



