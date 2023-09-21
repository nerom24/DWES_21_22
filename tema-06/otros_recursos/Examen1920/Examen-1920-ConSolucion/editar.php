<?php

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
if (!in_array($_SESSION['id_rol'], $editar)) {

    $_SESSION['mensaje'] = "Operación sin privilegios";

    header("location:index.php");
} else { 

# Fin de capa de autentificación y gestión de privilegios


require_once("class/corredor.php");
require_once("class/conexion.php");
require_once("class/conexion_maratoon.php");

$corredor_editar = new Corredor (

    $_POST['id'],
    $_POST["nombre"],
    $_POST["apellidos"],
    $_POST["ciudad"],
    $_POST["fechaNacimiento"],
    $_POST["sexo"],
    $_POST["email"],
    $_POST["dni"],
    $_POST["edad"],
    $_POST["id_categoria"],
    $_POST["id_club"]

);

$corredor_editar->edad_actual();

$conexion = new Conexion_maratoon();
$conexion->actualizar($corredor_editar);

header('Location: index.php');

}

?> 
