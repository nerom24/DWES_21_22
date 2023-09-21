<?php 
	/*
		Práctica: 01 - Control de Sesiones
		Tema: 05 Control de Sesiones
		Fecha: 15/11/2017
		Fichero: acceso.php
		GET:
		POST: 
		SESION: indUsuario

	*/ 

	include("plantilla.php");
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
<head>
	
	<?php headPlantilla(); ?>

</head>
<body>
	<div class="container"> 
		<header>
			<?php headerPlantilla(); ?>
		</header>
		<!-- Menú de Navegación  -->
		
		<?php menuLogin($usuarioLogeado->getUsuario()); ?>
		
		<section>
			<article>
			<table>
			
			<table class="table table-hover">
				<thead>
					<?php cabTabla(); ?>
				</thead>
				<tbody>
					<?php
						//muestra todos los contactos de la agenda 
				 		$usuarios->mostrarUsuarios();

				 		// Mostrar número de elementos
				 		$usuarios->mostrarNumElementos();
					?>
				</tbody>
			</table>

			</table>

			</article>
			<!-- <a href="login.php" class="btn btn-primary" role="button" aria-pressed="true">Login</a> -->
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