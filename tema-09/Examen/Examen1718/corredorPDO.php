
<?php 

class corredores {

	private $pdo;
	private $corredores;

	public function __construct() {

		try {

		    $dsn = "mysql:host=localhost;dbname=maratoon";
		    $user = 'root';
		    $password = '';
		    $this->pdo = new PDO($dsn, $user, $password);
		    $this->pdo->query("SET NAMES 'utf8'");
		    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			} 

		catch (PDOException $e){
	    
	    		exit($e->getMessage());
			}

	}

	public function getCorredores($pPdoStatement) {

		try {
			
			$this->corredores = $this->pdo->prepare($pPdoStatement);
			$this->corredores->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'corredor');
			$this->corredores->execute();

			} 

		catch (PDOException $e){
	    
	    		exit($e->getMessage());
			}
	
	}

	
	

	



	public function getCorredor($pKey){
		try{

			$insertSQL = "select * from corredor where id = :idCorredorParam";
			$pdoStatement = $this->pdo->prepare($insertSQL);
			$pdoStatement->bindParam(':idCorredorParam', $pKey, PDO::PARAM_INT);
			$pdoStatement->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'corredor');
			$pdoStatement->execute();

			return $pdoStatement->fetch();
			

		}catch(PDOException $e){

			exit($e->getMessage());
		}
	}

	public function mostrarCabeceraCorredores() {

        ?>
       
          <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Email</th>
            <th>Categoria</th>
            <th>Club</th>
            <th>Acciones</th>
          </tr>
     

        <?php
      }




	public function mostrarCorredores() {

		while ($corredor = $this->corredores->fetch()) {

			$this->mostrarCorredor($corredor);

		}

	}

	public function mostrarCorredor(corredor $pCorredores){
  			
  		?>
  				<tr>
  					<td><?=$pCorredores->getId() ?></td>
  					<td><?=$pCorredores->getNombre() ?></td>
  					<td><?=$pCorredores->getApellidos() ?></td>
  					<td><?=$pCorredores->getEmail() ?></td>
  					<td><?=$this->getCategoria($pCorredores->getIdCategoria()) ?></td>
  					<td><?=$this->getClub($pCorredores->getIdClub()) ?></td>
                	
                	<?=$this->acciones($pCorredores->getId()); ?>
  				</tr>

        <?php 
  	}

	public function getCategoria($pIdCategoria){
		$pdoStatement = $this->pdo->prepare("SELECT nombrecorto FROM categoria WHERE id = :idCategoria");
		$pdoStatement->bindParam(':idCategoria', $pIdCategoria, PDO::PARAM_INT);
		$pdoStatement->execute();
		$categoria = $pdoStatement->fetchColumn();

		return $categoria;

	}

	public function getClub($pIdClub){
		$pdoStatement = $this->pdo->prepare("SELECT nombreCorto FROM club WHERE id = :idClub");
		$pdoStatement->bindParam(':idClub', $pIdClub, PDO::PARAM_INT);
		$pdoStatement->execute();
		$club = $pdoStatement->fetchColumn();

		return $club;

	}



	
  	public function acciones($pKey) {
      ?>

 	  <td>
        <a href="email.php?id=<?=$pKey; ?>" title="Email"><i class="material-icons">email</i></a>

        <a href="imprimirFicha.php?id=<?=$pKey; ?>" title="Imprimir Ficha"><i class="material-icons">print</i></a>


      </td>

      <?php

    }

	public function mostrarNumElementos(){

        echo 
         '<tr> 
            <td colspan="6">
            Registros: '.$this->corredores->rowCount().'
            </td>
          </tr>';
      }


    

}

?>
