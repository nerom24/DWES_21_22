<?php

    // Inicio de sesión
    session_start();

    // Nombre archivo
    $archivo_actual = basename($_SERVER['PHP_SELF']); 

    // Sesiones iniciadas cookies
    if (isset($_COOKIE['contador_visitas'])) {

        $contador_visitas = $_COOKIE['contador_visitas'];
        $contador_visitas++;
    
    } else {

        $contador_visitas = 1;
    }

    // Sesiones iniciadas
    setcookie('contador_visitas', $contador_visitas, time()+3600*24*365);

    // Fecha hora finalización sesión
    setcookie('fecha_hora_fin', (new DateTime())->format('Y-m-d H:i:s'), time()+3600*24*365);

     // Duración
     $ahora = (new DateTime());
     $inicio = (new DateTime($_SESSION['fecha_hora_inicio']));
     $duracion = ($ahora->diff($inicio))->format('%h:%i:%s');
     setcookie('duracion', $duracion, time()+3600*24*365);

    // Estadística páginas visitadas
    if (isset($_COOKIE['visitas'])) {
        
        $_SESSION['visitas'] = unserialize($_COOKIE['visitas']);
    }

    if (isset($_SESSION['visitas'][$archivo_actual]))
        $_SESSION['visitas'][$archivo_actual] ++ ;
    else 
        $_SESSION['visitas'][$archivo_actual] = 1;    
    
    setcookie('visitas', serialize($_SESSION['visitas']), time() + 3600*24*365);

    
     # Cerrar sesión
    
     // Elimminar las variables de sessión
    session_unset();

    // Destruir la sesión
    session_destroy();


?>