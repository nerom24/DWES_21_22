<?php 
	
	/* 
		Clase Noticia 
	*/

	class noticia {

		private $titulo;
        private $copete;
		private $texto;
        private $autor;
        private $fecha;
        private $imagen;
		private $epigrafe;


		public function __construct() {

			$this->titulo = null;
            $this->copete = null;
			$this->texto = array();
            $this->autor = null;
            $this->fecha = null;
            $this->imagen = null;
			$this->epigrafe = null;
	}

    /**
     * setters & getters
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getCopete()
    {
        return $this->copete;
    }

    public function setCopete($copete)
    {
        $this->copete = $copete;

        return $this;
    }

    public function getTexto()
    {
        return $this->cuerpo;
    }

    public function setTexto($texto)
    {
        $this->texto = $texto;

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

    public function getEpigrafe()
    {
        return $this->epigrafe;
    }

    public function setEpigrafe($epigrafe)
    {
        $this->epigrafe = $epigrafe;

        return $this;
    }

    /*
    * Inserta párrafo en el texto de la noticia
    */
    public function inParrafo($parrafo)
    {
        $this->texto[] = $parrafo;

    }

    /*
    * Muestra todos los párrafos de la noticia.
    */
    public function showTexto() {

        foreach ($this->texto as $parrafo) {
            echo "<p>";
            echo $parrafo;
            echo "</p>"; 
        }
    }

}
?>