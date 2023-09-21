<?php
	session_start();
	$_SESSION['usuario']=$_REQUEST['campousuario'];
	$_SESSION['clave']=$_REQUEST['campoclave'];
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
            <h1>Validar Sesión - pagina2.php</h1>
            <h2>Tema 5. Control de Sesiones</h2>
        </header>
		<section>
			<div class="alert alert-warning alert-dismissable">
  				<button type="button" class="close" data-dismiss="alert">&times;</button>
 				<strong>SID de Sesión: </strong> <?php echo session_id(); ?><br>
 				<strong>¡Aviso!</strong> Se almacenaron dos variables de sesión<br>
 				<a href="pagina3.php">Mostrar valores</a>
				</div>
		</section>
		<footer>
			<br>
			<p>&copy; Desarrollo Web Entorno Servidor - 2º DAW - Curso 16/17</p>
		</footer>
	</div>
</body>
</html>