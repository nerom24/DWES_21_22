<?php 

	/** 
	* mostrarUusario.php
	* muestra los datos de un objeto tipo usuario
	* los muestra en un formulario con los campos desactivados, disabled
	**/

	include ("plantilla.php");
	include("classUsuarios.php");
	session_start();

	if (!isset($_SESSION['indUsuario'])) {

		header('location: login.php');
	}
	//Se ha enviado mediante URL el índice del usuario a modificar
	//Guardo el indice.
	$id = $_GET['id'];

	$usuarios = $_SESSION['arrayUsuarios'];

	//Objeto del usuario que voy a editar
	$usuario = $usuarios->getUsuario($id);


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
			<?php menuAcceso($usuario->getUsuario()); ?>
		</nav>
		<section>
			<article>
				<form method="POST">
					<legend>Mostrar Usuario</legend>
				
					<?php camposFormMostrar($usuario); ?>

					<button type="submit" class="btn btn-primary" formaction="acceso.php">Volver</button>
					
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