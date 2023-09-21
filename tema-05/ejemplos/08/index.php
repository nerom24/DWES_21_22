<?php

    # Conexión con una base de datos
    # Clase mysqli

    # Plantillas SQL con PREPARE

    $conexion = new mysqli("localhost", "root", "", "fp");

    if ($conexion->connect_errno) {

        echo "Error de conexión: ". "Nº: " . $conexion->connect_errno  
            . "Mensaje: ". $conexion->connect_error;
        exit(0);
    }

    echo "Conexión realizada con éxito";
    $conexion->set_charset("utf8"); 

    $curso = $conexion->prepare("

        INSERT INTO Cursos (nombre, ciclo, nombreCorto, nivel)
        VALUES (?, ?, ?, ?)
        
    ");

    $curso->bind_param("sssi", $nombre, $ciclo, $nombreCorto, $nivel);

    $nombre = "Primero Electricidad y Electrónica";
    $ciclo = "Electricidad y Electrónica";
    $nombreCorto = "1EE";
    $nivel = 1;

    if( $curso->execute()) {
        echo "<BR>";
        echo "Registro añadido correctamente";
    }

   

?>
