<?php

    /*  Fichero: eliminar.php
        Descripción: Conectará con funciones_articulos para eliminar un artículo
        $_GET: indice - elemento que deseamos eliminar
        Fecha: 22/10/2020
        Autor: Juan Carlos Moreno
    */

    require_once('lib/funciones_peliculas.php');
    $peliculas = generar_tabla();

    $indice = $_GET['indice'];

    $articulos = eliminar($peliculas, $indice);
   
    $pagina = "Gestión Películas - Eliminar";

?>
