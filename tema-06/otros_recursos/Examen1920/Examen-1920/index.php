<?php

/*
		Proyecto: Control de Sesiones Usuarios
		Tema : 06 - Control de Sesiones
		Curso: 2DAW - 19/20
		Descripción: Control de Sesiones para el acceso a la gestión usuarios
		Autor: Juan Carlos
		Fecha: 14/12/2018
	*/
		
	
	#include Funciones
	require_once("lib/controlsession.php");
	require_once("lib/gestion_perfiles.php");

	#Seguridad

	sec_session_start();	

	# Falta 
	# - Control de autentificación
	# - gestión de mensajes

	# Aplicación Maratoon

	require_once("class/corredor.php");
	require_once("class/conexion.php");
    require_once("class/conexion_maratoon.php");

    $conexion = new Conexion_maratoon();
    $corredores = $conexion->getCorredores();
    $cabecera = corredor::cabeceraTabla();

	require_once('template/corredores/corredores.php');
	
?> 


