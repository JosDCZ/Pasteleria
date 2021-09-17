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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Courgette">
  <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Google Fonts Roboto -->
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
	
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="dist/css/style.css">
</head>

<body>

  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark border border-bottom navbar-static-top" aria-label="Ninth navbar example" style="background: linear-gradient(to top, #f97289, #fb4669);">

    <div class="container-xl">
      <a class="navbar-brand" href="#">
        <img src="images/logo.png" alt="" width="30" height="24" class="d-inline-block align-middle mr-2">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsExample07XL">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catálogo</a>
            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Pasteles de cumpleaños</a>
              <a class="dropdown-item" href="#">Pasteles de boda</a>
              <a class="dropdown-item" href="#">Pasteles personalizados</a>
            </div>
          </li>
        </ul>
        <input type="search" class="form-control rounded" placeholder="Buscar..." aria-label="Search" aria-describedby="search-addon" />
        <span class="input-group-text border-0" id="search-addon">
          <i class="fas fa-search"></i>
        </span>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Mis pedidos</a>
            </li>
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="#">
                <i class="fas fa-shopping-cart"></i>
              </a>
            </li>
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link disabled" href="#">|</a>
            </li>
              <!--/.Icono del Usuario-->
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="./registrar.php">
                <i class="fas fa-user"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!--/.Navbar-->


<?php


  if (isset($_SESSION['user_id'])) {
    header('Location: /php-login');
  }
  require 'db.php';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: /php-login");
    } else {
      $message = 'Sorry, those credentials do not match';
    }
  }

?>

    <?php if(!empty($message)): ?>
<p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Iniciar Sesion</h1>

    <form action="login.php" method="POST">
		<label class="titulo">Correo: </label>
      <input class="login" name="email" type="text" placeholder="Enter your email">
		<label class="titulo">Contraseña: </label>
      <input class="login" name="password" type="password" placeholder="Enter your Password">
      <input type="submit" value="Ingresar">
      <span>o <a href="signup.php">Registrase</a></span>
</form>



<blockquote class="blockquote">
    <p class="mb-0">Nuestro deber es ofrecer los mejores pasteles en línea.</p>
    <span class="blockquote-footer">ELOS MONK <cite title="Source Title">, campesino.</span>
  </blockquote>
<footer id="pie">

  <div class="container-fluid bg-dark text-center p-3">
    <p class="">&copy; Todos los derechos reservados - Universidad de El Salvador</p>
  </div>
   </footer>

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
   
</body>
</html>