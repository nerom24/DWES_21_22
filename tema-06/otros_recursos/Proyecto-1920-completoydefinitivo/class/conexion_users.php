<?php
class Conexion_users extends Conexion {

    # Extrae en pdostamtement la lista de todos los usuarios
    public function getUsers() {
        try {
            $sql = "SELECT * FROM Users ORDER BY id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            $stmt->execute();
            return $stmt;
        }  catch (PDOException $e) {
            echo "Error: ".$e->getMessage();
            exit(0);
        }
    }

    # Devuelve un objeto de la clase Users a partir del id de usuario
    public function getUserId($id) {
        try {
        $sql = "SELECT * FROM Users WHERE id = :id LIMIT 1";
        $stmt = $this->pdo->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'User');
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        
        return $stmt->fetch();
        }  catch (PDOException $e) {
            echo "Error: ".$e->getMessage();
            exit(0);
        }
    }

    # Devuelve un objeto de la clase Users a partir del email de usuario
    public function getUserEmail($email) {
        try {
        $sql = "SELECT * FROM Users WHERE email= :email LIMIT 1";
        $stmt = $this->pdo->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'User');
        $stmt->bindParam(":email", $email, PDO::PARAM_INT);
        $stmt->execute();
        
        return $stmt->fetch();
        }  catch (PDOException $e) {
            
            echo "Error: ".$e->getMessage();
            exit(0);

        }
    }

    
    # Creo nuevo usuario a partir de un objeto de la clae User
    public function crear (User $user) {
        try {
            $id = $user->getId();
            $name = $user->getName();
            $email = $user->getEmail();
            $pass = $user->getPassword();
            $pass_encriptado = password_hash($pass, CRYPT_BLOWFISH);
           

            $insertarsql = "INSERT INTO users VALUES (
                 null,
                :nombre,
                :email,
                :pass,
                default,
                default)";

            $stmt = $this->pdo->prepare($insertarsql);

            $stmt->bindParam(':nombre', $name, PDO::PARAM_STR, 50);
            $stmt->bindParam(':email', $email , PDO::PARAM_STR, 50);
            $stmt->bindParam(':pass', $pass_encriptado, PDO::PARAM_STR, 60) ;

            $stmt->execute();
            

        }  catch (PDOException $e) {
            
            echo "Error: ".$e->getMessage();
            exit(0);

        }
    }

    # Capa de gestión de perfiles
    # Añade nuevo registro a la tabla roles_users
    public function crear_usuario_perfil($id_perfil) {

        # Obtener id del último usuario insertado
        $ultimo_id = $this->pdo->lastInsertId();

        try {
  
            $insertarsql = "INSERT INTO roles_users VALUES (
                null,
                :user_id,
                :role_id,
                default,
                default)";

            $stmt = $this->pdo->prepare($insertarsql);

            $stmt->bindParam(':user_id', $ultimo_id, PDO::PARAM_INT);
            $stmt->bindParam(':role_id', $id_perfil , PDO::PARAM_INT);
            $stmt->execute();

        }  catch (PDOException $e) {
            
            echo "Error: ".$e->getMessage();
            exit(0);
        
        }


    }

    public function eliminar($id) {
        try {
            $deletesql = "DELETE FROM users WHERE id = :id LIMIT 1";
            $stmt = $this->pdo->prepare($deletesql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage();
            exit(0);
        }
    }

    public function actualizar_columnas ($id, $name, $email) {
        try {
                $updatesql = "UPDATE users SET 
                    name = :nombre,
                    email = :email,
                    update_at = default
                WHERE
                    id = :id
                LIMIT 1";

            $stmt = $this->pdo->prepare($updatesql);

            $stmt->bindParam(':nombre', $name, PDO::PARAM_STR, 50);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR, 50);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);

            $stmt->execute();

        }  catch (PDOException $e) {
            echo "Error: ".$e->getMessage();
            exit(0);
        }
    }

    public function actualizar_password ($id, $pass) {
        $pass_encriptado = password_hash($pass,CRYPT_BLOWFISH);
        try {
                $updatesql = "UPDATE users SET 
                    password = :pass,
                    update_at = default
                WHERE
                    id = :id
                LIMIT 1";

            $stmt = $this->pdo->prepare($updatesql);

            $stmt->bindParam(':pass', $pass_encriptado, PDO::PARAM_STR, 60);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);

            $stmt->execute();

        }  catch (PDOException $e) {
            echo "Error: ".$e->getMessage();
            exit(0);
        }
    }

    public function validar_user(User $user, $pass2){
        $errores = array();
        # Validar name
        if (!$this->validarName($user->getName())) {
            $errores['name'] = "Nombre de usuario no permitido";
        } elseif (!$this->validarNameUnique($user->getName())) {
            $errores['name'] = "Nombre de usuario existente";
        }
    
        # Validar Email
        if (!filter_var($user->getEmail(), FILTER_VALIDATE_EMAIL)) {
            $errores['email'] = "Email: Email no válido";
        } elseif (!$this->validaEmailUnique($user->getEmail())) {
            $errores['email'] = "Email existente ya registrado";
        }
    
        # Validar password
        if (strcmp($user->getPassword(), $pass2) !== 0) {
            $errores['password'] = "Password no coincidentes";
        } elseif (!$this->validarPass($user->getPassword())) {
                $errores['password'] = "Password: No permitido";
        }
        return $errores;
    
    }
    
    #Validar cadena username
    #letras, numeros, .-_
    public function validarName($username) {
        if ((strlen($username) < 5) || (strlen($username) > 50)) {
            return false;
        }
    
        // if ((!preg_match('/^[a-zA-Z0-9.-_]+$/',$username))) {
    
        //     return false;
        // }
    
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
        $resultado = $this->pdo->prepare($selectSQL);
        $resultado->bindParam(':email', $email, PDO::PARAM_STR, 50);
        $resultado->execute();
        if ($resultado->rowCount() > 0)
            return false;
        else 
            return true;
    }   
    
    #Comprueba que username no existe
    public function validarNameUnique($username) {
        
        return true;
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

        $resultado = $this->pdo->prepare($selectSQL);
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

        $resultado = $this->pdo->prepare($selectSQL);
        $resultado->setFetchMode(PDO::FETCH_OBJ);
        $resultado->bindParam(':id', $id, PDO::PARAM_INT);
        $resultado->execute();
        return $resultado->fetch()->name;

    }

    

}