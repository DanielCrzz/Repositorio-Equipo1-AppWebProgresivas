<?php  
include("../../modelo/mdl_tbl_usuarios.php");
$obj = new tablas();

if (isset($_POST['ver_tabla_user'])){
	$resultado = $obj -> ver_tabla_usuarios();
	echo '
	<table id="example" class="display nowrap" style="width:100%">
	<thead>
	<tr>
    <th>Nombre</th>
    <th>Correo</th>
    <th>Contraseña</th>
    <th>Tipo de usuario</th>
    </tr>
    </thead>
    <tbody>
	';

	foreach ($resultado as $r) {
		echo '
            <tr>
                <td>'.$r['usuario_nombre'].'</td>
                <td>'.$r['usuario_correo'].'</td>
                <td>'.$r['usuario_contrasena'].'</td>
                <td>'.$r['usuario_nivel'].'</td>
            </tr>
		';
	}

	echo '
	</tbody>
	</table>
	';

	echo "<script>$('#example').DataTable( {
    responsive: true } );</script>";

}else{
	echo "no";
}
?>