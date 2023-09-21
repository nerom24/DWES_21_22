<!-- Navigation -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" role="navigation">
    <div class="container">
        <a class="navbar-brand" href="<?= URL ?>index">GESBANK MVC</a>
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
            &#9776;
        </button>
        <div class="collapse navbar-collapse" id="exCollapsingNavbar">
            <ul class="nav navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="<?= URL ?>index">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="<?= URL ?>clientes">Clientes
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="<?= URL ?>cuentas">Cuentas
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="<?= URL ?>movimientos">Movimientos
                  <span class="sr-only">(current)</span>
                </a>
              </li>

              <!-- Gestión de usuarios: Sólo ADMIN -->
              <?php if ($_SESSION['id_rol'] == 1):?>
                <li class="nav-item active">
                  <a class="nav-link" href="<?= URL ?>usuarios">Usuarios
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
              <?php endif;?>

            </ul>

        </div>
        <div class="collapse navbar-collapse" id="exCollapsingNavbar">
           
        <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?= $_SESSION['name_user'] ?>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="logout">Logout</a>
                <a class="dropdown-item" href="edit_user">Modificar Perfil</a>
                <a class="dropdown-item" href="edit_password">Cambiar Password</a>
                <a class="dropdown-item" href="delete_user">Eliminar Perfil</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><?= $_SESSION['name_rol'] ?></a>
              </div>
            </li>

            </ul>
        </div>
      </div>
    </div>
</nav>
