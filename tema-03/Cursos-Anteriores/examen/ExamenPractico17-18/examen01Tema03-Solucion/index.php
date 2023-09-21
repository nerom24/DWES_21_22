<?php 
	/*
	
		Descripción: Gestión de Vehículos
		Examen: 
	*/ 

	//includes
	require_once("plantilla.php");
	require_once("functionVehiculos.php");

	

	//Cargamos array vehiculos
	$vehiculos = loadVehiculos();

	//ordena array
	sort($vehiculos);

	//Carga Plantilla de Vehiculos
	plantillaVehiculos($vehiculos);
	

?>

