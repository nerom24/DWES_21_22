<?php 

	//Incluimos plantilla y funciones 
	include("plantilla.php");

	//incluimos paquete de funciones para los artículos
	include ("functionArticulos.php");
	
	$art = $_POST['art'];

	
	$articulos = loadArticulos();
	
	$key = (string) array_search($art,array_column($articulos, 'Codigo'));
	
	if($key === false) {
		echo '<script language="javascript">
				alert("Articulo no existe");
				window.location = "index.php";
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
			<?php menuPlantilla2(); ?>
		</nav>
		<section>
			<article>
				<form method="get">
					<table class="table table-hover">
						<thead>
							<thead>
							<?php cabTablaArticulos(); ?>
						</thead>
						</thead>
						<tbody>
							<?php showArticulo($articulos, $key); ?>
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