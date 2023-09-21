<?php 
	
	//Incluimos plantilla y funciones 
	include("plantilla.php");

	//incluimos paquete de funciones para la agenda	
	include ("functionVehiculos.php");
	
	$vehiculos = loadVehiculos();

	//$campo = $criterio;
	$campo = $_GET['criterio'];

	array_sort_by($vehiculos, $campo, $order = SORT_ASC);
	
	//Carga Plantilla de articulos
	plantillaVehiculos($vehiculos);

?>