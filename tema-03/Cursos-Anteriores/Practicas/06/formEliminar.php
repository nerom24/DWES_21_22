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
			<?php menuPlantilla2(); ?>
		</nav>
		<section>
			<article>
				<form method="POST">
					<legend>Eliminar Articulo</legend>
				
					<div class="form-group">
						<label for="inputUser">Articulo</label>
						<input type="text" name="art" id="inputArt" class="form-control" required="required" title="Articulos" autofocus>
					</div>
					
					<button type="reset" class="btn btn-secondary">Reset</button>
					<button type="submit" class="btn btn-primary" formaction="eliminarArticulo.php">Eliminar</button>
					
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