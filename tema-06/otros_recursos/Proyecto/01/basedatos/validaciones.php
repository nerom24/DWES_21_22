
<?php 


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

    	if ((strlen($pass) < 5) || (strlen($pass) > 15)) {

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



