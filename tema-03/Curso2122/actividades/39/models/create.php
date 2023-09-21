<?php

    /*

    CREATE.PHP

        - Añade un elemento a la tabla de libros

    */

    # Cargar la tabla de libros
    $libros = generarTabla();

    # Crear el registro del nuevo libro

    $registro = [
            'Id' => count($libros) + 1,
            'Título' => $_POST['titulo'],
            'Autor' => $_POST['autor'],
            'Género' => $_POST['genero'],
            'Precio' => $_POST['precio']
    ];
    
    
    # Función nuevo para añadir un nuevo libro
    // $libros = nuevo($libros, $registro);
    $libros[] = $registro;

?>