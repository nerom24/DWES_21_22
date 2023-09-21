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
            <!-- Mostrar encabezados a partir de la función getEncabezados() -->
          </tr>
        </thead>
        <tbody>
          
            <!-- Mostrar la tabla de películas -->
            
            <!-- Muestro los botones de acción -->
            <td>
              <a href="#" Title="Eliminar"><i class="bi bi-trash-fill"></i></a>
              <a href="#" Title="Modificar"><i class="bi bi-pencil-square"></i></a>
            </td>
            <!-- Fin botones de acción -->
            
         
        </tbody>
      </table>
      
      <!-- Incluimos Partials footer -->
      <?php include("partials/footer.php") ?>
      
    </div>

    <!-- Incluimos Partials javascript bootstrap -->
    <?php include("partials/javascript.php") ?>

  </body>
</html>