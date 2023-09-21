<?php

require_once("class/arrayObjetosUsuarios.php");
require_once("class/usuario.php");
require_once("bd/datos.php");

$usuarios = new ArrayObjetosUsuarios();

$usuarios->create($usuario1);
$usuarios->create($usuario2);
$usuarios->create($usuario3);
$usuarios->create($usuario4);

require_once("template/usuarios.php");
?> 

