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

    $nombre = 'Primero Electricidad y Electrónica';
    $ciclo = 'Electricidad, Mecánica y Electrónica';
    $nombreCorto = '1EE';
    $nivel = 1;

    $sql = "

        INSERT INTO Cursos (
            nombre, 
            ciclo, 
            nombreCorto, 
            nivel
        )
        VALUES (
            '$nombre',
            '$ciclo',
            '$nombreCorto',
             $nivel
        )
    
    ";

 

  
    if( $conexion->query($sql)) {
        echo "<BR>";
        echo "Registro añadido correctamente";
    }

   

?>
