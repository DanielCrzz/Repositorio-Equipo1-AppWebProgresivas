function ver_tabla() {
		$.ajax({
			url: "tbl_users",
			type: 'POST',
			data: { ver_tabla_user: "ok"},
			success: function(resp) {
				document.getElementById("tabla_usuarios").innerHTML = resp;
				$(document).ready(function() {
			    $('#example').DataTable();
				});
			}

		});
}