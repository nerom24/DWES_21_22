<?php

    /*  Fichero: actualizar.php
        Descripción: Actualizará un articulo nuevo
        $GET: indice de la tabla que se desea editar
        Fecha: 22/10/2020
        Autor: Juan Carlos Moreno
    */

    require_once('lib/funciones_articulos.php');

    
    $articulos = generar_tabla();
    $categorias = generar_tabla_categorias();

    $key = $_GET['indice'];

    # OBTENGO LOS DATOS DEL REGISTRO QUE QUIERO MODIFICAR

    $registro = [
        
        'id' => $_POST['id'], 
        'descripcion' => $_POST['descripcion'],
        'modelo'  => $_POST['modelo'],
        'categoria'  => $categorias[$_POST['categoria']],
        'unidades' =>  $_POST['unidades'],
        'precio' =>  $_POST['precio']
    ];


    $articulos = actualizar($articulos, $registro, $key);
 
    $titulo = "Gestión Artículos - Home";

?>
