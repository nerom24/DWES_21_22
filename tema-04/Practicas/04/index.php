<?php 
	
	include("classUsuarios.php");
	include("plantilla.php");

	$plantilla = new plantilla (

		"Práctica 44 - Tema 4 - POO", 
		"Práctica 44 - Tema 4 - POO", 
		"Gestión de Usuarios POO",
		"Juan Carlos - 2ºDAW 18/19"
	);

	# Declaramos $usuarios como de tipo array y vacío
	$usuarios = new usuarios();

	# Cargamos de datos iniciales el array de usuarios
	$usuarios->loadUsuarios();

	#Muestrar usuarios
	$plantilla->indexUsuarios($usuarios);


?>
