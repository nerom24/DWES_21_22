<?php 

	/** Fichero: editar.php
    *   Descripción: Actualiza los datos de un elemento
    *   $_GET: indice - el elemento de la tabla que se desea
    *                   actualizar
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
    # editar.php?indice=xx

    $key = $_GET['indice'];
    
    # Extraigo el id del libro, ya que es el único campo
    # no modificable

    $id = $tabla[$key]['id'];

    # Extraigo los datos del libro editados del formulario
    
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editorial = $_POST['editorial'];
	$genero = $_POST['genero'];
    $precio = (float) $_POST['precio'];
    
    # Creo el registro con los datos que se van a actualizar

	$registro = 
        [ 
            "id" => $id,
            "Titulo" => $titulo,
            "Autor" => $autor,
            "Editorial" => $editorial,
            "Genero" => $genero,
            "Precio" => $precio
        ];
    
    
    $tabla = actualizar($tabla, $registro, $key);

    # Cargamos la plantilla de la aplicación
    
    require_once("template/libros.php");
  
  ?>
