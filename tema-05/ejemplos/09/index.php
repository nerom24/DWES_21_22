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

    $mensaje = $conexion->query("

        INSERT INTO Cursos (
            nombre, 
            ciclo, 
            nombreCorto, 
            nivel
        )
        VALUES (
            'Primero Electricidad y Electrónica',
            'Electricidad y Electrónica',
            '1EE',
            1
        )
        
    ");

    

    if( $mensaje) {
        echo "<BR>";
        echo "Registro añadido correctamente";
    }

   

?>
