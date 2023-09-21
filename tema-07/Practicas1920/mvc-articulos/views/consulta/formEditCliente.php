<form method="POST" action="<?= URL; ?>consulta/updateCliente/<?=$this->id; ?>">

<div class="form-group">
        <label for="">Id</label>
        <input type="text" name="id" class="form-control"  title="Id " disabled value="<?=$this->cliente->id?>">
    </div>
    
    <div class="form-group">
        <label for="">Apellidos</label>
        <input type="text" name="apellidos" class="form-control"  title="Apellidos " value="<?=$this->cliente->apellidos?>">
    </div>

    <div class="form-group">
        <label for="">Nombre</label>
        <input type="text" name="nombre" class="form-control"  title="Nombre" value="<?=$this->cliente->nombre ?>">
    </div>
    
    <div class="form-group">
        <label for="">Ciudad</label>
        <input type="text" name="ciudad" class="form-control"  title="Ciudad" value="<?=$this->cliente->ciudad ?>">
    </div>

    <div class="form-group">
        <label for="">Teléfono</label>
        <input type="tel" name="telefono" class="form-control"  title="Teléfono" value="<?=$this->cliente->telefono ?>">
    </div>

    <div class="form-group">
        <label for="">DNI</label>
        <input type="text" name="dni" class="form-control"  title="DNI" value="<?=$this->cliente->dni ?>">
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="email" class="form-control" title="Email" value="<?=$this->cliente->email ?>">
    </div>
    <div class="form-group">
        <label for="">Fecha Alta</label>
        <input type="text" name="fechaalta" class="form-control" title="Fecha Alta" disabled value="<?=$this->cliente->fechaalta ?>">
    </div>

    <!-- botones acción -->
    <a href="<?= URL; ?>consulta" class="btn btn-secondary" role="button" aria-pressed="true">Volver</a>
    <button type="reset" class="btn btn-secondary">Reset</button>
	<button type="submit" class="btn btn-primary">Actualizar</button>
</form>