<?php 
	
	/* 
		Clase Noticia 
	*/

	class Noticia {

        private $id;
        private $titulo;
        private $extracto;
		private $contenido;
        private $autor;
        private $fecha;
        private $imagen;
        private $seccion;
		private $etiquetas;


		public function __construct(

                $id = null,
                $titulo = null,
                $extracto  = null,
                $contenido  = array(),
                $autor = null,
                $fecha = null,
                $imagen = null,
                $seccion = null,
                $etiquetas = array()
        ) {

            $this->id = $id;
            $this->titulo = $titulo;
            $this->extracto = $extracto;
			$this->contenido = $contenido;
            $this->autor = $autor;
            $this->fecha = $fecha;
            $this->imagen = $imagen;
            $this->seccion = $seccion;
            $this->etiquetas = $etiquetas;
    }
    
    static public function secciones() {

        $secciones = [
            "Nacional",
            "Autonomías",
            "Internacional",
            "Deportes",
            "Política",
            "Tecnologías",
            "Viajes"
        ];
        return $secciones;
    }

    static public function etiquetas() {

        $etiquetas = [
            "Opinión",
            "Madrid",
            "Cataluña",
            "País Vasco",
            "Real Madrid",
            "Gobierno",
            "Barcelona",
            "Betis",
            "PHP",
            "Programación"
        ];
        return $etiquetas;
    }

    static public function cabecera() {

        $cabecera = [
            "id",
            "Título",
            "Autor",
            "Fecha",
            "Sección",
            "Etiquetas",
            "Acciones"
        ];

        return $cabecera;


    }

    /**
     * setters & getters
     */
    
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getExtracto()
    {
        return $this->extracto;
    }

    public function setExtracto($extracto)
    {
        $this->extracto = $extracto;

        return $this;
    }

    public function getContenido()
    {
        return $this->contenido;
    }

    public function setContenido($contenido)
    {
        $this->contenido = $contenido;

        return $this;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    public function getSeccion()
    {
        return $this->seccion;
    }

    public function setSeccion($seccion)
    {
        $this->seccion = $seccion;

        return $this;
    }

    public function getEtiquetas()
    {
        return $this->etiquetas;
    }

    public function setEtiquetas($etiquetas)
    {
        $this->etiquetas = $etiquetas;

        return $this;
    }

    /*
    * Devuelve las propiedades de un objeto
    */ 
    public function getPropiedadesObjeto() {

        return get_object_vars($this);
    }

}
?>