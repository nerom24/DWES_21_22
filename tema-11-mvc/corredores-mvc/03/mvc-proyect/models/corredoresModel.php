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
                $conexion = $this->db->connect();

                # Ejecutamos mediante prepare la consulta SQL
                $result= $conexion->prepare($consultaSQL);
                $result->setFetchMode(PDO::FETCH_OBJ);
                $result -> execute();

                # Devolvemos el objeto PDOStament
                return $result;

    } catch(PDOException $e) {

                include_once('template/partials/error_bd.php');
                exit(0);
    }

    }

    # Obtener array de clubs
    public function getClubs() {

        try {
                $consultaSQL = "
                SELECT
                        id,
                        nombreCorto AS club
                FROM
                        clubs
                ";


                # Conectamos con la base de datos
                $conexion = $this->db->connect();

                # Ejecutamos mediante prepare la consulta SQL
                $result= $conexion->prepare($consultaSQL);
                $result->setFetchMode(PDO::FETCH_OBJ);
                $result -> execute();

                return $result;

        }
        catch(PDOException $e) {
                include_once('template/partials/error_db.php');
                exit(0);
        }
    }

    # Obtener array de categorías        
    public function getCategorias() {

        try {
                $consultaSQL = "
                SELECT
                        id,
                        nombreCorto AS categoria
                FROM
                        categorias
                ";

               # Conectamos con la base de datos
               $pdo = $this->db->connect();

               # Ejecutamos mediante prepare la consulta SQL
               $result= $pdo->prepare($consultaSQL);
               $result->setFetchMode(PDO::FETCH_OBJ);
               $result -> execute();

                return $result;

        }
        catch(PDOException $e) {
                include_once('template/partials/error_db.php');
                exit(0);
        }
    }

    public function create(corredor $corredor) {

        try {

                $insertSQL = 

                "INSERT INTO corredores VALUES (
                        null,
                        :nombre,
                        :apellidos,
                        :ciudad,
                        :fechaNacimiento,
                        :sexo,
                        :email,
                        :dni,
                        timestampdiff(YEAR, fechaNacimiento, now()),
                        :id_categoria,
                        :id_club 
                )";

                # Conectamos con la base de datos
                $conexion = $this->db->connect();
                $result= $conexion->prepare($insertSQL);

                $result->bindParam(':nombre', $corredor->nombre, PDO::PARAM_STR, 20);
                $result->bindParam(':apellidos', $corredor->apellidos, PDO::PARAM_STR, 45);
                $result->bindParam(':ciudad', $corredor->ciudad, PDO::PARAM_STR, 30);
                $result->bindParam(':fechaNacimiento', $corredor->fechaNacimiento);
                $result->bindParam(':sexo', $corredor->sexo);
                $result->bindParam(':email', $corredor->email, PDO::PARAM_STR, 45);
                $result->bindParam(':dni', $corredor->dni, PDO::PARAM_STR, 9);
                // $result->bindParam(':edad', $corredor->getEdad(), PDO::PARAM_INT);
                $result->bindParam(':id_categoria', $corredor->id_categoria, PDO::PARAM_INT);
                $result->bindParam(':id_club', $corredor->id_club, PDO::PARAM_INT);

                $result -> execute();

        } catch(PDOException $e) {
                
                include_once('template/partials/error_bd.php');
                exit(0);
        }
        }


    }

?>