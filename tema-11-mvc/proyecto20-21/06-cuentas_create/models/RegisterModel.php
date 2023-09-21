<?php

//require_once 'models/cuentas.php';

class RegisterModel extends Model {

    public function __construct() {

        parent::__construct();
    }

    #Validar cadena username
    #letras, numeros, .-_
    public function validarName($username) {
        if ((strlen($username) < 5) || (strlen($username) > 50)) {
            return false;
        }
        return true;
    
    }

    #Validar password
    public function validarPass($pass) {
        if ((strlen($pass) < 5) || (strlen($pass) > 50)) {
            return false;
        }
        return true;
    }

    #Validar email
    public function validaEmailUnique($email) {
    
        $selectSQL = "SELECT * FROM users WHERE email = :email";
        $pdo = $this->db->connect();
        $resultado = $pdo->prepare($selectSQL);
        $resultado->bindParam(':email', $email, PDO::PARAM_STR, 50);
        $resultado->execute();
        if ($resultado->rowCount() > 0)
            return false;
        else 
            return true;
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

     # Creo nuevo usuario a partir de los datos de formulario de registro
     public function crear ($name, $email, $password) {
        try {
            

            $password_encriptado = password_hash($password, CRYPT_BLOWFISH);
           

            $insertarsql = "INSERT INTO users VALUES (
                 null,
                :nombre,
                :email,
                :password,
                default,
                default)";

            $pdo = $this->db->connect();
            $stmt = $pdo->prepare($insertarsql);

            $stmt->bindParam(':nombre', $name, PDO::PARAM_STR, 50);
            $stmt->bindParam(':email', $email , PDO::PARAM_STR, 50);
            $stmt->bindParam(':password', $password_encriptado, PDO::PARAM_STR, 60) ;

            $stmt->execute();

            # Asignamos rol de registrado
            // Rol que asignaremos por defecto
            $role_id = 3;
            $insertarsql = "INSERT INTO roles_users VALUES (
                null,
                :user_id,
                :role_id,
                default,
                default)";
            
            # Obtener id del último usuario insertado
            $ultimo_id = $pdo->lastInsertId();

            $stmt = $pdo->prepare($insertarsql);

            $stmt->bindParam(':user_id', $ultimo_id);
            $stmt->bindParam(':role_id', $role_id);
            $stmt->execute();

            

        }  catch (PDOException $e) {
            
            $error = 'Error al leer registros: ' . $e->getMessage() . " en la línea: " . $e->getLine();
			return $error;

        }
    }

    



}

?>