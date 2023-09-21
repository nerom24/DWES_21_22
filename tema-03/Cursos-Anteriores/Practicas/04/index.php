<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	
	<title>Actividad 3.4- Tema03 - DWES</title>

</head>
<body>
	<div class="container">
		<header>
				<hgroup>
					<!-- Títulos y subtítuos -->
					<h1 class="text-muted">Tema.03 - DWES</h1>
					<h2>Actividad 3.4 - Formularios con validación</h2>
				</hgroup>
		</header>
		<nav>
		<!-- Especificar main-menu() -->
		</nav>
		<section>
			<article>
				<!-- Especificar Contenido -->
				<form action="validarForm.php" method="POST" role="form">
					<legend>Formulario</legend>
				
					<div class="form-group">
						<label for="">Nombre</label>
						<input type="text" class="form-control" id="Nombre" name="nombre" step="0.1" required="required" title="Nombre">
					</div>
						<div class="form-group">
						<label for="">Apellidos</label>
						<input type="text" class="form-control" id="Apellidos" name="apellido" step="0.1" required="required" title="Apellidos">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input type="email" class="form-control" id="Email" name="email" step="0.1" required="required" title="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
					</div>
						<div class="form-group">
						<label for="">URL</label>
						<input type="url" class="form-control" id="url"  name="url" step="0.1" required="required" title="URL" pattern="^http://www.[a-zA-Z0.9._-]{4,}$">
					</div>
						<div class="form-group">
						<label for="">Edad</label>
						<input type="number"  class="form-control" name="edad" id="Edad"  required="required" title="Edad" pattern="[0-9]{1,4}">
					</div>
					<div class="form-group">
						<label for="">Estudios</label>
						<select class="form-control" name="estudios">
						  <option value="Primaria">Primaria</option>
						  <option value="Secundaria">Secundaria</option>
						  <option value="Bachillerato">Bachillerato</option>
						  <option value="Grado Medio FP">Grado Medio FP</option>
						  <option value="Grado Superior FP">Grado Superior FP</option>
						  <option value="Grado Universitario">Grado Universitario</option>
						</select>
					</div>
					<div class="form-group">
						<label for="">Usuario</label>
						<input type="text" class="form-control" id="Usuario" name="user" step="0.1" required="required" title="Usuario">
					</div>
					<div class="form-group">
						<label for="">Contraseña</label>
						<input type="password" class="form-control" id="Contraseña" name="pass" step="0.1" required="required" title="Contraseña">
					</div>
					<button type="submit" class="btn btn-primary">Enviar</button>
					<button type="reset" class="btn btn-secondary">Reset</button>
				</form>
			</article>
		</section>
		<footer>
			<hr>
			<p>&copy; DWES - Juan Carlos Moreno- 2º DAW - Curso 17/18</p>
		</footer>
	</div>
	
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jquery/jquery-3.2.1.min.js"></script>
    <script src="popper/popper.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>