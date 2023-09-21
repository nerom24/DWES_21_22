<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<title>Tabla con números del 1 al 100</title>
</head>
<body>
	<div class="container">
		<header>
				<hgroup>
					<h1>Actividad 3.4 - Colección Imágenes</H1>
					<H2>Tema 03 Inserción de Código en Lenguaje de Marcas</H2>
				</hgroup>
		</header>
		<nav>
		<!-- Especificar main-menu() -->
		</nav>
		<section>
			<article>				
			<?php
				if ($gestor = opendir('fotos')) {
					echo '<table class="table">';
					echo "<tr>";
					$i=0;
					while (false !== ($archivo = readdir($gestor))) {
						if ($archivo!="." && $archivo!="..") {
							if ($i==4) {
								$i=0;
								echo "</tr>";
								echo "<tr>"; }
							$i++;
							echo "<td>";
							echo "<a href=fotos/$archivo><img class=\"img-responsive img-rounded\" src=fotos/$archivo></a>";
							echo "</td>";
						}
					}
					echo "</tr>";
					echo "</table>";
					closedir($gestor);
				}
			?>	
			</article>
		</section>
		<footer>
			<p>&copy; Desarrollo Web Entorno Servidor - 2º DAW - Curso 16/17</p>
		</footer>
	</div>
</body>
</html>