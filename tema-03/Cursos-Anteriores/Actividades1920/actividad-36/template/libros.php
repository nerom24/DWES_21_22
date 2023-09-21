<!doctype html>
<html lang="es">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">

    <!-- Google Materail Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
		rel="stylesheet">
  </head>
  
  <div class="container">
      <header>
          <hgroup>
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-3">Actividad 36 - Tema 3 PHP</h1>
                <p class="lead">Gestión Tabla Libros</p>
                <hr class="my-2">
              </div>
            </div>
          </hgroup>
      </header>
      <nav>
      <!-- Especificar main-menu() -->
      </nav>
      <section>
        <article>
        <!-- Especificar Contenido -->
        <table class="table">
        <h4 class="display-7">Tabla Libros</h4>
          <thead>
            
            <tr>
            <!-- Imprimo los índices secundarios de la tabla -->

            <?php foreach ($cabecera as $atributo): ?>
              <th><?=$atributo?></th>
            <?php endforeach;?>
            <th>Acciones</th>
            </tr>

          </thead>
          <tbody>
            <!-- Muestro contenido de la tabla -->
            <?php foreach ($tabla as $key => $libro): ?>
              <tr>
              <?php foreach ($libro as $valor): ?>
                <td><?=$valor?></td>
              <?php endforeach;?>
              <!-- Añadir Acciones disponibles -->
              <td>
                <a href="eliminar.php?indice=<?=$key; ?>" title="Eliminar"><i class="material-icons">delete</i></a>
                <a href="#" title="Actualizar"><i class="material-icons">edit</i></a>
              </td>
              </tr>
            <?php endforeach;?>
              
          </tbody>
        </table>
        </article>
      </section>
      <footer>
        <hr>
        <p>&copy; Juan Carlos - DWES - 2º DAW - Curso 19/20</p>
      </footer>
  </div>
  
  
  <body>

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jquery-341/jquery-3.4.1.js" ></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap4/js/bootstrap.min.js"></script>
  </body>
</html>