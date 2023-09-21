<?php 
	
	/* 
		Clase Array de objetos 
	*/

	class ArrayObjetosNoticia {

		private $noticias;


		public function __construct() {

			$this->noticias = array();
	    }

        /**
         * setters & getters
         */
        public function getNoticias()
        {
            return $this->noticias;
        }

        public function setNoticias($noticias)
        {
            $this->noticias = $noticias;

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

		$this->noticias[]=$noticia;
    }
    
    /** 
	*  @name: eliminar() 
	*  @description: elimina un objeto de la noticias
	*  @param: $key: recibe el índice del elemento que deseamos eliminar
	*  @return: 
	*  
	**/
	public function eliminar($key) {

		unset($this->noticias[$key]);

		$this->noticias = array_values($this->noticias);

    }

    /** 
	*  @name: actualizar() 
	*  @description: actualiza un elemento de la noticias
	*  @param: 
	*    - $noticia: objeto de la clase noticia con los datos actualizados. 
	*    - $key: recibe el índice del elemento que deseamos eliminar
	*  @return: 
	*  
	**/
    public function actualizar(noticia $noticia, $key) {

    	$this->noticias[$key] = $noticia;
    }

	/** 
	*  @name: leer() 
	*  @description: lee un elemento de la noticias
	*  @param: 
	*    - $key: índice del elemento que se desea leer
	*  @return: objeto de la noticias 
	*  
	**/
	public function leer($key) {

		return $this->noticias[$key];
	}

	/** 
	*  @name: leer() 
	*  @description: lee un elemento de la noticias
	*  @param: 
	*    - $key: índice del elemento que se desea leer
	*  @return: objeto de la noticias 
	*  
	**/
	public function siguienteIdNoticia() {
		$ultimaNoticia = end($this->noticias);
		return $ultimaNoticia->getId() +1;
	}


}
?>