<?php

# Capa de autentificación y control de sesiones

#include Funciones
require_once("lib/controlsession.php");
require_once("lib/gestion_perfiles.php");

#Seguridad

sec_session_start();

if (!isset($_SESSION['id'])) {

    header("location:login.php");
}

# Acceso tdos los privilegios

# Fin de capa de autentificación y control de sesiones

require_once("class/corredor.php");
require_once("class/conexion.php");
require_once("class/conexion_maratoon.php");

$criterio = $_GET['criterio'];

$conexion = new Conexion_maratoon();
$corredores = $conexion->ordenarCorredores($criterio);

$cabecera = corredor::cabeceraTabla();
require_once('template/corredores/corredores.php');
?> 


