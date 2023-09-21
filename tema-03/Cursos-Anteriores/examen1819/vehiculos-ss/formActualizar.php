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

		<?php formEditVehiculo(); ?>
		
		<!-- Mostrar Pie de página -->
		
		<?php pie(); ?>
	
	</div>

	<?php scriptVarios(); ?>
	
</body>
</html>