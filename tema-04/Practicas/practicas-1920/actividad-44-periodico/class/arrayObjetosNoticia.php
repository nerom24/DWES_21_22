<?php 
	
	/* 
		Clase Array de objetos 
	*/

	class ArrayObjetos {

		private $tabla;


		public function __construct() {

			$this->tabla = array();
	    }

        /**
         * setters & getters
         */
        public function getTabla()
        {
            return $this->tabla;
        }

        public function setTabla($tabla)
        {
            $this->tabla = $tabla;

            return $this;
        }

    /** 
	*  @nombre: insertar() 
	*  @descripcion: añade un objeto de la clase noticia en el array de noticias 
	*  @param: $noticia: recibe un objeto de la clase noticia
	*  @return: 
	*  
	**/
	public function insertar(noticia $noticia) {

		$this->tabla[]=$noticia;
    }
    
    /** 
	*  @name: eliminar() 
	*  @description: elimina un objeto de la tabla
	*  @param: $key: recibe el índice del elemento que deseamos eliminar
	*  @return: 
	*  
	**/
	public function eliminar($key) {

		unset($this->tabla[$key]);

		$this->tabla = array_values($this->tabla);

    }

    /** 
	*  @name: actualizar() 
	*  @description: actualiza un elemento de la tabla
	*  @param: 
	*    - $noticia: objeto de la clase noticia con los datos actualizados. 
	*    - $key: recibe el índice del elemento que deseamos eliminar
	*  @return: 
	*  
	**/
    public function actualizar(noticia $noticia, $key) {

    	$this->tabla[$key] = $noticia;
    }

	/** 
	*  @name: leer() 
	*  @description: lee un elemento de la tabla
	*  @param: 
	*    - $key: índice del elemento que se desea leer
	*  @return: objeto de la tabla 
	*  
	**/
	public function leer($key) {

		return $this->tabla[$key];
	}


}
?>