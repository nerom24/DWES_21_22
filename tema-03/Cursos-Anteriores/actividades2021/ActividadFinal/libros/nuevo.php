<?php 

	/** Fichero: nuevo.php
    *   Descripción: Añade nuevo libro a la tabla
    *   $_POST: campos de la tabla
    *   Autor: Juan Carlos
	*   Fecha: 20/10/2019
	**/
	
	# Incluimos la librería de funciones para tabla
    require_once("lib/funciones_libros.php");

    # Generamos la tabla libros con los valores
    $libros = generar_tabla_libros();

    # Recibo indice del elemento mediante la url
    # es decir mediante el método GET
    # eliminar.php?indice=xx
    # Crear registro nuevo libro

    $id = $_POST['id'];
	$titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
	$genero = $_POST['genero'];
	$precio = (float) $_POST['precio'];

	$registro = 
        [ 
            'id' => $id,
            'titulo' => $titulo,
            'autor' => $autor,
            'genero' => $genero,
            'precio' => $precio
        ];
    
    
    $libros = nuevo($libros, $registro);

?>