<?php
	session_start();
	include_once('config.php');

	if(isset($_POST['add'])){
        $firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$epfno = $_POST['epfno'];
        $phone = $_POST['phone'];
		$sql = "INSERT INTO user ( firstname, lastname, epfno, phone) VALUES ( '$firstname', '$lastname', '$epfno', '$phone')";

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

	header('location: user.php');
?>



