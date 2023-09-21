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
					<legend>Eliminar Contacto</legend>
				
					<div class="form-group">
						<label for="inputUser">Usuario</label>
						<input type="text" name="usuario" id="inputUsuario" class="form-control" required="required" title="Usuario" autofocus>
					</div>
					
					<button type="reset" class="btn btn-secondary">Reset</button>
					<button type="submit" class="btn btn-primary" formaction="eliminarContacto.php">Eliminar</button>
					
				</form>
			</article>
		</section>
		<br>
		<hr>
		<footer>
			<?php footerPlantilla(); ?>
		</footer>
	</div>
	</div>
	<?php footerJquery(); ?>
</body>
</html>