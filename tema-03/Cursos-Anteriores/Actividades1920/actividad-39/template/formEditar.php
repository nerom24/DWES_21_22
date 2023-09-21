
<form method="POST" action="editar.php?indice=<?= $key; ?>">
    <legend>Formulario Actualizar Libro</legend>

    <div class="form-group">
        <label for="">Título</label>
        <input type="text" name="titulo" class="form-control" title="Título" value = "<?= $titulo; ?>">
    </div>

    <div class="form-group">
        <label for="">Autor</label>
        <input type="text" name="autor"  class="form-control" title="Autor" value = "<?= $autor; ?>">
    </div>

    <div class="form-group">
        <label for="">Editorial</label>
        <input type="text" name="editorial"  class="form-control" title="Editorial" value = "<?= $editorial; ?>">
    </div>

    <div class="form-group">
        <label for="">Género</label>
        <input type="text" name="genero"  class="form-control" title="Género" value = "<?= $genero; ?>">
    </div>

    <div class="form-group">
        <label for="">Precio</label>
        <input type="number" step="0.01" name="precio"  class="form-control" title="Precio" value = "<?= $precio; ?>">
    </div>

    <a class="btn btn-secondary" href="index.php" role="button">Cancelar</a>
    <button type="submit" class="btn btn-primary" >Actualizar</button>
    
</form>

