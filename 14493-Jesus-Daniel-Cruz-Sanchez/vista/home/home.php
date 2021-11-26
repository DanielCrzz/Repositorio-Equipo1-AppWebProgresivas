<?php
  include("../menu/top.php");
?>

<div class="container text-center mt-lg-5">
  <h3>Tabla de usuarios</h3>
</div>
<div class="row">
  <div class="col-6">
    <div id="tabla_usuarios"></div>
  </div>
  <div class="col-6">
    <button class="btn btn-info">Ver tabla</button>
    <button class="btn btn-primary">Agregar usuario</button>
    <button class="btn btn-warning">Modificar usuario</button>
    <button class="btn btn-danger">Eliminar usuario</button>
  </div>
</div>

<script src="configuraciones\js\tabla_usuarios\tbl_usuarios.js"></script>

<?php
  include("../menu/bot.php");
?>
