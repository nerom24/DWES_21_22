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
					<h1>Actividad 3.1 - Tabla 10 x 10</H1>
					<H2>Tema 03 Inserción de Código en Lenguaje de Marcas</H2>
				</hgroup>
		</header>
		<nav>
		<!-- Especificar main-menu() -->
		</nav>
		<section>
			<article>
				<?php 
					echo '<div class="table-responsive">';
					echo '<table class="table table-striped table-hover">';
					$n=1;
					for ($n1=1; $n1<=10; $n1++)	{
						echo "<tr>";
						for ($n2=1; $n2<=10; $n2++) {
							echo "<td>", $n, "</td>";
							$n=$n+1;
						}
						echo "</tr>";
					}
					echo "</table>";
					echo '</div>';
				?>
			</article>
		</section>
		<footer>
			<p>&copy; Desarrollo Web Entorno Servidor - 2º DAW - Curso 16/17</p>
		</footer>
	</div>
</body>
</html>