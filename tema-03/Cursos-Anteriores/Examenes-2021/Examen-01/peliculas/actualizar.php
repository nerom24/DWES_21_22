<?php

    /*  Fichero: actualizar.php
        Descripción: Actualizará un articulo nuevo
        $GET: indice de la tabla que se desea editar
        Fecha: 22/10/2020
        Autor: Juan Carlos Moreno
    */

    require_once('lib/funciones_peliculas.php');
    $peliculas = generar_tabla();

    $key = $_GET['indice'];

    # Registro que voy a modificar

    if (empty($_POST['generos'])) {
        $_POST['generos'] = [];
    }

    $registro = [
        
        'id' => $_POST['id'], 
        'titulo' => $_POST['titulo'],
        'director'  => $_POST['director'],
        'nacionalidad'  => $_POST['nacionalidad'],
        'generos' =>  $_POST['generos'],
        'año' =>  $_POST['año']
    ];


    $peliculas = actualizar($peliculas, $registro, $key);
 
    $pagina = "Gestión Películas - Actualizar";

?>
