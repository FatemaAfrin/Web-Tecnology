<?php 

	session_start();

	if (isset($_SESSION['uname'])) {
		session_destroy();
		header("location:Login page.php");
	}
	else{
		header("location:Login page.php");
	}

 ?>