<form>
    <legend>Detalles de Corredor</legend>
    
    <div class="form-group">
        <label for="">Nombre</label>
        <input name="nombre" type="text" class="form-control" id="" disabled
        value="<?= $corredor->getNombre()?>">
    </div>
    <div class="form-group">
        <label for="">Apellidos</label>
        <input name="apellidos" type="text" class="form-control" id=""  disabled
        value="<?= $corredor->getApellidos()?>">
    </div>
    <div class="form-group">
        <label for="">Ciudad</label>
        <input name="ciudad" type="text" class="form-control" id="" disabled
        value="<?= $corredor->getCiudad()?>">
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input name="email" type="email" class="form-control" id="" disabled
        value="<?= $corredor->getEmail()?>">
    </div>

    <div class="form-group">
        <label for="">Fecha de Nacimiento</label>
        <input name="fechaNacimiento" type="date" class="form-control" id="" disabled
        value="<?= $corredor->getFechaNacimiento()?>">
    </div>

    <div class="form-group">
        <label for="">Edad</label>
        <input name="edad" type="number" class="form-control" id="" disabled
        value="<?= $corredor->getEdad()?>">
    </div>

    <div class="form-group">
      <label for="">Genero</label>
      <select class="form-control" name="sexo" id="" disabled>  
        <option <?= ($corredor->getSexo() == "H") ? "selected='selected'": "" ?> value="H">Hombre</option>
        <option <?= ($corredor->getSexo() == "M") ? "selected='selected'": "" ?>value="M">Mujer</option>
        <option <?= ($corredor->getSexo() == "") ? "selected='selected'": "" ?>value="">Sin Especificar</option>
      </select>
    </div>

    <div class="form-group">
        <label for="">Dni</label>
        <input name="dni" type="text" class="form-control" id="" disabled
        value="<?= $corredor->getDni()?>">
    </div>

    <div class="form-group">
      <label for="">Categoría</label>
      <select class="form-control" name="id_categoria" id="" disabled>

        <?php foreach ($categorias as $categoria): ?>       
            <option <?= ($corredor->getId_categoria() == $categoria->id) ? "selected='selected'": "" ?> value="<?= $categoria->id ?>"><?= $categoria->nombreCorto ?></option>
        <?php endforeach; ?>
      
      </select>
    </div>
    <div class="form-group">
      <label for="">Club</label>
      <select class="form-control" name="id_club" id="" disabled>

        <?php foreach($clubs as $club): ?>       
            <option <?= ($corredor->getId_club() == $club->id) ? "selected='selected'": "" ?> value="<?= $club->id ?>"><?= $club->nombre ?></option>
        <?php endforeach; ?>
      
      </select>
    </div>
    
    <a name="" id="" class="btn btn-secondary" href="index.php" role="button">Volver</a>
    
</form>