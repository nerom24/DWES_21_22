<?php 
	/**
	* 	@nombre: ordenar.php 
	* 	@descripción: ordenar según criterio seleccionado 
	* 	@get: criterio - Usuario, Email, Tipo, Clave
	**/ 
	
	

	//incluimos clase usuario y usuarios
	include ("classUsuarios.php");

	session_start();
	$usuarios = $_SESSION['arrayUsuarios'];

	//id del objeto a eliminar
	$criterio = $_GET['criterio'];
	
	
	
	switch ($criterio) {

		case 'Usuario':
			$usuarios->ordenarPorUsuario();
			break;
		case 'Email':
			$usuarios->ordenarPorEmail();
			break;
		case 'Tipo':
			$usuarios->ordenarPorTipo();
			break;
		case 'Clave':
			$usuarios->ordenarPorClave();
			break;
	}
	
	header('location: acceso.php');


?>
