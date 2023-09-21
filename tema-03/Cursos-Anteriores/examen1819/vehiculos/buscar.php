<?php 
	
	
	/** Fichero: buscar.php
	*   parámetros GET: expBusqueda
	*   Descripción: Busca elementos de la matriz a partir de un criterio
	*   Fecha: 10/10/2018
	*   Autor: Juan Carlos
	**/

	# includes

	include("plantilla.php");
	include("funVehiculos.php");

	# Información GET del formulario

	$expBusqueda = $_GET["expBusqueda"];


	# Declaración de la matriz vehiculos

	$vehiculos = generaMatriz();

	# Filtrar a partir de la expresión de búsqueda

	$vehiculos = filtrarTabla($vehiculos, $expBusqueda);

	# Mostrar la tabla filtrada

	index($vehiculos);
 ?>

