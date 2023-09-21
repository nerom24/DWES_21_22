<?php

    # Operaciones con archivos

    # Gestor de directorios
    echo "Directorio Actual: ". getcwd();
    
    # Cambiar directorio
    //chdir("alumnos");

    # Gestor de directorios
    echo "<BR>";
    echo "Directorio Actual: ". getcwd();
    echo "<BR>";
    echo "Directorio Actual: ". basename(getcwd());

    # Muestro el contenido
    echo "<BR>";
    $contenido = scandir(getcwd());
    print_r($contenido);

?>