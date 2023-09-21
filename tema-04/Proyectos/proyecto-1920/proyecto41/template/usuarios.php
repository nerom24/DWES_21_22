<!doctype html>
<html lang="es"> 

<?php require_once("template/partials/head.php") ?>

<body>
    <?php require_once("template/partials/cabecera.php") ?>
    

    <!-- Page Content -->
    <div class="container">
        <?php require_once("template/partials/menubar.php") ?>
        <legend>Tabla de Usuarios</legend>
        <table class="table">
            <thead class="">
                <tr>
                    <?php foreach ($usuario1->getPropiedades() as $clave => $propiedad) : ?>
                        <th><?= $clave ?></th>
                    <?php endforeach; ?>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios->getTabla() as $indice => $usuario) : ?>
                    <tr>

                        <td><?= $usuario->getId() ?></td>
                        <td><?= $usuario->getNombre() ?></td>
                        <td><?= $usuario->getEmail() ?></td>
                        <td><?= $usuario->getPassword() ?></td>
                        <td><?= $usuario->getPerfil() ?></td>
                        <td><?= $usuario->getNacionalidad() ?></td>

                        <td>
                            <a href="eliminar.php?indice=<?= $indice ?>" title="Eliminar"><i class="material-icons">delete</i></a>
                            <a href="form_editar.php?indice=<?= $indice ?>" title="Editar"><i class="material-icons">edit</i></a>
                            <a href="form_mostrar.php?indice=<?= $indice ?>" title="Mostrar"><i class="material-icons">visibility</i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- /.container -->

    <?php require_once("template/partials/footerconfondo.php") ?>
    <?php require_once("template/partials/javascript.php") ?>
</body>

</html>