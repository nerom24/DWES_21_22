<?php
	
	/*
		Fichero: nuevo.php
		Descripción: permite validar y añadir nuevos usuarios a la tabla
		Proyecto: Control de Sesiones Usuarios
		Tema : 06 - Control de Sesiones
		Curso: 2DAW - 18/19
		Autor: Juan Carlos
		Fecha: 5/12/2018
	*/ 

	
	#include Funciones
  	require_once("functions/controlsession.php");

	#seguridad
	sec_session_start();

	if (!isset($_SESSION['id'])) {

		header("location:login.php");
	}
	

	#includes CLASES
  	require_once("class/usuario.php");
  	require_once("basedatos/conexionBD.php");

	#Conectamos con la base de datos
	$usuarios = new Usuarios();

	#Comprobamos perfil
	$usuarioSesion = $usuarios->getUserId($_SESSION['id']);
	if ($usuarioSesion->getIdPerfil() != 1) {

		header("location:index.php");
	}

	#Preparamos algunos valores
  	$pass2 = filter_var($_POST['pass2'],FILTER_SANITIZE_STRING);

	#Creamos un objeto de la clase usuario con los valores del formularios saneados

	$usuario = new Usuario(

		null,
		filter_var($_POST['userName'],FILTER_SANITIZE_STRING),
		filter_var($_POST['nombre'],FILTER_SANITIZE_STRING),
		filter_var($_POST['apellidos'],FILTER_SANITIZE_STRING),
		filter_var($_POST['url'],FILTER_SANITIZE_URL),
		filter_var($_POST['edad'],FILTER_SANITIZE_NUMBER_INT),
		filter_var($_POST['idPerfil'],FILTER_SANITIZE_STRING),
		null,
		filter_var($_POST['email'],FILTER_SANITIZE_EMAIL),
		filter_var($_POST['pass1'],FILTER_SANITIZE_STRING),
		null,
		null

	);

	#Validar objeto para añadir nuevo usuario

	$errores = $usuarios->validarUsuario($usuario, $pass2);
	
 	if (!empty($errores)) {

	 	$_SESSION['errores'] = $errores;
	 	$_SESSION['usuario'] = serialize($usuario);
	 	
	 	header("location:formNuevo.php");


	 }

	#Añade nuevo usuario
	$usuarios->addUsuario($usuario);

	#Vuelve al index
	header("location:index.php");

?>

