<?php
	session_start();
	include_once('config.php');

	if(isset($_POST['edit'])){
        $tireno = $_POST['tireno'];
		$visualinspectionchecklist = $_POST['visualinspectionchecklist'];
		$hardness = $_POST['hardness'];
        $ultrasonictestresults = $_POST['ultrasonictestresults'];
		$sql = "UPDATE quality SET tireno = '$tireno' , visualinspectionchecklist = '$visualinspectionchecklist' , hardness = '$hardness' , ultrasonictestresults = '$ultrasonictestresults' WHERE tireno = '$tireno'";

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

	header('location: quality.php');

?>