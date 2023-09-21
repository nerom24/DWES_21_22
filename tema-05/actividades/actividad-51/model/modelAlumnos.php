<?php

    # Mostrar en una tabla los alumnos de la bbdd fp

    # Creamos la conexión

    $conexion = new mysqli("localhost", "root", "", "fp");

    if ($conexion->connect_errno) {

        echo "ERROR DE CONEXION: ". "Nº: " . 
              $conexion->connect_errno .  
              "Mensaje: ". $conexion->connect_error;
        exit(0);
    }

    //$conexion->set_charset("utf8");

    $sql = "

        SELECT 
            id,
            nombre,
            apellidos,
            email,
            poblacion,
            fechaNac
        FROM 
            alumnos
    
    ";

    $alumnos = $conexion->query($sql);

    $arrayAlumnos = $alumnos->fetch_all(MYSQLI_ASSOC);

    

?>