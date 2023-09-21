<!doctype html>
<html lang="es">
  <head>
    <!-- Incluimos HEAD -->
    <?php include("partials/head.php") ?>
    <title>Actividad 3.3.4 - Home</title>
  </head>
  
  <body>
    <div class="container">
      <!-- Cabecera -->
 
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
      
      <!-- Incluimos Partials footer -->
      <?php include("partials/footer.php") ?>
      
    </div>

    <!-- Incluimos Partials javascript bootstrap -->
    <?php include("partials/javascript.php") ?>

  </body>
</html>