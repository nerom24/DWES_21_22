<!-- Menú responsivo -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><i class="material-icons">theaters</i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active"> <!--enlace a la página principal-->
                <a class="nav-link" href="index.php">Series <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item"><!-- form_nuevo.php en este caso es un CONTROLADOR que se llama igual que la vista -->
                <a class="nav-link" href="form_nuevo.php">Nuevo</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Ordenar
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown"> <!-- descripcion,... en minúscula y sin tilde -->
                <a class="dropdown-item" href="ordenar.php?criterio=titulo">Título</a>
                <a class="dropdown-item" href="ordenar.php?criterio=director">Director</a>
                <a class="dropdown-item" href="ordenar.php?criterio=nacionalidad">Nacionalidad</a>
                <a class="dropdown-item" href="ordenar.php?criterio=año">Año</a>
                
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" method="GET" action="buscar.php">
            <input name="expresion" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
        </form>
    </div>
</nav>