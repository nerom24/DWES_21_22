<?php

    /*  Fichero: nuevo.php
        Descripción: Creará un artículo nuevo
        Fecha: 22/10/2020
        Autor: Juan Carlos Moreno
    */

    require_once('lib/funciones_articulos.php');
    $articulos = generar_tabla();

    # Generamos el siguiente id 
    $id = ultimo_id($articulos); 

    $registro =
    [   
        'id' => $id, 
        'descripcion' => $_POST['descripcion'],
        'modelo' => $_POST['modelo'],
        'categoria' => $_POST['categoria'],
        'unidades' => $_POST['unidades'],
        'precio' => $_POST['precio']
    ];

    $articulos = nuevo($articulos, $registro);
 
    $titulo = "Gestión Artículos - Home";
?>
