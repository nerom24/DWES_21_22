<?php 
    require_once("class/noticia.php");
    require_once("class/arrayObjetosNoticia.php");
	require_once("bd/noticias.php");


    # Creo el array de objetos de tipo noticias
    $noticias = new ArrayObjetos();

    # Asigno dos objetos de tipo noticia al array
    $noticias->insertar($noticia1);
    $noticias->insertar($noticia2);
    $noticias->insertar($noticia3);
    $noticias->insertar($noticia4);

   

?>
<!DOCTYPE html>
<html>
    <?php require_once("template/partials/head.php")?>
    <body>
    <?php require_once("template/partials/cabecera.php")?>        
    <?php require_once("template/partials/menu.php")?>
    
       
        <div class="container">
            <legend>Noticiario PHP </legend>
            
            <section>
                
                <?php foreach ($noticias->getTabla() as $key =>$noticia): ?>

                    <!-- Noticia cabecera -->
                    <?php if($key==0): ?>
                        <article>
                        <!-- Heading Row -->
                        <div class="row align-items-center my-5">
                          <div class="col-lg-7">
                            <img class="img-fluid rounded mb-4 mb-lg-0" src="<?=$noticia->getImagen();?>" alt="">
                          </div>
                          
                          <div class="col-lg-5">
                            <h2 class="font-weight-light"><?=$noticia->getTitulo();?></h2>
                            <p><?=$noticia->getCopete();?></p>
                            <a class="btn btn-primary" href="show.php?i=<?= $key ?>">Leer más...</a>
                          </div>
                          <!-- /.col-md-4 -->
                        </div>
                        <!-- /.row -->
                        </article>

                         <!-- Call to Action Well -->
                        <div class="card text-white bg-secondary my-5 py-4 text-center">
                          <div class="card-body">
                            <p class="text-white m-0">Noticias importantes</p>
                          </div>
                        </div>

                        <div class="row">

                    <?php else: ?>

                        <?php if (in_array ($key, array(4))): ?>
                            </div>
                            <div class="row">
                        <?php endif; ?>
                    
                        <div class="col-md-4 mb-5">
                            <article>
                                <div class="card" style="width: 18rem;">
                                <img src="<?=$noticia->getImagen();?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?=$noticia->getTitulo();?></h5>
                                    <p class="card-text"><?=$noticia->getCopete();?></p>
                                    <a href="show.php?i=<?=$key ?>" class="btn btn-primary">Leer más...</a>
                                </div>
                            </article>
                        </div>
                    
                    <?php endif; ?>


                <?php endforeach; ?>
                </div>
               
            </section>
                
            
        </div>
        <?php require_once("template/partials/footer.php")?>
     <?php require_once("template/partials/javascript.php")?>
    </body>
</html>
