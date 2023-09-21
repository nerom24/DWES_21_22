<?php 
	
	/** Archivo: formActualizar.php
	*   Descripción: formulario para modificar datos de un vehículo
	*   $_GET: indice
	*  	Curso 18/19
	*   Autor: Juan Carlos
	*   Fecha: 10/10/2018
	**/

	# Includes

	include("plantilla.php");
	include("funVehiculos.php");

	# Variable GET

	$indice = $_GET["indice"];

	# Declaración de la matriz vehículos

	$vehiculos = generaMatriz();

	$tiposCombustibles = generaTiposCombustibles();

	# Variables con los datos del libro seleccionado

	$id = $vehiculos[$indice]["id"];
	$fabricante = $vehiculos[$indice]["Fabricante"];
	$modelo = $vehiculos[$indice]["Modelo"];
	$combustible = $vehiculos[$indice]["Combustible"];
	$motor = $vehiculos[$indice]["Motor"];
	$precio = $vehiculos[$indice]["Precio"];

 ?>

<!DOCTYPE html>
<html>

<?php head(); ?>

<body>
	<div class="container">
		
		<!-- Cabecera -->

		<?php cabecera(); ?>

		<!-- Menú Principal -->
		
		<?php menuPrincipal(); ?>
		
		<!-- Mostrar formulario para editar datos del vehículo -->

		<?php formEditVehiculo($tiposCombustibles, $indice, $id, $fabricante, $modelo, $combustible, $motor, $precio); ?>
		
		<!-- Mostrar Pie de página -->
		
		<?php pie(); ?>
	
	</div>

	<?php scriptVarios(); ?>
	
</body>
</html>