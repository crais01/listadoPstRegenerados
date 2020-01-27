<table>
<thead>
<tr>
<th>Codigo</th>
<th>Sistema</th>
<tr>
</thead>
<tbody>

<?php foreach($sistema as $a): ?>
    <tr>
        <td><?php echo $a['id_sistema']; ?></td>
        <td><?php echo $a['nombre_sistema']; ?></td>
        </tr>
<?php endforeach ?>

</tbody>
</table>