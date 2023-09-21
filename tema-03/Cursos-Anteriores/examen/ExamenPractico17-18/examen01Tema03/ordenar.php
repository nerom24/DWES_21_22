<?php 
	
	//Incluimos plantilla y funciones 
	include("plantilla.php");

	//incluimos paquete de funciones para la agenda	
	include ("functionArticulos.php");
	
	$vehiculos = loadVehículos();

	//$campo = $criterio;
	$campo = $_GET['criterio'];

	array_sort_by($articulos, $campo, $order = SORT_ASC);
	
	//Carga Plantilla de articulos
	plantillaVehiculos($vehiculos);

?>