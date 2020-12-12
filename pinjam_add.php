<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$idp = $_POST['idp'];
		$idk = $_POST['idk'];
		$tglp = $_POST['tglpinjam'];
		$ket = $_POST['keterangan'];
		
		$sql = "INSERT INTO his_key (id_petugas,id_kunci,tgl_pjm,keterangan) VALUES ('$idp', '$idk', '$tglp', '$ket')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Pinjam added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: pinjam.php');
?>