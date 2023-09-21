<?php

    # Mostrar el contenido de un archivo fgets()
    $fp = fopen("datos.txt", "r");

    while (!feof($fp)) {
        $linea = fgets($fp);
        echo $linea . "<BR>";
    }
    

?>