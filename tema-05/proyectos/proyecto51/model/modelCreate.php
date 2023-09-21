<?php

    //Creamos un nuevo corredor en la tabla Corredores

    //Clases
    include_once('class/conexion.php');
    include_once('class/corredor.php');
    include_once('class/conexion_maratoon.php');

    //Creamos la conexión
    $conexion = new conexion_maratoon();

    //Cargamos datos del formulario
    $corredor = new Corredor(
        null,
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

    //Añadir corredor
    $conexion->create($corredor);
?>