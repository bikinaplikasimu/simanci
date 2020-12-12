<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$idr = $_POST['idr'];
		$kode = $_POST['kode'];
		$ket = $_POST['ket'];

		$sql = "INSERT INTO kunci (id_ruang, kode, keterangan) VALUES ('$idr', '$kode', '$ket')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Kunci added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: kunci.php');
?>