<?php 

require_once("class/usuario.php");
require_once("bd/datos.php");
require_once("class/arrayObjetosUsuarios.php");

$usuarios = new ArrayObjetosUsuarios();

$usuarios->create($usuario1);
$usuarios->create($usuario2);
$usuarios->create($usuario3);
$usuarios->create($usuario4);

$perfiles = Usuario::getPerfiles();

$keyPerfil= $_POST["perfil"];
$key = $_GET["indice"];

$usuario_editar = new Usuario(
    $_POST["id"],
    $_POST["nombre"],
    $_POST["email"],
    $_POST["password"],
    $perfiles[$keyPerfil],
    $_POST["nacionalidad"]
);

$usuarios->update($key, $usuario_editar);

require_once("template/usuarios.php");


?>