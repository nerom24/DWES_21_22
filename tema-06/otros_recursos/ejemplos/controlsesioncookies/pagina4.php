<?php
	session_start();
	$SIDsesion=session_id();
	session_unset();
	session_destroy();
?>
<html>
<head>

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
            <h1>Destruir Sesión - pagina4.php</h1>
            <h2>Tema 5. Control de Sesiones</h2>
        </header>
		<section>
			<div class="alert alert-warning alert-dismissable">
  				<button type="button" class="close" data-dismiss="alert">&times;</button>
  				<strong>SID de Sesión destruida:</strong> <?php echo $SIDsesion; ?><br>
 				<strong>Usuario:</strong> <?php if (!isset ($_SESSION['usuario'])) echo "Variable Usuario Destruida"; else echo $_SESSION['usuario']; ?><br>
 				<strong>Password:</strong> <?php if (!isset ($_SESSION['clave'])) echo "Password Destruido"; else echo $_SESSION['clave']; ?><br>
 				
 				<a href="index.php">Volver</a>
			</div>
		</section>
		<footer>
			<br>
			<p>&copy; Desarrollo Web Entorno Servidor - 2º DAW - Curso 16/17</p>
		</footer>
	</div>
</body>
</html>