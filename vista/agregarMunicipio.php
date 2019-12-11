<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label for="address" class="h5">Orden de Compra</label>
            <input type="text" id="pst" name="pst" class="form-control"/>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="address" class="h5">Sistema</label>
            <select id='sistema' name='sistema' class="form-control">
                <option></option>
                <?php
                    include('../controlador/c_traerSistema.php');
                ?>
            </select>
        </div>
    </div>
    
</div>
<div class="col">
        <input type="button" id="enviar" name="enviar" value="Agregar Municipio" class="btn btn-success" />
</div>
<div id="resultado"></div>
<script>
$("#enviar").click(function(event) {
    var ordenCompra = document.getElementById('pst').value;
    var sistema = document.getElementById('sistema').value;
    
    $("#resultado").load("controlador/c_agregarMunicipio.php",{pst:ordenCompra,sis:sistema}, function(response, status, xhr) {
        if (status == "error") {
            var msg = "Error!, algo ha sucedido: ";
            $("#resultado").html(msg + xhr.status + " " + xhr.statusText);
        }
    });
});
</script>