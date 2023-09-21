<?php 
	
	/** Fichero: anadirLibro.php
	*   Descripción: añade el nuevo libro a la matriz Libros
	*   Curso 18:19
	*   Autor: Juan Carlos
	*   Fecha: 10/10/2018
	**/

	#includes

	include("plantilla.php");
	include("funLibros.php");

	# Almacenar los valores obtenidos en el formulario

	$idLibro = $_POST['idLibro'];
	$titulo = $_POST['titulo'];
	$autor = $_POST['autor'];
	$genero = $_POST['genero'];
	$editorial = $_POST['editorial'];
	$paginas = (int) $_POST['paginas'];
	$precio = (float) $_POST['precio'];
	
	# Se vuelve a cargar la matriz Libros original

	$libros = generaMatriz();

	# Crear registro nuevo libro

	$nuevoLibro = 
				[ 
					"idLibro" => $idLibro,
					"Titulo" => $titulo,
					"Autor" => $autor,
					"Genero" => $genero,
					"Editorial" => $editorial,
					"Paginas" => $paginas,
					"Precio" => $precio
				];

	# Añadir registro a la matriz Libros

	$libros = nuevoRegistroTabla($libros, $nuevoLibro);

	# Muestra la tabla libros mediante la función index

	index($libros);
	
 ?>

 