<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= URL?>movimientos/cuenta/<?= $this->id ?>">Movimientos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= URL?>movimientos/nuevo/<?= $this->cuentas->id ?>">Nuevo</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ordenar
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?= URL?>movimientos/ordenar/<?= $this->cuentas->id ?>/1">Id</a></li>
            <li><a class="dropdown-item disabled" href="<?= URL?>movimientos/ordenar/<?= $this->cuentas->id ?>/2">Cuenta</a></li>
            <li><a class="dropdown-item" href="<?= URL?>movimientos/ordenar/<?= $this->cuentas->id ?>/3">Fecha</a></li>
            <li><a class="dropdown-item" href="<?= URL?>movimientos/ordenar/<?= $this->cuentas->id ?>/4">Concepto</a></li>
            <li><a class="dropdown-item" href="<?= URL?>movimientos/ordenar/<?= $this->cuentas->id ?>/5">Tipo</a></li>
            <li><a class="dropdown-item" href="<?= URL?>movimientos/ordenar/<?= $this->cuentas->id ?>/6">Cantidad</a></li>
            <li><a class="dropdown-item" href="<?= URL?>movimientos/ordenar/<?= $this->cuentas->id ?>/7">Saldo</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" method="GET" action="<?= URL?>movimientos/buscar/">
        <input type="hidden" name="cuenta" value="<?= $this->cuentas->id ?>">
        <input class="form-control me-2" type="buscar" placeholder="Buscar" aria-label="Buscar" name="busqueda" value="<?= (isset($this->busqueda) ? $this->busqueda : '') ?>">
        <button class="btn btn-outline-secondary" type="submit" >Buscar</button>
      </form>
    </div>
  </div>
</nav>