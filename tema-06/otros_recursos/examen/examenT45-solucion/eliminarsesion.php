<?php 
	session_start();
	unset($_SESSION['email']);
	unset($_SESSION['user']);
	unset($_SESSION['clave']);
	unset($_SESSION['email']);
	session_destroy();
	header("location: index.php");
 ?>