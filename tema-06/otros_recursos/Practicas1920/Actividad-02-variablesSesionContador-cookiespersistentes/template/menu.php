
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">Noticias</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item <?= ($archivo_actual == "index.php")? 'active':null ?> ">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item <?= ($archivo_actual == "acercade.php")? 'active':null ?>">
          <a class="nav-link" href="acercade.php">About
          </a>
        </li>
        <li class="nav-item <?= ($archivo_actual == "servicios.php")? 'active':null ?>">
          <a class="nav-link" href="servicios.php">Services
          </a>
        </li>
        <li class="nav-item <?= ($archivo_actual == "eventos.php")? 'active':null ?>">
          <a class="nav-link" href="eventos.php">Events
          </a>
          <li class="nav-item <?= ($archivo_actual == "cerrar.php")? 'active':null ?>">
          <a class="nav-link" href="cerrar.php">Close
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
