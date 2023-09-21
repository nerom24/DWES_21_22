<?php

    # Conexión con una base de datos
    # Clase mysqli

    # Clase EXCEPTION 
    # Estructura try / catch

    try { 

        $conexion = new mysqli("localhost", "root", "", "fp");

        if ($conexion->connect_errno) {

            throw new Exception($conexion->connect_error, $conexion->connect_errno);
        }

    } catch (Exception $error) {

        echo "ERROR: <br>";
        echo "<BR>";
        echo "Mensaje: ". $error->getMessage();
        echo "<BR>";
        echo "Nº: ". $error->getCode();
        echo "<BR>";
        echo "Fichero: ". $error->getFile();
        echo "<BR>";
        echo "Línea: ". $error->getLine();
        echo "<BR>";
        echo "Trazada: ". $error->getTraceAsString();
        exit(0);
    }

    

    

    echo "Conexión realizada con éxito";
    $conexion->set_charset("utf8"); 

    $nombre = 'Primero Electricidad y Electrónica';
    $ciclo = 'Electricidad, Mecánica y Electrónica';
    $nombreCorto = '1EE';
    $nivel = 1;

    $sql = "

        INSERT INTO Cursos (
            nombre, 
            ciclo, 
            nombreCort, 
            nivel
        )
        VALUES (
            '$nombre',
            '$ciclo',
            '$nombreCorto',
             $nivel
        )
    
    ";

 

    try { 
        
        if( !$conexion->query($sql)) {
            
            throw new Exception($conexion->error, $conexion->errno );
        }
     
    } catch (Exception $error) {

        echo "<BR>";
        echo "ERROR: <br>";
        echo "<BR>";
        echo "Mensaje: ". $error->getMessage();
        echo "<BR>";
        echo "Nº: ". $error->getCode();
        echo "<BR>";
        echo "Fichero: ". $error->getFile();
        echo "<BR>";
        echo "Línea: ". $error->getLine();
        echo "<BR>";
        echo "Trazada: ". $error->getTraceAsString();
        exit(0);

     }

     echo "Registro añadido correctamente";

    

   

?>
