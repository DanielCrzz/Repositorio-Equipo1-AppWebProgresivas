<?php
include("../../modelo/mdl_usuarios.php");
$obj = new tablas();

if(isset($_POST['ver_tabla_users'])){
  $resultado = $obj ->ver_tabla_usuarios();
  echo'
  
  ';
}
?>
