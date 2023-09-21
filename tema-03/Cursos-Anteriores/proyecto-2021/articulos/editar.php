<?php

    /*  Fichero: editar.php
        Descripción: Recibe el ID de un articulo
        $GET: indice de la tabla que se desea editar
        Fecha: 22/10/2020
        Autor: Juan Carlos Moreno
    */

    
    require_once('lib/funciones_articulos.php');

    
    $articulos = generar_tabla();

    $categorias = generar_tabla_categorias();

    $key = $_GET['indice'];

    # Obtengo el array que quiero modificar

    $registro = $articulos[$key];


    # Cada campo o índice asociativo del array lo almaceno en una variable

    $id = $registro['id'];
    $descripcion = $registro['descripcion'];
    $modelo = $registro['modelo'];
    $categoria = $registro['categoria'];
    $unidades = $registro['unidades'];
    $precio = $registro['precio'];
 

    $titulo = "Gestión Artículos - Editar";
?>
