<?php 
	/*
		Práctica: 03
		Tema: 03 DWES
		Curso: 2º DAW - 2017/2018
		Descripción: Agenda de contactos con usuario, nombre y telefono. 
					 Array Asociativo por usuario
		Autor: Juan Carlos Moreno
		Fecha: 18/10/2017
		Fichero: index.php
	*/ 

	include("functionArticulos.php");
	include("plantilla.php");

	//Declaramos $articulos como de tipo array y vacío
	$articulos = array();

	//Cargamos array articulos
	$articulos = loadArticulos();

	//ordena agenda
	asort($articulos);

	//Carga Plantilla de Agenda
	plantillaArticulos($articulos);

?>

