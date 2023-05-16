<?php
	session_start();
	include_once('config.php');

	if(isset($_POST['add'])){
		$epfno = $_POST['epfno'];
		$starttime = $_POST['starttime'];
		$finishtime = $_POST['finishtime'];
		$sql = "INSERT INTO attendance (epfno, starttime, finishtime) VALUES ('$epfno', '$starttime', '$finishtime')";

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

	header('location: attendance.php');
?>



