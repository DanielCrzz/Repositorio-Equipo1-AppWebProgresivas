function agregar() {
    var datos = new FormData();
    var name = document.getElementById('agrega_name').value;
    var price = document.getElementById('agrega_price').value;
    datos.append("name", name)
    datos.append("price", price)

    Swal.fire({
        title: 'Alerta!',
        text: 'Deseas agregar el producto ' + name + 'por el precio ' + price,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Continuar',
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "../../controlador/agregar.php",
                type: "POST",
                processData: false,
                contentType: false,
                data: datos,
                success: function(resp) {
                    var respuesta = JSON.parse(resp);
                    if (respuesta.status == "1") {
                        Swal.fire(
                            'Exito!',
                            'Se ha agregado correctamente',
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