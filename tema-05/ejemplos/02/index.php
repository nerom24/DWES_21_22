<?php

    # Conexión con una base de datos
    # Clase mysqli

    $conexion = new mysqli("localhost", "root", "", "fp");

    if ($conexion->connect_errno) {

        echo "Error de conexión: ". $conexion->connect_error;
        exit(0);
    }

    echo "Conexión realizada con éxito";
    $conexion->set_charset("utf8"); 




    //var_dump($conexion);

?>
