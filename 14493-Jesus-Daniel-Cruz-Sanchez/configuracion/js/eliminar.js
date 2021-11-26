function eliminar(id, name) {
    var datos = new FormData();
    datos.append("id", id)

    Swal.fire({
        title: 'Alerta!',
        text: 'Deseas eliminar el producto ' + name ,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Continuar',
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "../../controlador/eliminar.php",
                type: "POST",
                processData: false,
                contentType: false,
                data: datos,
                success: function(resp) {
                    var respuesta = JSON.parse(resp);
                    if (respuesta.status == "1") {
                        Swal.fire(
                            'Exito!',
                            'Se ha eliminado correctamente',
                            'success'
                        ).then((result) => {
                            location.reload();
                        })
                    }
                }

            });
        }
    })
}