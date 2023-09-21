<?php 
	
	
	/** Fichero: buscar.php
	*   parámetros GET: expBusqueda
	*   Descripción: Busca elementos de la matriz a partir de un criterio
	*   Fecha: 10/10/2018
	*   Autor: Juan Carlos
	**/

	# includes

	include("plantilla.php");
	include("funLibros.php");

	# Información GET del formulario

	$expBusqueda = $_GET["expBusqueda"];


	# Declaración de la matriz libros

	$libros = generaMatriz();

	# Filtrar a partir de la expresión de búsqueda

	$libros = filtrarTabla($libros, $expBusqueda);

	# Mostrar la tabla filtrada

	index($libros);
 ?>

