<?php

    //Creamos un nuevo alumno en la tabla Alumnos

    //Clases
    include_once('class/conexion.php');
    include_once('class/corredor.php');
    include_once('class/conexion_maratoon.php');

    //Creamos la conexión
    $conexion = new Conexion_maratoon();

    //Cargamos id del alumno
    $id = $_GET['id'];

    //Cargamos datos del formulario
    $corredor = new Corredor(
        $_POST['id'],
        $_POST['nombre'],
        $_POST['apellidos'],
        $_POST['ciudad'],
        $_POST['fechaNacimiento'],
        $_POST['sexo'],
        $_POST['email'],
        $_POST['dni'],
        null,
        $_POST['id_categoria'],
        $_POST['id_club']

    );

    //Para añadir
    $conexion->update($corredor, $id); 
?>