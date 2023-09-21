<?php

    # Operaciones con directorios
    # Opendir(), Readdir(), Closedir()

    # Gestor de directorios
    # Mostrar directorio bases de datos
    $dir = opendir("drive/ejercicios");
    while ($documento = readdir($dir)) {

        if (strpos($documento, ".php")) {
            echo "<BR>";
        echo $documento;
        }
    }
    closedir($dir);
?>