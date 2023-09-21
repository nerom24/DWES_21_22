<nav class="navbar navbar-expand-lg navbar-light bg-light">
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Libros <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="form_nuevo.php">Nuevo</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ordenar
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="ordenar.php?criterio=Titulo">Título</a>
          <a class="dropdown-item" href="ordenar.php?criterio=Autor">Autor</a>
          <a class="dropdown-item" href="ordenar.php?criterio=Editorial">Editorial</a>
          <a class="dropdown-item" href="ordenar.php?criterio=Genero">Género</a>
          <a class="dropdown-item" href="ordenar.php?criterio=Precio">Precio</a>
          
        </div>
      </li>
   
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>