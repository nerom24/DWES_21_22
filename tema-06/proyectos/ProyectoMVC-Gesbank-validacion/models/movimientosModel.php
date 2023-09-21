<?php 

    Class movimientosModel extends Model{
        

        # Obtiene los movientos de una cuenta a partir de id_cuenta
        public function read($id_cuenta){
                try{
                                    
                        $sql = "SELECT 
                                        movimientos.id,
                                        movimientos.id_cuenta,
                                        movimientos.fecha_hora,
                                        movimientos.concepto,
                                        movimientos.tipo,
                                        movimientos.cantidad,
                                        movimientos.saldo,
                                        cuentas.num_cuenta
                                
                                FROM
                                        movimientos

                                INNER JOIN cuentas ON movimientos.id_cuenta = cuentas.id

                                WHERE movimientos.id_cuenta = :id_cuenta
                                
                                ORDER BY
                                        movimientos.id
                                ";
        
                    $conexion = $this->db->connect();

                    $pdoSt = $conexion->prepare($sql);
                    $pdoSt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Movimientos');
                    $pdoSt->bindParam(':id_cuenta', $id_cuenta , PDO::PARAM_INT);
                    $pdoSt->execute();
                    return $pdoSt;
                    
                    
                }catch(PDOException $e){

                        include "template/partials/errordb.php";
                        exit();

                }

        }
        
        # Devuelve un objeto de la clase cuenta a partir de su id
        public function get($id){
                try{
                                    
                        $sql = "SELECT cuentas.*,
                                       concat_ws(' ', clientes.nombre, clientes.apellidos) cliente

                                FROM cuentas inner join clientes ON cuentas.id_cliente = clientes.id
                                WHERE cuentas.id = :id 
                                LIMIT 1
                                ";
                        
                        $conexion = $this->db->connect();
    
                        $pdoSt = $conexion->prepare($sql);
                        $pdoSt->bindParam(':id', $id , PDO::PARAM_INT);
                        $pdoSt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Cuenta');
                        $pdoSt->execute();
                        return $pdoSt->fetch();
                        
                        
                }catch(PDOException $e){
    
                        include "template/partials/errordb.php";
                        exit();
    
                }
        }

        # Crea un nuevo movimiento
        public function create(Movimientos $movimiento){
                try{
                        var_dump($movimiento);
                        $sql = "INSERT INTO movimientos VALUES
                                (
                                NULL,
                                :id_cuenta,
                                DEFAULT,
                                :concepto,
                                :tipo,
                                :cantidad,
                                :saldo,
                                DEFAULT,
                                DEFAULT
                                )";
                        $conexion = $this->db->connect();

                        $pdoSt = $conexion->prepare($sql);
                        
                        $pdoSt->bindParam(':id_cuenta', $movimiento->id_cuenta, PDO::PARAM_INT);
                        $pdoSt->bindParam(':concepto', $movimiento->concepto, PDO::PARAM_STR, 50);
                        $pdoSt->bindParam(':tipo', $movimiento->tipo, PDO::PARAM_STR, 1);
                        $pdoSt->bindParam(':cantidad', $movimiento->cantidad, PDO::PARAM_INT);
                        $pdoSt->bindParam(':saldo', $movimiento->saldo, PDO::PARAM_INT);
                        
                        $pdoSt->execute();
                }catch(PDOException $e){

                        include "template/partials/errordb.php";
                        exit();

                }

        }

        # Actualiza los detalles de una cuenta una vez realizado un movimiento
        public function actualizarCuenta(Cuenta $cuenta) {
                try {
                    $sql = 'UPDATE 
                                cuentas 
                            SET
                                fecha_ul_mov = :fecha_ul_mov,
                                num_movtos = :num_movtos,
                                saldo = :saldo

                            WHERE id = :id
                            LIMIT 1';
        
                    
                    $conexion = $this->db->connect();
        
                    
                    $pdoSt = $conexion->prepare($sql);
        
                    
                    $pdoSt->bindParam(':id', $cuenta->id, PDO::PARAM_INT);
                    $pdoSt->bindParam(':fecha_ul_mov', $cuenta->fecha_ul_mov);
                    $pdoSt->bindParam(':num_movtos', $cuenta->num_movtos, PDO::PARAM_INT);
                    $pdoSt->bindParam(':saldo', $cuenta->saldo, PDO::PARAM_INT);
        
                    $pdoSt->execute();
        
                } catch (PDOException $e) {
                    
                    include 'template/partials/errordb.php';
                    exit();
                }
            }

        # Ordenar los movimientos de una cuenta 
        public function order(int $id_cuenta, int $criterio = 1) {
                try {
                    // Consulta para traer los movimientos y su curso
                    $sql = 'SELECT 
                                movimientos.id,
                                cuentas.num_cuenta,
                                movimientos.fecha_hora,
                                movimientos.concepto,
                                movimientos.tipo,
                                movimientos.cantidad,
                                movimientos.saldo
                            FROM movimientos
                            JOIN cuentas ON movimientos.id_cuenta = cuentas.id
                            WHERE cuentas.id = :id_cuenta
                            ORDER BY :criterio';
        
                    
                    $conexion = $this->db->connect();
   
                    $pdoSt = $conexion->prepare($sql);
                    
                    $pdoSt->bindValue(':id_cuenta', $id_cuenta, PDO::PARAM_INT);
                    $pdoSt->bindValue(':criterio', $criterio, PDO::PARAM_INT);
                    $pdoSt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Movimientos');
                    $pdoSt->execute();
        
                   
                    return $pdoSt;
                    
                } catch (PDOException $e) {
                        include 'template/partials/errordb.php';
                        exit();
                }
        }

        # Extraer los movimientos a partir de una expresión
        public function filter($id_cuenta, $busqueda) {
                try {
                   
                        $sql = "SELECT 
                                        movimientos.id,
                                        cuentas.num_cuenta,
                                        movimientos.fecha_hora,
                                        movimientos.concepto,
                                        movimientos.tipo,
                                        movimientos.cantidad,
                                        movimientos.saldo
                                FROM movimientos
                                JOIN cuentas ON movimientos.id_cuenta = cuentas.id
                                WHERE
                                        cuentas.id = :id_cuenta
                                        &&
                                        CONCAT_WS(',',
                                        movimientos.id,
                                        cuentas.num_cuenta,
                                        movimientos.fecha_hora,
                                        movimientos.concepto,
                                        movimientos.tipo,
                                        movimientos.cantidad,
                                        movimientos.saldo
                                        )
                                LIKE :busqueda;
                        ";

                        $conexion = $this->db->connect();
                        $pdoSt = $conexion->prepare($sql);

                        $pdoSt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Movimientos');
                        
                        // Filtrar valores
                        $pdoSt->bindValue(':id_cuenta', $id_cuenta, PDO::PARAM_INT);
                        $pdoSt->bindValue(':busqueda', '%' . $busqueda . '%', PDO::PARAM_STR);

                        $pdoSt->execute();

                        return $pdoSt;

                }catch(PDOException $e){

                        include "template/partials/errordb.php";
                        exit();

                }
        }
    }



?>