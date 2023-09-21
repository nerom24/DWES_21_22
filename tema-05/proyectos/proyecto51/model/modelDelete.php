<?php

    # modelDelete
    // Cargamos los cursos, con las clases
    
    //Clases
    include_once('class/conexion.php');
    include_once('class/conexion_maratoon.php');

    //Creamos la conexión
    $conexion = new Conexion_maratoon();

    //Obtengo id del alumno que deseo eliminar
    $id = $_GET['id'];

    //Método para borrar
    $corredor = $conexion->delete($id);

?>