<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('articulos') }}">Artículos</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('articulos.create') }}">Nuevo</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ordenar
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href={{route('articulos','id' )}}>Id</a></li>
                        <li><a class="dropdown-item" href={{route('articulos','descripcion' )}}>Descripción</a></li>
                        <li><a class="dropdown-item" href={{route('articulos','modelo' )}}>Modelo</a></li>
                        <li><a class="dropdown-item" href={{route('articulos','categoria_id' )}}>Categoria</a></li>
                        <li><a class="dropdown-item" href={{route('articulos','unidades' )}}>Unidades</a></li>
                        <li><a class="dropdown-item" href={{route('articulos','precio' )}}>Precio</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Pdf</a>
                </li>
            </ul>
            <form class="d-flex" action={{route('articulos.filter')}} method="GET">
                <input class="form-control me-2" type="text" placeholder="buscar" aria-label="Search" name="search">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>