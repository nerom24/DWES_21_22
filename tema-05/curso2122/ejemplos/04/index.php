<?php

    /*

        Conexión MySQL con la clase mysqli

        Con validación y comando SQL

    */

    # Defino las constantes de conexión
    define('SERVER', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BD', 'fp');

    # Realizo la conexión
    $conexion = new mysqli(SERVER,USER, PASS, BD );

    # Valido
    if ($conexion->connect_errno) {
        echo "Error de conexión: ". $conexion->connect_error;
        exit(0);
    }

    echo "Conexión realizada con éxito";
    $conexion->set_charset('utf8'); 

    $telefono = '956777952';

    $id = 2;

    $sql= "update alumnos SET telefono = '$telefono' where id = $id";

    $resulSet = $conexion->query($sql);

    echo '<BR>';

    var_dump($resulSet);


?>