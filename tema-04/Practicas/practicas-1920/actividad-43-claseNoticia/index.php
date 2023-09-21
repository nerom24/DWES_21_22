<?php 
    require_once ("class/noticia.php");
	require_once("bd/noticias.php");

	$noticia1 = new noticia();

	$noticia1->setTitulo($titulo);
	$noticia1->setCopete($copete);
	$noticia1->setTexto($texto);
	$noticia1->setAutor($autor);
	$noticia1->setFecha($fecha);
	$noticia1->setImagen($imagen);
	$noticia1->setEpigrafe($epigrafe);

?>
<!DOCTYPE html>
<html>
    <?php require_once("template/partials/head.php")?>
    <body>        
    <?php require_once("template/partials/cabecera.php")?>
       
        <div class="container">
            <legend>Noticiario PHP </legend>
            <nav>
            <!-- Especificar main-menu() -->
            </nav>
            <section>
                <article>
                <div class="card" style="width: 18rem;">
                <img src="<?=$noticia1->getImagen();?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?=$noticia1->getTitulo();?></h5>
                    <p class="card-text"><?=$noticia1->getCopete();?></p>
                    <a href="noticiero.php" class="btn btn-primary">Leer más...</a>
                </div>
                </article>
            </section>
                
            <?php require_once("template/partials/footer.php")?>
        </div>
     <?php require_once("template/partials/javascript.php")?>
    </body>
</html>
