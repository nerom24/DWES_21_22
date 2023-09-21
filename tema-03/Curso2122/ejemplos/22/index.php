
<?php

    /*

    Funciones

        - Argumentos con valores predeterminados

    */


    function foo($month=10, $year=2021) {
        return "mes $month de $year";
    }

    echo foo(); // mes 10 de 2021
    echo "<br>";
    echo foo(11); // mes 11 de 2021
    echo "<br>";
    echo foo(1,1900); // mes 1 de 1900
    echo "<br>";
    echo foo(null,1900); // mes 10 de 1900
?>


