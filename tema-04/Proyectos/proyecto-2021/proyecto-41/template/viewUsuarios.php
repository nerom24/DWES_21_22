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
        <legend> Panel Control Usuarios</legend>
        <!-- Tabla Usuarios -->
        <table class="table">
            <thead class="">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Nacionalidad</th>
                    <th>Perfiles</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios->getTabla() as $indice => $usuario) : ?>
                    <tr>

                        <td><?= $usuario->getId() ?></td>
                        <td><?= $usuario->getNombre() ?></td>
                        <td><?= $usuario->getEmail() ?></td>
                        <td><?= $usuario->getNacionalidad() ?></td>
                        <td><?= implode (", ", $usuario->getPerfiles()) ?></td>
                        
                        <td>
                            <a href="eliminar.php?indice=<?= $indice ?>" title="Eliminar"><i class="material-icons">delete</i></a>
                            <a href="form_editar.php?indice=<?= $indice ?>" title="Editar"><i class="material-icons">edit</i></a>
                            <a href="form_mostrar.php?indice=<?= $indice ?>" title="Mostrar"><i class="material-icons">visibility</i></a>
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