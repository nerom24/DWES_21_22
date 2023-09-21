<?php
	
	session_start();

	if (isset($_SESSION['mensaje'])) {

		$mensaje = $_SESSION['mensaje'];
		unset($_SESSION['mensaje']);
	}

	$archivo = basename($_SERVER['PHP_SELF']);
?> 


