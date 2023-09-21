<?php

    /*  Fichero: buscar.php
        Descripción: Recibe una expresión de búsqueda y filtra los datos a partir de la función
        $GET: expresión de búsqueda
        Fecha: 22/10/2020
        Autor: Juan Carlos Moreno
    */

    require_once('lib/funciones_articulos.php');

    $articulos = generar_tabla();

    $expBusqueda = $_GET['expresion'];

    # FILTRAR A PARTIR DE LA EXPRESIÓN DE BÚSQUEDA
    
    if (!empty ($expBusqueda)) { 
        $articulos = filtrar($articulos, $expBusqueda);
    }
    
    $titulo = "Gestión Artículos - Buscar";

?>
