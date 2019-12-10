<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label for="address" class="h5">Orden de Compra</label>
            <input type="text" id="pst" name="pst" class="form-control"/>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="address" class="h5">Fecha Regeneracion</label>
            <!--<input type="text" id="fecha" name="fecha" class="form-control"/>-->
            <input type="date" id="fecha" name="fecha" max="3000-12-31" min="1000-01-01" class="form-control">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="address" class="h5">Motivo </label>
            <textarea name="motivo" id="motivo" cols="80" rows="3" class="form-control"></textarea>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="address" class="h5">Municipalidad </label>
            <select class="form-control">
                <option></option>
                <?php
                
                   // echo '<option>'.$var.'</option>';
                ?>
            </select>
        </div>
    </div>     
</div>
<div class="col">
        <input type="button" id="enviar" name="enviar" value="Guardar PST" class="btn btn-success" />
</div>
<div id="resultado"></div>
<script>
   /* $("#enviar").click(function(event) {
    $("#container").load("vista/listadoPST.php", function(response, status, xhr) {
        if (status == "error") {
            var msg = "Error!, algo ha sucedido: ";
            $("#container").html(msg + xhr.status + " " + xhr.statusText);
        }
    });
});*/
</script>