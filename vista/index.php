<?php include('header.php'); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a id="listado" class="nav-link" style="cursor: pointer">Listado</a>
      </li>
      <li class="nav-item">
        <a id="agregar" class="nav-link" style="cursor: pointer">Agregar PST</a>
      </li>
      <li class="nav-item">
        <a id="agregarMuni" class="nav-link" style="cursor: pointer">Agregar Municipio</a>
      </li>
      <li class="nav-item">
        <a id="agregarPor" class="nav-link" style="cursor: pointer">Agregar Portal</a>
      </li>
      <li class="nav-item">
        <a id="agregarSis" class="nav-link" style="cursor: pointer">Agregar Sistema</a>
      </li>
    </ul>
  </div>
</nav>
<div id="container" class="container">
</div>
<?php include('footer.php'); ?>
<script>
$("#agregar").click(function(event) {
    $("#container").load("vista/agregarPST.php", function(response, status, xhr) {
        if (status == "error") {
            var msg = "Error!, algo ha sucedido: ";
            $("#container").html(msg + xhr.status + " " + xhr.statusText);
        }
    });
});
$("#listado").click(function(event) {
    $("#container").load("controlador/c_listadoPST.php", function(response, status, xhr) {
        if (status == "error") {
            var msg = "Error!, algo ha sucedido: ";
            $("#container").html(msg + xhr.status + " " + xhr.statusText);
        }
    });
});
$("#agregarMuni").click(function(event) {
    $("#container").load("vista/agregarMunicipio.php", function(response, status, xhr) {
        if (status == "error") {
            var msg = "Error!, algo ha sucedido: ";
            $("#container").html(msg + xhr.status + " " + xhr.statusText);
        }
    });
});
$("#agregarPor").click(function(event) {
    $("#container").load("vista/agregarPortal.php", function(response, status, xhr) {
        if (status == "error") {
            var msg = "Error!, algo ha sucedido: ";
            $("#container").html(msg + xhr.status + " " + xhr.statusText);
        }
    });
});
$("#agregarSis").click(function(event) {
    $("#container").load("vista/agregarSistema.php", function(response, status, xhr) {
        if (status == "error") {
            var msg = "Error!, algo ha sucedido: ";
            $("#container").html(msg + xhr.status + " " + xhr.statusText);
        }
    });
});
</script>
