<legend>Formulario Crear Corredor</legend>
<form method="POST" action="nuevo.php">
    
    <div class="form-group">
        <label for="">Nombre</label>
        <input name="nombre" type="text" class="form-control" id="" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Apellidos</label>
        <input name="apellidos" type="text" class="form-control" id="" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Ciudad</label>
        <input name="ciudad" type="text" class="form-control" id="" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input name="email" type="email" class="form-control" id="" placeholder="">
    </div>

    <div class="form-group">
        <label for="">Fecha Nacimiento</label>
        <input name="fechaNacimiento" type="date" class="form-control" id="" placeholder="">
    </div>

    <div class="form-group">
      <label for="">Sexo</label>
      <select class="form-control" name="sexo" id="">  
        <option value="H">Hombre</option>
        <option value="M">Mujer</option>
        <option value="">Sin especificar</option>
      </select>
    </div>

    <div class="form-group">
        <label for="">Dni</label>
        <input name="dni" type="text" class="form-control" id="" placeholder="">
    </div>

    <div class="form-group">
      <label for="">Categoría</label>
      <select class="form-control" name="id_categoria" id="">

        <?php foreach($categorias as $categoria): ?>       
            <option value="<?= $categoria->id ?>"><?= $categoria->nombreCorto ?></option>
        <?php endforeach; ?>
      
      </select>
    </div>

    <div class="form-group">
      <label for="">Club</label>
      <select class="form-control" name="id_club" id="">

        <?php foreach($clubs as $club): ?>       
            <option value="<?= $club->id ?>"><?= $club->nombre ?></option>
        <?php endforeach; ?>
      
      </select>
    </div>
    <a class="btn btn-secondary" href="index.php" role="button">Cancelar</a>
    <button class="btn btn-dark" type="reset">Reset</button>
    <button type="submit" class="btn btn-primary">Crear</button>
</form>