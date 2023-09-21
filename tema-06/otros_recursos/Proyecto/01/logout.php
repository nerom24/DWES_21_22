<?php 
	/*
		Fichero: logout.php
		Descripcion: Cierra session usuario de forma segura
		Proyecto: Control de Sesiones Usuarios
		Tema : 06 - Control de Sesiones
		Curso: 2DAW - 18/19
		Descripción: Control de Sesiones para el acceso a la gestión usuarios
		Autor: Juan Carlos
		Fecha: 5/12/2018
	*/
		
	
	
	#include Funciones
	require_once("functions/controlsession.php");

	sec_session_start();
	sec_session_destroy();

	header("location: index.php");
?>

