<?php

    # Mostrar en una tabla los alumnos de la bbdd fp

    # Librerías
    include_once('lib/funciones.php');

    # Clases
    include_once('class/conexion.php');
    include_once('class/alumno.php');
    include_once('class/conexion_fp.php');

    # Creamos la conexión
    $conexion = new conexion_fp();

    $alumnos = $conexion->getAlumnos();
    

?>