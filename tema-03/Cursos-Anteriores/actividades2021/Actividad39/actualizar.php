<?php 

	/** Fichero: actualizar.php
    *   Descripción: actualiza los del libro a partir de formulario de edición
    *   $_GET: indice de la tabla que se desa editar
    *   Autor: Juan Carlos
	*   Fecha: 27/10/2020
	**/
	
	# Incluimos la librería de funciones para tabla
    require_once("lib/funciones_libros.php");

    # Generamos la tabla libros con los valores
    $libros = generar_tabla_libros();

    # Recibo indice del elemento mediante la url
    # es decir mediante el método GET
    # form_editar.php?indice=xx
    
    $indice = $_GET['indice'];

    # Obtengo los datos del registro que quiero modificar

    $registro = [

        'id' => $_POST['id'],
        'titulo' => $_POST['titulo'],
        'autor' => $_POST['autor'],
        'genero' => $_POST['genero'],
        'precio' => $_POST['precio']
    ];

    $libros = actualizar($libros, $registro, $indice);

    include_once("template/libros.php");
    

?>
