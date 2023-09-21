<?php 

    /*
        mostrar.model.php
        Proyecto - Mostrar contenido de la matriz de clientes

    */
    
    $id = $_GET['id'];

    $alumnos = new Alumnos();
    $alumno = $alumnos->getAlumno($id);

    
?>-