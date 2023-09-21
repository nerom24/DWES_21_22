<?php 

	//Incluimos plantilla y funciones 
	include("plantilla.php");

	//incluimos paquete de funciones para la agenda	
	include ("functionAgenda.php");
	
	$usuario = $_POST['usuario'];
	
	$agenda = array();

	$agenda = loadAgenda();
	
	if( !array_key_exists($usuario,$agenda)) {
			echo '<script language="javascript">
					alert("Usuario no encontrado");
					window.location = "formBuscar.php";
				</script>';
	}


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
				<form method="get">
					<table class="table table-hover">
						<thead>
							<thead>
							<?php cabTablaContactos(); ?>
						</thead>
						</thead>
						<tbody>
							<?php mostrarContacto($agenda, $usuario); ?>
						</tbody>
					</table>
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
</body>
</html>