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
			<?php menuPlantilla2(); ?>
		</nav>
		<section>
			<article>
				<form method="POST">
					<legend>Actualizar Vehículos</legend>
				
					<?php camposFormVehiculos(); ?>

					<button type="reset" class="btn btn-secondary">Reset</button>
					<button type="submit" class="btn btn-primary" formaction="actualizarArticulo.php">Actualizar</button>
					
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