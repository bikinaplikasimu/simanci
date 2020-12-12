<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$nm = $_POST['namaruang'];
		$ket = $_POST['keterangan'];
		
		$sql = "INSERT INTO ruang (nm_ruang,keterangan) VALUES ('$nm', '$ket')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Ruang added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: ruang.php');
?>