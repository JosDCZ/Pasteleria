<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pasteles en linea con amors</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Courgette">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="admin/plugins/daterangepicker/daterangepicker.css">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="dist/css/bootstrap.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="dist/css/mdb.min.css">
</head>

<body>

 <!--Navbar-->
 <nav class="navbar navbar-expand-lg navbar-dark purple-gradient border border-bottom" aria-label="Ninth navbar example" style="background: linear-gradient(to top, #f97289, #fb4669);">

<div class="container-xl">
  <a class="navbar-brand" href="#">
    <img src="images/logo.png" alt="" width="30" height="24" class="d-inline-block align-middle mr-2">
  </a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pe-auto">
      <!-- Dropdown -->
      <li class="nav-item dropdown pe-auto ">
        <a class="nav-link dropdown-toggle pe-auto" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catálogo</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Pasteles de cumpleaños</a>
          <a class="dropdown-item" href="#">Pasteles de boda</a>
          <a class="dropdown-item" href="#">Pasteles personalizados</a>
        </div>
      </li>
    </ul>
    <input type="search" class="form-controlcenter rounded" placeholder="Buscar..." aria-label="Search" aria-describedby="search-addon" />
    <button href="#" class="btn2 float-right pe-auto"><i class="fa fa-search"></i></button>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Mis pedidos |</a>
        </li>
        <li class="nav-item me-3 me-lg-0">
          <a class="nav-link" href="#">
            <i class="fas fa-shopping-cart"></i>
          </a>
        </li>
        <li class="nav-item me-3 me-lg-0">
          <a class="nav-link disabled" href="#">|</a>
        </li>
        <li class="nav-item me-3 me-lg-0">
          <a class="nav-link" href="#">
            <i class="fas fa-user"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
</nav>
<!--/.Navbar-->
  <br>
  <div>
    <div class="jumbotron bg-dark text-center">
              <h1 class="display-3">E-CAKE</h1>
              <p class="lead">Pasteles en linea</p>
    </div>
  </div>
  

  <h2 class="text-center">
    Los mejores pasteles hechos con
    <small class="text-muted">amor y dedicación...</small>
  </h2>
  <br>
  <!--/.Carusel-->
 <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/ecommerce/admin/imagenes/postres2.jpg" class="d-block w-100" alt=""
          style="height: 300px">
        </div>
        <div class="carousel-item">
          <img src="/ecommerce/admin/imagenes/postres3.png" class="d-block w-100" alt=""
          style="height: 300px">
        </div>

        <div class="carousel-item">
          <img src="/ecommerce/admin/imagenes/postres2.jpg" class="d-block w-100" alt=""
          style="height: 300px">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  <div class="container">
    <h5>
      <br></br>Elige una categoría de pasteles y ¡busca tu favorito!
      <hr/>
    </h5>
    <nav class="nav nav-pills nav-fill">
      <a class="nav-item nav-link   " href="#">Categorías</a>
      <a class="nav-item nav-link" href="#">Cumpleaños</a>
      <a class="nav-item nav-link" href="#">Bodas</a>
      <a class="nav-item nav-link" href="#">15 Años</a>
      <a class="nav-item nav-link" href="#">Personalizados</a>
      <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Otros...</a>
    </nav>
    <hr/>
    <div class="row">
      <div class="col-12">

        <div class="row mt-3">
          <?php
          include_once "admin/dbEcommerce.php";
          $con = mysqli_connect($host, $user, $pass, $db);
          $agg = " WHERE 1=1 ";
          $nombre = $_REQUEST['nombre'] ?? '';
          if (empty($nombre) == false) {
            # code...
            $agg = "WHERE 1=1 AND nombre like '%" . $nombre . "%'";
          }
          $query = "SELECT idProd, nombre, precio, existencia, ruta, tipo FROM productos $agg";
          $res = mysqli_query($con, $query);
          while ($row = mysqli_fetch_assoc($res)) {
            # code...
            $precio = $row['precio'];
            $precioEnvio = $precio + 5;
          ?>
            <div class="col-lg-4 col-xl-4 col-md-6 col-sm-12 pb-2">
              <div class="card2 border border-info2 shadow p-3 mb-5 bg-white rounded ">
                <img class="card-img-top img-thumbnail" src="<?php echo $row['ruta'] ?>" alt="" style="height: 300px">

                <p class="card-header text-center"><strong><?php echo $row['nombre'] ?></strong></p>
                <div class="card-body text-center">
                  <a href="#" class="btn btn-info">Ver producto</a>
                </div>
              </div>
            </div>

          <?php
          }
          ?>
        </div>
      </div>

    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-6">
      <img class="card-img-top img-thumbnail" src="/ecommerce/admin/imagenes/tres leches.jpg" alt="" style="height: 300px">
      </div>

      <div class="col-6">
      <blockquote class="blockquote">
          <p class="mb-0">Elaboramos nuestros postres con amor y dedicación para que puedan ser parte de tu celebración.
            Cada uno de nuestros productos es elaborado con el mejor estándar en sabor y calidad, hoy mas que nunca 
            estamos contigo para hacer de tus momentos especiales una celebración inolvidable.</p>
          <footer class="blockquote-footer">E-CAKE <cite title="Source Title">, pastelería.</cite></footer>
      </blockquote>
      </div>
    </div>
  </div>

  <br><br>
  <br><br>
  
  <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-sm-12">
              
                      <div class="card3">
                        <div class="rightCircle text-center fa-fw">
                          <i class="fas fa-address-card fa-2x" aria-hidden="true"></i>
                        </div>
                        <div class="card-content">
                          <div class="card-body">
                            <div class="media d-flex pl-3">
                              <div class="align-self-center">
                                <i class="icon-speech warning font-large-2 float-left"></i>
                              </div>
                              <div class="media-body text-left pt-4">
                                <h5>CONTACTO</h5>
                                <hr>
                                </hr>
                                <p><strong>Casa Matriz</strong></p>
                                Alam. Manuel E. Araujo y Av. Olimpica, C.C El Rosario, local #1
                              </div>
                            </div>

                            <div class="media d-flex pl-3">
                              <div class="align-self-center">
                                <i class="icon-speech warning font-large-2 float-left"></i>
                              </div>
                              <div class="media-body text-left pt-4">
                                <h5>HORARIOS</h5>
                                <hr>
                                </hr>
                                <p><strong>Lunes a Sábado</strong></p>
                                8:00 AM - 6:00 PM
                              </div>
                            </div>

                            <div class="media d-flex pl-3">
                              <div class="align-self-center">
                                <i class="icon-speech warning font-large-2 float-left"></i>
                              </div>
                              <div class="media-body text-left pt-4">
                                <h5>Teléfono y Redes Sociales</h5>
                                <hr>
                                </hr>
                                <p><strong>Whatsapp</strong></p>
                                (+503) 7475-0000
                                <br><br>

                                <p><strong>Facebook</strong></p>
                                ECAKE OFICIAL
                              </div>
                            </div>
                          </div>
                        </div>
                        <span class="badgesmall badge-pill te badge-dark text-dark"> </span>
                        <span class="badgeb badge-pill badge-light text-light"> </span>
                  </div>
              </div>
          </div>
    </div>
<br>
    <div class="container">
      <div class="row">
        
      <div class="col-6">
           <div class="jumbotron bg-dark text-center">
              <h1 class="display-3">E-CAKE</h1>
              <p class="lead">Pasteles en linea</p>
           </div>
          </div>

          <div class="col-6">
           <div class="jumbotron bg-tema text-center">
              <h1 class="display-3">E-CAKE</h1>
              <p class="lead">Pasteles en linea</p>
           </div>
          </div>
        </div>
    </div>


  <div class="container-fluid bg-dark text-center p-3">
    <p class="">&copy; Todos los derechos reservados - Universidad de El Salvador</p>
  </div>

  <!-- jQuery -->
  <script src="admin/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="admin/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  <!-- daterangepicker -->
  <script src="admin/plugins/moment/moment.min.js"></script>
  <script src="admin/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- AdminLTE App -->
  <script src="admin/dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="admin/dist/js/demo.js"></script>
</body>

</html>
