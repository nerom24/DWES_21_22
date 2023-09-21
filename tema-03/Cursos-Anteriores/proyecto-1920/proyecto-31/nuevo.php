<?php 

	/** Fichero: nuevo.php
    *   Descripción: Añade nuevo articulo a la tabla
    *   $_POST: campos de la tabla
    *   Autor: Juan Carlos
	*   Fecha: 20/10/2019
	**/
	
	# Incluimos la librería de funciones para tabla
    require_once("libs/funcionesTabla.php");

    # Generamos la tabla artículos con los valores
    $tabla = generarTabla();

    # Generamos el array de categorías
    $categorias = generarCategorias();

    # Generamos el array con los campos de la tabla
    $cabecera = array_keys($tabla[0]);

    # Recibo indice del elemento mediante la url
    # es decir mediante el método GET
    # eliminar.php?indice=xx
    # Crear registro nuevo libro

    $id = ultimoId($tabla) + 1;
	$descripcion = $_POST['Descripcion'];
    $modelo = $_POST['Modelo'];
    $categoria = $categorias[$_POST['Categoria']];
	$cantidad = $_POST['Unidades'];
	$precio = (float) $_POST['Precio'];

	$registro = 
        [ 
            "id" => $id,
            "Descripcion" => $descripcion,
            "Modelo" => $modelo,
            "Categoria" => $categoria,
            "Cantidad" => $cantidad,
            "Precio" => $precio
        ];
    
    
    $tabla = nuevo($tabla, $registro);

    # Cargamos la plantilla de la aplicación
    require_once("template/articulos.php");
  
  ?>
