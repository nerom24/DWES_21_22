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
if (!in_array($_SESSION['id_rol'], $eliminar)) {

    $_SESSION['mensaje'] = "Operación sin privilegios";

    header("location:index.php");
} else {

# Fin de capa de autentificación y gestión de privilegios

require_once("class/corredor.php");
require_once("class/conexion.php");
require_once("class/conexion_maratoon.php");

# Realizo la conexión
$conexion = new Conexion_maratoon();

# Obtengo id del alumno que se desea eliminar
$id = $_GET['id'];

# Elimino el alumno 
$conexion->eliminar($id);

$_SESSION['mensaje'] = 'Corredor eliminado correctamente';

header('Location: index.php');

}

?> 


