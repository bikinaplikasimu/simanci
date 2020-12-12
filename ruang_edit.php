<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$namaruang = $_POST['namaruang'];
		$keterangan = $_POST['keterangan'];

		$sql = "UPDATE ruang SET nm_ruang = '$namaruang', keterangan = '$keterangan'  WHERE id_ruang = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Ruang updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: ruang.php');

?>