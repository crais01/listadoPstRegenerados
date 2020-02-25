<table class="table">
<thead>
<tr>
<th>Codigo</th>
<th>Municipalidad</th>
<tr>
</thead>
<tbody>
<?php if(is_null($portal)): ?>
    <tr>
        <td>no existen portal de pagos agregados</td>
    </tr>
<?php else: ?>
<?php foreach($portal as $a): ?>
    <tr>
        <td><?php echo $a['id_portal']; ?></td>
        <td><?php echo $a['nombre_portal']; ?></td>
    </tr>
<?php endforeach ?>
<?php endif ?>
</tbody>
</table>