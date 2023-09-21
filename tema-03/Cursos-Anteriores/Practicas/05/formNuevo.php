
<!-- 
	Práctica: 03
	Tema: 03 DWES
	Curso: 2º DAW - 2017/2018
	Descripción: Agenda de contactos con usuario, nombre y telefono. Métodos Añadir, Modificar, eliminar y buscar. Array asociativo con usuario como índice.
	Autor: Juan Carlos Moreno
	Fecha: 18/10/2017
	Fichero: nuevo.php
	Tarea: Muestra formulario para añadir contacto 
-->
  
<?php 

	include ("plantilla.php");

?>
<!DOCTYPE html>
<html lang="es">
<?php 
	headPlantilla();	
?>
<body>
	<div class="container">
		<header>
			<?php headerPlantilla(); ?>
		</header>
		<nav>
			<?php menuPlantilla(); ?>
		</nav>
		<section>
			<article>
				<form method="POST">
					<legend>Añadir Conctacto</legend>
				
					<?php camposFormContactos(); ?>

					<button type="reset" class="btn btn-secondary">Reset</button>
					<button type="submit" class="btn btn-primary" formaction="anadirContacto.php">Añadir</button>
					
				</form>
			</article>
		</section>
		<br>
		<footer>
			<?php footerPlantilla(); ?>
		</footer>
	</div>
	</div>
	<?php footerJquery(); ?>
</body>
</html>