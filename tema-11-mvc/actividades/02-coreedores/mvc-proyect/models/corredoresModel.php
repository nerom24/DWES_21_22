<?php

    Class corredoresModel extends Model {

        /*
        public function __construct() {

            parent::__construct();
        }
        */

        # Extraer todos los corredores de la base de datos.
        public function get() {

            try {
                    $consultaSQL = "                             
                    SELECT 
                            c.id,
                            c.nombre,
                            c.apellidos,
                            c.ciudad,
                            c.email,
                            c.fechaNacimiento,
                            c.edad,
                            c.id_categoria,
                            c.id_club,
                            ca.nombrecorto AS categoria,
                            cl.nombreCorto AS club
                    
                    FROM corredores AS c
                            JOIN categorias AS ca ON c.id_categoria = ca.id
                            JOIN clubs AS cl ON c.id_club = cl.id 
                    ORDER BY c.id
                    ";

                    # Conectamos con la base de datos
                    $pdo = $this->db->connect();

                    # Ejecutamos mediante prepare la consulta SQL
                    $result= $pdo->prepare($consultaSQL);
                    $result->setFetchMode(PDO::FETCH_OBJ);
                    $result -> execute();

                    # Devolvemos el objeto PDOStament
                    return $result;

        } catch(PDOException $e) {

                    include_once('template/partials/error_bd.php');
                    exit(0);
        }

        }



    }

?>