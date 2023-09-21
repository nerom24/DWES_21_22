<?php 
	/*
		Práctica: 7.1 - Generación Archivos TXT
		Tema: 07 Gestión archivos y directorios
		Fecha: 9/1/2018
		Fichero: metadatostxt.php
	*/ 

	require_once("plantilla.php");
	$plantilla = new plantilla();
	

	

	if (!file_exists('datospersonales.txt')) {

		$plantilla->mensaje("El archivo datospersonales.txt aún no está creado");

	} else {
	  
  		$plantilla->informacion('datospersonales.txt');  	
  	}

 		
?>

