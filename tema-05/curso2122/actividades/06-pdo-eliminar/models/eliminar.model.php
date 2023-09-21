<?php 

    /*
        eliminar.model.php
        Proyecto - Mostrar contenido de la matriz de clientes

    */
    
    $id = $_GET['id'];

    $alumnos = new Alumnos();
    $alumno = $alumnos->delete($id);

    $mensaje = "Alumno eliminado correctamente";

    $arrayAlumnos = $alumnos->getAlumnos();

    
?>-