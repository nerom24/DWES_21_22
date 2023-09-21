<?php
    # Iniciamos la sesión o recuperamos la anterior sesión existente
    session_start();
    
    # Destruimos la sesión
    session_destroy();

    # Eliminamos las variables de sesión
    session_unset();
    $_SESSION = array();

    # Comprobación
    if (isset($_SESSION['visitas'])) {
        
        echo "Sesión No Cerrada Correctamente";
    }
    else {
        echo "Sesión Cerrada Correctamente";
        
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
<a href="index.php">Volver</a>
</body>
</html>