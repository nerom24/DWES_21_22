<?php 
	/**
	* Clase usuario 
	*/
	class Usuario
	{
		private $user;
		private $email;
		private $clave;
		private $tipo;
		function __construct($uNombre,$uEmail, $uClave,$uTipo)
		{
			$this->user = $uNombre;
			$this->email = $uEmail;
			$this->clave = $uClave;
			$this->tipo = $uTipo;
		}
		public function getUser()
		{
			return $this->user;
		}
		public function setUser($nUser)
		{
			$this->user = $nUser;
		}
		public function getEmail()
		{
			return $this->email;
		}
		public function setEmail($nEmail)
		{
			$this->email = $nEmail;
		}
		public function getClave()
		{
			return $this->clave;
		}
		public function setclave($nclave)
		{
			$this->clave = $nclave;
		}
		public function getTipo()
		{
			return $this->tipo;
		}
		public function setTipo($nTipo)
		{
			$this->tipo  = $nTipo ;
		}
	}
?>