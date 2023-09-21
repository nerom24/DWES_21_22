<?php 
	
	class plantilla {

		private $subCabecera;

    CONST TITULO = "Control de Sesiones de Usuarios";
		CONST CABECERA = "Control Sesiones Usuarios";
		CONST PIE = "Juan Carlos - 2DAW 2018/2019";

		public function __construct($subCabecera = null) {

			$this->subCabecera = $subCabecera;
			
		}
    

    /**
     * @return mixed
     */
    public function getSubcabecera()
    {
        return $this->subcabecera;
    }

    /**
     * @param mixed $subcabecera
     *
     * @return self
     */
    public function setSubcabecera($subCabecera)
    {
        $this->subCabecera = $subCabecera;

        return $this;
    }


  #<head> 
  public function head() {
    
    ?>
        <!-- Cabecera Plantilla -->
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            
            <!-- Google Materail Icons -->
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
            rel="stylesheet">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="template/bootstrap/css/bootstrap.min.css">
            <!-- Personal CSS -->
            <link rel="stylesheet" href="template/estilos.css" TYPE="text/css">
            
            <title><?= self::TITULO ?></title>
        </head>
    
    <?php 
  }

  #<header>
  public function cabecera () {

  ?>

	<header>
		<hgroup class="jumbotron text-center">
			<h1><?= self::CABECERA ?></h1>
      <h3><?= $this->subCabecera ?></h2>
		</hgroup>
	</header>


  <?php 

  }

  #<nav>
  public function menu (usuario $usuario) {

  ?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
        </li>

        <?php if($usuario->getIdPerfil() == 1): ?>
          <!-- Permite añadir sólo si es Administrador -->
          <li class="nav-item ">
            <a class="nav-link" href="formNuevo.php" disabled>Añadir</a>
          </li>
        <?php endif; ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Ordenar 
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="?criterio=username">username</a>
            <a class="dropdown-item" href="?criterio=nombre">Nombre</a>
            <a class="dropdown-item" href="?criterio=apellidos">Apellidos</a>
            <a class="dropdown-item" href="?ordenar.php?criterio=idPerfil">Perfil</a>
            <a class="dropdown-item" href="?ordenar.php?criterio=ultimoAcceso">Fecha</a>
          </div>
        </li>
       
      </ul>
      <form action="buscar.php" class="form-inline my-2 my-lg-0" method="POST">
        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" name="expresion" id="inputArt" required>
        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Buscar</button>
      </form>
      <ul class="navbar-nav ">
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?=$usuario->getUsername() ?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="logout.php">Logout</a>
            <a class="dropdown-item" href="#">Modificar Perfil</a>
          </div>
        </li>
       
      </ul>

    </div>
  </nav>
  <?php 
  }

  #<footer>
  public function pie() {

  ?>

  <footer>
	<hr>
	<p>&copy; <?= self::PIE ?> </p>
 </footer>

  <?php 
  
  }

  static public function scriptVarios () {

  ?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="template/jquery/jquery-3.2.1.min.js"></script>
  <script src="template/popper/popper.js"></script>
  <script src="template/bootstrap/js/bootstrap.min.js"></script>

  <?php 

  }



  public function formNuevoUsuario (Usuario $usuario, $perfiles) {

  ?>
  <section>   
      <form method="POST">
      <legend>Añadir Nuevo Usuario</legend>

      <div class="form-group">
          <label for="">Nombre</label>
          <input type="text" name="nombre" class="form-control" required="required" title="Nombre" value ="<?=$usuario->getNombre()?>" autofocus>
      </div>

      <div class="form-group">
          <label for="">Apellidos</label>
          <input type="text" name="apellidos" class="form-control" required="required" title="Apellidos" value ="<?=$usuario->getApellidos()?>">
      </div>

      <div class="form-group">
          <label for="">URL</label>
          <input type="URL" name="url" class="form-control" required="required" title="URL" value ="<?=$usuario->getUrl()?>">
      </div>

      <div class="form-group">
          <label for="">Edad</label>
          <input type="number" name="edad" class="form-control" required="required" title="Edad" value ="<?=$usuario->getEdad()?>">
      </div>

      <div class="form-group">
      <label for="tipo">Perfil Usuario:</label>
      <select class="form-control" name="idPerfil">
        <?php foreach ($perfiles as $key => $perfil): ?>

          <option value="<?=$key ?>"
          <?= ($usuario->getIdPerfil() == $key) ? 'selected': null;  ?>
          >
          <?=$perfil ?></option>

        <?php endforeach; ?> 

      </select>
    </div>

       <div class="form-group">
          <label for="">Username</label>
          <input type="text" name="userName" class="form-control" required="required" title="Nombre Usuario" value ="<?=$usuario->getUsername()?>">
      </div>

      <div class="form-group">
          <label for="">Email</label>
          <input type="email" name="email" class="form-control" required="required" title="Email" value ="<?=$usuario->getEmail()?>">
      </div>

      <div class="form-group">
          <label for="">Password</label>
          <input type="password" name="pass1" class="form-control" required="required" title="Password" value ="<?=$usuario->getPass()?>">
      </div>

      <div class="form-group">
          <label for="">Repita Password</label>
          <input type="password" name="pass2" class="form-control" required="required" title="Password" >
      </div>

      <a href="index.php" class="btn btn-secondary" role="button" aria-pressed="true">Cancelar</a>

      <button type="reset" class="btn btn-secondary">Reset</button>
              
      <button type="submit" class="btn btn-primary" formaction="nuevo.php">Añadir</button>

      </form>
  </section>
  
  <?php 
  
  }

    function formEditarUsuario ($key, usuario $usuario, $tiposUsuarios) {

    ?>
    <section>   
    <form method="POST">
    <legend>Añadir Usuario</legend>

    <div class="form-group">
      <label for="">Id</label>
      <input type="text" name="id" id="inputId" class="form-control" required="required" title="Id Usuario"  value =

      "<?=$usuario->getId()?>" 
      autofocus
      >
    </div>
    <div class="form-group">
      <label for="">Usuario</label>
      <input type="text" name="usuario" id="inputUsuario" class="form-control" required="required" title="Nombre Usuario"  value =

      "<?=$usuario->getUsuario()?>" 

      >
    </div>

    <div class="form-group">
      <label for="">Email</label>
      <input type="email" name="email" id="inputEmail" class="form-control" required="required" title="Email" placeholder="name@example.com" value=
      "<?=$usuario->getEmail()?>">
    </div>

    <div class="form-group">
      <label for="tipo">Tipo Usuario:</label>
      <select class="form-control" name="tipo">
        <?php foreach ($tiposUsuarios as $tipo): ?>

          <option value="<?=$tipo ?>"
          <?= ($usuario->getTipo() == $tipo) ? 'selected': null;  ?>
          ><?=$tipo ?></option>

        <?php endforeach; ?> 

      </select>
    </div>

    <div class="form-group">
      <label for="clave">Password:</label>
      <input type="password" class="form-control" name="clave" required="required" value="<?=$usuario->getClave() ?>

      ">
    </div>
   
   <!--  botones de accion --> 

   <a href="index.php" class="btn btn-secondary" role="button" aria-pressed="true">Cancelar</a>

   <button type="reset" class="btn btn-secondary">Recuperar</button>

   <button type="submit" class="btn btn-primary" formaction="editarUsuario.php?key=<?=$key; ?>">Actualizar</button>
  </form>
  </section>
  
  <?php 
  
  }

  function formMostrarUsuario (usuario $usuario) {

    ?>
    <section>   
    <form method="POST">
    <legend>Añadir Usuario</legend>

    <div class="form-group">
      <label for="">Id</label>
      <input type="text" name="id" id="inputId" class="form-control" required="required" title="Id Usuario"  value =

      "<?=$usuario->getId()?>" 
      autofocus disabled
      >
    </div>
    <div class="form-group">
      <label for="">Usuario</label>
      <input type="text" name="usuario" id="inputUsuario" class="form-control" required="required" title="Nombre Usuario"  value =

      "<?=$usuario->getUsuario()?>" 
      disabled
      >
    </div>

    <div class="form-group">
      <label for="">Email</label>
      <input type="email" name="email" id="inputEmail" class="form-control" required="required" title="Email" placeholder="name@example.com" value=
      "<?=$usuario->getEmail()?>" disabled>
    </div>

    <div class="form-group">
      <label for="">Tipo Usuario</label>
      <input type="text" name="tipo" id="inputTipo" class="form-control" required="required" title="Email" placeholder="name@example.com" value=
      "<?=$usuario->getTipo()?>" disabled>
    </div>

    <div class="form-group">
      <label for="clave">Password:</label>
      <input type="password" class="form-control" name="clave" required="required" value="<?=$usuario->getClave() ?>

      "disabled>
    </div>
   
   <!--  botones de accion --> 

   <a href="index.php" class="btn btn-secondary" role="button" aria-pressed="true">Volver</a>
  </form>
  </section>
  
  <?php 
  
  }

  #Página principal de la plantilla - index
  public function index(usuarios $usuarios) {

  ?>

  <!DOCTYPE html>
  <html lang="es">
  <?=$this->head();?>
  <body>
  <div class="container">
      <?=$this->cabecera();?>
      <!-- Especificar main-menu() -->
      <?=$this->menu();?>
      <!-- Muestra el contenido de la página -->
      <section> 
        <table class="table table-hover">
            <thead>
                <!-- Muestra la cabecera de la tabla cursos -->
                <?php $usuarios->cabTablaUsuarios(); ?>
            </thead>
            <tbody>
                <?php
                    #Muestra todos los cursos
                    $usuarios->mostrarUsuarios();
                    #Mostrar número de elementos
                    $usuarios->mostrarNumElementos();
                ?>
            </tbody>
        </table>
      </section>
      <?=$this->pie();?>
  </div>
  </div>
  <?=self::scriptVarios();?>
  </body>
  </html>

  <?php   
  
  }

    public function mostrarErrores($errores) {

    ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>ERRORES!</strong> Debe corregir los errores encontrados en el formulario.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        <hr>
        <ol>
        <?php foreach ($errores as $key => $value): ?>
          <li> <?=$value; ?> </li>
        <?php endforeach; ?>
        </ol>
      </div>

    <?php   
    
    } 

    public function formLogin($email, $pass) {

    ?>
    
    <form method="POST">
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required 
        value = "<?=$email ?>">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required
        value = "<?=$pass ?>">
      </div>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button type="reset" class="btn btn-secondary">Reset</button>
      
      <a href="formRegistrar.php" class="btn btn-secondary" role="button" aria-pressed="true">Registrar</a>

      <button type="submit" class="btn btn-primary" formaction="validar.php">Login</button>
    </form>

  
  <?php 
  
  }

   public function formRegistroUsuario (Usuario $usuario) {

  ?>
  <section>   
      <form method="POST">
      <legend>Añadir Nuevo Usuario</legend>

      <div class="form-group">
          <label for="">Nombre</label>
          <input type="text" name="nombre" class="form-control" required="required" title="Nombre" value ="<?=$usuario->getNombre()?>" autofocus>
      </div>

      <div class="form-group">
          <label for="">Apellidos</label>
          <input type="text" name="apellidos" class="form-control" required="required" title="Apellidos" value ="<?=$usuario->getApellidos()?>">
      </div>

      <div class="form-group">
          <label for="">URL</label>
          <input type="URL" name="url" class="form-control" required="required" title="URL" value ="<?=$usuario->getUrl()?>">
      </div>

      <div class="form-group">
          <label for="">Edad</label>
          <input type="number" name="edad" class="form-control" required="required" title="Edad" value ="<?=$usuario->getEdad()?>">
      </div>

      <input type="hidden" name="idPerfil" value="3">

       <div class="form-group">
          <label for="">Username</label>
          <input type="text" name="userName" class="form-control" required="required" title="Nombre Usuario" value ="<?=$usuario->getUsername()?>">
      </div>

      <div class="form-group">
          <label for="">Email</label>
          <input type="email" name="email" class="form-control" required="required" title="Email" value ="<?=$usuario->getEmail()?>">
      </div>

      <div class="form-group">
          <label for="">Password</label>
          <input type="password" name="pass1" class="form-control" required="required" title="Password" value ="<?=$usuario->getPass()?>">
      </div>

      <div class="form-group">
          <label for="">Repita Password</label>
          <input type="password" name="pass2" class="form-control" required="required" title="Password" >
      </div>

      <a href="index.php" class="btn btn-secondary" role="button" aria-pressed="true">Cancelar</a>

      <button type="reset" class="btn btn-secondary">Reset</button>
              
      <button type="submit" class="btn btn-primary" formaction="registrar.php">Registrar</button>

      </form>
  </section>
  
  <?php 
  
  }


}
?>
