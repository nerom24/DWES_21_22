<?php

    // Inicio de sesión
    session_start();

    // Nombre archivo
    $archivo_actual = basename($_SERVER['PHP_SELF']); 

    // Fecha Hora Inicio Ultima Sessión
    if (!isset($_SESSION['fecha_hora_inicio'])) {
        $_SESSION['fecha_hora_inicio'] = (new DateTime())->format('Y-m-d H:i:s');
        setcookie('fecha_hora_inicio',$_SESSION['fecha_hora_inicio'], time()+3600*24*360);
    }

    # Variable de sesión visitas[]
    # es un array asociativo con el número de veces que se visita una 
    # página en cada sesión

    if (isset($_COOKIE['visitas'])) {
        
        $_SESSION['visitas'] = unserialize($_COOKIE['visitas']);
    }

    if (isset($_SESSION['visitas'][$archivo_actual]))
        $_SESSION['visitas'][$archivo_actual] ++ ;
    else 
        $_SESSION['visitas'][$archivo_actual] = 1;    
    
    setcookie('visitas', serialize($_SESSION['visitas']), time() + 3600*24*365);

?>