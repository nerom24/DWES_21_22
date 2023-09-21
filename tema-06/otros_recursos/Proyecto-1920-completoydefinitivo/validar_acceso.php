<?php 
		
	#include Funciones
	require_once("lib/controlsession.php");
	require_once("lib/mcrypt.php");

	sec_session_start();

	#includes CLASES
	require_once("class/user.php");
	require_once("class/conexion.php");
	require_once("class/conexion_users.php");
	
	#Creamos la nueva conexión
	$conexion_users = new Conexion_users();

	#Recojo los valores del formulario
    $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
	$password = filter_var($_POST['password'],FILTER_SANITIZE_STRING);
	
	# Compruebo si se ha activado la pestaña de recordar
	if (isset($_POST['recordar'])) {

		$recordar = filter_var($_POST['recordar'],FILTER_SANITIZE_NUMBER_INT);
	}

	#obtengo el usuario a partir del email
	$user = $conexion_users->getUserEmail($email);

	$errores = array();

	if ($user === false) {

		$errores['email'] = "Usuario no registrado";
		
		$_SESSION['errores'] = $errores;
		
		$_SESSION['email'] = $email;
		$_SESSION['password'] = $password;

		header("location:login.php");

	} else 

	if (!password_verify($password,$user->getPassword())) {

		$errores['password'] = "Password no es correcto";
		
		$_SESSION['errores'] = $errores;

		$_SESSION['email'] = $email;
		$_SESSION['password'] = $password;

		header("location:login.php");

	} else {

		# La autentificación es correcta

		# Creo las variables de sesión: 
		# id - id usuario autentificado
		# name_user - nombre del usuario
		# id_rol - id rol o perfil del usuario
		# name_rol - nombre del rol del usuario

		$_SESSION['id'] = $user->getId();
		$_SESSION['name_user'] = $user->getName();
		$_SESSION['id_rol'] = $conexion_users->getUserIdPerfil($user->getId());
		$_SESSION['name_rol'] = $conexion_users->getUserPerfil($_SESSION['id_rol']);

		# Creo la cookie recordar_email y recordar_password si se ha activado la pestaña
		# recordar en caso contrario dicha cookie se elimina

		if (isset($recordar)) {
			
			setcookie('recordar_email', $encriptar($email), time() + 12 * 30 * 24 * 3600);
			setcookie('recordar_password', $encriptar($password), time() + 12 * 30 * 24 * 3600);

		} else {
			
			setcookie('recordar_email', null, time() -3600);
			setcookie('recordar_password', null, time() -3600);

		}

		$_SESSION['mensaje'] = "Usuario ". $user->getName(). " ha iniciado sesión" ;

	    header("location: index.php");
	
	}
	
	
?>