<?php

    /*

        Actividad 3.4 - Mostrar contenido de la matriz de libros

    */

    # Crear matriz

    $libros = [
                [
                    'Id' => 1,
                    'Título' => 'Los Señores del Tiempo',
                    'Autor' => 'García Senz de Urturi',
                    'Género' => 'Novela',
                    'Precio' => 18.5

                ],
                [
                    'Id' => 1,
                    'Título' => 'Los Señores del Tiempo',
                    'Autor' => 'García Senz de Urturi',
                    'Género' => 'Novela',
                    'Precio' => 18.5

                ],
    ];

    echo $libros[0]['Título'];

    foreach ($libros[0] as $key => $registro) {
        echo $key;
        echo "<BR>";
    }

?>