<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label for="address" class="h5">Orden de Compra</label>
            <input type="text" id="pst" name="pst" class="form-control"/>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="pr" class="h5">Placa o Rol</label>
            <input type="text" id="pr" name="pr" class="form-control"/>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="address" class="h5">Portal</label>
            <select id='portal' name='portal' class="form-control">
                <option></option>
                <?php
                    include('../controlador/c_traerPortal.php');
                ?>
            </select>
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
    <div class="col-6">
        <div class="form-group">
            <label for="address" class="h5">Municipalidad </label>
            <select id='municipalidad' name='municipalidad' class="form-control">
                <option></option>
                <?php
                    include('../controlador/c_traerMunicipio.php');
                ?>
            </select>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="fecha" class="h5">Fecha Transaccion</label>
            <input type="date" id="fecha" name="fecha" class="form-control"/>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="address" class="h5">Motivo </label>
            <textarea name="motivo" id="motivo" cols="80" rows="3" class="form-control"></textarea>
        </div>
    </div>     
</div>
<div class="col">
        <input type="button" id="enviar" name="enviar" value="Guardar PST" class="btn btn-success" />
</div>
<div id="resultado"></div>
<script>

$("#enviar").click(function(event) {
    var ordenCompra = document.getElementById('pst').value;
    var placaRol = document.getElementById('pr').value;
    var portal = document.getElementById('portal').value;
    var sistema = document.getElementById('sistema').value;
    var municipalidad = document.getElementById('municipalidad').value;
    var ftransaccion = document.getElementById('fecha').value;
    var motivo = document.getElementById('motivo').value;
  
    $("#resultado").load("controlador/c_agregarPST.php",{pst:ordenCompra,sis:sistema,muni:municipalidad,motivo:motivo,pr:placaRol,por:portal,ft:ftransaccion}, function(response, status, xhr) {
        if (status == "error") {
            var msg = "Error!, algo ha sucedido: ";
            $("#resultado").html(msg + xhr.status + " " + xhr.statusText);
        }
    });
});
</script>