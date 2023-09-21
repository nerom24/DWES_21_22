<?php 
	
	include("classNoticia.php");
	include("noticia.php");

	$noticia1 = new noticia();

	$noticia1->setTitulo($titulo);
	$noticia1->setCopete($copete);
	$noticia1->setTexto($texto);
	$noticia1->setAutor($autor);
	$noticia1->setFecha($fecha);
	$noticia1->setImagen($imagen);
	$noticia1->setEpigrafe($epigrafe);

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	
	<title>Objeto de Tipo Página</title>

</head>
<body>
	<div class="container">
		<header>
				<hgroup class="jumbotron text-center">
					<h1>Act. 4.3 Clase Noticia</h1>
                    <h3 class="text-muted">Tema 4. Programación Orientada a Objetos</h>
				</hgroup>
		</header>
		<nav>
		<!-- Especificar main-menu() -->
		</nav>
		<section>
			<article>
			<!-- imagen -->
			<img src="<?=$noticia1->getImagen();?>" width="100%" class="img-fluid rounded" alt="Responsive image">
			<!-- epigrafe -->
			<div class="text-center">
				<?=$noticia1->getEpigrafe();?>
			</div>
			<!-- titulo -->
			<h2>
				<?=$noticia1->getTitulo();?>
			</h2>
			<!-- autor -->	
			<div class="text-muted credit">
				<?=$noticia1->getAutor();?>
			</div>
			<!-- copete -->
			<p class="alert alert-secondary h6">
				<?=$noticia1->getCopete();?>
			</p>
			<!-- cuerpo -->
				<?php $noticia1->showTexto();?>
			<!-- fecha -->	
			<div class="text-muted credit">
				<?=$noticia1->getFecha();?>
			</div>
			</article>
		</section>
		<footer>
			<hr>
			<p>&copy; Juan Carlos Moreno DWES - 2º DAW - Curso 17/18</p>
		</footer>
	</div>
	</div>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jquery/jquery-3.2.1.min.js"></script>
    <script src="popper/popper.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>