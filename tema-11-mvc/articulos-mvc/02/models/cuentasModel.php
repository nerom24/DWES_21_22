<?php 
    class cuentasModel extends Model {

    public function __construct() {

        parent::__construct();
    }

    # Cuentas
    // Extraer los detalles de las cuentas
    public function get() {

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
    
            FROM cuentas AS cue INNER JOIN clientes AS cli 
            ON cue.id_cliente = cli.id
    
            ORDER BY cue.id

            ";

            # Conectamos base de datos
            $pdo = $this->db->connect();
            $resultado = $pdo->prepare($consultaSQL);
            $resultado->setFetchMode(PDO::FETCH_OBJ);
            
            # Ejecutamos la consulta
            $resultado->execute();
            
            return $resultado;

        } catch (PDOException $e) {

            $error = 'Error al leer registros: ' . $e->getMessage() . 
            " en la línea: " . $e->getLine();
			return $error;

        }

    }

   
}

?>