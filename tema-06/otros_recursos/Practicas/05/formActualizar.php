<?php 

	include ("plantilla.php");
	include("classUsuarios.php");
	session_start();
	if (!isset($_SESSION['indUsuario'])) {

		header('location: login.php');
	}

	//Se ha enviado mediante URL el índice del usuario a modificar
	//Guardo el indice.
	$id = $_GET['id'];

	$key = $_SESSION['indUsuario'];
	$usuarios = $_SESSION['arrayUsuarios'];

	//Objeto del usuario que voy a editar
	$usuario = $usuarios->getUsuario($id);
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
			<?php menuAcceso($usuarioLogeado->getUsuario()); ?>
		</nav>
		<section>
			<article>
				<form method="POST">
					<legend>Editar Usuario</legend>
				
					<?php camposFormEditar($usuario); ?>

					
					<a href="acceso.php" class="btn btn-secondary" role="button" aria-pressed="true">Cancelar</a>

					<button type="reset" class="btn btn-secondary">Recuperar</button>

					<button type="submit" class="btn btn-primary" formaction="actualizar.php?id=<?php echo $id; ?>">Actualizar</button>
					
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