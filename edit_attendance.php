<?php
	session_start();
	include_once('config.php');

	if(isset($_POST['edit'])){
        $epfno = $_POST['epfno'];
		$$starttime = $_POST['starttime'];
		$finishtime = $_POST['finishtime'];
		$sql = "UPDATE attendance SET epfno = '$epfno', starttime = '$starttime', finishtime = '$finishtime' WHERE epfno = '$epfno'";

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

	header('location: attendance.php');

?>