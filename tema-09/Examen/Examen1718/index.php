<?php 
	/*
		Tema : 06 PHP Y MySQL
		Descripción: Practica 04 - Gestion usuarios
		Autor: Juan Carlos
		
	*/ 

	//includes
	require_once("plantilla.php");
	require_once("corredor.entidad.php");
	require_once("corredorPDO.php");

	
	$plantilla = new plantilla();

	//Conectamos con la base de datos fp
	$corredores= new corredores();

	$corredores->getCorredores("select * from corredor");

	//Carga Plantilla de usuarios
	$plantilla->index($corredores);
	
?>

