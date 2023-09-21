<?php
    //Clases
    include_once('class/conexion.php');
    include_once('class/corredor.php');
    include_once('class/conexion_maratoon.php');

    //Creamos la conexión
    $conexion = new Conexion_maratoon();

    //Obtenemos el criterio 
    $criterio = $_GET['criterio'];

    //Realizamos consulta con ORDER BY Criterio
    $corredores = $conexion->ordenar($criterio);
?>