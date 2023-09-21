<?php 

    /*

        Conexion

        Clase conexión a la base de datos

    */

    
    class Conexion {

        public $conexion;

        function __construct() {

            try {

                $this->conexion = new mysqli(SERVER,USER, PASS, BD );
    
                if ($this->conexion->connect_errno) {
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

            $this->conexion->set_charset('utf8');

        }
    
    }
?>