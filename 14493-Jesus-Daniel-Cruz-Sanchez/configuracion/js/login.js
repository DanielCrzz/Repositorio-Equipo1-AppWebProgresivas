function registro() {
    var usuario = document.getElementById('usuario').value;
    var pass = document.getElementById('pass').value;
    var nombre = document.getElementById('nombre').value;
    var correo = document.getElementById('correo').value;
    $.ajax({
        url: "../../Controlador/registro.php",
        type: "POST",
        data: "usuario=" + usuario + "&pass=" + pass + "&nombre=" + nombre + "&correo=" + correo,
        success: function(res) {
            var respuesta = JSON.parse(res);
            if (respuesta.status == "1") {
                Swal.fire(
                    'Felicidades!',
                    'TE HAS REGISTRADO EXITOSAMENTE',
                    'success'
                )
            } else {
                Swal.fire(
                    'Error',
                    'HA OCURRIDO UN ERROR',
                    'error'
                )
            }
        }

    });

}

function login() {
    var usuario = document.getElementById('usuario').value;
    var pass = document.getElementById('pass').value;

    if (usuario.length == '0') {
        Swal.fire(
            'Error',
            'INGRESE UN CORREO!',
            'error'
        )
    }
    if (pass.length == '0') {
        Swal.fire(
            'Error',
            'INGRESE UNA CONTRASEÑA!',
            'error'
        )
    } else {
        $.ajax({
            url: "../../controlador/login.php",
            type: "POST",
            data: "usuario=" + usuario + "&pass=" + pass,
            success: function(res) {
                var respuesta = JSON.parse(res);
                if (respuesta.status == "1") {
                    Swal.fire({
                        title: 'Bienvenido',
                        text: 'Has iniciado sesion correctamente',
                        icon: 'success',
                        allowOutsideClick: false,
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Continuar',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.replace(respuesta.url);
                        }
                    })
                } else {
                    Swal.fire(
                        'Error',
                        'USUARIO Y/O CONTRASEÑA INCORRECTOS',
                        'error'
                    )
                }
            }

        });
    }

    console.log(usuario)
    console.log(pass)

}


//document.getElementById('#formulario').css("display", "none");