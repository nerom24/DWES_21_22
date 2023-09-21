<nav class="navbar navbar-expand-lg navbar-light bg-light">

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item ">
	        <a class="nav-link" href="<?php echo URL; ?>main">Inicio <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item ">
	        <a class="nav-link" href="<?php echo URL; ?>nuevo">Añadir</a>
	      </li>
          <li class="nav-item ">
	        <a class="nav-link" href="<?php echo URL; ?>consulta">Consultar</a>
	      </li>
          <li class="nav-item ">
	        <a class="nav-link" href="<?php echo URL; ?>ayuda">Ayuda</a>
	      </li>
	     
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Ordenar
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="ordenar.php?criterio=idCurso">idCurso</a>
	          <a class="dropdown-item" href="ordenar.php?criterio=nombre">Nombre</a>
	          <a class="dropdown-item" href="ordenar.php?criterio=ciclo">Ciclo</a>
	          <a class="dropdown-item" href="ordenar.php?criterio=nivel">Nivel</a>
	          <div class="dropdown-divider"></div>
	         
	        </div>
	    </li>
	     
	    </ul>
	    <form action="buscar.php" class="form-inline my-2 my-lg-0" method="POST">
	      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" name="expresion" id="inputArt">
	      <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" formaction='buscar.php'>Buscar</button>
	    </form>
	  </div>

</nav>