<?php 
	
	/** Documento: ordenar.php
	*   GET: criterio - Título Autor Editorial Genero Precio
	*   Descripción: ordena tabla según criterio
	*   Fecha: 21/10/2019
	*   Autor: Juan Carlos
	**/

	# Incluimos la librería de funciones para tabla
    require_once("lib/funcionesTabla.php");

    # Generamos la tabla libros con los valores
    $tabla = generarTabla();

    # Generamos el array con los campos de la tabla
    $cabecera = array_keys($tabla[0]);

	# Criterio de ordenación pasado mediante método GET 

	$criterio = $_GET['criterio'];

    # Ordenar array por criterio usando la función
    # ordenar de la librería funcionesTabla
	
	$tabla = ordenar($tabla, $criterio);

    # Mostramos libros mediante la plantilla
    require_once('template/libros.php');
    
 ?>