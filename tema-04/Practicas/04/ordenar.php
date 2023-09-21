<?php 
	/**
	* 	@nombre: ordenar.php 
	* 	@descripción: ordenar según criterio seleccionado 
	* 	@get: criterio - Usuario, Email, Tipo, Clave
	**/ 
	
	//Incluimos plantilla y funciones 
	include("plantilla.php");

	$plantilla = new plantilla (

		"Práctica 44 - Tema 4 - POO", 
		"Práctica 44 - Tema 4 - POO", 
		"Ordenar Usuarios",
		"Juan Carlos - 2ºDAW 18/19"
	);

	//incluimos clase usuario y usuarios
	include ("classUsuarios.php");

	//Extraigo el criterio de ordenación método GET en url
	$criterio = $_GET['criterio'];
	
	//declaramos la lista vacía de usuarios
	$usuarios = new usuarios();

	//cargamos el array de objetos de tipo usuario
	$usuarios->loadUsuarios();
	
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
	
	#Muestrar usuarios
	$plantilla->indexUsuarios($usuarios);
?>