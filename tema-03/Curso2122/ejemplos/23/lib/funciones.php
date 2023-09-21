<?php

/*
    Libreria de funciones en PHP

    - detalles(array())
*/

function detalles($alumno = []) {

    # id
    if (array_key_exists('id', $alumno)) {
        echo "Id: ". $alumno['id'];
        echo "<BR>";
    }
    # nombre
    if (array_key_exists('nombre', $alumno)) {
        echo "Nombre: ". $alumno['nombre'];
        echo "<BR>";
    }
    # población
    if (array_key_exists('poblacion', $alumno)) {
        echo "Población: ". $alumno['poblacion'];
        echo "<BR>";
    }
    # curso
    if (array_key_exists('curso', $alumno)) {
        echo "Curso: ". $alumno['curso'];
        echo "<BR>";
    }
}
?>