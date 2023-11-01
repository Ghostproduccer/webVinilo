<?php
$username2 = $_GET["user"];
?>
<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Catálogo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/pedido.css">
  <link rel="stylesheet" href="/css/fuente.css">
</head>

<body>
  <header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="/index.html"><img src="/media/logoq1.webp" alt="" width="25" height="24"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">

            <li class="nav-item">
              <a class="nav-link active" href="#">Pedido</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Datos de pago</a>
            </li>

          </ul>

          <ul class="navbar-nav ms-auto mb-2 mb-md-0">

            <li class="nav-item ms-auto">
              <a class="nav-link active" href="#">Bienvenido, <?= $username2 ?></a>
            </li>
            <li>
              <a class="navbar-brand btn btn-outline-danger" href="/php/iniciosesion.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
                  <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"></path>
                  <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z"></path>
                </svg></a>
            </li>

          </ul>

        </div>
      </div>
    </nav>
  </header>
  <!-- Begin page content -->
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <br><br><br>
      </div>

      <div class="col-sm-4">

        <div class="card-deck mb-3 text-center">
          <div class="card mb-4 box-shadow">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">BBBLP002 </h4>
            </div>
            <div class="card-body">
              <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="/media/volruptus firstcontact1.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="/media/volruptus firstcontact2.jpg" class="d-block w-100" alt="...">
                  </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              <br>
              <br>
              <h3 class="card-title pricing-card-title">20€</h3>
              <br>
              <button type="button" class="btn btn-lg btn-block btn-outline-secondary" id="add-to-cart">Añadir al
                carrito</button>
              <br>
              <br>
            </div>
          </div>
        </div>
      </div>


      <div class="col-sm-4">

        <div class="card-deck mb-3 text-center">
          <div class="card mb-4 box-shadow">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">REVENGE4</h4>
            </div>
            <div class="card-body">
              <div id="carouselExample1" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="/media/The TAFKAMP Club Experience Vol. 1.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="/media/The TAFKAMP Club Experience Vol. 2.jpg" class="d-block w-100" alt="...">
                  </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample1" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample1" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              <br>
              <br>
              <h3 class="card-title pricing-card-title">€14</h3>
              <br>
              <button type="button" class="btn btn-lg btn-block btn-outline-secondary">Añadir al carrito</button>
              <br>
              <br>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-4">

        <div class="card-deck mb-3 text-center">
          <div class="card mb-4 box-shadow">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">PALING004</h4>
            </div>
            <div class="card-body">
              <div id="carouselExample3" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="/media/Tafkamp Alex Ranzino Paling Trax 4.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="/media/Tafkamp Alex Ranzino Paling Trax 4 2.jpg" class="d-block w-100" alt="...">
                  </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample3" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample3" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              <br>
              <br>
              <h3 class="card-title pricing-card-title">€12</h3>
              <br>
              <button type="button" class="btn btn-lg btn-block btn-outline-secondary">Añadir al carrito</button>
              <br>
              <br>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-4">

        <div class="card-deck mb-3 text-center">
          <div class="card mb-4 box-shadow">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">RLOVE005</h4>
            </div>
            <div class="card-body">
              <div id="carouselExample4" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="/media/byron yeates1.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="/media/byron yeates2.jpg" class="d-block w-100" alt="...">
                  </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample4" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample4" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              <br>
              <br>
              <h3 class="card-title pricing-card-title">€15</h3>
              <br>
              <button type="button" class="btn btn-lg btn-block btn-outline-secondary">Añadir al carrito</button>
              <br>
              <br>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-4">

        <div class="card-deck mb-3 text-center">
          <div class="card mb-4 box-shadow">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">MASA001</h4>
            </div>
            <div class="card-body">
              <div id="carouselExample8" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="/media/MASA001.jpg" class="d-block w-100" alt="...">
                  </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample8" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample8" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              <br>
              <br>
              <h3 class="card-title pricing-card-title">€17</h3>
              <br>
              <button type="button" class="btn btn-lg btn-block btn-outline-secondary">Añadir al carrito</button>
              <br>
              <br>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-4">

        <div class="card-deck mb-3 text-center">
          <div class="card mb-4 box-shadow">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">SRTX008</h4>
            </div>
            <div class="card-body">
              <div id="carouselExample5" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="/media/Luca lozano outer space 1.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="/media/Luca lozano outer space 2.jpg" class="d-block w-100" alt="...">
                  </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample5" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample5" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              <br>
              <br>
              <h3 class="card-title pricing-card-title">€10</h3>
              <br>
              <button type="button" class="btn btn-lg btn-block btn-outline-secondary">Añadir al carrito</button>
              <br>
              <br>
            </div>
          </div>
        </div>
      </div>
    </div>
    <form action="/pago.html">
      <button class="w-100 btn btn-secondary btn-lg" type="submit">Continuar</button>
    </form>
    <footer class="pt-4 my-md-5 pt-md-5 border-top">
      <div class="row">
        <div class="col-12 col-md">
          <small class="d-block mb-3 text-muted">&copy; Bruno Rodríguez</small>
        </div>

        <div class="col-md container">
          <small class="d-block mb-3">&copy; Bruno Rodríguez</small>
        </div>
      </div>
    </footer>
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>