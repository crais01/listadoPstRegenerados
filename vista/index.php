<?php include('header.php'); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <!--<span id="agregar" class="nav-link">Agregar PST</span>-->
        <a id="agregar" class="nav-link" style="cursor: pointer">Agregar PST</a>
      </li>
      <li class="nav-item">
        <a id="listado" class="nav-link" style="cursor: pointer">Listado</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="cursor: pointer"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" style="cursor: pointer"></a>
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
    $("#container").load("vista/listadoPST.php", function(response, status, xhr) {
        if (status == "error") {
            var msg = "Error!, algo ha sucedido: ";
            $("#container").html(msg + xhr.status + " " + xhr.statusText);
        }
    });
});

</script>
