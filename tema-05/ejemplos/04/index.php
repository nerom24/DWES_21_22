<?php

    # Conexión con una base de datos
    # Clase mysqli

    $conexion = new mysqli("localhost", "root", "", "fp");

    if ($conexion->connect_errno) {

        echo "Error de conexión: ". $conexion->connect_error;
        exit(0);
    }

    echo "Conexión realizada con éxito";
    $conexion->set_charset("utf8"); 

    $alumnos = $conexion->query("select * from alumnos");

    echo "<BR>";
    echo "Número de Alumnos: ". $alumnos->num_rows;

    echo "<BR>";
    echo "Número de Campos: ". $alumnos->field_count;

    $alum = $alumnos->fetch_array(MYSQLI_ASSOC);
    
    echo "<BR>";
    echo "id: ". $alum[0];
    echo "<BR>";
    echo "nombre: ". $alum[1];
    echo "<BR>";
    echo "email: ". $alum[3];

    echo "<BR>";
    echo "id: ". $alum['id'];
    echo "<BR>";
    echo "nombre: ". $alum['nombre'];
    echo "<BR>";
    echo "email: ". $alum['email'];






    //var_dump($conexion);

?>
