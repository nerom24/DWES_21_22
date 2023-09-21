<?php 

    Class clientesModel extends Model{
        
        # Extrae todos los clientes
        public function get(){
                try{
                                    
                        $sql = "SELECT 
                                        clientes.id,
                                        clientes.apellidos,
                                        clientes.nombre,
                                        clientes.ciudad,
                                        clientes.email,
                                        clientes.telefono,
                                        clientes.dni
                                FROM
                                        clientes
                                ORDER BY
                                        clientes.id
                                ";
                    
                    $conexion = $this->db->connect();

                    $pdoSt = $conexion->prepare($sql);
                    $pdoSt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Cliente');
                    $pdoSt->execute();
                    return $pdoSt;
                    
                    
                }catch(PDOException $e){

                        include "template/partials/errordb.php";
                        exit();

                }

            }
        
        # Nuevo Cliente
        public function create(Cliente $cliente){
                try{
                                
                        $sql = "INSERT INTO 
                                clientes 
                               VALUES (
                                        null,
                                        :apellidos,
                                        :nombre,
                                        :telefono, 
                                        :ciudad,
                                        :dni,
                                        :email,
                                        null,
                                        null
                                        )
                                ";
                        $conexion = $this->db->connect();

                        $pdoSt = $conexion->prepare($sql);
                        $pdoSt->bindParam(':apellidos', $cliente->apellidos , PDO::PARAM_STR, 45);
                        $pdoSt->bindParam(':nombre', $cliente->nombre , PDO::PARAM_STR, 20);
                        $pdoSt->bindParam(':telefono', $cliente->telefono, PDO::PARAM_STR, 9);
                        $pdoSt->bindParam(':ciudad', $cliente->ciudad , PDO::PARAM_STR, 20);
                        $pdoSt->bindParam(':dni', $cliente->dni, PDO::PARAM_STR, 9);
                        $pdoSt->bindParam(':email', $cliente->email, PDO::PARAM_STR, 45);
                        $pdoSt->execute();

                        }catch(PDOException $e){

                                include "template/partials/errordb.php";
                                exit();

                        }

        }

        # Obtiene un objeto cliente a partir id
        public function read($id){
                try{
                                    
                        $sql = "SELECT *

                                FROM clientes
                                WHERE id = :id 
                                LIMIT 1
                                ";
                        
                        $conexion = $this->db->connect();
    
                        $pdoSt = $conexion->prepare($sql);
                        $pdoSt->bindParam(':id', $id , PDO::PARAM_INT);
                        $pdoSt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Cliente');
                        $pdoSt->execute();
                        return $pdoSt->fetch();
                        
                        
                }catch(PDOException $e){
    
                        include "template/partials/errordb.php";
                        exit();
    
                }
        }

        # Envió objeto cliente y actualizo
        public function update(Cliente $cliente, int $id){
                try{
                                
                        $sql = "UPDATE clientes 
                        SET
                                apellidos = :apellidos,
                                nombre = :nombre,
                                telefono = :telefono,
                                ciudad = :ciudad,
                                dni = :dni,
                                email = :email

                        WHERE id = :id
                        LIMIT 1";

                        $conexion = $this->db->connect();

                        $pdoSt = $conexion->prepare($sql);
                        $pdoSt->bindParam(':id', $id , PDO::PARAM_INT);
                        $pdoSt->bindParam(':apellidos', $cliente->apellidos , PDO::PARAM_STR, 45);
                        $pdoSt->bindParam(':nombre', $cliente->nombre , PDO::PARAM_STR, 20);
                        $pdoSt->bindParam(':telefono', $cliente->telefono, PDO::PARAM_STR, 9);
                        $pdoSt->bindParam(':ciudad', $cliente->ciudad , PDO::PARAM_STR, 20);
                        $pdoSt->bindParam(':dni', $cliente->dni, PDO::PARAM_STR, 9);
                        $pdoSt->bindParam(':email', $cliente->email, PDO::PARAM_STR, 45);
                        $pdoSt->execute();

                }catch(PDOException $e){

                        include "template/partials/errordb.php";
                        exit();

                }

        }
       
        # Eliminar cliente a partir id
        public function delete($id){
                try{
                                
                        $sql = "DELETE
                        FROM clientes
                        WHERE id = :id
                        LIMIT 1";

                        $conexion = $this->db->connect();

                        $pdoSt = $conexion->prepare($sql);
                        $pdoSt->bindParam(':id', $id , PDO::PARAM_INT);
                        $pdoSt->execute();

                }catch(PDOException $e){

                        include "template/partials/errordb.php";
                        exit();

                }
        }

        # Ordenar los clientes a partir criterio número de columna
        public function orderClientes(int $criterio){

                try{
                        
                        
                        $sql = "SELECT 
                                        clientes.id,
                                        clientes.apellidos,
                                        clientes.nombre,
                                        clientes.ciudad,
                                        clientes.email,
                                        clientes.telefono,
                                        clientes.dni
        
                                FROM clientes

                                ORDER BY :criterio ASC";

                        $conexion = $this->db->connect();

                        $pdoSt = $conexion->prepare($sql);
                        $pdoSt->bindParam(':criterio', $criterio , PDO::PARAM_INT);
                        $pdoSt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Cliente');
                        $pdoSt->execute();
                        return $pdoSt;

                }catch(PDOException $e){

                        include "template/partials/errordb.php";
                        exit();

                }
        }

        # Búsqueda a partir de una expresión
        public function filter($busqueda){

                try{
                        
                        $sql = "SELECT 
                                        clientes.id,
                                        clientes.apellidos,
                                        clientes.nombre,
                                        clientes.ciudad,
                                        clientes.email,
                                        clientes.telefono,
                                        clientes.dni
                
                        FROM clientes

                        WHERE 
                                CONCAT_WS(
                                        clientes.id,
                                        clientes.apellidos,
                                        clientes.nombre,
                                        clientes.ciudad,
                                        clientes.email,
                                        clientes.telefono,
                                        clientes.dni
                                        )
                                LIKE :busqueda
                        ";

                        $conexion = $this->db->connect();
                        $pdoSt = $conexion->prepare($sql);
                        $pdoSt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Cliente');
                        $pdoSt->bindValue(':busqueda', '%'. $busqueda .'%' , PDO::PARAM_STR);
                        $pdoSt->execute();
                        return $pdoSt;

                }catch(PDOException $e){

                        include "template/partials/errordb.php";
                        exit();

                }
        }
    }



?>