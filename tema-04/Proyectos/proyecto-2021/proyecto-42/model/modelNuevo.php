<?php

    require_once("class/alumno.php");
    require_once("class/arrayAlumnos.php");

    # Obtengo el array de alumnos
    $alumnos = new arrayAlumnos();
    $alumnos->generarTabla();
    
    
    # Comprobar asignaturas
    if (!isset($_POST['asignaturas'])) {
        $_POST['asignaturas'] = [];
    }

    
    # Crear objeto de tipo usuario a partir
    # valores del formulario

    $id = $alumnos->contar() + 1;
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $poblacion = $_POST['poblacion'];
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $curso = $_POST['curso'];
    $asignaturas = $_POST['asignaturas'];
    
    # Creo un objeto usuario 

    $alumno = new Alumno(
        $id,
        $nombre,
        $email,
        $poblacion,
        $fechaNacimiento,
        $curso,
        $asignaturas
    ); 

    # Añadimos objeto al array de usuarios
    
    $alumnos->create($alumno);

    # Creo el mensaje de notificación
    $mensaje = "Alumno <b>$nombre</b> creado con éxito.";

?>