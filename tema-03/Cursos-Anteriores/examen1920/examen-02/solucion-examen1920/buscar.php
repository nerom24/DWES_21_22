<?php 
	
	
	/** Fichero: buscar.php
	*   GET: exp - de búsqueda
    *   Descripción: Busca elementos de la matriz a partir de un
    *   una expresión de búsqueda
	*   Fecha: 21/10/2019
	*   Autor: Juan Carlos
	**/

	# Incluimos la librería de funciones para tabla
    require_once("libs/funcionesTabla.php");

    # Generamos la tabla libros con los valores
    $tabla = generarTabla();

    # Generamos el array con los campos de la tabla
    $cabecera = array_keys($tabla[0]);

    # Información GET del formulario

	$expBusqueda = $_GET['exp'];

	# Filtrar a partir de la expresión de búsqueda

    if (!empty($expBusqueda)) {
        $tabla = filtrar($tabla, $expBusqueda);
    }

	# Mostrar la tabla filtrada

	require_once("template/articulos.php");
 ?>