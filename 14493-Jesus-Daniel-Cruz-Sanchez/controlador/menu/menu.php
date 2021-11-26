<?php
session_start();
if ($_SESSION['tipo_usuario'] == 1) {
  echo '
  <li class="nav-item">
    <a class="nav-link" href="home"> Pagina de inicio
    <span>
  </li>
  ';
}
 ?>
