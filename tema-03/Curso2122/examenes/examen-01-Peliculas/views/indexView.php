<!doctype html>
<html lang="es">
  <head>
    <!-- Incluimos HEAD -->
    <?php include("partials/head.php") ?>
    <title>Home - CRUD Tabla Películas</title>
  </head>
  
  <body>
    <div class="container">
      
      <!-- Cabecera -->
      <?php include("partials/cabecera.php"); ?>
  
      <legend>
        Tabla Películas
      </legend>

      <!-- Incluimos Partials menu -->
      <?php include("partials/menu.php") ?>

      <table class="table">
        <thead>
          <tr>
            <?php foreach (getEncabezados() as $columna): ?>
                <th><?= $columna ?></th>
            <?php endforeach; ?>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($peliculas as $indice => $pelicula): ?>
            <tr>
            <!-- Muestro los datos del libro -->
            <?php foreach ($pelicula as $campo): ?>
              <td>
                <?= (is_array($campo)? implode(', ', listaGeneros($generos, $campo)): $campo) ?>
              </td>
            <?php endforeach; ?>
            
            <!-- Muestro los botones de acción -->
            <td>
              <a href="eliminar.php?indice=<?=$indice?>" Title="Eliminar"><i class="bi bi-trash-fill"></i></a>
              <a href="editar.php?indice=<?=$indice?>" Title="Modificar"><i class="bi bi-pencil-square"></i></a>
            </td>
            <!-- Fin botones de acción -->
            
           </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      
      <!-- Incluimos Partials footer -->
      <?php include("partials/footer.php") ?>
      
    </div>

    <!-- Incluimos Partials javascript bootstrap -->
    <?php include("partials/javascript.php") ?>

  </body>
</html>