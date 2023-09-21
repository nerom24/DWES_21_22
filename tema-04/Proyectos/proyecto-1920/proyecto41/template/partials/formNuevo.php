<form method="POST" action="nuevo.php">
    <legend>Crear Usuario</legend>
    <div class="form-group">
        <label for="">Nombre</label>
        <input name="nombre" type="text" class="form-control" id="" placeholder="Nombre">
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input name="email" type="email" class="form-control" id="" placeholder="ejemplo@email.com">
    </div>
    <div class="form-group">
        <label for="">Contraseña</label>
        <input name="password" type="password" class="form-control" id="" placeholder="*****">
    </div>
    <div class="form-group">
      <label for="">Perfil</label>
      <select class="form-control" name="perfil" id="">

      <?php foreach($perfiles as $key => $perfil): ?>
        <option value="<?= $key ?>"><?= $perfil ?></option>
      <?php endforeach; ?>
      
      </select>
    </div>
    <div class="form-group">
        <label for="">Nacionalidad</label>
        <input name="nacionalidad" type="text" class="form-control" id="" placeholder="Nacionalidad">
    </div>
    <a name="" id="" class="btn btn-secondary" href="index.php" role="button">Cancelar</a>
    <button class="btn btn-dark" type="reset">Reset</button>
    
    <button type="submit" formaction="nuevo.php" class="btn btn-primary">Añadir</button>

</form>