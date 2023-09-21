<?php 
	
	/** Archivo: formActualizar.php
	*   Descripción: formulario para modificar libro
	*   $_GET: indice
	*  	Curso 18/19
	*   Autor: Juan Carlos
	*   Fecha: 10/10/2018
	**/

	# Includes

	include("plantilla.php");
	include("funLibros.php");

	# Variable GET

	$indice = $_GET["indice"];

	# Declaración de la matriz libros

	$libros = generaMatriz();

	# Variables con los datos del libro seleccionado

	$idLibro = $libros[$indice]["idLibro"];
	$titulo = $libros[$indice]["Titulo"];
	$autor = $libros[$indice]["Autor"];
	$genero = $libros[$indice]["Genero"];
	$editorial = $libros[$indice]["Editorial"];
	$paginas = $libros[$indice]["Paginas"];
	$precio = $libros[$indice]["Precio"];

 ?>

<!DOCTYPE html>
<html>

<?php head(); ?>

<body>
	<div class="container">
		
		<!-- Cabecera -->

		<?php cabecera(); ?>

		<!-- Menú Principal -->
		
		<?php menuPrincipal(); ?>
		
		<!-- Mostrar formulario para editar datos del libro -->

		<?php formEditLibro($indice, $idLibro, $titulo, $autor, $genero, $editorial, $paginas, $precio); ?>
		
		<!-- Mostrar Pie de página -->
		
		<?php pie(); ?>
	
	</div>

	<?php scriptVarios(); ?>
	
</body>
</html>