<?php
	include 'includes/session.php';

	$sql = "DELETE FROM his_key";
	if($conn->query($sql)){
		$_SESSION['success'] = "reset successfully";
	}
	else{
		$_SESSION['error'] = "Something went wrong in reseting";
	}

	header('location: his_kunci.php');

?>