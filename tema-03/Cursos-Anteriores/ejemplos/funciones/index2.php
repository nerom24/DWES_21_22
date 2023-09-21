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
					<h1>Uso de Procedimientos</h1>
					<H2>Tema 03 Inserción de Código en Lenguaje de Marcas</H2>
				</hgroup>
		</header>
		<nav>
		<!-- Especificar main-menu() -->
		</nav>
		<section>
			<article>
				<?php 
					function pintaTabla() {
						?>
						    <table class="table table-striped table-hover">
						    <thead>
						        <tr>
						        <th>Col 1</th>
						        <th>Col 2</th>
						        </tr>
						    </thead>
						    <tbody>
						    <tr>
						    	<td>as</td>
						    	<td>as</td>
						    </tr>
						    <tr>
						    	<td>as</td>
						    	<td>as</td>
						    </tr>
						    <tr>
						    	<td>as</td>
						    	<td>as</td>
						    </tr>
						    <tr>
						    	<td>as</td>
						    	<td>as</td>
						    </tr>
						    <tr>
						    	<td>as</td>
						    	<td>as</td>
						    </tr>
						    </tbody>
						    </table>
					    <?php 

					}

					//Llamada a un procedimiento
					pintaTabla();

				?>
			</article>
		</section>
		<footer>
			<p>&copy; Desarrollo Web Entorno Servidor - 2º DAW - Curso 16/17</p>
		</footer>
	</div>
</body>
</html>