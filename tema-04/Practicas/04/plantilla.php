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

   // <head>
function headPlantilla() {
    
    ?>
        <!-- Cabecera Plantilla -->
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            
            <!-- Google Materail Icons -->
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
            rel="stylesheet">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
            <!-- Personal CSS -->
            <link rel="stylesheet" href="estilos.css" TYPE="text/css">
            
            <title>Gestión Usuarios POO</title>
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

    //<nav> Menú

public function menuPlantilla () {

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="formNuevoUsuario.php">Añadir</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ordenar 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="ordenar.php?criterio=Usuario">Usuario</a>
          <a class="dropdown-item" href="ordenar.php?criterio=Email">Email</a>
          <a class="dropdown-item" href="ordenar.php?criterio=Tipo">Tipo</a>
          <a class="dropdown-item" href="ordenar.php?criterio=Clave">Clave</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
     
    </ul>
    <form action="buscar.php" class="form-inline my-2 my-lg-0" method="POST">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" name="expresion" id="inpu