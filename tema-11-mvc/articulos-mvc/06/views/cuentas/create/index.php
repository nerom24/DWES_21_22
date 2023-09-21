
<!doctype html>
<html lang="es"> 

<?php require_once("template/partials/head.php") ?>

<body>
    <?php require_once("template/partials/menuAut.php") ?>
    
    <!-- Page Content -->
    <div class="container">
	<br><br><br><br>

        <div class="row justify-content-center">

            <div class="col-md-12">
                <?php require_once("template/partials/mensaje.php") ?>
		        <?php require_once("template/partials/error.php") ?>
                <div class="card">
                    <div class="card-header">Crear Cuenta</div>
                    <div class="card-body">
                        <form method="POST">
                            
                            <!-- campo cliente -->
                            <!-- Generación dinámica Select Clientes -->
                            <div class="form-group row">
                                <label for="cliente_id" class="col-md-4 col-form-label text-md-right">Cliente</label>
                                <div class="col-md-6">
                                    <select class="custom-select" name="cliente_id" autofocus>
                                        <?php foreach ($this->clientes as $cliente):?>
                                            <option value="<?=$cliente->id?>" <?= ($this->cliente_id == $cliente->id)?'selected':null?>>
                                                <?=$cliente->cliente?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <!-- campo num_cuenta -->
                            <div class="form-group row">
                                <label for="num_cuenta" class="col-md-4 col-form-label text-md-right">Número Cuenta</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="num_cuenta" value="<?= $this->num_cuenta; ?>" required autocomplete="name" autofocus>

                                    <?php if (isset($this->errores['num_cuenta'])): ?>
                                        <span class="form-text text-danger" role="alert">
                                            <?= $this->errores['num_cuenta'] ?>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <!-- campo saldo inicial -->
                            <div class="form-group row">
                                <label for="saldo" class="col-md-4 col-form-label text-md-right">Saldo</label>

                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="saldo" value="<?= $this->saldo; ?>" step="0.01" required autocomplete="name" autofocus>

                                    <?php if (isset($this->errores['saldo'])): ?>
                                        <span class="form-text text-danger" role="alert">
                                            <?= $this->errores['saldo'] ?>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>


                        

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <a class="btn btn-secondary" href="<?=URL?>cuentas" role="button">Cancelar</a>
                                    <button type="reset" class="btn btn-secondary" >Reset</button>
                                    <button type="submit" formaction="<?=URL?>cuentas/validate" class="btn btn-primary">Crear Cuenta</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



    </div>

    <!-- /.container -->
    
    <?php require_once("template/partials/footer.php") ?>
	<?php require_once("template/partials/javascript.php") ?>
	
</body>

</html>