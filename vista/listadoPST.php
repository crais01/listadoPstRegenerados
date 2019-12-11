<div class="row">
    <div class="col">
        <table class="table table-sm table-striped">
            <thead>
                <tr class="table-info">
                    <th scope="col">Municipalidad</th>
                    <th scope="col">Sistema</th>
                    <th scope="col">Orden de Compra</th>
                    <th scope="col">Fecha Regeneracion</th>
                    <th scope="col">Motivo</th>
                </tr>
            </thead>
            <tbody id="contianerResultTable">
            </tbody>
        </table>
    </div>
</div>
<script>
    $("#contianerResultTable").load("controlador/c_listadoPST.php", function(response, status, xhr) {
        if (status == "error") {
            var msg = "Error!, algo ha sucedido: ";
            $("#container").html(msg + xhr.status + " " + xhr.statusText);
        }
    });
</script>
