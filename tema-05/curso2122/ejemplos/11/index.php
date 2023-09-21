<?php

    /*

        Conexión MySQL con la clase mysqli

        Método Prepare

    */

    # Defino las constantes de conexión
    define('SERVER', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BD', 'fp');

    # Defino estructura try - catch
    # Realizo la conexión

    try {

        $conexion = new mysqli(SERVER,USER, PASS, BD );

        # Sólo en la clase mysqli tengo que lanzar la excepción
        # En la clase PDO la excepción se lanza automáticamente
        if ($conexion->connect_errno) {
            throw new Exception('Error de conexión BD');
        }

    } 
    
    catch (Exception $error) {

        echo "Entra en la estructura catch";
        echo "<BR>";
        echo 'Mensaje:      '. $error->getMessage(). '<BR>';
        echo 'Error Código: '. $error->getCode(). '<BR>';
        echo 'Fichero:      '. $error->getFile(). '<BR>';
        echo 'Línea:        '. $error->getLine(). '<BR>';
        echo 'Trace:        '. $error->getTraceAsString(). '<BR>';
       exit();
    }

        # Valido
        echo "Conexión realizada con éxito";
        $conexion->set_charset('utf8'); 

        # Inicio transacción
    
        $conexion->begin_transaction();
        $conexion->query("update cursos set nombreCorto = '1AMA' where id = '7'");
        $conexion->commit();
  


?>