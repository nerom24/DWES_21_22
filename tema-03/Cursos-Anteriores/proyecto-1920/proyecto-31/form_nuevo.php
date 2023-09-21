<?php 
    require_once("libs/funcionesTabla.php");
    $categorias = generarCategorias();
?>
<!doctype html>
<html lang="es">
    <!-- head de HTML -->
    <?php require_once("template/partials/head.php"); ?>
  
    <body>
    <div class="container">
        
        <!-- Cabecera de la página -->
        <?php require_once('template/partials/cabecera.php'); ?>
        <!-- No navegador -->
        <section>
            <article>
            <?php require_once('template/formNuevo.php'); ?>
            </article>
        </section>
        <!-- Pie de página -->
        <?php require_once('template/partials/footer.php'); ?>
    </div>
    <!-- Enlaces javascript -->
    <?php require_once('template/partials/javascript.php'); ?>
  </body>
</html>