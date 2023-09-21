<?php 

	/** Fichero: eliminar.php
    *   Descripción: Elimina un registro de la tabla
    *   $_GET: indice - elemento que deseamos eliminar
    *   Autor: Juan Carlos
	*   Fecha: 10/10/2018
	**/
	
	# Incluimos la librería de funciones para tabla
    require_once("lib/funcionesTabla.php");

    # Generamos la tabla libros con los valores
    $tabla = generarTabla();

    # Generamos el array con los campos de la tabla
    $cabecera = array_keys($tabla[0]);

    # Recibo indice del elemento mediante la url
    # es decir mediante el método GET
    # eliminar.php?indice=xx
    $key = $_GET['indice'];
    $tabla = eliminar($tabla, $key);

    # Cargamos la plantilla de la aplicación
    require_once("template/libros.php");
  
  ?>
