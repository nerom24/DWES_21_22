<?php 

    /** Fichero: eliminar.php
    *   Descripción: Elimina un registro de la tabla
    *   $_GET: indice - elemento que deseamos eliminar
    *   Autor: Juan Carlos
	*   Fecha: 10/10/2018
	**/
	
	# Incluimos la librería de funciones para tabla
    require_once("lib/funciones_libros.php");

    # Generamos la tabla libros con los valores
    $libros = generar_tabla_libros();

    # Recibo indice del elemento mediante la url
    # es decir mediante el método GET
    # eliminar.php?indice=xx
    $indice = $_GET['indice'];
    $libros = eliminar($libros, $indice);

    include_once('template/libros.php');

?>


