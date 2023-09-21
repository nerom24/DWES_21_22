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

    # Generamos el array de generos
    $generos = generarGeneros();

    # Generamos el array con los campos de la tabla
    $cabecera = array_keys($tabla[0]);

    # Recibo indice del elemento mediante la url
    # es decir mediante el método GET
    # eliminar.php?indice=xx
    # Crear registro nuevo libro

    $id = ultimoId($tabla) + 1;
	$titulo = $_POST['titulo'];
    $director = $_POST['director'];
    $nacionalidad = $_POST['nacionalidad'];
    $ano = $_POST['ano'];

    # Extraigo los valores del lista check de generos[]

    $generosForm = $_POST['generos'];
    $generosPeli = [];

    foreach ($generosForm as $valor) {
        $generosPeli[] = $generos[$valor];
    }


	$registro = 
        [ 
            "id" => $id,
            "Título" => $titulo,
            "Director" => $director,
            "Nacionalidad" => $nacionalidad,
            "Género" => $generosPeli,
            "Año" => $ano
        ];
    
    
    $tabla = nuevo($tabla, $registro);

    # Cargamos la plantilla de la aplicación
    require_once("template/peliculas.php");
  
  ?>
