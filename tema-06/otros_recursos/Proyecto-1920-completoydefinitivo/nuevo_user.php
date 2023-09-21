<?php
	
	/*
		Fichero: nuevo.php
		Descripción: permite validar y añadir nuevos usuarios a la tabla users
		Proyecto: Control de Sesiones Usuarios y autentificación
		Tema : 06 - Control de Sesiones
		Curso: 2DAW - 19/20
		Autor: Juan Carlos
		Fecha: 14/12/2018
	*/ 

	
    #include Funciones
    
    require_once("lib/controlsession.php");
      
    sec_session_start();

	#includes CLASES
    require_once("class/user.php");
    require_once("class/conexion.php");
    require_once("class/conexion_users.php");
      
    # Creo nueva conexión
	$conexion_users = new Conexion_users();

	#Preparamos algunos valores
  	$pass2 = filter_var($_POST['password2'],FILTER_SANITIZE_STRING);
	#Creamos un objeto de la clase usuario con los valores del formularios saneados

	$user = new User(

		null,
		filter_var($_POST['name'],FILTER_SANITIZE_STRING),
		filter_var($_POST['email'],FILTER_SANITIZE_EMAIL),
		filter_var($_POST['password1'],FILTER_SANITIZE_STRING)

	);

	#Validar objeto para añadir nuevo usuario

	$errores = $conexion_users->validar_user($user, $pass2);
	
 	if (!empty($errores)) {

	 	$_SESSION['errores'] = serialize($errores);
	 	$_SESSION['user'] = serialize($user);
	 	
	 	header("location:register.php");

	 } else {
		
		# Añade nuevo usuario
		$conexion_users->crear($user);
		# Añado un perfil al último usuario registrado por defecto perfil 3 de registrado
		$conexion_users->crear_usuario_perfil(3);

		$_SESSION['mensaje'] = "Usuario registrado correctamente";

		#Vuelve al index
		header("location:login.php");
	  }

	

?>

