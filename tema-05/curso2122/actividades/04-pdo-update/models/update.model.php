<?php 

    /*
        update.model.php
        Proyecto - Mostrar contenido de la matriz de clientes

    */

    # id del alumno mediante GET
    $id = $_GET['id'];

    # Creo objeto de la clase alumno
    $alumno = new Alumno();

    # Asigno los valores del formulario
    $alumno->id = $_POST['id'];
    $alumno->nombre = $_POST['nombre'];
    $alumno->apellidos = $_POST['apellidos'];
    $alumno->poblacion = $_POST['poblacion'];
    $alumno->email = $_POST['email'];
    $alumno->fechaNac = $_POST['fechaNac'];
    $alumno->dni = $_POST['dni'];
    $alumno->id_curso = $_POST['curso'];

    # Creo un objeto de la clase alumnos
    $alumnos = new Alumnos();

    # Añado alumno mediante el método create (INSERT)
    $alumnos->update($alumno, $id);

    # Genero array de objetos para la vista
    $arrayAlumnos = $alumnos->getAlumnos();

    # Generamos mensaje para el alert
    $mensaje = "Alumno actualizado correctamente";

    
?>