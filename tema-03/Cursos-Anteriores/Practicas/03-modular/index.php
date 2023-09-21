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

	include("functionAgenda.php");
	include("plantilla.php");

	//Declaramos $agenda como de tipo array y vacío
	$agenda = array();

	//Cargamos a agenda de datos
	$agenda = loadAgenda();

	//ordena agenda
	asort($agenda);

	//número de registros
	$numReg = count($agenda);

	//Carga Plantilla de Agenda
	plantillaAgenda($agenda);

?>

