<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <title>Actividad 3.3.4</title>
  </head>
  <body>
    <div class="container">
      <!-- Cabezara -->
      

      <legend>
        Tabla Libros
      </legend>

      <!-- Incluimos Partials menu -->
      <?php include("partials/menu.php") ?>

      <table class="table">
        <thead>
          <tr>
            <?php 
              $claves = array_keys($libros[0]);
              $claves[] ="Acciones";
              foreach ($claves as $clave): ?>
                <th><?= $clave ?></th>
            <?php endforeach; ?>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($libros as $key => $libro): ?>
            <tr>
            <!-- Muestro los datos del libro -->
            <?php foreach ($libro as $campo): ?>
              <td><?= $campo ?></td>
            <?php endforeach; ?>
            
            <!-- Muestro los botones de acción -->
            <td>
              <a href="eliminar.php?indice=<?=$key?>" Title="Eliminar"><i class="bi bi-trash-fill"></i></a>
              <a href="editar.php?indice=<?=$key?>" Title="Modificar"><i class="bi bi-pencil-square"></i></a>
            </td>
            <!-- Fin botones de acción -->
            
           </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      

      <footer>
        <hr>
        <p>&copy; Juan Carlos - DWES - 2º DAW - Curso 21/22</p>
      </footer>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>