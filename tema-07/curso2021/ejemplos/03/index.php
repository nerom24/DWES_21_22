<?php

    # Obtener el contenido de un archivo
    $archivo = file_get_contents("datos.txt");

    echo $archivo;

    # otra forma de leer el archivo
    $fp = fopen("datos.txt", "r");
    $tam = filesize("datos.txt");
    $contenido = fread($fp, $tam);
    fclose($fp);

    echo "<BR>";
    echo $contenido;

    # otra forma de leer el archivo
    $fp = fopen("datos.txt", "r");
    $contenido1 = fread($fp, 10);
    $contenido2 = fread($fp, 10);
    $contenido3 = fread($fp, 10);
    $contenido4 = fread($fp, 10);
    $contenido5 = fread($fp, 10);
    $contenido6 = fread($fp, 10);
    fclose($fp);

    echo "<BR>";
    echo $contenido1;
    echo "<BR>";
    echo $contenido2;
    echo "<BR>";
    echo $contenido3;
    echo "<BR>";
    echo $contenido4;
    echo "<BR>";
    echo $contenido5;
    echo "<BR>";
    echo $contenido6;

?>