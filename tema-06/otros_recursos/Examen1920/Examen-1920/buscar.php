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

#includes CLASES
require_once("class/user.php");
require_once("class/conexion.php");
require_once("class/conexion_users.php");

#Creamos la nueva conexión
$conexion_users = new Conexion_users();

# Obtengo el objeto del usuario que tiene la sesión
$user = $conexion_users->getUserId($_SESSION['id']);

# Capa de perfiles - obtenemos el perfil del usuario autentificado
$id_perfil = $conexion_users->getUserIdPerfil($_SESSION['id']);
$perfil = $conexion_users->getUserPerfil($id_perfil);

# Fin de capa de autentificación y control de sesiones

require_once("class/corredor.php");
// require_once("class/conexion.php");
require_once("class/conexion_maratoon.php");

$expresion = $_GET['expresion'];

$conexion = new Conexion_maratoon();
$corredores = $conexion->buscarCorredores($expresion);

$cabecera = corredor::cabeceraTabla();
require_once('template/corredores/corredores.php');
?> 


