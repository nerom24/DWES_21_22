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
					<h1>Formularios - Validación HTML5</H1>
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
				<input type="text" class="form-control" placeholder="Nombre del Alumno" name="nombre"  required autofocus >
			</div>
			<div class="form-group">
				<label for="media">Expediente Académico:</label>
				<input type="number" class="form-control" placeholder="5" name="media" min="1" max="10">
			</div>
			<div class="form-group">
				<label for="fechatitulo">Fecha Obtención Título:</label>
				<input type="date" class="form-control" name="fechatitulo" min="2000-01-01" max="2016-12-31">
			</div>
			<div class="form-group">
				<label for="nivelingles">Nivel Inglés (0-10):</label>
				<input type="range" class="form-control" name="nivelingles" min="0" step="0.5" max="10" value="5">
			</div>
			<div class="form-group">
				<label for="telefono">Número de Teléfono:</label>
				<input type="tel" class="form-control" name="telefono" pattern="[0-9]{9}" required>
			</div>
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" name="email" required>
			</div>
			<div class="form-group">
				<label for="web">URL Personal:</label>
				<input type="url" class="form-control" name="web">
			</div>
			<div class="form-group">
				<label for="nombre">Módulos:</label>				
				<div class="checkbox">
					<label><input type="checkbox" name="modulos[]" value="DWES" 
					>Desarrollo web en entorno servidor</label>
				</div>
				<div class="checkbox">
					<label><input type="checkbox" name="modulos[]" value="DWEC"
					>Desarrollo web en entorno cliente</label>
				</div>
				<div class="checkbox">
					<label><input type="checkbox" name="modulos[]" value="DIW"
					>Diseño de Interface Web</label>
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