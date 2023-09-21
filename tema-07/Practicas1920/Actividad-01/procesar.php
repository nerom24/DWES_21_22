<?php 
	/*
		Práctica: 7.1 - Generación Archivos TXT
		Tema: 07 Gestión archivos y directorios
		Fecha: 9/1/2018
		Fichero: creartxt.php
	*/ 

	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$direccion = $_POST['direccion'];
	$cpostal = $_POST['cpostal'];
	$poblacion = $_POST['poblacion'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	
	//Creamos el archivo DatosPersonales.txt

	$file=fopen("datospersonales.txt","w");
	  
  	fputs($file,$nombre);
	fputs($file,"\n");
	fputs($file,$apellidos);
	fputs($file,"\n");
  	fputs($file,$direccion);
  	fputs($file,"\n");
  	fputs($file,$cpostal);
	fputs($file,"\n");
	fputs($file,$poblacion);
  	fputs($file,"\n");
  	fputs($file,$email);
  	fputs($file,"\n");
  	fputs($file,$telefono);
  	fputs($file,"\n");
  	
  	fclose($file);


	
	session_start();
	
	$_SESSION['mensaje'] = "El fichero datospersonales.txt creado con éxito";
	header("location: index.php")
	
 		
?>

