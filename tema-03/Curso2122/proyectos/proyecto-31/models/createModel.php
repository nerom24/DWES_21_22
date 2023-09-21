<?php

    /*

    createModel.PHP

        - Añade un elemento a la tabla de articulos

    */

    # Cargar la tabla de articulos
    $articulos = generarTabla();
    $categorias = generar_tabla_categorias();

    # Crear el registro del nuevo libro

    $registro = [
        'id' => count($articulos) + 1,
        'descripcion'=>$_POST['descripcion'],
        'modelo'=>$_POST['modelo'],
        'categoria'=> $_POST['categoria'],
        'unidades'=> $_POST['unidades'],
        'precio'=> $_POST['precio']
    ];
    
    
    # Función nuevo para añadir un nuevo articulo
    // $libros = nuevo($libros, $registro);
    $articulos[] = $registro;

?>