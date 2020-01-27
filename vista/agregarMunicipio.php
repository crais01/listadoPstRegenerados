<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label for="codmun" class="h5">Codigo Municipalidad</label>
            <input type="text" id="codmun" name="codmun" class="form-control"/>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
        <div class="form-group">
            <label for="nommun" class="h5">Nombre Municipalidad</label>
            <input type="text" id="nommun" name="nommun" class="form-control"/>
        </div>
        </div>
    </div>
    
</div>
<div class="col">
        <input type="button" id="enviar" name="enviar" value="Agregar Municipio" class="btn btn-success" />
</div>
<div id="resultado"></div>
<div id="municipalidad"></div>
<script>
$("#enviar").click(function(event) {
    var nombreMunicipalidad = document.getElementById('nommun').value;
    var codigoMunicipalidad = document.getElementById('codmun').value;
    
    $("#resultado").load("controlador/c_agregarMunicipio.php",{codmun:codigoMunicipalidad,nommun:nombreMunicipalidad}, function(response, status, xhr) {
        if (status == "error") {
            var msg = "Error!, algo ha sucedido: ";
            $("#resultado").html(msg + xhr.status + " " + xhr.statusText);
        }
    });
});
$("#municipalidad").load("controlador/c_listarMunicipio.php", function(response, status, xhr) {
        if (status == "error") {
            var msg = "Error!, algo ha sucedido: ";
            $("#municipalidad").html(msg + xhr.status + " " + xhr.statusText);
        }
    });
</script>