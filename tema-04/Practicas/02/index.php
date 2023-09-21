<?php 
	
	include("classPagina.php"); 
	include("noticia.php");
	include("plantilla.php");

	$plantilla = new plantilla (

		"Práctica 32 - Tema 4 - POO", 
		"Práctica 32 - Tema 4 - POO", 
		"Gestión de Noticias POO",
		"Juan Carlos - 2ºDAW 18/19"
	);

	$pagina1 = new pagina($titulo, $cuerpo, $pie);


?>
<!DOCTYPE html>
<html lang="es">

<?=$plantilla->showHead();?>

<body>
	<div class="container">

		<?=$plantilla->showCabecera();?>
		
		<nav>
		<!-- Especificar main-menu() -->
		</nav>

		<!-- Muestra el contenido de la página -->
		<section>
			<article>
			<!-- titulo -->
			<h4>
				<?=$pagina1->getTitulo();?>
			</h4>
			<!-- cuerpo -->
				<?php $pagina1->showCuerpo();?>
			<!-- pie -->	
			<div class="text-muted credit">
				<?=$pagina1->getPie();?>
			</div>
			</article>	
		</section>
	
		<?=$plantilla->showPie();?>

	</div>
	</div>

	<?=plantilla::scriptVarios();?>
	
</body>
</html>