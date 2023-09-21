<?php

    /*  Fichero: buscar.php
        Descripción: Recibe una expresión de búsqueda y filtra los datos a partir de la función
        $GET: expresión de búsqueda
        Fecha: 22/10/2020
        Autor: Juan Carlos Moreno
    */

    require_once('lib/funciones_peliculas.php');

    $peliculas = generar_tabla();

    $expBusqueda = $_GET['expresion'];

    # Filtrar
    
    if (!empty ($expBusqueda)) { 
        $peliculas = filtrar($peliculas, $expBusqueda);
    }
    
    $pagina = "Gestión Películas - Buscar";

?>
