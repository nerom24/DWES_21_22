<?php

    /*

        Conexión MySQL con la clase mysqli

        Con validación

    */

    $server = 'localhost';
    $usuario = 'root';
    $password = '12';
    $bd = 'fp';

    $conexion = new mysqli($server, $usuario, $password, $bd);

    if ($conexion->connect_errno) {
        echo "Error de conexión: ". $conexion->connect_error;
        exit(0);
    }

    echo "Conexión realizada con éxito";
    $conexion->set_charset('utf8'); 


?>