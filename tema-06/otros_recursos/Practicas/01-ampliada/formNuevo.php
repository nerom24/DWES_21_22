<?php 

	include ("plantilla.php");
	include("classUsuarios.php");

	session_start();

	if (!isset($_SESSION['indUsuario'])) {

		header('location: login.php');
	}

	$key = $_SESSION['indUsuario'];

	$usuarios = new usuarios();
	$usuarios->loadUsuarios();

	$usuarioLogeado = $usuarios->getUsuario($key);

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
			<?php menuLogin($usuarioLogeado->getUsuario()); ?>
		</nav>
		<section>
			<article>
				<form method="POST">
					<legend>Añadir Usuario</legend>
				
					<?php camposForm(); ?>

					<a href="index.php" class="btn btn-secondary" role="button" aria-pressed="true">Cancelar</a>

					<button type="reset" class="btn btn-secondary">Reset</button>
					
					<button type="submit" class="btn btn-primary" formaction="nuevo.php">Añadir</button>
					
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