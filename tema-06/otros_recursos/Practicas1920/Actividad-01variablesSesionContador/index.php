<?php
    # Iniciamos la sesión o recuperamos la anterior sesión existente
    session_start();
    
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
<br>
<a href="index.php">Visitar</a>
<br>
<a href="cerrar.php">Cerrar Sesión</a>
</body>
</html>