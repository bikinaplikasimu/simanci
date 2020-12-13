<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$idr = $_POST['idr'];
		$kode = $_POST['kode'];
		$ket = $_POST['ket'];

		$sql = "UPDATE kunci SET id_ruang = '$idr', kode = '$kode', keterangan = '$ket'  WHERE id_kunci = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Kunci updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: kunci.php');

?>