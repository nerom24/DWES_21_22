<?php
    //Clases
    include_once('class/conexion.php');
    include_once('class/corredor.php');
    include_once('class/conexion_maratoon.php');

    //Creamos la conexión
    $conexion = new Conexion_maratoon();

    //Obtenemos el criterio 
    $expresion = $_GET['expresion'];

    // if (empty($expresion)) {
    //     $corredores = $conexion->getCorredores();
    // } else {
    //     $corredores = $conexion->ordenar($expresion);
    // }

    //Realizamos consulta con ORDER BY Criterio
    $corredores = $conexion->filtrar($expresion);
?>