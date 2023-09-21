<!doctype html>
<html lang="es">

  <head>
    <!-- Incluimos el head -->
    <?php include "views/partials/head.php"?>
    <title>Movimientos - Gesbank</title>
  </head>
  <body>
      <!-- Incluimos la menu principal -->
      <?php include "views/partials/menu.php"?>

      <div class="container">
        
        <legend>Movimientos de la cuenta: <?= $id_cuenta ?></legend>
        <?php include_once("views/movimientos/menuMovimientos.php");?>

        <!-- Incluimos partial alert -->
        <?php if (isset($mensaje)) include "views/partials/alert.php"?>

        
        
        <!-- Tabla movimientos -->
        <table class="table">
            <thead class="">
                <tr>
                    <th>#</th>
                    <th>Id Mov</th>
                    <th>Cuenta</th>
                    <th>Fecha</th>
                    <th>Concepto</th>
                    <th class="text-right">Tipo</th>
                    <th class="text-right">Cantidad</th>
                    <th class="text-right">Saldo</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php $num = 1 ?>
                <?php foreach ($arrayMovimientos as $movimiento): ?>
                    <tr>
                        <td><?= $num++ ?></td>
                        <td><?= $movimiento->id ?></td>
                        <td><?= $movimiento->cuenta ?></td>
                        <td><?= $movimiento->fecha_hora ?></td>
                        <td><?= $movimiento->concepto ?></td>
                        <td class="text-right"><?= $movimiento->tipo ?></td>
                        <td class="text-right"> <?= $movimiento->cantidad ?></td>
                        <td class="text-right"><?= $movimiento->saldo ?></td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="8" >Num Movimientos: <?= $arrayMovimientos->rowCount(); ?> </td>
                </tr>

            </tbody>
        </table>
        <!-- Incluimos el pie -->
        <?php include "Views/partials/foot.php"?>
      </div>
      <!-- Incluimos bootstrap javascript -->
      <?php include "views/partials/javascript.php"?>
  </body>
</html>