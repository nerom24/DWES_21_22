<?php 
	
	/* 
		Clase Página 
	*/

	class pagina {

		private $titulo;
		private $cuerpo;
		private $pie;


		public function __construct(

            $titulo = null,
            $cuerpo = array(),
            $pie = null

        ) {

			$this->titulo = $titulo;
			$this->cuerpo = $cuerpo;
			$this->pie = $pie;
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

    public function getCuerpo()
    {
        return $this->cuerpo;
    }

    public function setCuerpo($parrafos)
    {
        $this->cuerpo = $parrafos;
    }

    public function inParrafo($parrafo)
    {
        $this->cuerpo[] = $parrafo;

    }

    public function showCuerpo() {

    	foreach ($this->cuerpo as $parrafo) {
   			echo "<p>";
   			echo $parrafo;
   			echo "</p>"; 
    	}
    }

    public function getPie()
    {
        return $this->pie;
    }


    public function setPie($pie)
    {
        $this->pie = $pie;

        return $this;
    }
}
?>