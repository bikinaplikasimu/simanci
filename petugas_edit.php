<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$uname = $_POST['username'];
		$pass = $_POST['password'];

		if(empty($pass)){
		$sql = "UPDATE petugas SET nama = '$nama', username = '$uname'  WHERE id_petugas = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Petugas updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}else{
		$hp=password_hash($pass, PASSWORD_DEFAULT);
		$sql = "UPDATE petugas SET nama = '$nama', username = '$uname', password='$hp'  WHERE id_petugas = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Petugas updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}

	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: petugas.php');

?>