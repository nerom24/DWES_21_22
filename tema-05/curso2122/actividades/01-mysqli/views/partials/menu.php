<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Clientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="nuevo.php">Nuevo</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ordenar
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="ordenar.php?criterio=id">Id</a></li>
            <li><a class="dropdown-item" href="ordenar.php?criterio=nombre">Nombre</a></li>
            <li><a class="dropdown-item" href="ordenar.php?criterio=email">Email</a></li>
            <li><a class="dropdown-item" href="ordenar.php?criterio=poblacion">Población</a></li>
            <li><a class="dropdown-item" href="ordenar.php?criterio=fechaNacimiento">Fecha Nacimiento</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" method="GET" action="buscar.php">
        <input class="form-control me-2" type="buscar" placeholder="Buscar" aria-label="Buscar" name="busqueda">
        <button class="btn btn-outline-secondary" type="submit" >Buscar</button>
      </form>
    </div>
  </div>
</nav>