<?php 

	class Noticia{

		private $titulo;
		private $fecha; 
		private $autor;
		private $tematica;
		private $contenido; 
		private $imagen; 
		
		function __construct(
			$titulo,
			$fecha = null, 
			$autor = null,
			$tematica = null,
			$contenido = null, 
			$imagen = null ){
			
			$this->titulo = $titulo;
			$this->fecha = $fecha;
			$this->autor = $autor;
			$this->tematica = $tematica;
			$this->contenido = $contenido;
			$this->imagen = $imagen;
		}

		public function __SET($k, $v) {
			$this->$k = $v;
		}

		public function __GET($k){
			return $this->$k;
		}
	}
 ?>