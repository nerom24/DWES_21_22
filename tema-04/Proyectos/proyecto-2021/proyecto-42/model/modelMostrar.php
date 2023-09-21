<?php

    require_once("class/usuario.php");
    require_once("class/arrayUsuarios.php");

    # Obtengo el array de usuarios
    $usuarios = new arrayUsuarios();
    $usuarios->generarTabla();
    
    # Obtengo el array de perfiles
    $arrayPerfiles = arrayUsuarios::perfiles();
    
    # Obtengo el índice del usuario que deseo editar

    $indice = $_GET['indice'];

    # Obtengo el objeto usuario que corresponde con el indice
    
    $usuario = $usuarios->read($indice);

    # Los valores del usuario los almaceno en una variable

    $id = $usuario->getId();
    $nombre = $usuario->getNombre();
    $email = $usuario->getemail();
    $password = $usuario->getPassword();
    $nacionalidad = $usuario->getNacionalidad();
    $perfiles = $usuario->getPerfiles();
    
    # Creo un objeto usuario 

    $usuario = new Usuario(
        $id,
        $nombre,
        $email,
        $password,
        $nacionalidad,
        $perfiles
    );

    # Añadimos objeto al array de usuarios
    
    $usuarios->create($usuario);

?>