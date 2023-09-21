<?php 

	/** Fichero: nuevo.php
    *   Descripción: Añade nuevo libro a la tabla
    *   $_POST: campos de la tabla
    *   Autor: Juan Carlos
	*   Fecha: 20/10/2019
	**/
	
	# Incluimos la librería de funciones para tabla
    require_once("lib/funcionesTabla.php");

    # Generamos la tabla libros con los valores
    $tabla = generarTabla();

    # Generamos el array con los campos de la tabla
    $cabecera = array_keys($tabla[0]);

    # Recibo indice del elemento mediante la url
    # es decir mediante el método GET
    # eliminar.php?indice=xx
    # Crear registro nuevo libro

    $idLibro = ultimoId($tabla) + 1;
	$titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editorial = $_POST['editorial'];
	$genero = $_POST['genero'];
	$precio = (float) $_POST['precio'];

	$registro = 
        [ 
            "id" => $idLibro,
            "Titulo" => $titulo,
            "Autor" => $autor,
            "Editorial" => $editorial,
            "Genero" => $genero,
            "Precio" => $precio
        ];
    
    
    $tabla = nuevo($tabla, $registro);

    # Cargamos la plantilla de la aplicación
    require_once("template/libros.php");
  
  ?>
