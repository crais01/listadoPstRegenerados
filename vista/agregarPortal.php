<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label for="portal" class="h5">Portal</label>
            <input type="text" id="portal" name="portal" class="form-control"/>
        </div>
    </div> 
</div>
<div class="col">
        <input type="button" id="enviar" name="enviar" value="Guardar PST" class="btn btn-success" />
</div>
<div id="resultado"></div>
<div id="listadoportal"></div>
<script>
$("#enviar").click(function(event) {
    var portal = document.getElementById('portal').value;

    $("#resultado").load("controlador/c_agregarPortal.php",{por:portal}, function(response, status, xhr) {
        if (status == "error") {
            var msg = "Error!, algo ha sucedido: ";
            $("#resultado").html(msg + xhr.status + " " + xhr.statusText);
        }
    });
    var cont = 0;
    var id = setInterval(function(){
        $("#listadoportal").load("controlador/c_listarPortal.php");
        cont++;
        if(cont == 1) 
        {
            clearInterval(id);
        }
    }, 1000); 
});
$("#listadoportal").load("controlador/c_listarPortal.php", function(response, status, xhr) {
        if (status == "error") {
            var msg = "Error!, algo ha sucedido: ";
            $("#listadoportal").html(msg + xhr.status + " " + xhr.statusText);
        }
    });
</script>