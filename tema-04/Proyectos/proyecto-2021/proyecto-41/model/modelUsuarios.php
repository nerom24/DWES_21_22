<?php

    require_once("class/usuario.php");
    require_once("class/arrayUsuarios.php");

    $usuarios = new arrayUsuarios();

    $usuario1 = new Usuario(
        1,
        "Pablo",
        "email@email.com",
        "12345678",
        "España",
        ["Administrador", "Programador"]
    );

    $usuario2 = new Usuario(
        2,
        "Felipe",
        "email@email.com",
        "87654321",
        "España",
        ["Editor", "Registrado"]

    );

    $usuario3 = new Usuario(
        3,
        "Ana",
        "email@email.com",
        "1245789",
        "España",
        ["Administrador", "Registrado", "Usuario"]

    );

    $usuario4 = new Usuario(
        4,
        "Juan",
        "email@email.com",
        "contraseña123",
        "España",
        ["Administrador", "Programador", "Registrado", "Usuario"]
       
    );

    $usuarios->create($usuario1);
    $usuarios->create($usuario2);
    $usuarios->create($usuario3);
    $usuarios->create($usuario4);

?>