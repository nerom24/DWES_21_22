<?php 
	
	/** Fichero: buscar.php
	*   GET: exp - de búsqueda
    *   Descripción: Busca elementos de la matriz a partir de un
    *   una expresión de búsqueda
	*   Fecha: 21/10/2019
	*   Autor: Juan Carlos
	**/

	# Incluimos la librería de funciones para tabla
    require_once("lib/funciones_libros.php");

    # Generamos la tabla libros con los valores
    $libros = generar_tabla_libros();

    # Información GET del formulario
	$expBusqueda = $_GET['expresion'];

	# Filtrar a partir de la expresión de búsqueda

    if (!empty($expBusqueda)) {
        $libros = filtrar($libros, $expBusqueda);
    }

	# Mostrar la tabla filtrada

	require_once("libros.php");
 ?>