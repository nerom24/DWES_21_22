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
					<h1>Funciones que devuelven Varios Valores<h1>
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
					function numeros() {
     					return array(0,1,2);
					}

					// lista asigna una lista de valores a un conjunto de variables
					list ($cero, $uno, $dos) = numeros();				
					echo $cero;
					echo $uno;
					echo $dos;
				?>
			</article>
		</section>
		<footer>
			<p>&copy; Desarrollo Web Entorno Servidor - 2º DAW - Curso 16/17</p>
		</footer>
	</div>
</body>
</html>