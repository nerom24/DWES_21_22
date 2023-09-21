<?php

//require_once 'models/cuentas.php';

class cuentasModel extends Model {

    public function __construct() {

        parent::__construct();
    }

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

            $pdo = $this->db->connect();
            $pdoStmt = $pdo->prepare($consultaSQL);
            $pdoStmt->setFetchMode(PDO::FETCH_OBJ);
            
            $pdoStmt->execute();
            
            return $pdoStmt;
				
		} catch (PDOException $e) {
		
            $error = 'Error al leer registros: ' . $e->getMessage() . " en la línea: " . $e->getLine();
			return $error;
		} 

        
    }

    public function getById($id) {

        $consultaSQL = "SELECT * FROM clientes WHERE id = :id limit 1";

        try {
			
            $pdo = $this->db->connect();
            $pdoStmt = $pdo->prepare($consultaSQL);
            $pdoStmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Cliente');
            $pdoStmt->bindParam(':id', $id, PDO::PARAM_INT);
            $pdoStmt->execute();

            return $pdoStmt->fetch();
            
			} 

		catch (PDOException $e){
	    
            $error = 'Error al leer el registro: ' . $e->getMessage() . " en la línea: " . $e->getLine();
			return $error;
			}
    }

    public function update(Cliente $cliente, $idCliente) {

        $consultaSQL = "UPDATE clientes 
                        SET apellidos = :apellidos,
                            nombre = :nombre,
                            telefono = :telefono,
                            ciudad = :ciudad,
                            dni = :dni,
                            email = :email
                        WHERE id = :id";

        try {
			
            $pdo = $this->db->connect();
            $pdoStmt = $pdo->prepare($consultaSQL);
            
            $pdoStmt->bindParam(':id', $idCliente);
            $pdoStmt->bindParam(':apellidos', $cliente->apellidos, PDO::PARAM_STR, 40);
			$pdoStmt->bindParam(':nombre', $cliente->nombre, PDO::PARAM_STR, 20);
			$pdoStmt->bindParam(':telefono', $cliente->telefono, PDO::PARAM_STR, 9);
			$pdoStmt->bindParam(':ciudad', $cliente->ciudad, PDO::PARAM_STR, 20);
			$pdoStmt->bindParam(':dni', $cliente->dni, PDO::PARAM_STR, 9);
			$pdoStmt->bindParam(':email', $cliente->email, PDO::PARAM_STR, 50);
            $pdoStmt->execute();

            return "Registro Actualizado Correctamente";
            
			} 

		catch (PDOException $e){
	    
            $error = 'Error Actualización Registro: ' . $e->getMessage() . " en la línea: " . $e->getLine();
			return $error;
			}
    }

    public function delete($id) {

        $consultaSQL = "DELETE FROM clientes WHERE id = :id limit 1";

        try {
			
            $pdo = $this->db->connect();
            $pdoStmt = $pdo->prepare($consultaSQL);
            $pdoStmt->bindParam(':id', $id, PDO::PARAM_INT);
            $pdoStmt->execute();

            return "Registro Eliminado Correctamente..";
            
			} 

		catch (PDOException $e){
	    
            $error = 'Error al eliminar registro: ' . $e->getMessage() . " en la línea: " . $e->getLine();
			return $error;
			}
    }
}

?>