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
					<h1>Formularios - Validación Datos HTML5</H1>
					<H2>Procesamiento del Formulario</H2>
				</hgroup>
		</header>
		<nav>
		<!-- Especificar main-menu() -->
		</nav>
		<section>
			<article>
			<?php
			if (($_SERVER["REQUEST_METHOD"] == "POST")) {
				$nombre = $_POST['nombre'];
				$media = $_POST['media'];
				$modulos = $_POST['modulos'];
				$fechatitulo = $_POST['fechatitulo'];
				$nivelingles = $_POST['nivelingles'];
				$telefono = $_POST['telefono'];
				$email = $_POST['email'];
				$web = $_POST['web'];
				print "Nombre: ".$nombre."<br />";
				print "Expediente: ".$media."<br />";
				print "Fecha Título: ".$fechatitulo."<br />";
				print "Nivel Inglés: ".$nivelingles."<br />";
				print "Telefono: ".$telefono."<br />";
				print "Email: ".$email."<br />";
				print "Web Personal: ".$web."<br />";
				if (isset($modulos)) {
				foreach ($modulos as $modulo) {
					print "Modulo: ".$modulo."<br />";
					}
				}
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