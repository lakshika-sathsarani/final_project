<?php
	session_start();
	include_once('config.php');

	if(isset($_POST['add'])){
		$ifsno = $_POST['ifsno'];
		$tireno = $_POST['tireno'];
		$visualinspectionchecklist = $_POST['visualinspectionchecklist'];
		$hardness = $_POST['hardness'];
        $ultrasonictestresults = $_POST['ultrasonictestresults'];
		$sql = "INSERT INTO quality (ifsno, tireno, visualinspectionchecklist, hardness, ultrasonictestresults) VALUES ('$ifsno' , '$tireno', '$visualinspectionchecklist', '$hardness', '$ultrasonictestresults')";

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

	header('location: quality.php');
?>



