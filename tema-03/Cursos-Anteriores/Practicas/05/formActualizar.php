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
					<legend>Actualizar Conctacto</legend>
				
					<?php camposFormContactos(); ?>

					<button type="reset" class="btn btn-secondary">Reset</button>
					<button type="submit" class="btn btn-primary" formaction="actualizarContacto.php">Actualizar</button>
					
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