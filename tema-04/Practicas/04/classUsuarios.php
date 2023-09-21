<?php 

/***
*  @Class: usuario()
*  @Descripción: Permite crear un objeto de la clase usuario
*  @atributos: cUsuario, cEmail, cTipo y cClave
*  @constructor: usuario, email, tipo y clave con valor null por defecto
***/

class Usuario {
	
	private $id;
	private $usuario;
	private $email;
	private $tipo;
	private $clave;
	
  	public function __construct(
	  	
	  	$id = null,
	  	$usuario = null, 
	  	$email = null, 
	  	$tipo = null, 
	  	$clave = null
  	)
  
  	{
    
    $this->id=$id;
    $this->usuario=$usuario;
    $this->email=$email;
    $this->tipo=$tipo;
    $this->clave=$clave;
  	}

  	/*getters & setters*/

    public function getId()
    {
        return $this->id;
    }

    public function setIdo($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getClave()
    {
        return $this->clave;
    }

    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }
}
 
  
/***
*  @Class: usuarios()
*  @Descripción: Permite crear un array de objetos de la clase usuario
*  @atributos: usuarios
*  @constructor: inicializa el atributo usuarios a array() vacío.
***/

class Usuarios {

	private $usuarios;

	public function __construct() {

		$this->usuarios = array();
	}

	public function getUsuarios()
    {
        return $this->usuarios;
    }

    public function setUsuarios($usuarios)
    {
        $this->usuarios = $usuarios;

        return $this;
    }

     /**
    * @nombre: getArrayTiposUsuarios()
    * @descripción: devuelve un array con los tipos de usuarios
    * @param: 
    * @return: array con los tipos de usuarios
    **/
    public function getArrayTiposUsuarios(){

    	return (array("Administrador", "Editor", "Colaborador", 
    		"Visitante", "Consultor"));
    }

    /**
    * @nombre: getUsuario()
    * @descripción: devuelve objeto correspodiente al indice dado
    * @param: recibe como parámetro el índice del array de usuarios
    * @return: devuelve el objeto de la clase usuario correspondiente al índice
    **/
    public function getUsuario($key){

    	return $this->usuarios[$key];
    }

	/** 
	*  @nombre: insertar() 
	*  @descripcion: añade un objeto de la clase usuario en el array usuarios 
	*  @param: $pUsuario - recibe un objeto de la clase usuario
	*  @return: 
	*  
	**/
	public function insertar(usuario $usuario) {

		$this->usuarios[]=$usuario;
	}	

	/** 
	*  @nombre: loadUsuarios()
	*  @descripcion: carga el array de usuarios con 4 objetos de tipo usuario
	*  @param: 
	*  @return: 
	**/
	public function loadUsuarios() {

		$usuario = new usuario(0, 'Nerom24', 'nerom24@gmail.com', 'Administrador', 'm122121');
		$this->insertar($usuario);

		$usuario = new usuario(1, 'Julia23', 'julia23@gmail.com', 'Editor', 'm122121');
		$this->insertar($usuario);

		$usuario = new usuario(2, 'JoseAnto', 'joseantonio@gmail.com', 'Visitante', 'm122121');
		$this->insertar($usuario);

		$usuario = new usuario(3, 'Pedro25', 'pedro@gmail.com', 'Editor', 'm12321');
		$this->insertar($usuario);
	
	}

	/** 
	*  @nombre: eliminar()
	*  @descripcion: elimina un elemento de la tabla a partir del índice dado. 
	*  @param: $pIndice - indice del elemento que se desea eliminar del array
	*  @return: 
	**/
	public function eliminar($key) {

		unset($this->usuarios[$key]);
		$this->usuarios = array_values($this->