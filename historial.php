<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pasteles en linea</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Google Fonts -->
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
  <link rel="stylesheet" href="css/mdb.min.css">

  <!-- Calendar resources -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<script>
  $(function() {
    $('#datepicker').datepicker({
      onSelect: function(dateText) {
        $('#datepicker2').datepicker("setDate", $(this).datepicker("getDate"));
      }
    });
  });

  $(function() {
    $("#datepicker2").datepicker();
  });
</script>

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
        <input type="search" class="form-control2 rounded" placeholder="Buscar..." aria-label="Search" aria-describedby="search-addon" />
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

  <h2 class="text-center pt-3">
    Historial
    <small class="text-muted">de pedidos</small>
  </h2>
  <hr>
  </hr>



  <div class="grey-bg container-fluid">
    <section id="minimal-statistics"></section>
    <div class="row">
      <div class="col-sm-2 text-right">
        <h4><strong>Pedidos</strong></h4>
      </div>

      <div class="col-sm-2 text-right">
        <h6>Ver pedidos de:</h6>
      </div>
      <div class="col-sm-3 text-left">
        <div class="form-group">
          <select class="form-control-sm" id="exampleFormControlSelect1">
            <option>Ultimos 60 dias</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
      </div>

      <div class="col-sm-2 text-right">
        <h6>Filtar por: </h6>
      </div>
      <div class="col-sm-3 text-left">
        <div class="form-group">
          <select class="form-control-sm" id="exampleFormControlSelect1">
            <option>Todos</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
      </div>
    </div>
  </div>

  <br>
  <!-- los productos -->

  <div class="grey-bg container-fluid">
    <div class="card3">
      <span class="badge badge-pill badge-dark">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 font-weight-light text-left">
              Pedido: <strong>08-058-154-47893</strong>
            </div>
          </div>
        </div>
      </span>
      <div class="card-content">
        <div class="card-body">
          <div class="media d-flex">
            <div class="media-body text-left">
              <div class="row">
                <div class="col-12 col-md-12 align-items-stretch">
                  <div class="card3">
                    <div class="rightCircle text-center fa-fw">
                      <i class="fas fa-birthday-cake fa-2x" aria-hidden="true"></i>
                    </div>
                    <div class="card-content">
                      <div class="card-body">
                        <div class="media d-flex pl-3">
                          <div class="align-self-center">
                            <i class="icon-speech warning font-large-2 float-left"></i>
                          </div>
                          <div class="media-body text-left pt-4">
                            <div class="container">
                              <div class="row">
                                <div class="col-sm-3 text-left">
                                  Fecha del pedido
                                </div>
                                <div class="col-sm-3 text-left">
                                  Importe total
                                </div>
                                <div class="col-sm-3 text-left">
                                  Empleado
                                </div>
                                <div class="col-sm-3 text-left">

                                </div>
                              </div>
                            </div>
                            <hr>
                            </hr>

                            <!-- aqui for -->
                            <div class="container">
                              <div class="row">
                                <div class="col-sm-3 text-left">
                                  02/09/2021
                                </div>
                                <div class="col-sm-3 text-left">
                                  <strong>$100.00</strong>
                                </div>
                                <div class="col-sm-3 text-left">
                                  Josué David Constanza
                                </div>
                                <div class="col-sm-3 text-left">
                                  <button type="button" class="btn float-right pe-auto">Ver datos</button>
                                </div>
                              </div>

                              <div class="row">
                              <div class="col-sm-6 text-left p-2">
                                  <div class="font-weight-light text-justify">
                                    <div class="alert alert-primary" role="alert">
                                      Plazo previsto de entrega: <strong>ju. 6 sep. - mi. 16 oct.</strong>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-6 text-left p-2">
                                  <p>Estado del articulo: Finalizado</p>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-12 align-items-stretch">
            <div class="grey-bg container-fluid p-3">
              <div class="card3">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="media-body text-left">
                        <div class="container">
                          <div class="row">
                            <div class="col-sm-2 text-left pl-1">
                              <img src="https://preppykitchen.com/wp-content/uploads/2019/06/Chocolate-cake-recipe-1200a.jpg" alt="..." class="img-responsive">
                            </div>
                            <div class="col-6 font-weight-light text-left">
                              <strong>Pastel de chocolate clásico</strong>
                              <div class="font-weight-light text-justify">
                                Torta de chocolate remojada en sirope con un delicioso relleno de chocolate con trozos de chocolate, cobertura de chocolate, decorado con fresas bañadas chocolate.
                              </div>
                            </div>
                            <div class="col-sm-1 font-weight-light text-right">
                              <p>Cantidad</p>
                              <strong>1 Uni.</strong>

                            </div>
                            <div class="col-sm-1 font-weight-light text-right">
                              <p>Precio</p>
                              <strong>$50.00</strong>
                            </div>

                            <div class="col-sm-2 font-weight-light text-right">
                              <button type="button" class="btn float-right pe-auto">Acciones</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-12 align-items-stretch">
            <div class="grey-bg container-fluid p-3">
              <div class="card3">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="media-body text-left">
                        <div class="container">
                          <div class="row">
                            <div class="col-sm-2 text-left pl-1">
                              <img src="https://preppykitchen.com/wp-content/uploads/2019/06/Chocolate-cake-recipe-1200a.jpg" alt="..." class="img-responsive">
                            </div>
                            <div class="col-6 font-weight-light text-left">
                              <strong>Pastel de chocolate clásico</strong>
                              <div class="font-weight-light text-justify">
                                Torta de chocolate remojada en sirope con un delicioso relleno de chocolate con trozos de chocolate, cobertura de chocolate, decorado con fresas bañadas chocolate.
                              </div>
                            </div>
                            <div class="col-sm-1 font-weight-light text-right">
                              <p>Cantidad</p>
                              <strong>1 Uni.</strong>

                            </div>
                            <div class="col-sm-1 font-weight-light text-right">
                              <p>Precio</p>
                              <strong>$50.00</strong>
                            </div>

                            <div class="col-sm-2 font-weight-light text-right">
                              <button type="button" class="btn float-right pe-auto">Acciones</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <!-- otro producto -->



    <br>
    <div class="container-fluid bg-dark text-center p-3">
      <p class="">&copy; Todos los derechos reservados - Universidad de El Salvador</p>
    </div>

    <!-- jQuery -->
    <script src="admin/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="admin/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- daterangepicker -->
    <script src="admin/plugins/moment/moment.min.js"></script>
    <script src="admin/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- AdminLTE App -->
    <script src="admin/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="admin/dist/js/demo.js"></script>
    <!-- Para el datepicker -->
</body>

</html>