<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Descripcion</th>
            <th>Costo (€)</th>
            <th>Venta (€)</th>
            <th>Categoría</th>
            <th>Stock</th>
            <th>Imagen</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($this->datos as $key=>$registro): ?>
        <tr>
            <td><?php echo $registro->id; ?></td>
            <td><?php echo $registro->descripcion; ?></td>
            <td><?php echo $registro->precio_costo; ?></td>
            <td><?php echo $registro->precio_venta; ?></td>
            <td><?php echo $registro->categoria_id; ?></td>
            <td><?php echo $registro->stock; ?></td>
            <td><img src="<?= URL . 'imagenes/' . $registro->imagen; ?>" width="40"></td>
            
            <!-- Lista de Acciones-->
            <td>
                <a href="<?=URL;?>articulos/edit/<?=$registro->id;?>" title="Editar"><i class="material-icons">edit</i></a>

                <a href="<?=URL;?>articulos/show/<?=$registro->id;?>" title="Mostrar"><i class="material-icons">visibility</i></a>

                <a href="<?=URL;?>articulos/delete/<?=$registro->id;?>" title="Eliminar"><i class="material-icons">clear</i></a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>