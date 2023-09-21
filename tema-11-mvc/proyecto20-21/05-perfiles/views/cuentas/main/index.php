<!doctype html>
<html lang="es"> 

<?php require_once("template/partials/head.php") ?>

<body>
    <?php require_once("template/partials/menuAut.php") ?>
    
    <!-- Page Content -->
    <div class="container">
	<br><br><br><br>

		<?php require_once("template/partials/mensaje.php") ?>
		<?php require_once("template/partials/error.php") ?>
		

        <legend>Tabla Cuentas</legend>
		<!-- Estilo card de bootstrap -->
		<div class="card">
           
			<div class="card-header">
            <?php require_once("template/partials/cuentas/menu.php") ?>
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
                                    <!-- Consultar Movimientos -->
                                    <?php if (in_array($_SESSION['id_rol'], $GLOBALS['consultar'])):?>
                                        <a href="#" title="Movimientos"><i class="material-icons">list</i></a>
                                    <?php endif; ?>
                                    
                                    <!-- Editar cuentas -->
                                    <?php if (in_array($_SESSION['id_rol'], $GLOBALS['editar'])):?>
                                        <a href="#" title="Editar"><i class="material-icons">edit</i></a>
                                    <?php endif; ?>

                                    <!-- Consultar cuentas -->
                                    <?php if (in_array($_SESSION['id_rol'], $GLOBALS['consultar'])):?>
                                        <a href="#" title="Consultar"><i class="material-icons">visibility</i></a>
                                    <?php endif; ?>

                                    <!-- Eliminar cuentas -->
                                    <?php if (in_array($_SESSION['id_rol'], $GLOBALS['eliminar'])):?>
                                        <a href="#" title="Eliminar"><i class="material-icons">delete</i></a>
                                    <?php endif; ?>
                                    
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