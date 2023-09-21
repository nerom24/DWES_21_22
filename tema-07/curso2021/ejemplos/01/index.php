<?php

    # Crear archivo plano txt
    $fp = fopen("ejemplo.txt", "w");

    // incluir información
    fwrite($fp, "Moreno");
    fwrite($fp, "\n");
    fwrite($fp, "Juan");
    fwrite($fp, "\n");
    fwrite($fp, "calle Benito Pérez Galdós, 20");

    fclose($fp);

    echo "Archivo Creado: ". filesize("ejemplo.txt");

?>