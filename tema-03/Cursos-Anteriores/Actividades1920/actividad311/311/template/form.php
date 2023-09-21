<!doctype html>
<html lang="es">

<?php require_once("template/partials/head.php") ?>

<body>
    <?php require_once("template/partials/cabecera.php") ?>
    <div class="container">
        
        
        <!-- menu -->
        <?php //require_once("template/menu.php") ?>
        
        <section>
            <article>
            
            <div class="container">


            <form action="nuevo.php" method="post">
                <div class="form-group">
                    <label for="nombre">Usuario</label>
                    <input type="text"
                        class="form-control" name="nombre" id="" aria-describedby="helpId">
                    <small id="helpId" class="form-text text-muted">Introduzca nombre completo</small>
                </div>

                <div class="form-group">
                    <label for="">Deportes que practica</label>
                    <div class="form-control">
                        <?php foreach($deportes as $key => $deporte): ?>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input" name="deportes[]" id="" value="<?= $key ?>">
                            <label class="form-check-label" for="inlineCheckbox1"><?= $deporte ?></label>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                
               
                <!--  Botones de acción del formulario  -->
                <button type="reset" class="btn btn-danger">Borrar</button>
                <button type="submit" class="btn btn-primary" > Enviar </button>

                <!-- <button name=operacion value="s" type="submit" class="btn btn-primary" > &#8730; </button> -->
            </form>
        

    
            </div>
                
            </article>
        </section>
        <?php require_once("template/partials/footer.php") ?>

    </div>

    <?php require_once("template/partials/javascript.php") ?>
</body>

</html>