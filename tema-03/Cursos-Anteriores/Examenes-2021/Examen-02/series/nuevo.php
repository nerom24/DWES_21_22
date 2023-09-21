<?php

    /*  Fichero: nuevo.php
        Descripción: Creará un artículo nuevo
        Fecha: 22/10/2020
        Autor: Juan Carlos Moreno
    */

    require_once('lib/funciones_series.php');
    $series = generar_tabla();

    # Generamos el siguiente id 
    $id = ultimo_id($series); 

    $registro =
    [   
              "id" => $id,
              "titulo" => $_POST['titulo'],
              "director" => $_POST['director'],
              "nacionalidad" => $_POST['nacionalidad'],
              "estreno" => $_POST['estreno'],
              "plataforma" => $_POST['plataforma'],
              "temporadas" => $_POST['temporadas'],
              "generos" => $_POST['generos']
    ];

    $series = nuevo($series, $registro);
 
    $pagina = "Gestión Series - Home";
?>
