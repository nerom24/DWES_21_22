<?php

    //Clases
    include_once('class/conexion.php');
    include_once('class/corredor.php');
    include_once('class/conexion_maratoon.php');

    //Creamos la conexión
    $conexion = new Conexion_maratoon();

    //Obtener corredores
    $corredores = $conexion->getCorredores();


?>