<?php

    # modelEditar
    
    //Clases
    include_once('class/conexion.php');
    include_once('class/corredor.php');
    include_once('class/conexion_maratoon.php');

    //Recuperamos el alumno mediante el id de la URL (GET)
    $id = $_GET['id'];

    //Creamos la conexión
    $conexion = new Conexion_maratoon();

    //Obtenemos el objeto correspondiente a dicho corredor
    $corredor = $conexion->read($id);

    //Obtenemos array de categorías
    $categorias = $conexion->getCategorias();

    //Obtenemos array de clubs
    $clubs = $conexion->getClubs();
    
?>