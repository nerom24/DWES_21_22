<?php
	include("classUsuarios.php");
	include("plantilla.php");

	$plantilla = new plantilla (

		"Práctica 44 - Tema 4 - POO", 
		"Práctica 44 - Tema 4 - POO", 
		"Gestión de Usuarios POO",
		"Juan Carlos - 2ºDAW 18/19"
	);

	#creamos un objeto tipo usuario con los valores POST del formulario
	$usuario = new usuario (
		$_POST['id'],
		$_POST['usuario'],
		$_POST['email'],
		$_POST['tipo'],
		$_POST['clave']
	);

	# Declaramos $usuarios como de tipo array y vacío
	$usuarios = new usuarios();

	# Cargamos de datos iniciales el array de usuarios
	$usuarios->loadUsuarios();

	#Validamos los datos del usuario introducido
	$errores = $usuarios->valUsuario($usuario);
	
	if (empty($errores)) {

		#Añade nuevo usuario
		$usuarios->insertar($usuario);

		#Muestrar usuarios
		$plantilla->indexUsuarios($usuarios);


	} else {

		$plantilla->mostrarErrores($errores);
	}
	
?>

