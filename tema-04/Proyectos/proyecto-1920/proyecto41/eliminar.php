<?php 

require_once("class/usuario.php");
require_once("bd/datos.php");
require_once("class/arrayObjetosUsuarios.php");

$usuarios = new ArrayObjetosUsuarios();

$usuarios->create($usuario1);
$usuarios->create($usuario2);
$usuarios->create($usuario3);
$usuarios->create($usuario4);

$indice = $_GET["indice"];

$usuarios->delete($indice);

require("template/usuarios.php");

?>