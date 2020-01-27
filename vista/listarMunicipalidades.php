<table>
<thead>
<tr>
<th>Codigo</th>
<th>Municipalidad</th>
<tr>
</thead>
<tbody>

<?php foreach($municipios as $a): ?>
    <tr>
        <td><?php echo $a['codigo_municipalidad']; ?></td>
        <td><?php echo $a['nombre_municipalidad']; ?></td>
        </tr>
<?php endforeach ?>

</tbody>
</table>