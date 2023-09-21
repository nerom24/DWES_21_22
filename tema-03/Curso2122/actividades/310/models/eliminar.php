<?php

    /** Fichero: eliminar.php
    *   Descripción: Elimina un registro de la tabla
    *   $_GET: indice - elemento que deseamos eliminar
    *   Autor: Juan Carlos
	*   Fecha: 20/10/2021
	**/

    # Generamos la tabla libros con los valores
    $libros = generarTabla();

    # Recibo indice del elemento mediante la url
    # es decir mediante el método GET
    # eliminar.php?indice=xx
    $indice = $_GET['indice'];
    $libros = eliminar($libros, $indice);
    
?>