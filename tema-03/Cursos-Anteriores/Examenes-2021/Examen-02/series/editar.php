<?php

    /*  Fichero: editar.php
        Descripción: Recibe el ID de un articulo
        $GET: indice de la tabla que se desea editar
        Fecha: 22/10/2020
        Autor: Juan Carlos Moreno
    */

    
    require_once('lib/funciones_peliculas.php');

    
    $peliculas = generar_tabla();

    $generos = generar_tabla_generos();

    $key = $_GET['indice'];

    # Obtengo el array que quiero modificar

    $registro = $peliculas[$key];


    # Cada campo o índice asociativo del array lo almaceno en una variable

    $id = $registro['id'];
    $titulo = $registro['titulo'];
    $director = $registro['director'];
    $nacionalidad = $registro['nacionalidad'];
    $generos_registro = $registro['generos'];
    $año = $registro['año'];
 

    $pagina = "Gestión Películas - Editar";
?>
