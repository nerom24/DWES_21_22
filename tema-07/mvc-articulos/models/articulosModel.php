<?php

require_once 'models/articulo.php';

class articulosModel extends Model {

    public function __construct() {

        parent::__construct();
    }

    public function get() {

		
		try 
		{
            $consultaSQL = "select * from articulos order by id";

            $pdo = $this->db->connect();
            $pdoStmt = $pdo->prepare($consultaSQL);
            $pdoStmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Articulo');
            
            $pdoStmt->execute();
            
            $articulos=$pdoStmt->fetchAll();

            # Devuelve array de objetos de clientes
            
            return $articulos;
				
		} 

		catch (PDOException $e) 
		{
		
            $error = 'Error al leer registros: ' . $e->getMessage() . " en la línea: " . $e->getLine();
			return $error;
		} 

        
    }

    # Devuelve las categorías de artículos
    public function getCategorias() {

		
		try 
		{
            $consultaSQL = "select * from categorias order by id";

            $pdo = $this->db->connect();
            $pdoStmt = $pdo->prepare($consultaSQL);
            $pdoStmt->setFetchMode(PDO::FETCH_OBJ);
            
            $pdoStmt->execute();
            
            return $pdoStmt;
				
		} 

		catch (PDOException $e) 
		{
		
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

    public function insert($articulo) {

		try 
		{
		
			$insertSQL ="

            INSERT INTO articulos (descripcion, precio_costo, precio_venta, categoria_id, stock,  imagen)
            VALUES ( :descripcion, :precio_costo, :precio_venta, :categoria_id, :stock, :imagen)

			";

            $pdo = $this->db->connect();
            $pdoStmt = $pdo->prepare($insertSQL);

			$pdoStmt->bindParam(':descripcion', $articulo['descripcion'], PDO::PARAM_STR, 50);
			$pdoStmt->bindParam(':precio_costo', $articulo['precio_costo']);
			$pdoStmt->bindParam(':precio_venta', $articulo['precio_venta']);
			$pdoStmt->bindParam(':categoria_id', $articulo['categoria_id'], PDO::PARAM_INT);
			$pdoStmt->bindParam(':stock', $articulo['stock'], PDO::PARAM_INT);
			$pdoStmt->bindParam(':imagen', $articulo['imagen'], PDO::PARAM_STR, 50);
	
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