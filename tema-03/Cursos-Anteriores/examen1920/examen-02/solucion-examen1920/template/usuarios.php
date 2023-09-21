<!doctype html>
<html lang="es">
    <!-- head de HTML -->
    <?php require_once("template/partials/head.php"); ?>
  
    <body>
    <div class="container">
        
        <!-- Cabecera de la página -->
        <?php require_once('template/partials/cabecera.php'); ?>
       
        <!-- Menú de navegación -->
        <?php require_once('template/partials/menu.php'); ?>
    

        <section>
            <article>
            <br>
            <!-- Especificar Contenido -->
            <table class="table">
            <h4 class="display-7">Tabla Usuarios</h4>
            <thead  class="">
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
                <?php foreach ($tabla as $key => $registro): ?>
                <tr>
                <?php foreach ($registro as $i =>$valor): ?>
                    <td>
                    <?php if ($i == "Perfiles"): ?>
                        
                        <?= implode(' ,', $valor) ?>
                        
                    <?php else: ?>
                        <?= $valor ?>
                    <?php endif; ?>
                    </td>
                <?php endforeach; ?>

                <!-- Añadir Acciones disponibles -->
                <td>
                    <a href="eliminar.php?indice=<?=$key; ?>" title="Eliminar"><i class="material-icons">delete</i></a>
                    <a href="form_editar.php?indice=<?=$key; ?>" title="Actualizar"><i class="material-icons">edit</i></a>
                </td>
                </tr>
                <?php endforeach;?>
                
            </tbody>
            </table>
            </article>
        </section>
        <!-- Pie de página -->
        <?php require_once('template/partials/footer.php'); ?>
    </div>
    <!-- Enlaces javascript -->
    <?php require_once('template/partials/javascript.php'); ?>
  </body>
</html>