<?php 
    class RegisterModel extends Model {

    # Valida nombre de usuario ha de ser único
    public function validarName($name) {

        try {
            $sql = "
                    SELECT * FROM users
                    WHERE name = :name
            ";

            # Conectamos con la base de datos
            $conexion = $this->db->connect();
    
            # Ejecutamos mediante prepare la consulta SQL
            $result= $conexion->prepare($sql);
            $result->bindParam(':name', $name, PDO::PARAM_STR);
            $result -> execute();

           if ($result->rowCount() == 0) 
                    return TRUE;
            return FALSE;

        } catch(PDOException $e) {
            include_once('template/partials/error_db.php');
            exit(0);
        }
        
    
    }

   # Valida nombre de usuario ha de ser único
   public function validarEmail($email) {

    try {
        $sql = "
                SELECT * FROM users
                WHERE email = :email
        ";

        # Conectamos con la base de datos
        $conexion = $this->db->connect();

        # Ejecutamos mediante prepare la consulta SQL
        $result= $conexion->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result -> execute();

        if ($result->rowCount() == 0) 
            return TRUE;
        return FALSE;

    } catch(PDOException $e) {
        include_once('template/partials/error_db.php');
        exit(0);
    }
    
    }


    # Registrar nuevo usuario con perfil registrado
    public function registrar (User $user) {
        try {
            
            # encriptar password
            $password_encriptado = password_hash($user->password, CRYPT_BLOWFISH);
           
            $insertarsql = "INSERT INTO users
                            VALUES (
                                        null,
                                        :nombre,
                                        :email,
                                        :password,
                                        default,
                                        default
                                    )";

            $pdo = $this->db->connect();
            $stmt = $pdo->prepare($insertarsql);

            $stmt->bindParam(':nombre', $user->name, PDO::PARAM_STR, 50);
            $stmt->bindParam(':email', $user->email , PDO::PARAM_STR, 50);
            $stmt->bindParam(':password', $password_encriptado, PDO::PARAM_STR, 60) ;

            $stmt->execute();

            # Asignamos rol de registrado
            // Rol que asignaremos por defecto
            $role_id = 3;
            $insertarsql = "INSERT INTO roles_users 
                            VALUES (
                                    null,
                                    :user_id,
                                    :role_id,
                                    default,
                                    default
                            )";
            
            # Obtener id del último usuario insertado
            $ultimo_id = $pdo->lastInsertId();

            $stmt = $pdo->prepare($insertarsql);

            $stmt->bindParam(':user_id', $ultimo_id);
            $stmt->bindParam(':role_id', $role_id);
            $stmt->execute();

        }  catch (PDOException $e) {
            
            include_once('template/partials/error_db.php');
            exit(0);

        }
    }





    }
?>