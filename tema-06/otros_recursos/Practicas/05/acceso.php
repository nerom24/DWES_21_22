<?php 
	/*
		Práctica: 05 - Gestion de Sesiones
		Tema: 05 Control de Sesiones
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

	$usuarios = $_SESSION['arrayUsuarios'];

	$usuarioLogeado = $usuarios->getUsuario($key);
	$nomUsuarioLogeado = $usuarioLogeado->getUsuario();

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
		
		<?php menuAcceso($nomUsuarioLogeado) ?>
		
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