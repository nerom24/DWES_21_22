<?php 

	/** Fichero: eliminar.php
	*   $_GET: indice
	*   Descripción: Elimina un registro de la tabla libros
	*   Fecha: 10/10/2018
	**/
	
	# Includes

	include("plantilla.php");
	include("funVehiculos.php");

	#Leemos el índice de registro que queremos eliminar

	$indice = $_GET["indice"];

	# Declaración de la matriz libros

	$libros = generaMatriz();

	# Eliminamos el registro correspondiente de la matriz
	
	$libros = eliminarElemento($libros, $indice);

	# Llamada a la plantilla principal

	index($libros);

 ?>