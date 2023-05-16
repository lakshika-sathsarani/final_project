<?php
	session_start();
	include_once('config.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM unloading WHERE id = '".$_GET['id']."'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'detail deleted successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting detail';
		}
	}
	else{
		$_SESSION['error'] = 'Select detail to delete first';
	}

	header('location: unloading.php');
?>