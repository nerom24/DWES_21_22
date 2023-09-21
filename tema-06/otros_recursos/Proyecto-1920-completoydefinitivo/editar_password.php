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
    
    $pass_actual = null;
    $pass_1 = null;
    $pass_2 = null;

    # Si existen errores es que viene devuelto de la validación

    if (isset($_SESSION['errores'])) {

        $errores = $_SESSION['errores'];
        $pass_actual = $_SESSION['pass_actual'];
        $pass_1 = $_SESSION['pass_1'];

        unset($_SESSION['errores']);
        unset($_SESSION['pass_actual']);
        unset($_SESSION['pass_1']);

    }

?>
<!doctype html>
<html lang="es"> 
<?php require_once("template/partials/head.php") ?>
<body>
    <?php require_once("template/partials/menu.php") ?>
    <?php require_once("template/partials/cabecera.php") ?>
    

    <!-- Page Content -->
    
    <?php require_once("template/users/formulario_editar_password.php") ?>
    <!-- /.container -->
    <br>
    <?php require_once("template/partials/footer.php") ?>
    <?php require_once("template/partials/javascript.php") ?>
</body>
</html>

