<legend>Error de Base de Datos</legend>
<table border="1">
    <tr>
        <th> Mensaje: </th>
        <td><?= $e->getMessage();?> </td>
    </tr>
    <tr>
        <th> Código: </th>
        <td><?= $e->getCode();?> </td>
    </tr>
    <tr>
        <th> Fichero: </th>
        <td><?= $e->getFile();?> </td>
    </tr>
    <tr>
        <th> Línea: </th>
        <td><?= $e->getLine();?> </td>
    </tr>
    <tr>
        <th> Trace: </th>
        <td><?= $e->getTraceAsString();?> </td>
    </tr>
</table>
