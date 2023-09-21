<?php
	
	# Permite editar el perfil de un usuario 
    # Sólo name y email
	
    #include Funciones
    
    require_once("lib/controlsession.php");
      
    #Seguridad

	sec_session_start();

	if (!isset($_SESSION['id'])) {

		header("location:login.php");
	} 

	#includes CLASES
	require_once("class/user.php");
	require_once("class/conexion.php");
	require_once("class/conexion_users.php");
	
	#Creamos la nueva conexión
	$conexion_users = new Conexion_users();

	# Obtengo el objeto del usuario que tiene la sesión
    $user = $conexion_users->getUserId($_SESSION['id']);	

    # Sanear $_POST

    $name = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);

    # Validamos sólo si han cambiado de valor

    $errores = array();

    if (strcmp($name, $user->getName()) !== 0) {

        # Validar name
        if (!$conexion_users->validarName($name)) {
            $errores['name'] = "Nombre de usuario no permitido";
        }

    }

    if (strcmp($email, $user->getEmail()) !== 0) {

        # Validar Email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errores['email'] = "Email no válido";
        } elseif (!$conexion_users->validaEmailUnique($email)) {
            $errores['email'] = "Email existente ya registrado";
        }

    }

	
 	if (!empty($errores)) {

	 	$_SESSION['errores'] = $errores;
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
	 	
	 	header("location:editar_user.php");

	 } else {
		
        #Actualizar usuario
        $id = $user->getId();
		$conexion_users->actualizar_columnas($id, $name, $email);

        $_SESSION['mensaje'] = "Usuario actualizado correctamente";
        $_SESSION['name_user'] = $name;

		#Vuelve al index
		header("location:index.php");
	  }

	

?>

