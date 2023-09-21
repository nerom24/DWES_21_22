<?php 
	
	/** Actividad 32
	*   Curso 18:19
	*   Autor: Juan Carlos
	*   Descripción: Gestión de Matrices
	*   Fecha: 10/10/2018
	**/

	# includes

	include("plantilla.php");
	include("funLibros.php");

	# Declaración de la matriz libros

	$libros = generaMatriz();

	# Llamada a la función que genera el index de la pagina

	index($libros);
 ?>
