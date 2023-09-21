<!doctype html>
<html lang="es">

  <head>
    <!-- Incluimos el head -->
    <?php include "views/partials/head.php"?>
    <title>Nuevo Movimiento - Gesbank</title>
  </head>
  <body>
      <!-- Incluimos menu -->
      <?php include "views/partials/menu.php"?>

      <div class="container">
        <form>

        
            <!-- Botones -->
            <a href="#" class="btn btn-secondary" role="button">Cancelar</a>
            <button type="reset" class="btn btn-dark">Reset</button>
            <button type="submit" class="btn btn-primary">Añadir</button>
        </form>
        <!-- Fin de formulario -->
        <!-- Incluimos el pie -->
        <?php include "Views/partials/foot.php"?>
      </div>
      <!-- Incluimos bootstrap javascript -->
      <?php include "views/partials/javascript.php"?>
  </body>
</html>