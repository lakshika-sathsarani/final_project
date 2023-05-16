<?php
	session_start();
	include_once('config.php');

	if(isset($_POST['edit'])){
        $patchno = $_POST['patchno'];
		$ifsno = $_POST['ifsno'];
		$description = $_POST['description'];
		$orderqty = $_POST['orderqty'];
		$sql = "UPDATE product SET patchno = '$patchno' , ifsno = '$ifsno' , description = '$description' , orderqty= '$orderqty' WHERE patchno = '$patchno'";

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

	header('location: mproduct.php');

?>