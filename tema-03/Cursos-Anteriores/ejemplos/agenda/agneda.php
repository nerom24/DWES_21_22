<?php
/*
Disponemos de un array asociativo almacenado en $agenda.
El índice de cada elemento de este array es el nombre del contacto.
El número de teléfono es el contenido del vector
*/
$agenda = array("Manolo"=>678985678,
        "Benito"=>689345687,
        "Andres"=>675324312,
        "Francisco"=>674321543,
        "José"=>698099089);
 
/*
 Pintar_cabecera: Esta función pintará la cabecera de una tabla donde se muestran los contactos
*/
function pintar_cabecera()
    {
    ?>
    <table align="center" border="1"  width="750px">
    <thead>
        <tr>
        <th>Nombre</th>
        <th>Teléfono</th>
        </tr>
    </thead>
    <tbody>
    <?php 
    }
 
/* función que pinta el fin dela tabla para la agenda, no recibe parámetros*/
function pintar_fin_tabla()
    {
    ?>
    </tbody>
    </table>
    <?php
    }
     
     
/*
Función mostrar persona, es una función que muestra un contacto en la tabla.
Será utilizada para mostrar la agenda persona por persona
*/
function mostrar_persona($nombre,$telefono)
    {
    echo "<tr><td>";
    echo $nombre;
    echo "</td><td>";
    echo $telefono;
    echo "</td></tr>";  
    }
 
/*Función que muestra toda la tabla, recibe un vector tipo agenda y llama a mostrar persona por cada elemento*/
function mostrar ($agenda)
    {
    pintar_cabecera();
    foreach ($agenda as $indice=>$persona)
        {
        mostrar_persona($indice,$persona);
        }
    pintar_fin_tabla();
    }
 
/*Función que busca una persona en la agenda, si la encuetra la muestra por pantalla
Recibe un vector tipo agenda y un nombre*/
function buscar($agenda,$nom)
    {
    echo "<p>Resultado para la busqueda de $nom</p>";
    pintar_cabecera();
    foreach ($agenda as $nombre=>$telefono)
        if ($nom==$nombre)
            mostrar_persona($nombre,$telefono);
    pintar_fin_tabla();
    }
 
/*
Función que borra una persona de la agenda. si la encuetra
Recibe un vector tipo agenda y un nombre, retorna la agenda borrada
*/
function borrar($agenda,$nom)
    {
    echo "<p>Resultado para el borrado de $nom</p>";
    if (isset ($agenda[$nom]))  //Si exite $agenda['pepito'] entonces borra pepito
        unset($agenda[$nom]);
    return $agenda;
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>Gestor de agenda</title>
<meta charset="UTF-8">
<meta name="description" content="Gestionar una agenda de contactos con PHP"/>
<meta name="keywords" content="contactos, agenda, php"/>
<meta name="author" content="Juan Luis Mora Blanco" />
<meta name="robots" content="index,follow,noarchive">
</head>
<body>
<?php
    mostrar($agenda);  //Aquí se ponen las llamadas correspondientes para que se lanzen las funciones
?>
</body>
</html>