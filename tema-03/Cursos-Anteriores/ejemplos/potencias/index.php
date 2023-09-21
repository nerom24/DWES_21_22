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
					<h1>Actividad 3.3 - Tabla con Potencias del 1 al 4</H1>
					<H2>Tema 03 Inserción de Código en Lenguaje de Marcas</H2>
				</hgroup>
		</header>
		<nav>
		<!-- Especificar main-menu() -->
		</nav>
		<section>
			<article>
				<?php 
					define("TAM",4);
					function potencia ($v1, $v2) {
					$rdo= pow($v1, $v2);
					return $rdo;
					}
					echo '<table class="table table-hover">';
					for ($n1=1; $n1<=TAM; $n1++)
					{
					echo "<tr>";
					for ($n2=1; $n2<=TAM; $n2++)
					echo "<td>". potencia($n1,$n2). "</td>";
					echo "</tr>";
					}
					echo "</table>";
				?>
			</article>
		</section>
		<footer>
			<p>&copy; Desarrollo Web Entorno Servidor - 2º DAW - Curso 16/17</p>
		</footer>
	</div>
</body>
</html>