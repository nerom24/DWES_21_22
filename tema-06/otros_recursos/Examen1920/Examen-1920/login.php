<?php 
    #include Funciones
    require_once("lib/controlsession.php");

    # iniciamos sesión
    sec_session_start();

    # Si existe algún mensaje 
   
    # inicializamos valores formulario
    # $email
    # $password

      
    # Comprobamos si viene de una validación fallida
    # mediante la existencia de errores


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