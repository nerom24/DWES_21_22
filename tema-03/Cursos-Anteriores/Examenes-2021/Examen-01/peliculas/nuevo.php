<?php

    /*  Fichero: nuevo.php
        Descripción: Creará un artículo nuevo
        Fecha: 22/10/2020
        Autor: Juan Carlos Moreno
    */

    require_once('lib/funciones_peliculas.php');
    $peliculas = generar_tabla();

    # Generamos el siguiente id 
    $id = ultimo_id($peliculas); 

    $registro =
    [   
        'id' => $id, 
        'titulo' => $_POST['titulo'],
        'director' => $_POST['director'],
        'nacionalidad' => $_POST['nacionalidad'],
        'generos' => $_POST['generos'],
        'año' => $_POST['año']
    ];

    $peliculas = nuevo($peliculas, $registro);
 
    $pagina = "Gestión Películas - Home";
?>
