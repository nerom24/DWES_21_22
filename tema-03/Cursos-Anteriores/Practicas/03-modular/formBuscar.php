<?php 
	include("plantilla.php");	 	    
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
					<legend>Buscar Contacto</legend>
				
					<div class="form-group">
						<label for="">Clave Contacto: </label>
						<input type="text" name="usuario" id="inputUsuario" class="form-control" required="required" title="Usuario" autofocus>
					</div>

					<button type="reset" class="btn btn-secondary">Reset</button>
					<button type="submit" class="btn btn-primary" formaction="mostrarContacto.php">Buscar</button>
					
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