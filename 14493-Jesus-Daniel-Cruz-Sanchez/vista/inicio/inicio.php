<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi Proyecto <?php echo date("d-m-Y"); ?></title>
  <link href="configuraciones/css/bootstrap.min.css" rel="stylesheet">
  <link href="configuraciones/css/styles.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Mi proyecto</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="#">Iniciar Sesion
              <span class="visually-hidden">(actual)</span>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav ms-md-auto">
          <li>
            <form class="d-flex">
              <input class="form-control me-sm-2" type="text" placeholder="Buscar">
              <button class="btn btn-outline-primary my-sm-0" type="submit">Buscar</button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <center>
        <h1>Inicio de Sesion</h1>
      </center>
    </div>
    <!-- inicio de sesion-->
    <div class="row" style="margin-top: 20px">
      <!--Incio sesion Usuario-->
      <div class="col-md-3 offset-md-3">
        <div class="card" style="margin-right: 20px;">
          <img class="card-img-top" src="configuraciones/imagenes/admin.png" alt="Card image" style="width:100%;">
          <div class="card-body">
            <h4 class="card-title">Usuario</h4>
            <p class="card-text">Si eres un usuario, deberas iniciar sesion aqui</p>
            <a href="#" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#modal_login_user">Iniciar Sesion</a>
          </div>
        </div>
      </div>
      <!--Incio sesion Admin-->
      <div class="col-md-3">
        <div class="card" style="margin-left: 20px;">
          <img class="card-img-top" src="configuraciones/imagenes/usuario.png" alt="Card image" style="width:100%;padding:22px">
          <div class="card-body">
            <h4 class="card-title">Administrador</h4>
            <p class="card-text">Si eres administrador, inicia sesion aqui</p>
            <a href="#" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#modal_login_admin">Iniciar Sesion</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>

  <!-- Modal Usuario -->
  <div class="modal fade" id="modal_login_user">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h5 class="modal-title text-center">Usuario</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label" for="user">Correo:</label>
            <input type="text" class="form-control" placeholder="Ingrese su Correo" id="user">
          </div>
          <div class="mb-3">
            <label class="form-label" for="user_password">Contraseña:</label>
            <input type="password" class="form-control" placeholder="Ingrese su Contraseña" id="user_password">
          </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-success" onclick="login_usuario()">Ingresar</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Admin -->
  <div class="modal fade" id="modal_login_admin">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h5 class="modal-title text-center">Administrador</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label" for="admin">Correo:</label>
            <input type="text" class="form-control" placeholder="Ingrese su Correo" id="admin">
          </div>
          <div class="mb-3">
            <label class="form-label" for="admin_password">Contraseña:</label>
            <input type="password" class="form-control" placeholder="Ingrese su Contraseña" id="admin_password">
          </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-success" onclick="login_administrador()">Ingresar</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <div class="alert alert-dismissible alert-danger fade" id="error_alert">
    <p id="msg_error"></p>
  </div>

  <div class="alert alert-dismissible alert-success fade" id="success_alert">
    <p id="msg_success"></p>
  </div>

  <script src="configuraciones/js/login/login.js"></script>
  <script src="configuraciones/js/acciones/alerts.js"></script>
</body>

</html>
