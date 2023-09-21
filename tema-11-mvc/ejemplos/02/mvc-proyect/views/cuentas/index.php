
<!doctype html>
<html lang="es"> 

<?php require_once("template/partials/head.php") ?>

<body>
    <?php require_once("template/partials/menu.php") ?>
    
    <!-- Page Content -->
    <div class="container">
	<br><br><br><br>

		<?php require_once("template/partials/mensaje.php") ?>
		

		<!-- Estilo card de bootstrap -->
		<div class="card">
			<div class="card-header">
			<legend>Tabla Cuentas</legend>
			<?php require_once("template/cuentas/menuCuentas.php") ?>
			</div>
			<div class="card-body">
				
                <table class="table">
                    <thead class="">
                        <tr>
                            <th>Id</th>
                            <th>Cuenta</th>
                            <th>Apellidos</th>
                            <th>Nombre</th>
                            <!-- <th>Fecha</th> -->
                            <th>Fecha Mov</th>
                            <th># Movtos</th>
                            <th>Saldo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($this->cuentas as $cuenta): ?>
                            <tr>

                                <td><?= $cuenta->id ?></td>
                                <td><?= $cuenta->num_cuenta ?></td>
                                <td><?= $cuenta->apellidos ?></td>
                                <td><?= $cuenta->nombre ?></td>
                                <!-- <td><?= $cuenta->fecha_alta ?></td> -->
                                <td><?= $cuenta->fecha_ul_mov ?></td>
                                <td class="text-right"><?= $cuenta->num_movtos ?></td>
                                <td class="text-right"><?= $cuenta->saldo ?></td>
                                

                                <td>
                                    <!-- Consultar movimientos  -->
                                   
                                        <a href="<?=URL?>#" title="Movimientos"><i class="material-icons">list</i></a>
                                   
                                    
                                    <!-- Editar cuenta  -->
                                   
                                        <a href="<?=URL?>cuentas/edit/<?= $cuenta->id ?>" title="Editar"><i class="material-icons">edit</i></a>
                                   

                                    <!-- Mostrar cuenta  -->
                                  
                                        <a href="<?=URL?>cuentas/show/<?= $cuenta->id ?>" title="Mostrar"><i class="material-icons">visibility</i></a>
                                   

                                    <!-- Eliminar  -->
                                   
                                        <a href="<?=URL?>cuentas/delete/<?= $cuenta->id ?>" title="Eliminar"><i class="material-icons">delete</i></a>
                                   
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        
                    </tbody>
                </table>

			</div>
            <div class="card-footer text-muted">
                Nº Cuentas: <?= $this->cuentas->rowCount(); ?> 
            </div>
		</div>


    </div>

    <!-- /.container -->
    
    <?php require_once("template/partials/footer.php") ?>
	<?php require_once("template/partials/javascript.php") ?>
	
</body>

</html>