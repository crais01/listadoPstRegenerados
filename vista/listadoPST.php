<table class="table table-sm table-striped">
            <thead>
                <tr class="table-info">
                    <th scope="col">Orden Compra</th>
                    <th scope="col">Municipalidad</th>
                    <th scope="col">Sistema</th>
                    <th scope="col">Portal</th>
                    <th scope="col">Placa/Rol</th>
                    <th scope="col">Motivo</th>
                    <th scope="col">Fecha Transaccion</th>
                    <th scope="col">Fecha Regeneracion</th>
                </tr>
            </thead>
            <tbody id="contianerResultTable">
<?php foreach($restPST as $pst): ?>
    <tr>
                    <td><?php echo $pst['pst']?></td>
                    <td><?php echo $pst['municipalidad']?></td>
                    <td><?php echo $pst['sistema']?></td>
                    <td><?php echo $pst['portal']?></td>
                    <td><?php echo $pst['placa_rol']?></td>
                    <td><?php echo $pst['motivo']?></td>
                    <td><?php echo $pst['fecha_transaccion']?></td>
                    <td><?php echo $pst['fecha_ingreso']?></td>
    </tr>
       

<?php endforeach ?>
</tbody>
</table>