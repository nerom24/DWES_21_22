<?php 
require_once("class/usuario.php");
require_once("bd/datos.php");
require_once("class/arrayObjetosUsuarios.php");

$perfiles = Usuario::getPerfiles();

$clave = $_GET["indice"];

$usuarios = new ArrayObjetosUsuarios();

$usuarios->create($usuario1);
$usuarios->create($usuario2);
$usuarios->create($usuario3);
$usuarios->create($usuario4);

$usuario = $usuarios->read($clave);

?>

<!doctype html>
<html lang="es">

<?php require_once("template/partials/head.php") ?>
<body>
    <?php require_once("template/partials/cabecera.php") ?> 
    <div class="container">
        <section>
            <article>
                <?php require_once("template/partials/formMostrar.php") ?>
            </article>
        </section>
    </div>
    <?php require_once("template/partials/footer.php") ?>
    <?php require_once("template/partials/javascript.php") ?>
</body>

</html>