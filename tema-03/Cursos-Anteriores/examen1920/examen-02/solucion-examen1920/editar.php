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
    require_once("libs/funcionesTabla.php");

    # Generamos la tabla articulos con los valores
    $tabla = generarTabla();

    # Generamos el array de generos
    $generos = generarGeneros();

    # Generamos el array con los campos de la tabla
    $cabecera = array_keys($tabla[0]);

    # Recibo indice del elemento mediante la url
    # es decir mediante el método GET
    # editar.php?indice=xx

    $key = $_GET['indice'];
    
    # Extraigo el id, ya que es el único campo
    # no modificable

    $id = $tabla[$key]['id'];

    # Extraigo los valores del formulario
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
    
    # Creo el registro con los datos que se van a actualizar

	$registro = 
        [ 
            "id" => $id,
            "Título" => $titulo,
            "Director" => $director,
            "Nacionalidad" => $nacionalidad,
            "Género" => $generosPeli,
            "Año" => $ano
        ];
    
    
    $tabla = actualizar($tabla, $registro, $key);

    # Cargamos la plantilla de la aplicación
    
    require_once("template/peliculas.php");
  
  ?>
