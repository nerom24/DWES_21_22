<?php

    # Mostrar en una tabla los alumnos de la bbdd fp

    # Creamos la conexión

    $dsn = "mysql:host=localhost;dbname=fp";
    $usuario = "root";
    $password = "";
    $charset = 'utf8mb4';
    $collate = 'utf8mb4_unicode_ci';
    
    $option_err = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => 
        "SET NAMES $charset COLLATE $collate"
    ];

    try {

        $conexion = new PDO($dsn, $usuario, $password, $option_err);

     } catch (PDOException $error) {

        echo "ERROR DE BASE BASE DE DATOS: <br>";
        echo "Mensaje: ". $error->getMessage() . "<BR>";
        echo "Archivo: ". $error->getFile() . "<BR>";
        echo "Línea: ". $error->getLine() . "<BR>";
        echo "Trace: ". $error->getTraceAsString() . "<br>";
        exit(0);

     }
    

    $sql = "

        SELECT 
            *
        FROM 
            alumnos
    ";

    $alumnos = $conexion->prepare($sql);
    $alumnos->setFetchMode(PDO::FETCH_ASSOC);
    $alumnos->execute();

    $arrayAlumnos = $alumnos->fetchAll();

    

?>