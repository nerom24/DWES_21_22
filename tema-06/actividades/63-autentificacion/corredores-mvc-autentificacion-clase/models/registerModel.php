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
                                        :name,
                                        :email,
                                        :password,
                                        default,
                                        default
                                    )";

            $conexion = $this->db->connect();
            $result = $conexion->prepare($insertarsql);

            $result->bindParam(':name', $user->name, PDO::PARAM_STR, 50);
            $result->bindParam(':email', $user->email , PDO::PARAM_STR, 50);
            $result->bindParam(':password', $password_encriptado, PDO::PARAM_STR, 60) ;

            $result->execute();

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
            $ultimo_id = $conexion->lastInsertId();

            $result = $conexion->prepare($insertarsql);

            $result->bindParam(':user_id', $ultimo_id);
            $result->bindParam(':role_id', $role_id);
            $result->execute();

        }  catch (PDOException $e) {
            
            include_once('template/partials/error_db.php');
            exit(0);

        }
    }





    }
?>