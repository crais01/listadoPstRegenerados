<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label for="portal" class="h5">Sistema</label>
            <input type="text" id="sistema" name="sistema" class="form-control"/>
        </div>
    </div> 
</div>
<div class="col">
        <input type="button" id="enviar" name="enviar" value="Guardar PST" class="btn btn-success" />
</div>
<div id="resultado"></div>
<div id="listadosistema"></div>
<script>
$("#enviar").click(function(event) {
    var sistema = document.getElementById('sistema').value;

    $("#resultado").load("controlador/c_agregarSistema.php",{sis:sistema}, function(response, status, xhr) {
        if (status == "error") {
            var msg = "Error!, algo ha sucedido: ";
            $("#resultado").html(msg + xhr.status + " " + xhr.statusText);
        }
    });
    var cont = 0;
    var id = setInterval(function(){
        $("#listadosistema").load("controlador/c_listarSistema.php.php");
        cont++;
        if(cont == 1) 
        {
            clearInterval(id);
        }
    }, 1000); 
});
$("#listadosistema").load("controlador/c_listarSistema.php", function(response, status, xhr) {
        if (status == "error") {
            var msg = "Error!, algo ha sucedido: ";
            $("#sistema").html(msg + xhr.status + " " + xhr.statusText);
        }
});
</script>