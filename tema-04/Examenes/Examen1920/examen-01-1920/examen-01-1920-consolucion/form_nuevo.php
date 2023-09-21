<?php 
require_once("class/noticia.php");

$secciones = noticia::secciones(); 
$etiquetas = noticia::etiquetas();

?>

<!doctype html>
<html lang="es"> 

<?php require_once("template/partials/head.php")?>
<body>

    <?php require_once("template/partials/menu.php")?>  
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