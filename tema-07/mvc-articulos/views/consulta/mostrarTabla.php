<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Descripcion</th>
            <th>Precio Costo</th>
            <th>Precio Venta</th>
            <th>Categoría</th>
            <th>Stock</th>
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
            <!-- Lista de Acciones-->
            <td>
                <a href="<?=URL;?>consulta/edit/<?=$registro->id;?>" title="Editar"><i class="material-icons">edit</i></a>

                <a href="<?=URL;?>consulta/show/<?=$registro->id;?>" title="Mostrar"><i class="material-icons">visibility</i></a>

                <a href="<?=URL;?>consulta/delete/<?=$registro->id;?>" title="Eliminar"><i class="material-icons">clear</i></a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>