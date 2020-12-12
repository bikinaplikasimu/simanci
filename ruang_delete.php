<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM ruang WHERE id_ruang = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Ruang deleted successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select item to delete first';
	}

	header('location: ruang.php');
	
?>