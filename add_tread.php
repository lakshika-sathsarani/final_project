<?php
	session_start();
	include_once('config.php');

	if(isset($_POST['add'])){
		$ifsno = $_POST['ifsno'];
		$tireno = $_POST['tireno'];
		$finishtime = $_POST['finishtime'];
        $tepfno = $_POST['tepfno'];
		$sql = "INSERT INTO tread (ifsno, tireno, finishtime, tepfno) VALUES ('$ifsno', '$tireno', '$finishtime', '$tepfno')";

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

	header('location: tread.php');
?>



