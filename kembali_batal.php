<?php
	include 'includes/session.php';

	if(isset($_POST['cancel'])){
		$id = $_POST['id'];
		$sql = "UPDATE his_key set status='pinjam' WHERE id_hk = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Berhasil dikembalikan';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select item to delete first';
	}

	header('location: kembali.php');
	
?>