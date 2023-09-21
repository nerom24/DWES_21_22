<?php 
class usuario {
 	public $nombre 	= "daw1617";
 	public $email 	= "daw1617@gmail.com";
 	private $clave 	= "12121";
 	private $tipo 	= 0;

 	public function __construct($nombre=NULL, $email=NULL, $clave=NULL, $tipo=NULL) {
 		$this->nombre	=	is_null($nombre) ? $this->nombre : $nombre;
 		$this->email	=	is_null($email) ? $this->email : $email;
 		$this->clave	=	is_null($clave) ? $this->clave : $clave;
 		$this->tipo		=	is_null($nombre) ? $this->tipo : $tipo;
 	}
	
	public function __destruct() {
		unset($this->nombre);
		unset($this->email);
		unset($this->clave);
		unset($this->tipo);
	}
 	
 	public function getClave() {
 		echo $this->clave;
 	}

 	public function getTipo() {
 		echo $this->tipo;
 	}

 	public function acceder () {
	 	if (($this->email) && ($this->clave)) {
	 		echo "Acceso Permitido";
	 	}
	 	else {
	 		echo "Acceso No Permitido";
	 	}
	}
} 	

$usuario = new usuario();
echo "Nombre: ".$usuario->nombre;
echo "<br>";
echo "Email: ". $usuario->email;
echo "<br>";
echo "Clave: ";
echo $usuario->getClave();
echo "<br>";
echo "Tipo: ";
echo $usuario->getTipo();
echo "<br>";
$usuario->acceder();
echo "<br>";
$usuario2 = new usuario("Juan", "nerom24@gmail.com", "123123", 1);
echo "Nombre: ".$usuario2->nombre;
echo "<br>";
echo "Email: ". $usuario2->email;
echo "<br>";
echo "Clave: ";
echo $usuario2->getClave();
echo "<br>";
echo "Tipo: ";
echo $usuario2->getTipo();
echo "<br>";
$usuario2->acceder();
?>
