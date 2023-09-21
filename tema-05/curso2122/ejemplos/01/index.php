<?php

    /*

        Conexión MySQL con la clase mysqli

    */

    $server = 'localhost';
    $usuario = 'root';
    $password = '23';
    $bd = 'fp';

    $conexion = new mysqli($server, $usuario, $password, $bd);

    echo "Número de error: ";
    echo $conexion->connect_errno;
    echo "<br>";
    echo "Mensaje del error: ";
    echo $conexion->connect_error;
    echo "<br>";




?>