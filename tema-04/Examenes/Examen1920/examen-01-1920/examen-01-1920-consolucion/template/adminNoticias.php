<!doctype html>
<html lang="es"> 

<?php require_once("template/partials/head.php") ?>

<body>
<?php require_once("template/partials/cabecera.php")?>        
    <?php require_once("template/partials/menu.php")?>
    <!-- Page Content -->
    <div class="container">
        <?php require_once("template/partials/menuAdmin.php") ?>
        <legend>Tabla de Noticias</legend>
        <table class="table">
            <thead class="">
                <tr>
                    <?php foreach (noticia::cabecera() as $campo) : ?>
                        <th><?= $campo ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($noticias->getNoticias() as $indice => $noticia) : ?>
                    <tr>

                        <td><?= $noticia->getId() ?></td>
                        <td><?= $noticia->getTitulo() ?></td>
                        <td><?= $noticia->getAutor() ?></td>
                        <td><?= $noticia->getFecha() ?></td>
                        <td><?= $noticia->getSeccion() ?></td>
                        <td><?= implode(', ', $noticia->getEtiquetas()) ?></td>
                    
                        <td>
                            <a href="form_editar.php?indice=<?= $indice ?>" title="Editar"><i class="material-icons">edit</i></a>
                            <a href="show.php?indice=<?= $indice ?>" title="Mostrar"><i class="material-icons">visibility</i></a>
                            <a href="eliminar.php?indice=<?= $indice ?>" title="Eliminar"><i class="material-icons">delete</i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- /.container -->

    <?php require_once("template/partials/footer.php") ?>
    <?php require_once("template/partials/javascript.php") ?>
</body>

</html>