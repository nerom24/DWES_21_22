<?php
	include 'tabla.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="jquery/jquery.min.js"></script>
  	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<title>Agenda de Contactos</title>
</head>
<body>
	<div class="container">	
		<header class="jumbotron text-center">
            <h1>Actividad 4.4 Clase Tabla</h1>
            <h2>Tema 4. Programación Orientada a Objetos PHP</h2>
        </header>
		<nav>
		</nav>
		<section>
			<article>
			<?php 
				$tabla1=new Tabla(3,3);
				$tabla1->cargar(1,1,"1");
				$tabla1->cargar(1,2,"2");
				$tabla1->cargar(1,3,"3");
				$tabla1->cargar(2,1,"4");
				$tabla1->cargar(2,2,"5");
				$tabla1->cargar(2,3,"6");
				$tabla1->cargar(3,1,"4");
				$tabla1->cargar(3,2,"5");
				$tabla1->cargar(3,3,"6");
				$tabla1->mostrarTabla();
			?>
			</article>
		</section>
		<footer>
			<p>&copy; Desarrollo Web Entorno Servidor - 2º DAW - Curso 16/17</p>
		</footer>
	</div>
</body>
</html>
