<table>
<thead>
<tr>
<th>Codigo</th>
<th>Municipalidad</th>
<tr>
</thead>
<tbody>

<?php foreach($portal as $a): ?>
    <tr>
        <td><?php echo $a['id_portal']; ?></td>
        <td><?php echo $a['nombre_portal']; ?></td>
        </tr>
<?php endforeach ?>

</tbody>
</table>