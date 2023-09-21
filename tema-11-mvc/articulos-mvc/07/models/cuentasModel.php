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

            echo 'Error al leer registros: ' . $e->getMessage() . 
            " en la línea: " . $e->getLine();
			exit();

        }

    }

    public function getClientesSelect(){

        try {
            
            $consultaSQL = "
            
            SELECT 
                id,
                concat(apellidos,', ',nombre) as cliente
    
            FROM clientes
            ORDER BY cliente

            ";

            $pdo = $this->db->connect();
            $pdoStmt = $pdo->prepare($consultaSQL);
            $pdoStmt->setFetchMode(PDO::FETCH_OBJ);
            
            $pdoStmt->execute();
            
            return $pdoStmt;
				
		} catch (PDOException $e) {
		
            echo 'Error al leer registros: ' . $e->getMessage() . " en la línea: " . $e->getLine();
			exit();
		} 

    }

    #
    # Validar id de clientes
    # Debe existir id de cliente
    #
    public function validarClienteId($cliente_id) {

		
		try {
            
            $consultaSQL = "SELECT * FROM clientes WHERE id = :id";

            $pdo = $this->db->connect();
            $pdoStmt = $pdo->prepare($consultaSQL);
            $pdoStmt->bindParam(':id', $cliente_id, PDO::PARAM_INT);
            
            $pdoStmt->execute();

            if ($pdoStmt->rowCount() == 1) 
                return TRUE;
            return FALSE;
				
		} catch (PDOException $e) {
		
            echo 'Error al leer registros: ' . $e->getMessage() . " en la línea: " . $e->getLine();
			exit();
		} 

        
    }

    #
    # Validar num_cuenta
    # No debe existir
    #
    public function validarNum_cuenta($num_cuenta) {

		
		try {
            
            $consultaSQL = "SELECT * FROM cuentas WHERE num_cuenta = :num_cuenta";

            $pdo = $this->db->connect();
            $pdoStmt = $pdo->prepare($consultaSQL);
            $pdoStmt->bindParam(':num_cuenta', $num_cuenta, PDO::PARAM_STR);
            
            $pdoStmt->execute();

            if ($pdoStmt->rowCount() == 1) 
                return FALSE;
            return TRUE;
				
		} catch (PDOException $e) {
		
            echo 'Error al leer registros: ' . $e->getMessage() . " en la línea: " . $e->getLine();
			exit();
		} 

        
    }

    # 
    # Crea una nueva cuenta
    #
    public function create ($cliente_id, $num_cuenta, $saldo) {
        try { 

            $insertarsql = "INSERT INTO cuentas VALUES (
                 null,
                :num_cuenta,
                :id_cliente,
                 default,
                 null,
                 '0',
                :saldo,
                default,
                default)";

            $pdo = $this->db->connect();
            $stmt = $pdo->prepare($insertarsql);

            $stmt->bindParam(':num_cuenta', $num_cuenta, PDO::PARAM_STR, 20);
            $stmt->bindParam(':id_cliente', $cliente_id , PDO::PARAM_INT);
            $stmt->bindParam(':saldo', $saldo) ;

            $stmt->execute();


        }  catch (PDOException $e) {
            
            echo 'Error al leer registros: ' . $e->getMessage() . " en la línea: " . $e->getLine();
			exit();

        }
    }

     # Cuentas
    // Extraer los detalles una cuenta
    public function getCuenta($id_cuenta) {

        try {

            $consultaSQL = "
            
            SELECT 
                *
            FROM cuentas 
            WHERE
                id = :id
            ORDER BY id
            LIMIT 1

            ";

            # Conectamos base de datos
            $pdo = $this->db->connect();
            $resultado = $pdo->prepare($consultaSQL);
            $resultado->bindParam(':id', $id_cuenta , PDO::PARAM_INT);
            $resultado->setFetchMode(PDO::FETCH_OBJ);
            
            # Ejecutamos la consulta
            $resultado->execute();
            
            return $resultado->fetch();

        } catch (PDOException $e) {

            echo 'Error al leer registros: ' . $e->getMessage() . 
            " en la línea: " . $e->getLine();
			exit();

        }

    }

    # Update cuenta
    public function update($id, $cliente_id, $num_cuenta, $saldo) {

        try {

            $updateSQL = "
            
            UPDATE  
                cuentas
            SET
                num_cuenta = :num_cuenta,
                id_cliente = :id_cliente,
                saldo = :saldo,
                update_at = default
            WHERE 
                id = :id
            LIMIT 1
    
            ";

            # Conectamos base de datos
            $pdo = $this->db->connect();
            $resultado = $pdo->prepare($updateSQL);

            $resultado->bindParam(':id', $id , PDO::PARAM_INT);
            $resultado->bindParam(':num_cuenta', $num_cuenta, PDO::PARAM_STR, 20);
            $resultado->bindParam(':id_cliente', $cliente_id , PDO::PARAM_INT);
            $resultado->bindParam(':saldo', $saldo) ;
            
            # Ejecutamos la consulta
            $resultado->execute();
            

        } catch (PDOException $e) {

            echo 'Error al leer registros: ' . $e->getMessage() . 
            " en la línea: " . $e->getLine();
			exit();

        }

    }



   
}

?>