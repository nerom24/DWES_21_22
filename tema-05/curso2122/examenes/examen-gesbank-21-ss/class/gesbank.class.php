<?php  
	Class Gesbank extends Conexion{

                public function getCuentas() {

                        try {
                                $consultaSQL = "                             
                                SELECT 
                                        cue.id,
                                        cue.num_cuenta,
                                        cli.apellidos,
                                        cli.nombre,
                                        cue.fecha_alta,
                                        cue.fecha_ul_mov,
                                        cue.num_movtos,
                                        cue.saldo
                                
                                FROM cuentas AS cue
                                         JOIN clientes AS cli ON cue.id_cliente = cli.id
                                
                                         ORDER BY cue.id
                                ";

                                $result= $this->conexion->prepare($consultaSQL);

                                //$result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'cuenta');
                                $result->setFetchMode(PDO::FETCH_OBJ);
                                $result -> execute();

                                return $result;

                        }
                        catch(PDOException $e) {
                                include_once('views/partials/errordb.php');
                                //exit(0);
                        }
                }

        # Obtener los movimientos de una cuenta

        public function getMovimientos($id_cuenta) {

               
        }

        # Añadir nuevo movimiento
                
        public function createMovimiento(Movimiento $movimiento) {
                        
                
        }

        # Actualizar cuenta
        public function actualizar_cuenta(Cuenta $cuenta) {

                
        }

        # Obtener el registro correspondiente a una cuenta
                
        public function getCuenta($id_cuenta) {

               
        }




    
       
}
?>