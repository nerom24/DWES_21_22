<?php 
    #include Funciones
    require_once("lib/controlsession.php");
    require_once("lib/mcrypt.php");

    # iniciamos sesión
    sec_session_start();

    # Si existe algún mensaje 
    if (isset($_SESSION['mensaje'])) {

        $mensaje = $_SESSION['mensaje'];
        unset($_SESSION['mensaje']);

    }

    $email = null;
    $password = null;


    # Compruebo que existe la cookie de control recordar
	if (isset($_COOKIE['recordar_email']) && isset($_COOKIE['recordar_password'])) {
		
        $email = $desencriptar($_COOKIE['recordar_email']);
        $password = $desencriptar($_COOKIE['recordar_password']);

    }
    
    # Comprobamos si viene de una validación fallida
    # mediante la existencia de errores
    if (isset($_SESSION['errores'])) {

        $errores = $_SESSION['errores'];
        
        $email = $_SESSION['email'];
        $password = $_SESSION['password'];
        
        unset($_SESSION['errores']);
        unset($_SESSION['email']);
        unset($_SESSION['password']);
    }

?>
<!doctype html>
<html lang="es"> 

<?php require_once("template/partials/head.php") ?>



<body>
    <?php require_once("template/users/menu.php") ?>
    <?php require_once("template/partials/cabecera.php") ?>

    <!-- Sección de mensajes  -->
    <?php if (isset($mensaje)) require_once("template/partials/mensaje.php") ?>
    
    <!-- Page Content -->
    <?php require_once("template/users/formulario_login.php") ?>
    <!-- /.container -->
    
    <br>
    <?php require_once("template/partials/footer.php") ?>
    <?php require_once("template/partials/javascript.php") ?>
    

</body>

</html>