<?php

# Capa de autentificación y control de sesiones

#include Funciones
require_once("lib/controlsession.php");
require_once("lib/gestion_perfiles.php");

#Seguridad

sec_session_start();

# Capa de comprobación de autentificación
if (!isset($_SESSION['id'])) {

    header("location:login.php");
} 

# Capa de comprobación de asignación de privilegios
if (!in_array($_SESSION['id_rol'], $crear)) {

    $_SESSION['mensaje'] = "Operación sin privilegios";

    header("location:index.php");
} 
# Fin de capa de autentificación y gestión de privilegios

require_once("class/corredor.php");
require_once("class/conexion.php");
require_once("class/conexion_maratoon.php");

$corredores = new Conexion_maratoon();
$categorias = $corredores->getCategorias();
$clubs = $corredores->getClubs();

?> 
<!doctype html>
<html lang="es"> 
    <?php require_once("template/partials/menu.php") ?>
    <?php require_once("template/partials/head.php") ?>

    <body>
        <?php require_once("template/partials/cabecera.php") ?>
        
        <!-- Page Content -->
        <div class="container">
            
            <?php require_once("template/corredores/formNuevo.php") ?>
            
        </div>
        <!-- /.container -->

        <?php require_once("template/partials/footer.php") ?>
        <?php require_once("template/partials/javascript.php") ?>
    </body>

</html>

