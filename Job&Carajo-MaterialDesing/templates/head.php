<?php include_once(MODEL_PATH.'user_tools.php'); ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link href="../resources/css/bootstrap.min.css" rel="stylesheet">
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Job & Carajo</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
  <link type="text/css" rel="stylesheet" href="../resources/css/bootstrap.css" media="screen,projection" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">



<div>

    <nav class="navbar-custom navbar navbar-dark navbar-expand-lg navbar-expand-sm">
        <a class="navbar-brand" href="#"><img src="../resources/logo.PNG" width="60" height="60"> Job & Carajo</a>
        <div class="navbar-nav" id="navbarNav ">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="../controller/inicio.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="vistaofertas_ctrl.php?pag=0">Ofertas</a>
            </li>
          </ul>
        </div>
        <div class="navbar-nav ml-auto" id="navbarNav ">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link">Rol <i class="material-icons" style="font-size:20px">account_circle</i> : <?= rolUsuario($_SESSION['usuario']);?> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link">Sesion iniciada <i class="material-icons" style="font-size:20px">access_alarms</i> : <?= $_SESSION['inicio'];?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cierre.php"><i class="material-icons" style="font-size:20px">power_settings_new</i> Cerrar Sesion</a>
              </li>          
            </ul>
        </div>
    </nav>
<br>
</div>
<div class="container">

