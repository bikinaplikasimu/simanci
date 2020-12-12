<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$nm = $_POST['nama'];
		$uname = $_POST['username'];
		$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
		
		$sql = "INSERT INTO petugas (nama,username,password) VALUES ('$nm', '$uname','$pass')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Petugas added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: petugas.php');
?>