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

    $sql= "select * from alumnos";

    $resulSet = $conexion->query($sql);
    
    # Array indexado o numérico como asociativo
    $alumnos = $resulSet->fetch_all(MYSQLI_ASSOC);

    foreach ($alumnos as $alumno) {

        echo '<BR>';
        echo 'Id: '. $alumno['id'];
        echo '<BR>';
        echo 'Nombre: '. $alumno['nombre'];
        echo '<BR>';
        echo 'Apellidos: '. $alumno['apellidos'];
        echo '<BR>';

    }


?>