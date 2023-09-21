<?php 
	include("classUsuarios.php");
	include("plantilla.php");

	$plantilla = new plantilla (

		"Práctica 44 - Tema 4 - POO", 
		"Práctica 44 - Tema 4 - POO", 
		"Eliminar Usuario",
		"Juan Carlos - 2ºDAW 18/19"
	);


	#key del objeto a eliminar
	$key = $_GET['key'];

	#declaramos la lista vacía de usuarios
	$usuarios = new usuarios();

	#cargamos el array de objetos de tipo usuario
	$usuarios->loadUsuarios();
		
	#Elimina usuario
	$usuarios->eliminar($key);
	
	#Muestrar usuarios
	$plantilla->indexUsuarios($usuarios);

?>
