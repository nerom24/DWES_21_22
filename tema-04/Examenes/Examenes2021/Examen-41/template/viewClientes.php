<!-- Plantilla Básica BootStrapt en local-->
<!DOCTYPE html>
<html lang="es">
<!-- head -->
    <?php include_once("template/partials/head.php")?>
<!-- Fin head -->

<body>
    <!-- cabecera -->
    <?php include_once("template/partials/cabecera.php");?>
    
    <div class ="container">

        <!-- Mensaje de notificación -->
        <?php include_once("template/partials/notify.php"); ?>

        <legend> Panel Control clientes</legend>
        <?php include_once("template/partials/menu.php");?>
        <!-- Tabla clientes -->
        <table class="table">
            <thead class="">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>NIF</th>
                    <th>Población</th>
                    <th>Nacionalidad</th>
                    <th>Sectores</th>
                    <th>Observaciones</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes->getTabla() as $indice => $cliente) : ?>
                    <tr>

                        <td><?= $cliente->getId() ?></td>
                        <td><?= $cliente->getNombre() ?></td>
                        <td><?= $cliente->getNif() ?></td>
                        <td><?= $cliente->getPoblacion() ?></td>
                        <td><?= $cliente->getNacionalidad() ?></td>
                        <td><?= implode (", ", $cliente->getSectores()) ?></td>
                        <td><?= $cliente->getObservaciones() ?></td>
                        
                        <td>
                            <a href="eliminar.php?indice=<?= $indice ?>" title="Eliminar"><i class="material-icons">delete</i></a>
                            <a href="editar.php?indice=<?= $indice ?>" title="Editar"><i class="material-icons">edit</i></a>
                            <a href="mostrar.php?indice=<?= $indice ?>" title="Mostrar"><i class="material-icons">visibility</i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <!-- Footer -->
        <?php include_once("template/partials/footer.php");?>
    </div>
    <!-- Optional JavaScript-->
    <?php include_once("template/partials/javascript.php");?>
</body>
</html>