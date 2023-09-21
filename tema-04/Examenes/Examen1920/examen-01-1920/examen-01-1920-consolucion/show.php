<?php 
    require_once("class/noticia.php");
    require_once("class/arrayObjetosNoticia.php");
	require_once("bd/noticias.php");


    # Creo el array de objetos de tipo noticias
    $noticias = new ArrayObjetosNoticia();

    # Asigno dos objetos de tipo noticia al array
    $noticias->insertar($noticia1);
    $noticias->insertar($noticia2);
    $noticias->insertar($noticia3);
    $noticias->insertar($noticia4);

    # Obtener la noticia del GET
    $noticia = $noticias->leer($_GET['indice']);

?>
<!DOCTYPE html>
<html>
    <?php require_once("template/partials/head.php")?>
    <body>        
    <?php require_once("template/partials/menu.php")?>
       
        <div class="container">

            <br>    
            <div class="card">
                <div class="card-header">
                    Noticias
                </div>
                <img src="<?=$noticia->getImagen();?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?=$noticia->getTitulo();?></h5>
                    <h6 class="card-title"><?=$noticia->getExtracto();?></h6>
                    <p><?=$noticia->getSeccion();?></p>
                    <p class="card-text"><?= $noticia->getContenido();?></p>
                    <p><?=implode(', ', $noticia->getEtiquetas());?></p>
                    
                    <footer class="blockquote-footer">
                    <?= $noticia->getFecha();?><cite title="Source Title"><b>
                    <?=$noticia->getAutor();?></b></cite></footer>
                </div>

                <div class="card-body">
                    <a href="index.php" class="card-link">Portada</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
       
        </div>
        <br>
        <?php require_once("template/partials/footer.php")?>
     <?php require_once("template/partials/javascript.php")?>
    </body>
</html>
