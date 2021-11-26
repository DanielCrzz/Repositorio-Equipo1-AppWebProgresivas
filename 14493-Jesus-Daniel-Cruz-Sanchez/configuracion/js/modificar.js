function modificar(id, name, description ) {
    var datos = new FormData();
    datos.append("id", id)
    datos.append("name", name)
    datos.append("description", description)


    Swal.fire({
        title: 'Alerta!',
        text: 'Deseas modificar el producto ' + name,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Continuar',
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "../../controlador/modificar.php",
                type: "POST",
                processData: false,
                contentType: false,
                data: datos,
                success: function(resp) {
                    var respuesta = JSON.parse(resp);
                    if (respuesta.status == "1") {
                        Swal.fire(
                            'Exito!',
                            'Se ha modificado correctamente',
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