<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="jquery/jquery.min.js"></script>
  	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<title>Variables de Sesión</title>
</head>
<body>
	<div class="container">
		<header class="jumbotron text-center">
            <h1>Variables de Sesión - Index.html</h1>
            <h2>Tema 5. Control de Sesiones</h2>
        </header>
		<nav>
		</nav>
		<section>
			<article>
			<form action="pagina2.php" method="post">
				<div class="form-group">
					<label for="usuario">Usuario:</label>
  					<input type="text" class="form-control" placeholder="Nombre de usuario" name="campousuario" autofocus>
				</div>
					<div class="form-group">
					<label for="campoclave">Password:</label>
  					<input type="password" class="form-control" name="campoclave">
				</div>
				<input type="submit" value="confirmar">
				</form>
			</article>
		</section>
		<footer>
			<br>
			<p>&copy; Desarrollo Web Entorno Servidor - 2º DAW - Curso 16/17</p>
		</footer>
	</div>
</body>
</html>
