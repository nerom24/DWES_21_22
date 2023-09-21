<?php 
	/*
		Práctica: 01 - Control de Sesiones
		Tema: 05 Control de Sesiones
		Fecha: 15/11/2017
		Fichero: logout.php
		GET:
		POST: 
		SESION: 

	*/ 

	include("plantilla.php");
	include("classUsuarios.php");

	session_start();

	session_unset();
	session_destroy();

	header(header('Location: index.php'));

?>

