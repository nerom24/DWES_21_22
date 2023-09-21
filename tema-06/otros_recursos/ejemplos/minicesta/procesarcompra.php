<?php
	require("articulos.php");
	require("articulosCesta.php");
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
	<title>Mini Cesta Compra POO</title>
</head>
<body>
	<div class="container">
		<header>
				<hgroup>
					<h1>Mini Cesta Compra - Procesar Compra - POO</H1>
					<H2>Tema 04 Programación Orientada a Objetos PHP</H2>
				</hgroup>
		</header>
		
		<section>
		<nav>
						
		</nav>
		<article>				
			
		</article>
		<section>
		<nav>
			
		
		</nav>
		<article>
			<?php 

				
						$_SESSION["cesta"]->mostrarListaCompra();
			 ?>
		</article>
		<a href="index.php" class="btn btn-default btn-lg ">Volver</a>
		</section>

		</form>
		<footer>
			<p>&copy; Desarrollo Web Entorno Servidor - 2º DAW - Curso 16/17</p>
		</footer>
	</div>
</body>
</html>
