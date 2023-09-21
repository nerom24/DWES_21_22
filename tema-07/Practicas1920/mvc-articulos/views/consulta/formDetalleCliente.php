<form>
    <div class="form-group">
        <label for="">Apellidos</label>
        <input type="text" name="apellidos" class="form-control"  title="Apellidos " disabled value="<?=$this->cliente->apellidos?>">
    </div>

    <div class="form-group">
        <label for="">Nombre</label>
        <input type="text" name="nombre" class="form-control"  title="Nombre" disabled value="<?=$this->cliente->nombre ?>">
    </div>
    
    <div class="form-group">
        <label for="">Ciudad</label>
        <input type="text" name="ciudad" class="form-control"  title="Ciudad" disabled value="<?=$this->cliente->ciudad ?>">
    </div>

    <div class="form-group">
        <label for="">Teléfono</label>
        <input type="tel" name="telefono" class="form-control"  title="Teléfono" disabled value="<?=$this->cliente->telefono ?>">
    </div>

    <div class="form-group">
        <label for="">DNI</label>
        <input type="text" name="dni" class="form-control"  title="DNI" disabled value="<?=$this->cliente->dni ?>">
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="email" class="form-control" title="Email" disabled value="<?=$this->cliente->email ?>">
    </div>
    <div class="form-group">
        <label for="">Fecha Alta</label>
        <input type="text" name="fechaalta" class="form-control" title="Fecha Alta" disabled value="<?=$this->cliente->fechaalta ?>">
    </div>

    <!-- botones acción -->
    <a href="<?= URL; ?>consulta" class="btn btn-secondary" role="button" aria-pressed="true">Volver</a>

</form>
    