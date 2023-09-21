<?php 

    # Parámetros acceso a la base de datos
    include('config/bd.php');

    # Clase conexion
    include('class/alumno.class.php');
    include('class/conexion.class.php');
    include('class/alumnos.class.php');
    
    $alumno = new Alumno();

    $alumno->id = 3;

    var_dump($alumno);

?>
