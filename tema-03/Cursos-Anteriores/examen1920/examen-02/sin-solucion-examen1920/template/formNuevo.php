
<form method="" action="">
    <legend>Formulario Añadir Película</legend>

    <div class="form-group">
        <label for="">Título</label>
        <input type="text" name="titulo" class="form-control" required="required" title="Título">
    </div>

    <div class="form-group">
        <label for="">Director</label>
        <input type="text" name="director"  class="form-control" required="required" title="Director">
    </div>

    <div class="form-group">
        <label for="">Nacionalidad</label>
        <input type="text" name="nacionalidad"  class="form-control" required="required" title="Nacionalidad">
    </div>

    <div class="form-group">
        <label for="">Género</label>
        <div  class="form-control">
            <!--   Inyectar código PHP para que muesre lista checkbox
            con los géneros -->
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

