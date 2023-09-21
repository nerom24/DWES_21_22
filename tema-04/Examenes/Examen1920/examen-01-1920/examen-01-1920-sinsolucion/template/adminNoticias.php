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
                   <!-- Mostrar Cabecera -->
                </tr>
            </thead>
            <tbody>
                <!-- Mostrar filas de noticias -->
            </tbody>
        </table>
    </div>

    <!-- /.container -->

    <?php require_once("template/partials/footer.php") ?>
    <?php require_once("template/partials/javascript.php") ?>
</body>

</html>