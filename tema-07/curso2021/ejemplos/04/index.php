<?php

    # Obtener el contenido de un archivo
    $datos = file("datos.txt");

    foreach ($datos as $fila) {
        print($fila);
        print("<BR>");
    }

    print("<BR>");
    print_r($datos);
    

?>