<table class="table">
<thead>
<tr>
<th>Codigo</th>
<th>Municipalidad</th>
<tr>
</thead>
<tbody>
<?php if(is_null($municipios)): ?>
    <tr>
        <td>no existen municipios</td>
    </tr>
<?php else: ?>
<?php foreach($municipios as $a): ?>
    <tr>
        <td><?php echo $a['id_municipalidad']; ?></td>
        <td><?php echo $a['nombre_municipalidad']; ?></td>
    </tr>
<?php endforeach ?>
<?php endif ?>
</tbody>
</table>