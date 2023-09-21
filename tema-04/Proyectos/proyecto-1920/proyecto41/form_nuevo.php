<?php 
require_once("class/usuario.php");

$perfiles = Usuario::getPerfiles(); 

?>

<!doctype html>
<html lang="es"> 

<?php require_once("template/partials/head.php") ?>
<body>
    <?php require_once("template/partials/cabecera.php") ?> 
    <div class="container">
        <section>
            <article>
                <?php require_once("template/partials/formNuevo.php") ?>
            </article>
        </section>
    </div>
    <?php require_once("template/partials/footer.php") ?>
    <?php require_once("template/partials/javascript.php") ?>
</body>
</html> 