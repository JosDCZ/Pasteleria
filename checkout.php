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
    Confirmación
    <small class="text-muted">de pedido</small>
  </h2>
  <hr>
  </hr>

  <div class="grey-bg container-fluid">
    <section id="minimal-statistics">
      <div class="row">
        <div class="col-12 mt-3 mb-1">
          <h4 class="text-uppercase">Artículos en carretilla</h4>
          <p>2 artículos.</p>
        </div>
      </div>


      <div class="row">
        <div class="col-12 col-md-8 align-items-stretch">
          <!-- aqui for -->
          <div class="card3">
            <span class="badge badge-pill badge-dark">
              <div class="container">
                <div class="row">
                  <div class="col-7 col-sm-6 text-left">
                    Articulo 1 de 2
                  </div>
                  <div class="col font-weight-light text-left pr-5">
                    Sub-total
                  </div>
                  <div class="col font-weight-light text-left pr-4">
                    Cantidad
                  </div>
                  <div class="col font-weight-light text-left pr-4">
                    Total
                  </div>
                </div>
              </div>
            </span>
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="media-body text-left">
                    <div class="container">
                      <div class="row">
                        <div class="col-sm-2 text-left pl-1">
                          <img src="https://www.thespruceeats.com/thmb/W-Ur-ceUIwo0XLyBPzT2VwcwgJU=/1500x1000/filters:fill(auto,1)/gluten-free-new-york-cheesecake-1450985-hero-01-dc54f9daf38044238b495c7cefc191fa.jpg" alt="..." class="img-responsive">
                        </div>
                        <div class="col-4 col-sm-4 pl-sm-5 font-weight-light text-left">
                          <strong>Cheesecake sabor fresa</strong>
                          <div class="form-group">
                            Presentación:
                            <select class="form-control-xs" id="exampleFormControlSelect1">
                              <option>10 Porciones</option>
                              <option>5 Porciones</option>
                              <option>1 Porción</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-2 font-weight-light text-right">
                          $3.00
                        </div>
                        <div class="col-sm-2 font-weight-light text-right">
                          <div class="form-group">
                            <select class="form-control-sm" id="exampleFormControlSelect1">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-2 font-weight-light text-center">
                          $6.00
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                </fieldset>
              </div>
            </div>
          </div>
          <br>
          <!-- fin for -->
          <!-- eliminar esta card luego -->
          <div class="card3">
            <span class="badge badge-pill badge-dark">
              <div class="container">
                <div class="row">
                  <div class="col-7 col-sm-6 text-left">
                    Articulo 1 de 2
                  </div>
                  <div class="col font-weight-light text-left pr-5">
                    Sub-total
                  </div>
                  <div class="col font-weight-light text-left pr-4">
                    Cantidad
                  </div>
                  <div class="col font-weight-light text-left pr-4">
                    Total
                  </div>
                </div>
              </div>
            </span>
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex">
                  <div class="media-body text-left">
                    <div class="container">
                      <div class="row">
                        <div class="col-sm-2 text-left pl-1">
                          <img src="https://recetascheesecake.com/wp-content/uploads/2018/10/cheesecake-de-chocolate.jpg" alt="..." class="img-responsive">
                        </div>
                        <div class="col-4 col-sm-4 pl-sm-5 font-weight-light text-left">
                          <strong>Cheesecake sabor chocolate</strong>
                          <div class="form-group">
                            Presentación:
                            <select class="form-control-xs" id="exampleFormControlSelect1">
                              <option>10 Porciones</option>
                              <option>5 Porciones</option>
                              <option>1 Porción</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-2 font-weight-light text-right">
                          $3.00
                        </div>
                        <div class="col-sm-2 font-weight-light text-right">
                          <div class="form-group">
                            <select class="form-control-sm" id="exampleFormControlSelect1">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-2 font-weight-light text-center">
                          $6.00
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                </fieldset>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-4 col-sm pt-sm-5 pt-lg-0">
          <div class="card3">
            <div class="rightCircle text-center fa-fw">
              <i class="fas fa-address-card fa-2x" aria-hidden="true"></i>
            </div>
            <div class="card-content">
              <div class="card-body">
                <button href="#" class="btn2 float-right pe-auto"><i class="fa fa-pen"></i></button>
                <div class="media d-flex pl-3">
                  <div class="align-self-center">
                    <i class="icon-speech warning font-large-2 float-left"></i>
                  </div>
                  <div class="media-body text-left pt-4">
                    <h5>Entrega a domicilio a:</h5>
                    <hr>
                    </hr>
                    <p><strong>José Matías Delgado (7277-9843)</strong></p>
                    - 8va Calle Poniente y 7ma Av. Norte, Casa #123
                  </div>
                </div>
              </div>
            </div>
            <span class="badgesmall badge-pill te badge-dark text-dark"> </span>
            <span class="badgeb badge-pill badge-light text-light"> </span>
          </div>
          <br><br>
          <div class="card3 col-sm">
            <div class="rightCircle text-center fa-fw">
              <i class="fas fa-calendar fa-2x" aria-hidden="true"></i>
            </div>
            <div class="card-content">
              <div class="card-body">
                <div class="media d-flex pl-3">
                  <div class="align-self-center">
                    <i class="icon-speech warning font-large-2 float-left"></i>
                  </div>
                  <div class="media-body text-left pt-4">
                    <h5>Fecha prevista de entrega:</h5>
                    <input type="text" id="datepicker2" disabled>
                    <hr>
                    </hr>
                    <div id="datepicker"></div>
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

  <div class="grey-bg container-fluid">
    <section id="minimal-statistics">
      <div class="row">
        <div class="col-12 mt-3 mb-1 pl-4">
          <p>Resumen del pedido</p>
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-md-8 align-items-stretch">
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
                        <div class="col-sm-5 text-left">
                          Articulo
                        </div>
                        <div class="col font-weight-light text-left pr-5">
                          Cantidad
                        </div>
                        <div class="col font-weight-light text-left pr-4">
                          Sub-total
                        </div>
                        <div class="col font-weight-light text-left pr-4">
                          Total
                        </div>
                      </div>
                    </div>
                    <hr>
                    </hr>

                    <!-- aqui for -->
                    <div class="container">
                      <div class="row">
                        <div class="col-sm-6 text-left">
                          Cheesecake de fresa
                        </div>
                        <div class="col font-weight-light text-left pr-5">
                          2
                        </div>
                        <div class="col font-weight-light text-left pr-4">
                          $3.00
                        </div>
                        <div class="col font-weight-light text-left pr-4">
                          $6.00
                          <hr>
                          </hr>
                          $6.00
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <span class="badgesmall badge-pill te badge-dark text-dark"> </span>
            <span class="badgeb badge-pill badge-light text-light"> </span>
          </div>
        </div>
        <div class="col-6 col-sm pt-sm-5 pt-lg-0">
          <div class="card3">
            <div class="rightCircle text-center fa-fw">
              <i class="fas fa-hand-holding-usd fa-2x" aria-hidden="true"></i>
            </div>
            <div class="card-content">
              <div class="card-body">
                <button href="#" class="btn2 float-right pe-auto"><i class="fa fa-pen"></i></button>
                <div class="media d-flex pl-3">
                  <div class="align-self-center">
                    <i class="icon-speech warning font-large-2 float-left"></i>
                  </div>
                  <div class="media-body text-left pt-4">
                    <h5>METODO DE PAGO</h5>
                    <hr>
                    </hr>
                    <p>Pasarela de Wompi</p>
                    <button class="btn float-right pe-auto">REALIZAR PEDIDO</button>
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
  <!-- Para js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>