<?php 

require_once("class/usuario.php");

$usuario1 = new Usuario(
    1,
    "Pablo",
    "email@email.com",
    "12345678",
    "administrador",
    "España"

);

$usuario2 = new Usuario(
    2,
    "Felipe",
    "email@email.com",
    "87654321",
    "editor",
    "España"

);

$usuario3 = new Usuario(
    3,
    "Ana",
    "email@email.com",
    "contraseña",
    "registrado",
    "España"

);

$usuario4 = new Usuario(
    4,
    "Juan",
    "email@email.com",
    "contraseña123",
    "administrador",
    "España"

);

?>