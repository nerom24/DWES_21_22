<?php 

	/** Fichero: actualizar.php
	*   $_GET: indice
	*   Descripción: Modifica los datos de un registro 
	*   Fecha: 10/10/2018
	*   Autor: Juan Carlos
	**/
	
	# Includes

	include("plantilla.php");
	include("funVehiculos.php");

	#Leemos el índice de registro que queremos modificar

	$indice = $_GET["indice"];

	# Tomo los valores editados del libro

	$registro = [

					"id" => $_POST["id"],
					"Fabricante" => $_POST["fabricante"],
					"Modelo" => $_POST["modelo"],
					"Combustible" => $_POST["combustible"],
					"Motor" => $_POST["motor"],
					"Precio" => (float) $_POST["precio"],

					];

	# Declaración de la matriz vehiculos

	$vehiculos = generaMatriz();

	# Actualizo la matriz libro con los nuevos valores
	
	$vehiculos = actualizarTabla($vehiculos, $indice, $registro);

	# Llama al index con la nueva matriz libros

	index($vehiculos);

 ?>