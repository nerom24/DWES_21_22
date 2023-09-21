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
					<h1>Formularios - Validación Datos</H1>
					<H2>Tema 03 Inserción de Código en Lenguaje de Marcas</H2>
				</hgroup>
		</header>
		<nav>
		<!-- Especificar main-menu() -->
		</nav>
		<section>
			<article>
				<form name="input" action="procesar.php" method="post">
				<div class="form-group">
					<label for="nombre">Nombre:</label>
					<input type="text" class="form-control" placeholder="Nombre del Alumno" name="nombre" autofocus>
				</div>
				<div class="form-group">
					<label for="nombre">Módulos:</label>
					<div class="checkbox">
						<label><input type="checkbox" name="modulos[]" value="DEWS">Desarrollo web en entorno servidor</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="modulos[]" value="DWEC">Desarrollo web en entorno cliente</label>
					</div>
				</div>
				<input type="reset" class="btn btn-default" value="Borrar" />
				<input type="submit" class="btn btn-default" value="Enviar" name="enviar" />
				</form>
			</article>
		</section>
		<footer>
			<p>&copy; Desarrollo Web Entorno Servidor - 2º DAW - Curso 16/17</p>
		</footer>
	</div>
</body>
</html>