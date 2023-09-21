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
                <!-- imagen -->
                <img src="<?=$noticia1->getImagen();?>" width="100%" class="img-fluid rounded" alt="Responsive image">
                <!-- epigrafe -->
                <div class="text-center">
                    <?=$noticia1->getEpigrafe();?>
                </div>
                <!-- titulo -->
                <h2>
                    <?=$noticia1->getTitulo();?>
                </h2>
                <!-- autor -->	
                <div class="text-muted credit">
                    <?=$noticia1->getAutor();?>
                </div>
                <!-- copete -->
                <p class="alert alert-secondary h6">
                    <?=$noticia1->getCopete();?>
                </p>
                <!-- cuerpo -->
                    <?php $noticia1->showTexto();?>
                <!-- fecha -->	
                <div class="text-muted credit">
                    <?=$noticia1->getFecha();?>
                </div>
                </article>
            </section>
            <hr>
            <a href="index.php" class="btn btn-primary">Volver</a>
            <?php require_once("template/partials/footer.php")?>
            </div>
     <?php require_once("template/partials/javascript.php")?>
    </body>
</html>
