<?php

    # Crea un nuevo alumno en la tabla Alumnos

    # Clases
    include_once('class/conexion.php');
    include_once('class/alumno.php');
    include_once('class/conexion_fp.php');

    # Creamos la conexión
    $conexion = new conexion_fp();

    # Cargamos datos del formulario
    $alumno = new Alumno(
        null,
        $_POST['nombre'],
        $_POST['apellidos'],
        $_POST['email'],
        $_POST['telefono'],
        null,
        $_POST['poblacion'],
        null,
        null,
        $_POST['dni'],
        $_POST['fechaNac'],
        $_POST['id_curso']
    );

    $conexion->create($alumno);

    $alumnos = $conexion->getAlumnos();
    

?>