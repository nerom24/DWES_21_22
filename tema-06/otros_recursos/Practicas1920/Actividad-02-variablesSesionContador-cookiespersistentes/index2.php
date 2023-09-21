<?php

    # Cookies contador - contar el número de visitas
    # Cookies ultima_visita - fecha hora con la última visita del usuario
    # Cookies paginas - una vez que ha iniciado sesión quiero saber el número de páginas ha visitado
    # Cookies tiempo_ultima_visita - el tiempo que ha durado la última sesión.
    
    # Cookies listas_paginas_visitadas - ficheros que ha visitado el cliente.

    # Iniciamos la sesión o recuperamos la anterior sesión existente
    session_start();

    # Cookies contador
    
    if (isset($_COOKIE['contador'])) {

        $contador = $_COOKIE['contador'];
        $contador = $contador + 1;
    } else {
        $contador = 1;
        echo "Bienvenido a nuestra página web";
    }
    
    # expira en un año
    setcookie('nombre', $contador, time()+3600*24*365);



    
    # Comprobamos si la variable ya existe
    if (isset($_SESSION['visitas'])) {
        
        $_SESSION['visitas'][0]++;

        echo "Número de visitas:". $_SESSION['visitas'][0];
        echo "<br>";
        echo "Última Visita....:". $_SESSION['visitas'][1];
        echo "<br>";
        echo "SID..............:". session_id();
        echo "<br>";
        echo "Nombre Sesión....:". session_name();
    }
    else {
        echo "Bienvenido a nuestra página web";
        $_SESSION['visitas'][] = 1;
        $_SESSION['visitas'][] = mktime();
    }
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>Informe de la visita</h3>
<ul>
    <li>SID: <?= session_id() ?></li>
    <li>SID: <?= session_name() ?></li>
    <li>Número de Visitas: <?= $_COOKIE['contador'] ?></li>
    <li>Úlitma visita: <?= $_COOKIE['ultima_visita'] ?></li>
    <li>Páginas visitadas última sesión: <?= $_COOKIE['paginas'] ?></li>
</ul>
<br>
<a href="index.php">Visitar</a>
<br>
<a href="cerrar.php">Cerrar Sesión</a>
</body>
</html>