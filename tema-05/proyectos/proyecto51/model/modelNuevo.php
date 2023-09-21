<?php

    # modelNuevo
    
    include_once('class/conexion.php');
    include_once('class/conexion_maratoon.php');

    $conexion = new Conexion_maratoon();

    $categorias = $conexion->getCategorias();
    $clubs = $conexion->getClubs();
    
?>