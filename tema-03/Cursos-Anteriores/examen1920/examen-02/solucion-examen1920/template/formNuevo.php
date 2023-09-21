
<form method="POST" action="nuevo.php">
    <legend>Formulario Añadir Usuario</legend>

    <div class="form-group">
        <label for="">Nombre</label>
        <input type="text" name="nombre" class="form-control" required="required" title="Nombre">
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email"  class="form-control" required="required" title="Email">
    </div>

    <div class="form-group">
        <label for="">Password</label>
        <input type="password" name="password"  class="form-control" required="required" title="Password">
    </div>

    <div class="form-group">
        <label for="">Género</label>
        <div  class="form-control">
            <?php foreach ($generos as $key =>$genero):?>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="generos[]" value="<?=$key?>">
                    <label class="form-check-label" for="inlineCheckbox1"><?=$genero ?></label>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="form-group">
        <label for="">Año</label>
        <input type="number" name="ano"  class="form-control" required="required" title="Año">
    </div>

   

    <a class="btn btn-secondary" href="index.php" role="button">Cancelar</a>
    <button type="reset" class="btn btn-secondary">Reset</button>
    <button type="submit" class="btn btn-primary" >Añadir</button>
    
</form>

