<?php 
	
	/*
	Descrípción: Eliminar elemento del array de vehículos
	Examen: 
	*/
	include("plantilla.php");
	include ("functionVehiculos.php");
	
	$codigo = $_POST['codigo'];

	$vehiculos = loadVehiculos();

	$key = array_search($codigo,array_column($vehiculos, 'Codigo'));
	
	if($key === false ) {
		echo '<script language="javascript">
				alert("Vehiculo no existe");
				window.location = "formEliminar.php";
		</script>';
	} 

	$vehiculos = deleteVehiculo($vehiculos, $key);
	
	ksort($vehiculos);

	//Carga Plantilla de articulos
	plantillaVehiculos($vehiculos);
?>