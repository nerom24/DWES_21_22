<?php

    require_once("class/alumno.php");
    require_once("class/arrayAlumnos.php");

    # Obtengo el array de alumnos
    $alumnos = new arrayAlumnos();
    $alumnos->generarTabla();
    
    # Obtengo la expresión de búsqueda

    $criterio = $_GET['criterio'];

    # Filtrar
    
    $alumnos->ordenar($criterio);


?>