<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= URL ?>corredores">Corredores</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="<?= URL ?>corredores/nuevo">Nuevo</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ordenar
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?= URL?>corredores/ordenar/1">Id</a></li>
            <li><a class="dropdown-item" href="<?= URL?>corredores/ordenar/2">Nombre</a></li>
            <li><a class="dropdown-item" href="<?= URL?>corredores/ordenar/3">Apellidos</a></li>
            <li><a class="dropdown-item" href="<?= URL?>corredores/ordenar/4">Ciudad</a></li>
            <li><a class="dropdown-item" href="<?= URL?>corredores/ordenar/5">Email</a></li>
            <li><a class="dropdown-item" href="<?= URL?>corredores/ordenar/7">Edad</a></li>
            <li><a class="dropdown-item" href="<?= URL?>corredores/ordenar/10">Categoría</a></li>
            <li><a class="dropdown-item" href="<?= URL?>corredores/ordenar/11">Club</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" method="GET" action="<?= URL ?>corredores/buscar">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="expresion">
        <button class="btn btn-outline-primary" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>