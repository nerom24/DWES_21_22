<?php 
	
	/** Documento: ordenar.php
	*   GET: criterio - Título Autor Editorial Genero Precio
	*   Descripción: ordena tabla según criterio
	*   Fecha: 21/10/2019
	*   Autor: Juan Carlos
	**/

	# Incluimos la librería de funciones para tabla
    require_once("lib/funciones_libros.php");

    # Generamos la tabla libros con los valores
    $libros = generar_tabla_libros();

 	# Criterio de ordenación pasado mediante método GET 
	$criterio = $_GET['criterio'];

    # Ordenar array por criterio usando la función
    # ordenar de la librería funcionesTabla
	
	$libros = ordenar($libros, $criterio);

    # Mostramos libros mediante la plantilla
    require_once('libros.php');
    
 ?>