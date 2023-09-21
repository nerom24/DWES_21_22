<?php

    /*

        Conexión MySQL con la clase mysqli

        Método Prepare

    */

    # Defino las constantes de conexión
    define('SERVER', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BD', 'fp');

    # Realizo la conexión
    $conexion = new mysqli(SERVER,USER, PASS, BD );

    # Valido
    if ($conexion->connect_errno) {
        echo "Error de conexión: ". $conexion->connect_error;
        exit(0);
    }

    echo "Conexión realizada con éxito";
    $conexion->set_charset('utf8'); 

    $sql= "
            INSERT INTO cursos (nombre, ciclo, nombreCorto, nivel) 
            values (?, ?, ?, ?)
    ";

    # Preparo la plantilla
    $resulSet = $conexion->prepare($sql);

    # Asocio los parámetros con variables
    $resulSet->bind_param('sssi', $nombre, $ciclo, $nombreCorto, $nivel);

    # Asigno valor a las variables declaradas como parámetro
    $nombre = 'Primero Gestión y Administración de empresas';
    $ciclo ='Gestión y Administración de Empresas';
    $nombreCorto = '1GAE';
    $nivel = 1;
    
    # Ejecutar comando sql
    $resulSet->execute();


?>