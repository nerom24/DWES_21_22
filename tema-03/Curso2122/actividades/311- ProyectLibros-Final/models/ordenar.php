<?php

    /*

    Ordenar.PHP

        - Ordena los datos de libros
        - Recibo por GET criterio de ordenación:
          Id, Título, ...

    */

    # URL - GET
    # ordenar?criterio=campo
    $criterio = $_GET['criterio'];

    # Cargar la tabla de libros
    $libros = generarTabla();

    # Ordenar Tabla
    $libros = ordenar($libros, $criterio);
    

?>