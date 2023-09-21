<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<title>Uso de funciones</title>
</head>
<body>
	<div class="container">
		<header>
				<hgroup>
					<h1>Funciones - Valores por Defecto en parámetros<h1>
					<H2>Tema 03 Inserción de Código en Lenguaje de Marcas</H2>
				</hgroup>
		</header>
		<nav>
		<!-- Especificar main-menu() -->
		</nav>
		<section>
			<article>
				<?php 
					// Función que devuelve varios valores
					function hacerCafe($tipo="capuchino") {
     					return "he hecho un café $tipo\n";
					}

					echo hacerCafe();
					echo '<br>';
					echo hacerCafe("expreso");
				?>
			</article>
		</section>
		<footer>
			<p>&copy; Desarrollo Web Entorno Servidor - 2º DAW - Curso 16/17</p>
		</footer>
	</div>
</body>
</html>