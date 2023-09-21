<?php

    require_once("class/usuario.php");
    require_once("class/arrayUsuarios.php");

    # Obtengo el array de usuarios
    $usuarios = new arrayUsuarios();
    $usuarios->generarTabla();
    
    # Obtengo el índice del usuario que deseo editar

    $indice = $_GET['indice'];

    # Elimino el usuario asociado a dicho índice
    
    $usuarios->delete($indice);

    # Genero mensaje de notificación

    $mensaje = "Usuario eliminado con éxito.";


?>