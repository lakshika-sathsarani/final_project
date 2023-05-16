<?php
	session_start();
	include_once('config.php');

	if(isset($_POST['edit'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
		$epfno = $_POST['epfno'];
        $phone = $_POST['phone'];
		$sql = "UPDATE user SET firstname = '$firstname', lastname = '$lastname', epfno = '$epfno', phone = '$phone' WHERE epfno = '$epfno'";

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

	header('location: user.php');

?>