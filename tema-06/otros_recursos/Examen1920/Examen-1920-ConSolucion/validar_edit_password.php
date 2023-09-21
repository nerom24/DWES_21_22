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

    $pass_actual = filter_var($_POST['pass_actual'],FILTER_SANITIZE_STRING);
    $pass_1 = filter_var($_POST['pass_1'],FILTER_SANITIZE_STRING);
    $pass_2 = filter_var($_POST['pass_2'],FILTER_SANITIZE_STRING);

    # Validamos si pass_actual es correcto

    $errores = array();

    if (!password_verify($pass_actual, $user->getPassword())) {
        $errores['pass_actual'] = "El password actual no es correcto";
    }

    # Comparamos y validamos
    # Validar password
    if (strcmp($pass_1, $pass_2) !== 0) {
        $errores['pass_1'] = "Password no coincidentes";
    } elseif (!$conexion_users->validarPass($pass_1)) {
            $errores['pass_1'] = "Longitud de password no permitida";
    }

	
 	if (!empty($errores)) {

	 	$_SESSION['errores'] = $errores;
        $_SESSION['pass_actual'] = $pass_actual;
        $_SESSION['pass_1'] = $pass_1;
	
	 	header("location:editar_password.php");

	 } else {
		
        #Actualizar usuario
        $id = $user->getId();
		$conexion_users->actualizar_password($id, $pass_1);

		$_SESSION['mensaje'] = "Password actualizado correctamente";

		#Vuelve al index
		header("location:index.php");
	  }

	

?>

