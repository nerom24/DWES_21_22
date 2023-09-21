
<?php 

class Usuarios {

	private $pdo; 		// Manejador de la Base de Datos
	private $usuarios;	// Resultado de Select * from cursos

	public function __construct() {

		try {

			$host = 'localhost';
			$dbname = 'bdusuarios';		   
		    $user = 'root';
		    $password = '';
		    $charset = 'utf8mb4';
			$collate = 'utf8mb4_unicode_ci';
			$dsn = "mysql:host=$host;dbname=$dbname; charset=$charset";
			$options = [
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_PERSISTENT => true,
				PDO::ATTR_EMULATE_PREPARES => false,
				PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES $charset COLLATE $collate"
			];

		    $this->pdo = new PDO($dsn, $user, $password, $options);
			
			} 

		catch (PDOException $e){
	    
	    		exit($e->getMessage());
			}

	}


	public function setUsuarios($criterio) {

		try {
			
			$selectSQL = "SELECT * FROM usuarios ORDER BY $criterio";

			$this->usuarios = $this->pdo->prepare($selectSQL);
			$this->usuarios->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'usuario');
			
			$this->usuarios->execute();

			} 

		catch (PDOException $e){
	    
	    		exit($e->getMessage());
			}
	
	}

	#Devuelve un array de perfiles cuyo indice es la clave idPerfil
	public function perfiles() {
		
		try {

		$perfiles=$this->pdo->prepare("select idPerfil, tipoPerfil from perfiles");
		$perfiles->setFetchMode(PDO::FETCH_KEY_PAIR);
		$perfiles->execute();
		return $perfiles->fetchAll();
		
		}

		catch (PDOException $e){
	    
	    		exit($e->getMessage());
		}
	}

	
	public function encabezadoUsuarios() {

		return (array("#", "UserName", "Nombre", "Apellidos", "Perfil", "UlAcceso", "Acciones"));
	}


	#Método que muestra la cabecera de la tabla usuarios.
	public function cabTablaUsuarios() {

		$cabecera = $this->encabezadoUsuarios();

		echo "<tr>";
		foreach ($cabecera as $columna) {
			
			echo "<th>$columna</th>";
		}
		echo "</tr>";
	}

	#Muestra todos los usuarios en la tabla
	public function mostrarUsuarios($idPerfil) {

		while ($usuario = $this->usuarios->fetch()) {

			$this->mostrarUsuario($usuario, $idPerfil);

		}

	}

	#Muestra los datos de un objeto de la clase usuario
	public function mostrarUsuario(usuario $usuario, $idPerfil){
  			
  	?>
		<tr>
			
			<td><?=$usuario->getId() ?></td>
			<td><?=$usuario->getUsername() ?></td>
			<td><?=$usuario->getNombre() ?></td>
			<td><?=$usuario->getApellidos() ?></td>
			<td><?=$this->tipoPerfil($usuario->getIdPerfil()) ?></td>
			<td><?=$usuario->getUltimoAcceso() ?></td>
    	
    		<?=$this->acciones($usuario->getId(), $idPerfil); ?>
		
		</tr>
    <?php 
  	}

	
  	#Muestra las acciones que se pueden realizar con cada fila de usuario
  	public function acciones($key, $idPerfil) { 
    
    ?>
      
      <td>

        <?php if ($idPerfil != 3): ?>

        <a href="formEditar.php?id=<?=$key; ?>" title="Editar"><i class="material-icons">edit</i></a>

        <a href="formMostrar.php?id=<?=$key; ?>" title="Mostrar"><i class="material-icons">visibility</i></a>

        <a href="eliminar.php?id=<?=$key; ?>" title="Eliminar"><i class="material-icons">clear</i></a>

		<?php endif; ?>

      </td>
      
    <?php

    }

    #Valida un usuario antes de añadir nuevo
    
    public function validarUsuario(Usuario $usuario, $pass2){

    	$errores = array();
    	
    	if (!$this->validarCadenaUsername($usuario->getUserName())) {

    		$errores[] = "Username: Nombre de usuario no cumple con las reglas";
    	}
 
    	if (!filter_var($usuario->getUrl(), FILTER_VALIDATE_URL)) {

			$errores[] = "Url: URL no válida";

		}

		if (!filter_var($usuario->getEmail(), FILTER_VALIDATE_EMAIL)) {

			$errores[] = "Email: Email no válido";

		}

		if (!filter_var($usuario->getEdad(), FILTER_VALIDATE_INT)) {

			$errores[] = "Edad: no válida";

		}

		if (strcmp($usuario->getPass(), $pass2) !== 0) {

			$errores[] = "Password no coincidentes";
		
		} elseif (!$this->validarPass($usuario->getPass())) {

				$errores[] = "Password: No permitido";

			}

		if (!$this->validaEmail($usuario->getEmail())) {

			$errores[] = "Email: Usuario registrado con ese Email";
		}

		if (!$this->validaUsername($usuario->getUsername())) {

			$errores[] = "Username: Nombre de usuario existente";
		}
		
    	return $errores;

    }

    #Validar cadena username
    #letras, numeros, .-_
    public function validarCadenaUsername($username) {

    	if ((strlen($username) < 5) || (strlen($username) > 10)) {

			return false;
		}

		if ((!preg_match('/^[a-zA-Z0-9.-_]+$/',$username))) {

			return false;
		}

		return true;

    }

    #Validar password
    public function validarPass($pass) {

    	if ((!preg_match('/^((?=\S*?[A-ZÑ])(?=\S*?[a-zñ])(?=\S*?[_\-.!&%^@#])(?=\S*?[0-9]).{5,15})\S$/',$pass))) {

			return false;
		}

		return true;
    }

    #Comprueba que Email no existe
    public function validaEmail($email) {
		
		try {
				
			$sql = "SELECT * FROM usuarios WHERE email = :email";

			$resultado = $this->pdo->prepare($sql);
			$resultado->bindParam(':email', $email);
			$resultado->execute();
			
			if($resultado->rowCount() == 0){
				return true;
			}
			
			return false;
			
			}
		
		 catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	#Comprueba que username no existe
    public function validaUsername($username) {
		
		try {
				
			$sql = "SELECT * FROM usuarios WHERE username = :username";

			$resultado = $this->pdo->prepare($sql);
			$resultado->bindParam(':username', $username);
			$resultado->execute();
			
			if($resultado->rowCount() == 0){
				return true;
			}
			
			return false;
			
			}
		
		 catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

    #Devuelve el tipo de perfil para un usuario
    public function tipoPerfil($idPerfil) {
		
		try {

		$perfiles=$this->pdo->prepare("select tipoPerfil from perfiles where idPerfil = :idPerfil");
		$perfiles->setFetchMode(PDO::FETCH_OBJ);
		$perfiles->bindParam(':idPerfil', $idPerfil);
		$perfiles->execute();

		return $perfiles->fetch()->tipoPerfil;
		
		}

		catch (PDOException $e){
	    
	    		exit($e->getMessage());
		}
	}


    public function mostrarNumElementos(){
		?>

        <tr> 
            <td colspan="7">
            
            <?= 'Registros: '.$this->usuarios->rowCount();  ?> 
            
            </td>
        </tr>';
        
        <?php 
    }

    public function addUsuario(usuario $usuario) {

	try {
	
		$insertSQL = 

		"INSERT INTO usuarios VALUES (

			 null, 
			:username,
			:nombre,
			:apellidos,
			:url,
			:edad,
			:perfil,
			 false,
			:email,
			:pass,
			 default,
			 default
		)";

		$st = $this->pdo->prepare($insertSQL);
		
		$st->bindParam(':username', $usuario->getUsername(), PDO::PARAM_STR);
		$st->bindParam(':nombre', $usuario->getNombre(), PDO::PARAM_STR);
		$st->bindParam(':apellidos', $usuario->getApellidos(), PDO::PARAM_STR);
		$st->bindParam(':url', $usuario->getUrl());
		$st->bindParam(':edad', $usuario->getEdad(), PDO::PARAM_INT);
		$st->bindParam(':perfil', $usuario->getIdPerfil(), PDO::PARAM_STR);
		$st->bindParam(':email', $usuario->getEmail());
		$st->bindParam(':pass', password_hash($usuario->getPass(), PASSWORD_DEFAULT, [15]), PDO::PARAM_STR);
		

		$st->execute();
			
			
	} 

	catch (PDOException $e) 
	
	{
	
		exit($e->getMessage());
	}
	}

	public function getUserEmail($email){

		try{
				
				$selectSQL = "

					SELECT * FROM usuarios WHERE email = :email limit 1
				";

				$st = $this->pdo->prepare($selectSQL);
				
				$st->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'usuario' );
				$st->bindParam(':email', $email);
				$st->execute();
				
				if ($st->rowCount() == 0) {
					
					return false;
				
				} else {

					return $st->fetch();
				}
			
			} catch (PDOException $e){
			
				echo $e->getMessage();
		}
	}


	public function getUserId($id){

		try{
				
				$selectSQL = "

					SELECT * FROM usuarios WHERE id = :id limit 1
				";

				$st = $this->pdo->prepare($selectSQL);
				
				$st->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'usuario' );
				$st->bindParam(':id', $id, PDO::PARAM_INT);
				$st->execute();
				return $st->fetch();
			
			} catch (PDOException $e){
			
				echo $e->getMessage();
		}
	}

	public function setUltimoAcceso($id) {

		try{
				
				$updateSQL = "

					UPDATE usuarios SET ultimoAcceso = CURRENT_TIMESTAMP
					WHERE id = $id
				";

				$this->pdo->query($updateSQL);
				
				
			
			} catch (PDOException $e){
			
				echo $e->getMessage();
		}
	}


}

?>
