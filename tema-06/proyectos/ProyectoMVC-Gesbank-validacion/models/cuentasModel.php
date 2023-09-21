<?php 

    Class cuentasModel extends Model{
        
        # Extrae las cuentas
        public function get(){
                try{
                                    
                        $sql = "SELECT 
                                        cuentas.id,
                                        cuentas.num_cuenta,
                                        cuentas.id_cliente,
                                        cuentas.fecha_alta,
                                        cuentas.fecha_ul_mov,
                                        cuentas.num_movtos,
                                        cuentas.saldo,
                                        clientes.nombre,
                                        clientes.apellidos
                                
                                FROM
                                        cuentas
                                INNER JOIN clientes ON clientes.id = cuentas.id_cliente
                                
                                ORDER BY
                                        cuentas.id
                                ";
        
                    $conexion = $this->db->connect();

                    $pdoSt = $conexion->prepare($sql);
                    $pdoSt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Cuentas');
                    $pdoSt->execute();
                    return $pdoSt;
                    
                    
                }catch(PDOException $e){

                        include "template/partials/errordb.php";
                        exit();

                }

            }

        # Extrae los clientes para la generación dinámica SELECT de clientes
        public function getClientes(){
        try{
                                
                $sql = "SELECT 
                                clientes.id,
                                clientes.nombre,
                                clientes.apellidos
                        FROM
                                clientes
                        ORDER BY
                                clientes.id
                        ";

                $conexion = $this->db->connect();

                $pdoSt = $conexion->prepare($sql);
                $pdoSt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Cuentas');
                $pdoSt->execute();
                return $pdoSt;
                
                
                }catch(PDOException $e){

                        include "template/partials/errordb.php";
                        exit();

                }

        }
        
        # Añadir nueva cuenta
        public function create(Cuenta $cuenta){
                try{
                        var_dump($cuenta);
                        $sql = "INSERT INTO 
                                cuentas 
                               VALUES (
                                        null,
                                        :num_cuenta,
                                        :id_cliente,
                                        DEFAULT, 
                                        DEFAULT,
                                        0,
                                        0,
                                        DEFAULT,
                                        DEFAULT
                                        )
                                ";
                        $conexion = $this->db->connect();

                        $pdoSt = $conexion->prepare($sql);
                        $pdoSt->bindParam(':num_cuenta', $cuenta->num_cuenta , PDO::PARAM_STR, 20);
                        $pdoSt->bindParam(':id_cliente', $cuenta->id_cliente , PDO::PARAM_INT);
                        $pdoSt->execute();

                }catch(PDOException $e){

                        include "template/partials/errordb.php";
                        exit();

                }

        }

        # Obtener los datos de una cuenta a partir id
        public function read($id){
                try{
                                    
                        $sql = "SELECT *

                                FROM cuentas
                                WHERE id = :id 
                                LIMIT 1
                                ";
                        
                        $conexion = $this->db->connect();
    
                        $pdoSt = $conexion->prepare($sql);
                        $pdoSt->bindParam(':id', $id , PDO::PARAM_INT);
                        $pdoSt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Cuentas');
                        $pdoSt->execute();
                        return $pdoSt->fetch();
                        
                        
                }catch(PDOException $e){
    
                        include "template/partials/errordb.php";
                        // Para cortar la conexión.
                        exit();
    
                }
        }

        # Actualizar los detalles de una cuenta
        public function update(cuenta $cuenta, int $id){
                try{
                                
                        $sql = "UPDATE cuentas 
                        SET
                                num_cuenta = :num_cuenta,
                                id_cliente = :id_cliente        

                        WHERE id = :id
                        LIMIT 1";

                        $conexion = $this->db->connect();

                        $pdoSt = $conexion->prepare($sql);
                        $pdoSt->bindParam(':id', $id , PDO::PARAM_INT);
                        $pdoSt->bindParam(':num_cuenta', $cuenta->num_cuenta , PDO::PARAM_STR, 20);
                        $pdoSt->bindParam(':id_cliente', $cuenta->id_cliente , PDO::PARAM_INT);
                        $pdoSt->execute();

                }catch(PDOException $e){

                        include "template/partials/errordb.php";
                        exit();

                }

        }

        # Eliminar una cuenta a partir de su id
        public function delete($id){
                try{
                                
                        $sql = "DELETE
                        FROM cuentas
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

        # Ordenar a partir del criterio número de columna
        public function ordercuentas(int $criterio){

                try{
                        
                        
                        $sql = "SELECT 
                                        cuentas.id,
                                        cuentas.num_cuenta,
                                        clientes.nombre,
                                        clientes.apellidos,
                                        cuentas.id_cliente,
                                        cuentas.fecha_alta,
                                        cuentas.fecha_ul_mov,
                                        cuentas.num_movtos,
                                        cuentas.saldo
                                        
                                FROM cuentas

                                INNER JOIN clientes ON clientes.id = cuentas.id_cliente

                                ORDER BY :criterio ASC";

                        $conexion = $this->db->connect();

                        $pdoSt = $conexion->prepare($sql);
                        $pdoSt->bindParam(':criterio', $criterio , PDO::PARAM_INT);
                        $pdoSt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Cuentas');
                        $pdoSt->execute();
                        return $pdoSt;

                }catch(PDOException $e){

                        include "template/partials/errordb.php";
                        exit();

                }
        }

        # Filtrar cuentas a partir de una expresión
        public function filter($busqueda){

                try{
                        
                        $sql = "SELECT 
                                        cuentas.id,
                                        cuentas.num_cuenta,
                                        clientes.nombre,
                                        clientes.apellidos,
                                        cuentas.id_cliente,
                                        cuentas.fecha_alta,
                                        cuentas.fecha_ul_mov,
                                        cuentas.num_movtos,
                                        cuentas.saldo
                
                        FROM cuentas

                        INNER JOIN clientes ON clientes.id = cuentas.id_cliente

                        WHERE 
                                CONCAT_WS(
                                        cuentas.id,
                                        cuentas.num_cuenta,
                                        clientes.nombre,
                                        clientes.apellidos,
                                        cuentas.id_cliente,
                                        cuentas.fecha_alta,
                                        cuentas.fecha_ul_mov,
                                        cuentas.num_movtos,
                                        cuentas.saldo
                                        )
                                LIKE :busqueda
                        ";

                        $conexion = $this->db->connect();

                        $pdoSt = $conexion->prepare($sql);
                        $pdoSt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Cuentas');
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