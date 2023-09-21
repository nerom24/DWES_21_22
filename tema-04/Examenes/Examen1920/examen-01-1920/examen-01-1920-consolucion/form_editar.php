<?php 
require_once("class/noticia.php");
require_once("class/arrayObjetosNoticia.php");
require_once("bd/noticias.php");

# Creo los arry de secciones y etiquetas
$secciones = noticia::secciones(); 
$etiquetas = noticia::etiquetas();

# Creo el array de objetos de tipo noticias
$noticias = new ArrayObjetosNoticia();

# Asigno dos objetos de tipo noticia al array
$noticias->insertar($noticia1);
$noticias->insertar($noticia2);
$noticias->insertar($noticia3);
$noticias->insertar($noticia4);

$clave = $_GET["indice"];

$noticia = $noticias->leer($clave);

?>

<<!doctype html>
<html lang="es"> 

<?php require_once("template/partials/head.php")?>
<body>

    <?php require_once("template/partials/menu.php")?>  
    <div class="container">
    
        <section>
            <article>
                <?php require_once("template/partials/formEditar.php") ?>
            </article>
        </section>
    </div>
    <?php require_once("template/partials/footer.php") ?>
    <?php require_once("template/partials/javascript.php") ?>
</body>
</html> 