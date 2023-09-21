<?php 

	session_start();
	
	if (file_exists('datospersonales.txt')) {
		
		unlink("datospersonales.txt");
		
		$_SESSION['mensaje'] = "El archivo datospersonales.txt eliminado con éxito";

	} else {

		$_SESSION['mensaje'] = "El archivo datospersonales.txt aún no ha sido creado";

	}

	$archivo = basename($_SERVER['PHP_SELF']);


	header("location: index.php");
	

 		
?>

