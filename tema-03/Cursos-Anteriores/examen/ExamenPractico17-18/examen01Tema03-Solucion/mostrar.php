<?php 

	include("plantilla.php");
	include ("functionVehiculos.php");
	
	$codigo = $_POST['codigo'];

	
	$vehiculos = loadVehiculos();
	
	$key = (string) array_search($codigo,array_column($vehiculos, 'Codigo'));
	
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
						
						<table class="table table-hover">
							<thead>
								<?php cabTablaVehiculos(); ?>
							</thead>
							<tbody>
								<?php
									showVehiculo($vehiculos, $key)	
								?>
							</tbody>
						</table>
						
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
