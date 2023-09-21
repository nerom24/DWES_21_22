<?php 
	/**
	* 	@nombre: buscar.php 
	* 	@descripción: muestra los elementos del array que cumplen la expresion
	* 	@get: 
	*	@post: expresion - expresión de búsqueda
	**/ 

	//Incluimos plantilla
	include("plantilla.php");
	include ("corredorPDO.php");
	include("corredor.entidad.php");

	$plantilla = new plantilla();
	//incluimos clase usuario y usuarios
	

	$expresion = $_POST['expresion'];

	//declaramos la lista vacía de usuarios 
	$corredores = new corredores();
	$corredores->getCorredores("select * from corredor where nombre like '%$expresion%' 
		or apellidos like '%$expresion%'
		or email like '%$expresion%'
		or dni like '%$expresion%'
		");


	//Carga Plantilla de usuarios
	$plantilla->index($corredores);

?>
