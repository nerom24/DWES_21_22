<?php

class nuevoModel extends Model {

    public function __construct() {

        parent::__construct();
    }

    public function insert($cliente) {

		try 
		{
		
			$insertSQL ="

            INSERT INTO clientes (apellidos, nombre, telefono, ciudad, dni, email)
            VALUES ( :apellidos, :nombre, :telefono, :ciudad, :dni, :email)

			";

            $pdo = $this->db->connect();
            $pdoStmt = $pdo->prepare($insertSQL);

			$pdoStmt->bindParam(':apellidos', $cliente['apellidos'], PDO::PARAM_STR, 40);
			$pdoStmt->bindParam(':nombre', $cliente['nombre'], PDO::PARAM_STR, 20);
			$pdoStmt->bindParam(':telefono', $cliente['telefono'], PDO::PARAM_STR, 9);
			$pdoStmt->bindParam(':ciudad', $cliente['ciudad'], PDO::PARAM_STR, 20);
			$pdoStmt->bindParam(':dni', $cliente['dni'], PDO::PARAM_STR, 9);
			$pdoStmt->bindParam(':email', $cliente['email'], PDO::PARAM_STR, 50);
	
			$pdoStmt->execute();

			return 'Registro Añadido Con Éxito';
				
		} 

		catch (PDOException $e) 
		{
		
            $error = 'Error al añadir registro: ' . $e->getMessage() . " en la línea: " . $e->getLine();
			return $error;
		}

        
    }
}

?>