<!doctype html>
<html lang="es">

  <head>
    <!-- Incluimos el head -->
    <?php include "views/partials/head.php"?>
    <title>Cuentas - Gesbank</title>
  </head>
  <body>
      <!-- Incluimos la cabecera -->
      <?php include "views/partials/menu.php"?>

      <div class="container">
        <legend>Gestión de Cuentas</legend>
        
        <!-- Incluimos partial ménu -->
        <?php include "views/cuentas/menuCuentas.php"?>

        <!-- Incluimos partial alert -->
        <?php if (isset($mensaje)) include "views/partials/alert.php"?>

        <table class="table table-striped">
        <thead class="">
                <tr>
                    <th>Id</th>
                    <th>Cuenta</th>
                    <th>Apellidos</th>
                    <th>Nombre</th>
                    <th>Fecha</th>
                    <th>Ul Mov</th>
                    <th># Movtos</th>
                    <th>Saldo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($arrayCuentas as $cuenta): ?>
                    <tr>

                        <td><?= $cuenta->id ?></td>
                        <td><?= $cuenta->num_cuenta ?></td>
                        <td><?= $cuenta->apellidos ?></td>
                        <td><?= $cuenta->nombre ?></td>
                        <td><?= $cuenta->fecha_alta ?></td>
                        <td><?= $cuenta->fecha_ul_mov ?></td>
                        <td class="text-right"><?= $cuenta->num_movtos ?></td>
                        <td class="text-right"><?= $cuenta->saldo ?></td>
                        

                        <td>
                            <a href="movimientos.php?id=<?= $cuenta->id ?>" title="Movimientos"><i class="material-icons">list</i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="8" >Num Registros: <?= $arrayCuentas->rowCount(); ?> </td>
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