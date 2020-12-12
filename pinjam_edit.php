<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$idp = $_POST['idp'];
		$idk = $_POST['idk'];
		$tglp = $_POST['tglpinjam'];
		$ket = $_POST['keterangan'];

		$sql = "UPDATE his_key SET id_petugas = '$idp', id_kunci='$idk', tgl_pjm='$tglp', keterangan = '$ket'  WHERE id_hk = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Pinjam updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: pinjam.php');

?>