<?php 
	session_start();
 ?>
 <!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="jquery/jquery.min.js"></script>
  	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<title></title>
</head>
<body>
	<div class="container">
		<header>
				<hgroup>
					<h1>Ejercicio 01 –Acceso</h1>
					<h2>Javier Holgado barreno</h2>
				</hgroup>
		</header>
		<nav>	
		</nav>
		<section>
			<article>
			<?php 
				if (isset($_SESSION['email']) && isset($_SESSION["clave"]) && isset($_SESSION['tipo']) &&
					isset($_SESSION['tipo'])) {
					echo "<h5>Numero de sesion: ". session_id() . "</h5>";
					?>
					<table class="table">
						<tr>
						<th>User</th>
						<th>Email</th>
						<th>Clave</th>
						<th>Tipo</th>
						</tr>
					<?php
					
					echo "<tr><td>". $_SESSION['user'] . "</td>";
					echo "<td>" . $_SESSION["email"] . "</td>";
					echo "<td>". $_SESSION["clave"] . "</td>";
					echo "<td>". $_SESSION["tipo"] . "</td></tr>";
				}else{
					setcookie("Error", "Debes iniciar sesión", time()+3600);
					header("location: index.php");
				}
			 ?>
			 </table>
			 <a href="eliminarsesion.php">Cerrar Sesion</a>
			</article>
		</section>
		<footer>
			<p>&copy; Desarrollo Web Entorno Servidor - 2º DAW - Curso 16/17</p>
		</footer>
	</div>
</body>
</html>