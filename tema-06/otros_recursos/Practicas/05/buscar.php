<?php 
	/**
	* 	@nombre: buscar.php 
	* 	@descripción: muestra los elementos del array que cumplen la expresion
	* 	@get: 
	*	@post: expresion - expresión de búsqueda
	**/ 

	//Incluimos plantilla
	include("plantilla.php");

	//incluimos clase usuario y usuarios
	include ("classUsuarios.php");

	$expresion = $_POST['expresion'];

	
	$usuariosSel = new usuarios();

	session_start();
	$usuarios = $_SESSION['arrayUsuarios'];

	$seleccion = $usuarios->buscar($expresion);

	foreach ($seleccion as $key => $value) {
		
		$usuariosSel->insertar($usuarios->getUsuario($value));

	}

	plantilla($usuariosSel);

	
?>

