<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">

    @if (Auth::user()->hasAnyRole(['admin']))
      
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('movimientos.create', $cuenta->id) }}">Nuevo <span class="sr-only">(current)</span></a>
      </li>

    @else

      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true" title="Acceso no permitido">Nuevo</a>
      </li>

    @endif


      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Ordenar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Filtrar</a>
      </li> -->
    </ul>
    <form class="form-inline mt-2 mt-md-0" action="{{route('movimientos.index', $cuenta->id)}}" method="GET" >
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search">
      <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>