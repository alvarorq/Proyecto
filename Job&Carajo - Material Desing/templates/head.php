<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Bootstrap core CSS -->
  <link href="../resources/css/bootstrap.min.css" rel="stylesheet">
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Job&Carajo</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../resources/css/bootstrap.css" media="screen,projection" />
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>

<body>

    <nav class="navbar-custom navbar navbar-dark navbar-expand-lg navbar-expand-sm">
      <a class="navbar-brand" href="#"><img src="../resources/logo.PNG"> Job & Carajo</a>
      <div class="navbar-nav" id="navbarNav ">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="../controller/inicio.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
        </ul>
    </div>
    <div class="navbar-nav ml-auto" id="navbarNav ">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link">Rol <img class="icon2" src="../resources/iconic/svg/person.svg"> : <?= rolUsuario($_SESSION['usuario']);?> </a>
          </li>
          <li class="nav-item">
            <a class="nav-link">Sesion iniciada <img class="icon2" src="../resources/iconic/svg/clock.svg"> : <?= $_SESSION['inicio'];?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cierre.php"><img class="icon2" src="../resources/iconic/svg/power-standby.svg"> Cerrar Sesion</a>
          </li>          
        </ul>
    </div>
</nav>
<br>
<div class="container">
</body>

</html>