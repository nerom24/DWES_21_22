<?php 

    

    #include Funciones
    require_once("lib/controlsession.php");

    # iniciamos sesión
    sec_session_start();

    #include CLASS
    require_once("class/user.php");
    require_once("class/conexion.php");
    require_once("class/conexion_users.php");

    $user = new User();

    if (isset($_SESSION['errores'])) {

        $errores = unserialize($_SESSION['errores']);
        $user    = unserialize($_SESSION['user']);

        unset($_SESSION['errores']);
        unset($_SESSION['user']);
        
    }


?>
<!doctype html>
<html lang="es"> 

<?php require_once("template/partials/head.php") ?>



<body>
    <?php require_once("template/users/menu.php") ?>
    <?php require_once("template/partials/cabecera.php") ?>
    

    <!-- Page Content -->
    
    <?php require_once("template/users/formulario_register.php") ?>
    <!-- /.container -->
    <br>
    <?php require_once("template/partials/footer.php") ?>
    <?php require_once("template/partials/javascript.php") ?>
    

</body>

</html>