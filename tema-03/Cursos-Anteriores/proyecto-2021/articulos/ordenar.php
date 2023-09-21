<?php

    /*  Fichero: ordenar.php
        Descripción: Recibe el campo por el que ordena desde artículos.php
        $GET: criterio del campo por el que se desea ordenar
        Fecha: 22/10/2020
        Autor: Juan Carlos Moreno
    */

    require_once('lib/funciones_articulos.php');
    $articulos = generar_tabla();
    $criterio = $_GET['criterio']; 
    $articulos = ordenar($articulos, $criterio); 
    $titulo = "Gestión Artículos - Ordenar";
?>
