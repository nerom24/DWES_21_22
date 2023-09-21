<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Cuentas</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <!-- Capa de gestión de perfiles -->
      
      <!-- consultar -->
      <?php if (in_array($_SESSION['id_rol'], $GLOBALS['consultar'])):?>
        <li class="nav-item active">
          <a class="nav-link" href="cuentas">Listar <span class="sr-only">(current)</span></a>
        </li>
      <?php endif; ?>

      <!-- crear -->
      <?php if (in_array($_SESSION['id_rol'], $GLOBALS['crear'])):?>
        <li class="nav-item">
          <a class="nav-link" href="#">Añadir</a>
        </li> 
      <?php endif; ?>
      
      <!-- ordenar -->
      <?php if (in_array($_SESSION['id_rol'], $GLOBALS['consultar'])):?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Ordenar
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      <?php endif; ?>

      <!-- imprimir -->
      <?php if (in_array($_SESSION['id_rol'], $GLOBALS['editar'])):?>
        <li class="nav-item">
          <a class="nav-link" href="#">Imprimir PDF</a>
        </li>
      <?php endif; ?>
      
      <!-- exportar csv -->
      <?php if (in_array($_SESSION['id_rol'], $GLOBALS['editar'])):?>
        <li class="nav-item">
          <a class="nav-link" href="#">Exportar CSV</a>
        </li>
      <?php endif; ?>

    </ul>

    <!-- buscar -->
    <?php if (in_array($_SESSION['id_rol'], $GLOBALS['consultar'])):?>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    <?php endif; ?>
  </div>
</nav>