<?php

//require_once 'models/cuentas.php';

class loginModel extends Model {

    public function __construct() {

        parent::__construct();
    }

     # Devuelve un objeto de la clase Users a partir del email de usuario
     public function getUserEmail($email) {
        try {

            $sql = "SELECT * FROM Users WHERE email= :email LIMIT 1";
            $pdo = $this->db->connect();
            $stmt = $pdo->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->bindParam(":email", $email, PDO::PARAM_STR);
            $stmt->execute();
            
            return $stmt->fetch();

        }  catch (PDOException $e) {
            
            $error = 'Error al leer registros: ' . $e->getMessage() . " en la línea: " . $e->getLine();
			return $error;

        }
    }

    # Obtener el id perfil de un usuario
    public function getUserIdPerfil($id) {

        $selectSQL = "SELECT 
                        ru.role_id
                    FROM
                        users u
                    INNER JOIN
                        roles_users ru ON u.id = ru.user_id
                    WHERE
                        u.id = :id
                    LIMIT 1";
        $pdo = $this->db->connect();
        $resultado = $pdo->prepare($selectSQL);
        $resultado->setFetchMode(PDO::FETCH_OBJ);
        $resultado->bindParam(':id', $id, PDO::PARAM_INT);
        $resultado->execute();
        return $resultado->fetch()->role_id;

    }

    # Obtener el nombre perfil
    public function getUserPerfil($id) {

        $selectSQL = "SELECT 
                        name
                    FROM
                        roles
                    WHERE
                        id = :id
                    LIMIT 1";

        $pdo = $this->db->connect();
        $resultado = $pdo->prepare($selectSQL);
        $resultado->setFetchMode(PDO::FETCH_OBJ);
        $resultado->bindParam(':id', $id, PDO::PARAM_INT);
        $resultado->execute();
        return $resultado->fetch()->name;

    }

}

?>