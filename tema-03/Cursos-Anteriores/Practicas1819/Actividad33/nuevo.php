<?php 
	
	/** Archivo: nuevo.php
	*   Descripción: formulario para añadir libro
	*   Curso 18/19
	*   Autor: Juan Carlos
	*   Fecha: 10/10/2018
	**/

	# includes de funciones y plantilla

	include("plantilla.php")
 
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
		
		<!-- Mostrar formulario -->

		<?php formNuevoLibro(); ?>
		
		<!-- Mostrar Pie de página -->
		
		<?php pie(); ?>
	
	</div>

	<?php scriptVarios(); ?>
	
</body>
</html>