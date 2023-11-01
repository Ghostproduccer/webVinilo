<?php

$mensaje = $_GET["mensaje"];
$error = $_GET["error"];

?>


<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inicio de sesión</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/iniciosesion.css">
  <link rel="stylesheet" href="/css/fuente.css">
</head>

<body>
  <header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="/home.html"><img src="/media/logoq1.webp" alt="" width="25" height="24"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link" href="/Pedido.html">Pedido</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Datos de pago</a>

          </ul>

        </div>
      </div>
    </nav>
  </header>
  <main>
    <div class="container d-flex align-items-center justify-content-center">
      <!-- The video -->
      <video autoplay muted loop id="myVideo2">
        <source src="/media/fondo4.mp4" type="video/mp4">
      </video>
      <br><br>
      <div class="card">
        <div class="card-body p-5">
          <form class="mb-3 mt-md-4 was-validated" action="login.php" method="POST">
            <img src="/media/logo2.png" alt="" class="img-fluid">
            <br><br>
            Para acceder al panel de control: user=admin password=admin
            <br><br>
            <div class="mb-3">
              <label for="user" class="form-label text-light">Usuario</label>
              <input type="text" class="form-control" id="email" placeholder="usuario" name="user" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label text-light">Contraseña</label>
              <input type="password" class="form-control" id="password" placeholder="*******" name="password" required>
            </div>
            <div class="text-danger"><?php echo $error; ?></div>
            <div class="text-success"><?php echo $mensaje; ?></div>
            <p class="small"><a class="text-secondary" href="forget-password.html">¿Has olvidado la contraseña?</a>
            </p>
            <div class="d-grid">
              <button class="btn btn-outline-secondary" type="submit">Iniciar sesión</button>
            </div>
          </form>
          <div>
            <p class="mb-0  text-center text">¿No tienes cuenta? <a href="/registro.html"
                class="text-light fw-bold">Regístrate.</a></p>
          </div>

        </div>
      </div>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>

</html>