<?php 
	
	/** 
	*   Archivo: index.php
	*   Descripción: página principal examen vehículos
	*   Fecha: 24/10/2018
	**/

	# includes

	include("plantilla.php");
	include("funVehiculos.php");

	# Declaración de la matriz libros

	$vehiculos = generaMatriz();
	

	# Llamada a la función que genera el index de la pagina

	index($vehiculos);
 ?>
