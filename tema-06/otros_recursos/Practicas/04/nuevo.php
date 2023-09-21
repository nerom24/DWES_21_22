<?php
	/**
	* 	@nombre: nuevo.php 
	* 	@descripción: añade un objeto al array a partir de los datos del formulario
	* 	@post: datos del formualario
	**/
	
	include("plantilla.php");
	include ("classUsuarios.php");

	session_start();

	if (!isset($_SESSION['indUsuario'])) {

		header('location: login.php');
	}

	$key = $_SESSION['indUsuario'];

	$usuarios = new usuarios();
	$usuarios->loadUsuarios();

	$usuarioLogeado = $usuarios->getUsuario($key);

	include("functions.php");

	//creamos un objeto tipo usuario con los valores POST del formulario
	$usuario = new usuario (
		text_input($_POST['usuario']),
		text_input($_POST['email']),
		text_input($_POST['tipo']),
		text_input($_POST['clave'])
	);

	//validamos el nombre de usuario
	$key = $usuarios->valUsuario($usuario->getUsuario());
	
	
	//Comprobar existencia de usuario
	if($key !== false) {
		echo '	<script language="javascript">
					window.location = "formNuevo.php";
					alert("Nombre usuario existente");
				</script>
			'; 
	}

	//Validamos el email
	$key = $usuarios->valEmail($usuario->getEmail());
	
	if($key !== false) {
		echo '	<script language="javascript">
					window.location = "formNuevo.php";
					alert("Email existente");
				</script>
			'; 
	}
		
	//Añade nuevo usuario
	$usuarios->insertar($usuario);
	
	//Carga Plantilla de Usuarios
	

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