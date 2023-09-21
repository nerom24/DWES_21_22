<?php

    # Conexión con una base de datos
    # Clase mysqli

    $conexion = new mysqli("localhost", "root", "", "fpa");

    echo "Número de error: ";
    echo $conexion->connect_errno;
    echo "<br>";
    echo "Mensaje del error: ";
    echo $conexion->connect_error;


    //var_dump($conexion);

?>
