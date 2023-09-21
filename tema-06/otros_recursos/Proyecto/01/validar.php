<?php 
	/*
		Fichero: validar.php
		Descripcion: Valida usuario y contraseña del login
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

	#includes CLASES
	require_once("class/usuario.php");
	require_once("basedatos/conexionBD.php");
	
	

	#Conectamos a la base de  datos bdusuarios
	#Creamos un objeto de la clase usuarios 
	$usuarios= new Usuarios();

	
	#Recojo los valores del formulario
	$email = $_POST['email'];
	$password = $_POST['password'];

	#obtengo el usuario a partir del email
	$usuario = $usuarios->getUserEmail($email);

	$errores = array();

	if ($usuario === false) {

		$errores[] = "Email no registrado";
		
		$_SESSION['errores'] = $errores;
		
		$_SESSION['email'] = $email;
		$_SESSION['password'] = $password;

		header("location:login.php");

	} else 

	if (!password_verify($password,$usuario->getPass())) {

		$errores[] = "Password no coincide";
		
		$_SESSION['errores'] = $errores;

		$_SESSION['email'] = $email;
		$_SESSION['password'] = $password;

		header("location:login.php");

	} else {

	
	$_SESSION['id'] = $usuario->getId();

	#Actualiza Fecha ultimo acceso
	$usuarios->setUltimoAcceso($usuario->getId());

	header("location: index.php");
	
	}
	
	
?>

