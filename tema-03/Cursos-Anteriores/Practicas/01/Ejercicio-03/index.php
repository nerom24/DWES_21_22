 
<?php 
 
	/* Procedimiento: Ejercicio 03 - Practica 01 - Tema 03
	Descripción: Muestra las imágenes del directorio fotos con estilo bootstrap 04
	Curso: 2017/2018
	Fecha: 17/10/2017
	Autor: Juan Carlos

	*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	
	<title>Actividad 3.1 - Tema 3 -DWES</title>

</head>
<body>
	<div class="container">
		<header>
				<hgroup>
					<h1 class="text-muted">Tema 3 - DWES</h1>
					<H3 >Actividad 3.1 - Ejercicio 03 - Album Web</H3>
				</hgroup>
		</header>
		<nav>
		<!-- Especificar main-menu() -->
		</nav>
		<section>
			<article>
			
			<?php
				if ($gestor = opendir('fotos')) {
					echo '<div class="row">';
					$i=0;
					while ($archivo = readdir($gestor)) {
						if ($archivo!="." && $archivo!="..") {
							if ($i==3) {
								$i=0;
								echo '</div>';
								echo '<div class="row">';
							}
							$i++;
							echo '<div class="col">';
							echo "<a href=fotos/$archivo><img class=\"img-fluid img-thumbnail\" src=fotos/$archivo></a>";
							echo '</div>';
						}
					}
					echo "</div>";
					
					closedir($gestor);
				}
			?>
			
			
			</article>
		</section>
		<footer>
			<hr>
			<p>&copy; DWES - Juan Carlos - 2º DAW - Curso 17/18</p>
		</footer>
	</div>
	
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jquery/jquery-3.2.1.min.js"></script>
    <script src="popper/popper.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>