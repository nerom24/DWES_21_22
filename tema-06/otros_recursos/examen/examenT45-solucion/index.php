+
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="jquery/jquery.min.js"></script>
  	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<title>Control y Validación de Usuarios</title>
	
</head>
<body>
	<!-- Especificar main-menu() -->
	<div class="container">
		<header>
				<hgroup>
					<h1>Control y Validación Usuarios</h1>
					<h2>Examen Práctico Tema 4 y 5</h2>
				</hgroup>
		</header>
		<nav>
			
		</nav>
		<section>
			<article>
				<?php 
					if (isset($_COOKIE['Error'])) {
							echo "<div class='alert alert-warning'>" . $_COOKIE['Error'] . "</div>" ;
						setcookie("Error", "", time()-1);
						}
					if (isset($_COOKIE['Email']) && isset($_COOKIE["clave"])) {
					header("location: acceso.php");
					} 
				 ?>
				<form action="validarusuario.php" method="POST">
					  <div class="form-group">
					    <label for="exampleInputEmail1">Email address</label>
					    <input type="email" class="form-control" name="InputEmail" placeholder="Email" required="required">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" class="form-control" name="InputPassword" placeholder="Password" required="required">
					  </div>
					  <div class="form-group">
					  	<input type="checkbox" value="1" name="check">Recordarme
					  </div>
					  <button type="submit" class="btn btn-default">Submit</button>				
				</form>
			</article>
		</section>
		<footer><br>
			<p>&copy; Desarrollo Web Entorno Servidor - 2º DAW - Curso 16/17</p>
		</footer>
	</div>
</body>
</html>