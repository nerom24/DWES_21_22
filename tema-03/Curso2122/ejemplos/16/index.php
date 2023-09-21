<?php

    /*
        Array Asociativos

            - Personalizados

    */

    # Notación []
    $notas = [
                'Juan' => 4,
                'Pedro' => 5,
                'María' => 10,
                'Isabel' => 9,
                'Carlos' => 8
    ];

    # Muestra la nota de Juan
    foreach ($notas as $indice => $registro) {
        echo $indice. " = ". $registro;
        echo "<BR>";
    }
