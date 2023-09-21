<?php

    # ModelNuevo
    # Cargar los cursos

    # Clases
    include_once('class/conexion.php');
    include_once('class/conexion_fp.php');

    # Creamos la conexión
    $conexion = new conexion_fp();

    $cursos = $conexion->getCursos();
    

?>