
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
					<h1>Formularios - Validación General</H1>
					<H2>Tema 03 Inserción de Código en Lenguaje de Marcas</H2>
				</hgroup>
		</header>
		<nav>
		<!-- Especificar main-menu() -->
		</nav>
		<section>
			<article>
			<form name="frmPrueba" method="post" action="procesar.php">
			<div class="form-group">
				<label for="txtNombre">Nombre:</label>
				<input type="text" class="form-control" name="txtNombre" autofocus>
			</div>
			<div class="form-group">
				<label for="txtApellidos">Apellidos:</label>
				<input type="text" class="form-control" name="txtApellidos" >
			</div>
			<div class="form-group">
				<label for="edad">Edad:</label>
				<input type="number" class="form-control" name="txtEdad">
			</div>
			<div class="form-group">
				<label for="radIngles">Nivel Inglés:</label>
				<div class="radio">
  					<label><input type="radio" name="radIngles" value="BAJO">Bajo</label>
				</div>
				<div class="radio">
				  <label><input type="radio" name="radIngles"value="MEDIO">Medio</label>
				</div>
				<div class="radio disabled">
				  <label><input type="radio" name="radIngles" value="ALTO">Alto</label>
				</div>
			</div>
			<div class="checkbox">
  				<label><input type="checkbox" name="chkCoche" value="1">Vehículo Propio</label>
			</div>
            <input type="submit" name="btnEnviar" value="Enviar Formulario" />
        	</form>

			</article>
		</section>
		<footer>
			<p>&copy; Desarrollo Web Entorno Servidor - 2º DAW - Curso 16/17</p>
		</footer>
	</div>
</body>
</html>