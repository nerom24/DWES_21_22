<?php
    
    session_start();

	$fichero = 'datospersonales.txt';

	if (!file_exists($fichero)) {
			
		$_SESSION['mensaje'] = "El archivo datospersonales.txt no creado";
		header("location: index.php");

	} 

	$archivo = basename($_SERVER['PHP_SELF']);
    
	
 		
?>



