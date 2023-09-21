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

    $sql= "select * from alumnos";

    $resulSet = $conexion->query($sql);

    # Devuelve el array indexado y el array indexado
    $alumnos = $resulSet->fetch_row();
    

    echo '<BR>';

    echo 'Id: '. $alumnos[1];
    echo '<BR>';

    echo 'Id: '. $alumnos['nombre'];
    echo '<BR>';
   
    print_r($alumnos);

?>