<?php 
	
	class plantilla {

		private $titulo;
		private $cabecera;
		private $subcabecera;
		private $pie;

		public function __construct(

			$titulo = null,
			$cabecera= null,
			$subcabecera = null,
			$pie = null				) {

			$this->titulo = $titulo;
			$this->cabecera = $cabecera;
			$this->subcabecera = $subcabecera;
			$this->pie = $pie;

		}
    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     *
     * @return self
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCabecera()
    {
        return $this->cabecera;
    }

    /**
     * @param mixed $cabecera
     *
     * @return self
     */
    public function setCabecera($cabecera)
    {
        $this->cabecera = $cabecera;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubcabecera()
    {
        return $this->subcabecera;
    }

    /**
     * @param mixed $subcabecera
     *
     * @return self
     */
    public function setSubcabecera($subcabecera)
    {
        $this->subcabecera = $subcabecera;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPie()
    {
        return $this->pie;
    }

    /**
     * @param mixed $pie
     *
     * @return self
     */
    public function setPie($pie)
    {
        $this->pie = $pie;

        return $this;
    }

    public function showHead() {

    ?>

    <head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	
	<title><?= $this->titulo ?></title>

	</head>

	<?php 

    }

    public function showCabecera () {

    ?>

	<header>
		<hgroup class="jumbotron text-center">
			<h1><?= $this->cabecera ?></h1>
            <h3><?= $this->subcabecera ?></h2>
		</hgroup>
	</header>


    <?php 

    }

    public function showPie() {

    ?>

    <footer>
		<hr>
		<p>&copy; <?= $this->pie ?></p>
	</footer>

    <?php 
    
    }

    static public function scriptVarios () {

    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jquery/jquery-3.2.1.min.js"></script>
    <script src="popper/popper.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <?php 


    }
}
?>
