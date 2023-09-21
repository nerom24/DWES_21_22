
<form method="POST" action="nuevo.php">
    <legend>Formulario Añadir Libro</legend>

    <div class="form-group">
        <label for="">Título</label>
        <input type="text" name="titulo" class="form-control" required="required" title="Título">
    </div>

    <div class="form-group">
        <label for="">Autor</label>
        <input type="text" name="autor"  class="form-control" required="required" title="Autor">
    </div>

    <div class="form-group">
        <label for="">Editorial</label>
        <input type="text" name="editorial"  class="form-control" required="required" title="Editorial">
    </div>

    <div class="form-group">
        <label for="">Género</label>
        <input type="text" name="genero"  class="form-control" required="required" title="Género">
    </div>

    <div class="form-group">
        <label for="">Precio</label>
        <input type="number" step="any" name="precio"  class="form-control" required="required" title="Precio">
    </div>

    <a class="btn btn-secondary" href="index.php" role="button">Cancelar</a>
    <button type="reset" class="btn btn-secondary">Reset</button>
    <button type="submit" class="btn btn-primary" >Añadir</button>
    
</form>

