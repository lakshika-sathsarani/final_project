<?php
	session_start();
	include_once('config.php');

	if(isset($_POST['add'])){
		$patchno = $_POST['patchno'];
		$ifsno = $_POST['ifsno'];
		$description = $_POST['description'];
		$orderqty = $_POST['orderqty'];
		$sql = "INSERT INTO product (patchno, ifsno, description, orderqty ) VALUES ('$patchno', '$ifsno', '$description', '$orderqty')";

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

	header('location: mproduct.php');
?>



