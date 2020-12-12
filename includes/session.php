<?php
	session_start();
	include 'includes/conn.php';

	if(!isset($_SESSION['iduser']) || trim($_SESSION['iduser']) == ''){
		header('location: index.php');
	}

	$sql = "SELECT * FROM petugas WHERE id_petugas = '".$_SESSION['iduser']."'";
	$query = $conn->query($sql);
	$user = $query->fetch_assoc();
	
?>
