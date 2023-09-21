<?php
    $archivo_actual = basename($_SERVER['PHP_SELF']);
    
   # Iniciamos la sesión o recuperamos la anterior sesión existente
   session_start();

   # Variables de sesión:
   #   fecha_hora_acceso_pagina
   #   fecha_hora_incio_sesion
   #   contador_paginas
   #   paginas_visitadas[]
   
   # Variable de sesión con la fecha hora de acceso a la página
   $_SESSION['fecha_hora_acceso_pagina'] = (new DateTime())->format('Y-m-d H:i:s');

   # Variable de sesión para detectar la fecha hora de inicio sesión
   if (!isset($_SESSION['fecha_hora_inicio_sesion'])) {
       $_SESSION['fecha_hora_inicio_sesion'] = (new DateTime())->format('Y-m-d H:i:s');
   }

   # Variable de sesión contador_paginas - número de páginas visitadas o enlaces activados
   if (isset($_SESSION['contador_paginas'])) {    
       $_SESSION['contador_paginas']++;
   } else {
       $_SESSION['contador_paginas'] = 1;
   }


   # Variable de sesión paginas_visitadas[] - es un array asociativo con el número de veces que se visita una 
   # página en cada sesión
   if (isset($_SESSION['paginas_visitadas'][$archivo_actual]))
       $_SESSION['paginas_visitadas'][$archivo_actual] ++ ;
   else 
       $_SESSION['paginas_visitadas'][$archivo_actual] = 1;
   

   # Cookies contador_visitas - contar el número de visitas
   # Cookies ultima_visita - fecha hora con la última visita a la página
   # Cookies paginas_visitadas - una vez que ha iniciado sesión quiero saber el número de páginas ha visitado
   # Cookies contador_paginas - contador de páginas visitadas 
   # Cookies tiempo_ultima_visita - el tiempo que ha durado la última sesión.
   
   # Cookies listas_paginas_visitadas - ficheros que ha visitado el cliente.


   # Cookies actualizar 
 
   # Cookies contador páginas
   if (isset($_COOKIE['contador_visitas']))
       $contador_paginas = $_COOKIE['contador_visitas'] + 1;
   else
       $contador_paginas = 1;
   setcookie('contador_visitas',  $contador_paginas, time()+3600*24*365);

   setcookie('inicio_ultima_visita', $_SESSION['fecha_hora_inicio_sesion'], time()+3600*24*365);
   setcookie('fin_ultima_visita', $_SESSION['fecha_hora_acceso_pagina'], time()+3600*24*365);
   

   # Actualizar la cookie de estadíasticas de páginas visitadas
   if (isset($_COOKIE['paginas_visitadas'])){
       $paginas_visitadas = json_decode($_COOKIE['paginas_visitadas'], true);
       
       $paginas_visitadas[$archivo_actual]++;
   } else {
       $paginas_visitadas[$archivo_actual] = 1;
   }
   setcookie('paginas_visitadas', json_encode($paginas_visitadas), time() + 3600*24*365);
   

    require_once('template/index.php');

   
    


?> 


