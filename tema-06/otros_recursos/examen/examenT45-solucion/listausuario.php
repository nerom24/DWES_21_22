	<?php  
	/**
	* Lista usuarios
	*/
	class ListaUsuario 
	{
		public $listaArray; 
		function __construct()
		{
		 	$listaArray = array();
		}
		public function insertarUsuario($usuario)
		{
			$this->listaArray[] = $usuario;
		}
		public function buscarUsuario($email)
		{
			foreach ($this->listaArray as $indice => $usuario) {
				if($usuario->getEmail() == $email){
					return $indice;
				}
			}
			return false;
		}
		public function getlClave($indice)
		{
			$clave = $this->listaArray[$indice]->getClave();
			return $clave;
		}
		public function getlUser($indice)
		{
			$user = $this->listaArray[$indice]->getUser();
			return $user;
		}
		public function getlTipo($indice)
		{
			$Tipo = $this->listaArray[$indice]->getTipo();
			return $Tipo;
		}

	}
 ?>