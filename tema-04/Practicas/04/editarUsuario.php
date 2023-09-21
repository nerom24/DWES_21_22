<?php
	/**
	* 	@nombre: editarUsuario.php 
	* 	@descripción: actualiza los detalles de un objeto usuario
	* 	@param: GET - key
	*   @param: POST - datos del formulario
	**/ 
	
	#Incluimos la clase plantilla y la clase usuarios 
	include("plantilla.php");
	include ("classUsuarios.php");

	$plantilla = new plantilla (

		"Práctica 44 - Tema 4 - POO", 
		"Práctica 44 - Tema 4 - POO", 
		"Editar Usuario",
		"Juan Carlos - 2ºDAW 18/19"
	);

	#Clave del objeto que queremos actualizar
	$key = $_GET['key'];

	#creamos un objeto tipo usuario con los valores POST del formulario
	$usuario = new usuario (
		$_POST['id'],
		$_POST['usuario'],
		$_POST['email'],
		$_POST['tipo'],
		$_POST['clave']
	);

	#declaramos la lista vacía de usuarios
	$usuarios = new usuarios();

	#cargamos el array de objetos de tipo usuario
	$usuarios->loadUsuarios();

	#Validar formulario editar usuario
	$errores = $usuarios->valEditarUsuario($key, $usuario);

	if (empty($errores)) {

		#Actualizar usuario
		$usuarios->actualizar($key, $usuario);

		#Muestrar usuarios
		$plantilla->indexUsuarios($usuarios);


	} else {

		$plantilla->mostrarErrores($errores);
	}



?>