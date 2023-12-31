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
        

        <!-- Formulario -->
        <legend>Formulario Nuevo Movimiento</legend>
        <form method="POST" action="createmov.php?id=<?= $id_cuenta ?>">
            <!-- id hidden-->
            <div class="form-group" hidden>
                <label for="">Id</label>
                <input name="id_cuenta" type="number" class="form-control" value="<?= $cuenta->id ?>">
            </div>
        
            <!-- Número de cuenta disabled-->
            <div class="form-group">
                <label for="">Cuenta</label>
                <input name="num_cuenta" type="text" class="form-control" value="<?= $cuenta->num_cuenta ?>" disabled>
            </div>

            <!-- Cliente disabled-->
            <div class="form-group">
                <label for="">Cliente</label>
                <input type="text" class="form-control" value="<?= $cuenta->id_cliente ?>" disabled>
            </div>

            <!-- Saldo  disabled -->
            <div class="form-group">
                <label for="">Saldo</label>
                <input type="number" class="form-control" value="<?= $cuenta->saldo ?>" disabled>
            </div>

            <!-- concepto -->
            <div class="form-group">
                <label for="">Concepto</label>
                <input name="concepto" type="text" class="form-control">
            </div>
             
            
            <!-- tipo -->
             <div class="form-group">
                <label for="">Tipo Movimiento</label>
                <div class="form-control"> 
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tipo" value="I" checked>
                        <label class="form-check-label" for="inlineRadio1">Ingreso</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="tipo" value="R">
                        <label class="form-check-label" for="inlineRadio2">Reintegro</label>
                    </div>
                </div>
            </div>

            

            <!-- Cantidad -->
            <div class="form-group">
                <label for="">Cantidad</label>
                <input name="cantidad" type="number" class="form-control" step="0.01" value="0.00">
            </div>

            <br>
            <!-- Botones -->
            <a href="movimientos.php?id=<?=$id_cuenta ?>" class="btn btn-secondary" role="button">Cancelar</a>
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