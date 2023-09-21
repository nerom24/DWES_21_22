<?php 
	/*
		Práctica: 01 - Control de Sesiones
		Tema: 05 Control de Sesiones
		Fecha: 15/11/2017
		Fichero: index.php
	*/ 

	include("plantilla.php");

?>

<!DOCTYPE html>
<html lang="es">
<head>
	
	<?php headPlantilla(); ?>

</head>
<body>
	<div class="container"> 
		<header>
			<?php headerPlantilla(); ?>
		</header>
		<!-- Menú de Navegación  -->
		
		<?php menuPlantilla(); ?>
		
		<section>
			<article>
			<!-- Especificar Contenido -->
			</article>
		</section>
		<footer>
			<?php footerPlantilla(); ?>
		</footer>
	</div>
	</div>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<?php footerJquery(); ?>
</body>
</html>