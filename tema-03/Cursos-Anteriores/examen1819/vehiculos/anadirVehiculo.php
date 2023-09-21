<?php 
	
	/** Fichero: anadirVehiculo.php
	*   Descripción: añade el nuevo vehículo a la matriz vehiculos
	*   Curso 18:19
	*   Autor: Juan Carlos
	*   Fecha: 10/10/2018
	**/

	#includes

	include("plantilla.php");
	include("funVehiculos.php");

	# Almacenar los valores obtenidos en el formulario

	$id = $_POST['id'];
	$fabricante = $_POST['fabricante'];
	$modelo = $_POST['modelo'];
	$combustible = $_POST['combustible'];
	$motor = $_POST['motor'];
	$precio = (float) $_POST['precio'];
	
	# Se vuelve a cargar la matriz Vehiculos original

	$vehiculos = generaMatriz();

	# Crear registro nuevo vehículo

	$regVehiculo = 
				[ 
					"id" => $id,
					"Fabricante" => $fabricante,
					"Modelo" => $modelo,
					"Combustible" => $combustible,
					"Motor" => $motor,
					"Precio" => $precio
				];

	# Añadir registro a la matriz vehículos

	$vehiculos = nuevoRegistroTabla($vehiculos, $regVehiculo);

	# Muestra la tabla vehículos mediante la función index

	index($vehiculos);
	
 ?>

 