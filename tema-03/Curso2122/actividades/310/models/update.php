<?php

    /*

    Update.PHP

        - Actualiza los datos de un libro
        - Recibo por GET indice del libro a actualizar

    */

    # URL - GET
    # update?indice=$key

    $indice = $_GET['indice'];

    # Método POST
    $libro = [
            'Id' => $_POST['id'],
            'Título' => $_POST['titulo'] ,
            'Autor' => $_POST['autor'],
            'Género' => $_POST['genero'],
            'Precio' => $_POST['precio']
    ];

    # Cargar la tabla de libros
    $libros = generarTabla();

    # Actualizar la tabla
    $libros[$indice] = $libro;

    // $libros = update($libros, $libro, $indice);
    

?>