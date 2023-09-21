<?php 
	
	/** Documento: ordenar.php
	*   GET: criterio
	*   Descripción: ordena matriz según criterio
	*   Fecha: 10/10/2018
	*   Autor: Juan Carlos
	**/

	# Includes

	include("plantilla.php");
	include("funVehiculos.php");

	# Criterio de ordenación pasado mediante método GET 

	$criterio = $_GET["criterio"];


	# Declaración de la matriz libros

	$vehiculos = generaMatriz();

	# Ordenar array por criterio
	
	$vehiculos = ordenarTabla($vehiculos, $criterio);

	# Plantilla principal

	index($vehiculos);
 ?>

