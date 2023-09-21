<?php

    /*

    EDITAR.PHP

        - Modifica los datos de un libro
        - Recibo por GET indice del libro a editar

    */

    # editar?indice=$key

    $indice = $_GET['indice'];

    # Cargar la tabla de libros
    $libros = generarTabla();

    # Crear el registro que vamos a editar
    $libro = $libros[$indice];
    // $libro = read($libros, $indice);
    

?>