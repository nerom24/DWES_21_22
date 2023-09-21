<?php 

	/** Fichero: actualizar.php
	*   $_GET: indice
	*   Descripción: Modifica los datos de un registro 
	*   Fecha: 10/10/2018
	*   Autor: Juan Carlos
	**/
	
	# Includes

	include("plantilla.php");
	include("funLibros.php");

	#Leemos el índice de registro que queremos modificar

	$indice = $_GET["indice"];

	# Tomo los valores editados del libro

	$registro = [

					"idLibro" => $_POST["idLibro"],
					"Titulo" => $_POST["titulo"],
					"Autor" => $_POST["autor"],
					"Genero" => $_POST["genero"],
					"Editorial" => $_POST["editorial"],
					"Paginas" => (int) $_POST["paginas"],
					"Precio" => (float) $_POST["precio"],

					];

	# Declaración de la matriz libros

	$libros = generaMatriz();

	# Actualizo la matriz libro con los nuevos valores
	
	$libros = actualizarTabla($libros, $indice, $registro);

	# Llama al index con la nueva matriz libros

	index($libros);

 ?>