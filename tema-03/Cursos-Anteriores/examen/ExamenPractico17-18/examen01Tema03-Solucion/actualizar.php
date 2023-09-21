<?php 
	
	/* 
	Actualizar vehículo 
	*/ 
	include("plantilla.php");
	include ("functionVehiculos.php");

	//creamos variables locales con los valores del formulario POST
	$codigo = $_POST['codigo'];
	$fabricante = $_POST['fabricante'];
	$modelo = $_POST['modelo'];
	$combustible = $_POST['combustible'];
	$motor = $_POST['motor'];
	$precio = $_POST['precio'];


	//cargamos la agenda con los valores de la función.
	$vehiculos = loadVehiculos();

	$key = array_search($codigo,array_column($vehiculos, 'Codigo'));
	
	//Comprobar existencia de la clave
	if($key === false) {
		echo '<script language="javascript">
				window.location = "formNuevo.php";
				alert("El código de vehículo no existe");
			</script>'; 
	}  
	
		
	//Añade nuevo artículo
	$vehiculos = updateVehiculo($vehiculos, $codigo, $fabricante, $modelo, $combustible, $motor, $precio, $key);
	
	ksort($vehiculos);
	//Carga Plantilla 
	plantillaVehiculos($vehiculos);
	
	
?>