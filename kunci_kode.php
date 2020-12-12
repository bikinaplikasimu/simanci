<?php
	include 'includes/session.php';

	if(isset($_POST['update'])){
		$id = $_POST['id'];
		$kode = $_POST['kode'];

		$sql = "UPDATE kunci SET kode = '$kode' WHERE id_kunci = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Kode updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Kode update gagal';
	}

	header('location: kunci.php');
?>