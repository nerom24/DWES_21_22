<?php

# capa autentificación y gestión usuarios

#include Funciones
require_once("lib/controlsession.php");
require_once("lib/gestion_perfiles.php");

# Capa de autentificación

sec_session_start();

# Capa de comprobación de autentificación
if (!isset($_SESSION['id'])) {

    header("location:login.php");

} else 

# Capa de comprobación de asignación de privilegios
if (!in_array($_SESSION['id_rol'], $crear)) {

    $_SESSION['mensaje'] = "Operación sin privilegios";
    header("location:index.php");

} else {

# fin capa autentificación y gestión usuarios

require_once("class/corredor.php");
require_once("class/conexion.php");
require_once("class/conexion_maratoon.php");

$nuevo_corredor = new Corredor(
    null,
    $_POST["nombre"],
    $_POST["apellidos"],
    $_POST["ciudad"],
    $_POST["fechaNacimiento"],
    $_POST["sexo"],
    $_POST["email"],
    $_POST["dni"],
    null,
    $_POST["id_categoria"],
    $_POST["id_club"]
);

$nuevo_corredor->edad_actual();

$conexion = new Conexion_maratoon();
$conexion->crear($nuevo_corredor);

$_SESSION['mensaje'] = "Inscripción realizada con éxito";

header('Location: index.php');

}

?> 
