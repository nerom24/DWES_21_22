<?php

    # modelEditar
    
    //Clases
    include_once('class/conexion.php');
    include_once('class/corredor.php');
    include_once('class/conexion_maratoon.php');

    $id = $_GET['id'];

    //Creamos la conexión
    $conexion = new Conexion_maratoon();

    $corredor = $conexion->read($id);

    $clubs = $conexion->getClubs();
    $categorias = $conexion->getCategorias();

    
?>