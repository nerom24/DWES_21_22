<?php 
	/** 
	* 	@nombre: buscar.php 
	* 	@descripción: sólo búsca por nombre de usuario
	* 	@get: 
	*	@post: expresion - expresión de búsqueda
	**/ 

	#Incluimos plantilla
	include("plantilla.php");

	$plantilla = new plantilla (

		"Práctica 44 - Tema 4 - POO", 
		"Práctica 44 - Tema 4 - POO", 
		"Buscar Usuarios",
		"Juan Carlos - 2ºDAW 18/19"
	);

	#incluimos clase usuario y usuarios
	include ("classUsuarios.php");

	$expresion = $_POST['expresion'];

	#declaramos la lista vacía de usuarios
	$usuarios = new usuarios();
	$usuariosSel = new usuarios();

	#cargamos el array de objetos de tipo usuario
	$usuarios->loadUsuarios();

	$seleccion = $usuarios->buscar($expresion);

	foreach ($seleccion as $key => $value) {
		
		$usuariosSel->insertar($usuarios->getUsuario($value));

	}

	#Muestra usuarios
	$plantilla->indexUsuarios($usuariosSel);

	
?>

