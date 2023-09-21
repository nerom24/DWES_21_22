<?php 
include 'fichero.model.php';
include 'noticia.entidad.php'; 
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="jquery/jquery.min.js"></script>
  	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<title></title>
</head>
<body>
	<div class="container">
		<header class="text-center">
	        <hgroup>
	          <h1>Tema 7. Gestión de Archivos y Carpetas</h1>
	          <h2>Examen Práctico Ordinario</h2>
	        </hgroup>
	     </header>
		
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <ul class="nav navbar-nav">
		      <li class="active"><a href="index.php">Blog</a></li>
		      <li><a href="administrar.php">Administrar</a></li>
		    </ul>
		  </div>
		</nav>
		
		<section>
			<article>
				<?php 
					$fichero = new Fichero('noticias.csv');
					$arrayNoticias = $fichero->leerNoticias();
					foreach ($arrayNoticias as $noticia) {
						$fichero->mostrarNoticia($noticia);
					}
				 ?>
			</article>
		</section>
		<footer>
			<p>&copy; Desarrollo Web Entorno Servidor - 2º DAW - Curso 16/17</p>
		</footer>
	</div>
</body>
</html>