<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM petugas WHERE id_petugas = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Petugas deleted successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select item to delete first';
	}

	header('location: petugas.php');
	
?>