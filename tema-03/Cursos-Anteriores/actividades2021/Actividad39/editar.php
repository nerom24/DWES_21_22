<?php 

	/** Fichero: editar.php
    *   Descripción: Muestra los datos del libro en un formulario editable
    *   $_GET: indice de la tabla que se desa editar
    *   Autor: Juan Carlos
	*   Fecha: 27/10/2020
	**/
	
	# Incluimos la librería de funciones para tabla
    require_once("lib/funciones_libros.php");

    # Generamos la tabla libros con los valores
    $libros = generar_tabla_libros();

    # Recibo indice del elemento mediante la url
    # es decir mediante el método GET
    # form_editar.php?indice=xx
    
    $indice = $_GET['indice'];

    # Obtengo los datos del registro que quiero modificar

    $registro = $libros[$indice];

    # Cada campo del registro lo almacenamos en una variable
    # para un tratamiento más descriptivo de los datos.

    $id = $registro['id'];
    $titulo = $registro['titulo'];
    $autor = $registro['autor'];
    $genero = $registro['genero'];
    $precio = $registro['precio'];

    include_once("form_editar.php");

?>
