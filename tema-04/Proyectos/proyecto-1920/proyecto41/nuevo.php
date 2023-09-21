<?php 

require_once("class/usuario.php");
require_once("bd/datos.php");
require_once("class/arrayObjetosUsuarios.php");

$usuarios = new ArrayObjetosUsuarios();

$usuarios->create($usuario1);
$usuarios->create($usuario2);
$usuarios->create($usuario3);
$usuarios->create($usuario4);

$tabla = $usuarios->getTabla();
$ultimoUsuario = end($tabla);
$proximoId = $ultimoUsuario->getId() + 1;

$perfiles = Usuario::getPerfiles();

$nuevo_usuario = new Usuario(
    $proximoId,
    $_POST["nombre"],
    $_POST["email"],
    $_POST["password"],
    $perfiles[$_POST["perfil"]],
    $_POST["nacionalidad"]

);

$usuarios->create($nuevo_usuario);
require("template/usuarios.php");

?>