<?php 
	/*
		Práctica: 7.1 - Generación Archivos TXT
		Tema: 07 Gestión archivos y directorios
		Fecha: 9/1/2018
		Fichero: eliminartxt.php
	*/ 

	require_once("plantilla.php");
	$plantilla = new plantilla();
	

	if (file_exists('datospersonales.txt')) {
		unlink("datospersonales.txt");
		$plantilla->mensaje("El archivo datospersonales.txt ha sido eliminado");
	} else {

		$plantilla->mensaje("El archivo datospersonales.txt no existe");

	}

 		
?>

