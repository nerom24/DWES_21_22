<?php

    # Operaciones con directorios
    # glob()

    # Gestor de directorios
    # Crear directorio
    # Mostrar directorio bases de datos
    chdir("drive/ejercicios");

    foreach (glob("*") as $key => $elemento ) {
        echo "<BR>";
        echo $key. " ";
        echo $elemento;
        if (is_dir($elemento)) {
            echo " Directorio";
        } else {
            echo " Archivo ";
            echo filesize($elemento);
            echo " Bytes ";
            echo date("F j, Y, g:i a",filemtime($elemento));
            echo date("F j, Y, g:i a",fileatime($elemento));
            echo filetype($elemento);
        }

    }
?>