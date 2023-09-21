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

    echo "<BR>";

    echo "<table border=1";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Nombre</th>";
    echo "<th>Email</th>";
    echo "</tr>";


    while ($alum = $alumnos->fetch_array(MYSQLI_ASSOC)) {

        echo "<tr>";
        echo "<td>". $alum['id']."</td>";
        echo "<td>". $alum['nombre']."</td>";
        echo "<td>". $alum['email']."</td>";
        echo "</tr>";
    }

    echo "</table>";






    //var_dump($conexion);

?>
