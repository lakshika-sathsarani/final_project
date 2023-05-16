<?php
	session_start();
	include_once('config.php');

	if(isset($_POST['add'])){
		$ifsno = $_POST['ifsno'];
		$tireno = $_POST['tireno'];
		$ustarttime = $_POST['ustarttime'];
        $uepfno = $_POST['uepfno'];
		$sql = "INSERT INTO unloading (ifsno, tireno, ustarttime, uepfno) VALUES ('$ifsno', '$tireno', '$ustarttime', '$uepfno')";

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

	header('location: unloading.php');
?>



