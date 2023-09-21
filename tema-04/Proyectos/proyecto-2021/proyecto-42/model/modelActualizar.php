<?php

    require_once("class/alumno.php");
    require_once("class/arrayAlumnos.php");

    # Obtengo el array de alumnos
    $alumnos = new arrayAlumnos();
    $alumnos->generarTabla();
    
    # Obtengo el índice del alumno que deseo actualizar

    $indice = $_GET['indice'];

    # Comprobar asignaturas
    if (!isset($_POST['asignaturas'])) {
        $_POST['asignaturas'] = [];
    }

    # Los valores introducidos en el formulario

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $poblacion =  $_POST['poblacion'];
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $curso = $_POST['curso'];
    $asignaturas = $_POST['asignaturas'];
    
    # Creo el objeto usuario a partir de los datos formulario
    
    $alumno = new Alumno(
        $id,
        $nombre,
        $email,
        $poblacion,
        $fechaNacimiento,
        $curso,
        $asignaturas
    );
   
    # Actualizo los datos del usuario 

    $alumnos->update($alumno, $indice);

    # Genero mensaje de actualización

    $mensaje = "Alumno <b>$nombre</b> actualizado con éxito."

?>