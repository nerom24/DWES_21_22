
<?php

    /*

    Funciones

        - Paso de parámetros por valor y por referencia

    */

    function sumar ($a, $b) {
        $b = 45;
        return ($a + $b);
    }

    $var1 = 10;
    $var2 = 12;

    echo sumar($var1, $var2);

    echo "<BR>";
    echo "Var1 = $var1";
    echo "<BR>";
    echo "Var2 = $var2";

 ?>
 

