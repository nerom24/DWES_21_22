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

	# Obtengo el objeto del usuario que tiene la sesión para editarlos
    $user = $conexion_users->getUserId($_SESSION['id']);
    
    $name = $user->getName();
    $email = $user->getEmail();

    # Si existen errores es que viene devuelto de la validación

    if (isset($_SESSION['errores'])) {

        $errores = $_SESSION['errores'];
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];

        unset($_SESSION['errores']);
        unset($_SESSION['name']);
        unset($_SESSION['email']);

    }

?>
<!doctype html>
<html lang="es"> 
<?php require_once("template/partials/head.php") ?>
<body>
    <?php require_once("template/partials/menu.php") ?>
    <?php require_once("template/partials/cabecera.php") ?>
    

    <!-- Page Content -->
    
    <?php require_once("template/users/formulario_editar.php") ?>
    <!-- /.container -->
    <br>
    <?php require_once("template/partials/footer.php") ?>
    <?php require_once("template/partials/javascript.php") ?>
</body>
</html>

