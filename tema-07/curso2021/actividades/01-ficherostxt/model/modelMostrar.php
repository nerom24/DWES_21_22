<?php
	
	session_start();

	if (!file_exists('datospersonales.txt')) {

		$_SESSION['mensaje'] = "El archivo datospersonales.txt aún no está creado";
		header("location: index.php");

	} else {
	  
		$file = file("datospersonales.txt");
		
	  }
	  
    $archivo = basename($_SERVER['PHP_SELF']);
    
	
 		
?>



