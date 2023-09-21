<?php

    /*  Fichero: ordenar.php
        Descripción: Recibe el campo por el que ordena desde artículos.php
        $GET: criterio del campo por el que se desea ordenar
        Fecha: 22/10/2020
        Autor: Juan Carlos Moreno
    */

    require_once('lib/funciones_peliculas.php');
    $peliculas = generar_tabla();
    $criterio = $_GET['criterio']; 
    $peliculas = ordenar($peliculas, $criterio); 
    $pagina = "Gestión Películas - Ordenar";
?>
