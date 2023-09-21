<!-- Navigation -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" role="navigation">
    <div class="container">
        <a class="navbar-brand" href="index.php">Archivos</a>
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
            &#9776;
        </button>
        <div class="collapse navbar-collapse" id="exCollapsingNavbar">
            <ul class="nav navbar-nav">
              <li class="nav-item <?= ($archivo == 'index.php')? ' active':null ?>">
                <a class="nav-link" href="index.php">Inicio
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item <?= ($archivo == 'crear.php')? ' active':null ?>">
                <a class="nav-link" href="crear.php">Crear</a>
              </li>
              <li class="nav-item <?= ($archivo == 'mostrar.php')? ' active':null ?>">
                <a class="nav-link" href="mostrar.php">Mostrar</a>
              </li>
              <li class="nav-item <?= ($archivo == 'eliminar.php')? ' active':null ?>">
                <a class="nav-link" href="eliminar.php">Eliminar</a>
              </li>
              <li class="nav-item <?= ($archivo == 'metadatos.php')? ' active':null ?>">
                <a class="nav-link" href="metadatos.php">Metadatos</a>
              </li>  
            </ul>

        </div>
    </div>
</nav>
