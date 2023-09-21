<?php 

    /*
        Conexion

        Clase conexión a la base de datos mediante PDO
        A partir del archivo de configuración bd.php

    */

    # Creamos la clase conexión 

   
    class Conexion {

        protected $conexion;

        public function __construct() {

            try {

                $dsn = "mysql:host=". SERVER . ";dbname=". BD . ";charset=". CHARSET;

                $options=[
                    PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION,
                    PDO::ATTR_PERSISTENT =>  false,
                    PDO::ATTR_EMULATE_PREPARES =>  false,
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES ". CHARSET . " COLLATE ".COLLATE
                ];

                $this->conexion = new PDO($dsn, USER, PASS, $options);


            } catch (PDOException $e) {

                include('views/partials/errordb.php');
                exit();

            }

           

        }

    }

  
?>