<table class="table">
<thead>
<tr>
    <th>Codigo</th>
    <th>Sistema</th>
<tr>
</thead>
<tbody>
<?php if(is_null($sistema)): ?>
    <tr>
        <td>no existen sistemas agregados</td>
    </tr>
<?php else: ?>
<?php foreach($sistema as $a): ?>
    <tr>
        <td><?php echo $a['id_sistema']; ?></td>
        <td><?php echo $a['nombre_sistema']; ?></td>
    </tr>
<?php endforeach ?>
<?php endif ?>
</tbody>
</table>