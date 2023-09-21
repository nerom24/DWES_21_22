<?php

    require_once("class/alumno.php");
    require_once("class/arrayAlumnos.php");

    # Obtengo el array de alumnos
    $alumnos = new arrayAlumnos();
    $alumnos->generarTabla();
    
    # Obtengo el array de cursos
    $arrayCursos = arrayAlumnos::cursos();
    
    # Obtengo el array de asignaturas
    $arrayAsignaturas = arrayAlumnos::asignaturas();
    
    # Obtengo el índice del alumno que deseo editar

    $indice = $_GET['indice'];

    # Obtengo el objeto alumno que corresponde con el indice
    
    $alumno = $alumnos->read($indice);

    # Los valores del alumno los almaceno en una variable

    $id = $alumno->getId();
    $nombre = $alumno->getNombre();
    $email = $alumno->getemail();
    $poblacion = $alumno->getPoblacion();
    $fechaNacimiento = $alumno->getFechaNacimiento();
    $curso = $alumno->getCurso();
    $asignaturas = $alumno->getAsignaturas();
    

?>