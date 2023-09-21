<?php 

/***
*  @Class: usuario()
*  @Descripción: Permite crear un objeto de la clase usuario
*  @atributos: cUsuario, cEmail, cTipo y cClave
*  @constructor: usuario, email, tipo y clave con valor null por defecto
***/

class usuario {
	private $usuario;
	private $email;
	private $tipo;
	private $clave;

  	public function __construct(
	  	$pUsuario = null, 
	  	$pEmail = null, 
	  	$pTipo = null, 
	  	$pClave = null
  	)
  
  	{
    
    $this->usuario=$pUsuario;
    $this->email=$pEmail;
    $this->tipo=$pTipo;
    $this->clave=$pClave;
  	}

  	/*getters & setters*/

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

class usuarios {

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
    * @nombre: getUsuario()
    * @descripción: devuelve objeto correspodiente al indice dado
    * @param: recibe como parámetro el índice del array de usuarios
    * @return: devuelve el objeto de la clase usuario correspondiente al índice
    **/
    public function getUsuario($pKey){

    	return $this->usuarios[$pKey];
    }

	/** 
	*  @nombre: insertar() 
	*  @descripcion: añade un objeto de la clase usuario en el array usuarios 
	*  @param: $pUsuario - recibe un objeto de la clase usuario
	*  @return: 
	*  
	**/
	public function insertar(usuario $pUsuario) {

		$this->usuarios[]=$pUsuario;
	}	

	/** 
	*  @nombre: loadUsuarios()
	*  @descripcion: carga el array de usuarios con 4 objetos de tipo usuario
	*  @param: 
	*  @return: 
	**/
	public function loadUsuarios() {

		$usuario = new usuario('Nerom24', 'nerom24@gmail.com', 'Administrador', 'mm');
		$this->insertar($usuario);

		$usuario = new usuario('Julia23', 'julia23@gmail.com', 'Editor', 'm122121');
		$this->insertar($usuario);

		$usuario = new usuario('JoseAnto', 'joseantonio@gmail.com', 'Visitante', 'm122121');
		$this->insertar($usuario);

		$usuario = new usuario('Pedro25', 'pedro@gmail.com', 'Editor', '123');
		$this->insertar($usuario);
	}

	/** 
	*  @nombre: valUsuario()
	*  @descripcion: comprueba la existencia del nombre de usuario en el array 
	*  @param: $pUsuario - nombre de usuario
	*  @return: $indice - si encuentra usuario en la tabla devuelve el índice
	*           false   - si no encuentra el nombre de usuario
	**/
	public function valUsuario($pUsuario){

		foreach($this->usuarios as $indice => $usuario){
	        if($usuario->getUsuario() == $pUsuario){
	          return $indice;
        }
      }
      return false;
	}

	/** 
	*  @nombre: valEmail()
	*  @descripcion: valida email
	*  @param: $pUsuario - nombre de usuario
	*  @return: $indice - si encuentra email en la tabla devuelve el índice
	*           false   - si no lo encuentra 
	**/
	public function valEmail($pEmail){

		foreach($this->usuarios as $indice => $usuario){
	        if($usuario->getEmail() == $pEmail){
	          return $indice;
        }
      }
      return false;
	}

	/** 
	*  @nombre: valClave()
	*  @descripcion: valida clave
	*  @param: $pUsuario - nombre de usuario
	*  @return: $indice - si encuentra clave en la tabla devuelve el índice
	*           false   - si no lo encuentra 
	**/
	public function valClave($pClave){

		foreach($this->usuarios as $indice => $usuario){
	        if($usuario->getClave() == $pClave){
	          return $indice;
        }
      }
      return false;
	}

	/** 
	*  @nombre: eliminar()
	*  @descripcion: elimina un elemento de la tabla a partir del índice dado. 
	*  @param: $pIndice - indice del elemento que se desea eliminar del array
	*  @return: 
	**/
	public function eliminar($pIndice) {

		unset($this->usuarios[$pIndice]);
	}
	
	/** 
	*  @nombre: actualizar() 
	*  @descripcion: Actualiza los valores de un elemento del array de usuarios
	*  @param: 
	*  		$pIndice - indice del elemento que se desea actualizar del array
	*  		$pEmail, $pTipo, $pClave. Valores que se desean actualizar.
	*  @return: 
	**/
	public function actualizar($pIndice, usuario $pUsuario) {

		$this->usuarios[$pIndice] = $pUsuario;

	}

	/** 
	*  @nombre: mostrarUsuario
	*  @descripcion: Muestra en una fila los valores de un usuario
	*  @param: $pKey - índice correspondiente al objeto
	*          $pUsuario - objeto de la clase Usuario
	*
	*  @return: 
	**/
	public function mostrarUsuario($pKey, usuario $pUsuario) {

		echo '<tr>';
		
		echo '<td>'.$pUsuario->getUsuario().'</td>';
		echo '<td>'.$pUsuario->getEmail().'</td>';
		echo '<td>'.$pUsuario->getTipo().'</td>';
		echo '<td>'.$pUsuario->getClave().'</td>';
		$this->accionesUsuario($pKey);
		echo '</tr>';
	
	}

	/** 
	* @nombre: mostrarUsuarios()
	* @descripcion: Muestra el array completo de usuarios
	* @param: 
	* @return: 
	**/
	public function mostrarUsuarios() {

		foreach ($this->usuarios as $key => $usuario) {
			$this->mostrarUsuario($key, $usuario);
		}
	}


	/**
	* @nombre: mostrarNumElementos() 
	* @descripcion: muestra los números de elementos del array
	* @param:
	* @return:
	**/
	public function mostrarNumElementos() {

		echo '<tr>';
		echo '<td colspan="5">';
		echo count($this->usuarios);
		echo ' Usuarios';
		echo '</td>';
		echo '</tr>';

	}

	/**
	* @nombre: accionesUsuario()
	* @descripcion: Muestra las acciones de cada usuario
	* @param: $pKey - índice de ese usuario en el array usuarios. Este parámetro se usa 
	*         para enviarlo por método GET en la URL destino.
	* @return: 
	**/
	public function accionesUsuario($pKey) {
		?>
		<td>
		
		<a href="formNuevo.php" title="Añadir"><i class="material-icons">add</i></a>

		<a href="formActualizar.php?id=<?=$pKey; ?>" title="Editar"><i class="material-icons">edit</i></a>

		<a href="formMostrar.php?id=<?=$pKey; ?>" title="Mostrar"><i class="material-icons">visibility</i></a>

		<a href="eliminar.php?id=<?=$pKey; ?>" title="Eliminar"><i class="material-icons">clear</i></a>

		</td>
		<?php

	}

	/**
	* Bloque de funciones para ordenar según criterio
	* Usuario, Email, Tipo y Clave
	**/

	private function ordenarUsuario(usuario $obj1, usuario $obj2)
    {
      return $obj1->getUsuario() > $obj2->getUsuario();
    }

    public function OrdenarPorUsuario(){
      usort($this->usuarios, "usuarios::ordenarUsuario"); 
    }

    private function ordenarEmail(usuario $obj1, usuario $obj2)
    {
      return $obj1->getEmail() > $obj2->getEmail();
    }

    public function OrdenarPorEmail(){
      usort($this->usuarios, "usuarios::ordenarEmail"); 
    }

    private function ordenarTipo(usuario $obj1, usuario $obj2)
    {
      return $obj1->getTipo() > $obj2->getTipo();
    }

    public function OrdenarPorTipo(){
      usort($this->usuarios, "usuarios::ordenarTipo"); 
    }

    private function ordenarClave(usuario $obj1, usuario $obj2)
    {
      return $obj1->getClave() > $obj2->getClave();
    }

    public function OrdenarPorClave(){
      usort($this->usuarios, "usuarios::ordenarClave"); 
    }

    
    /**
    * @nombre: buscar()
    * @descripcion: busca la expresión en el nombre del usuario y selecciona
    * @param: $pExpresion - expresión de búsqueda
    * @return: $seleccion - Es un array que almacena los índices correspondientes a los 
    *          objetos seleccionados
    **/

    public function buscar($pExpresion){
    	
    	$seleccion = array();

    	foreach ($this->usuarios as $key => $value) {

    		if (strstr($value->getUsuario(), $pExpresion)) {

    			$seleccion[] = $key;
    		
    		}

    	}

    	return $seleccion;
    }

}

?>
