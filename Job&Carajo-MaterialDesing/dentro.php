<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

    <?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("Location:login.php");
    }
?>
    <h1> Bienvenido <?=$_SESSION['usuario'];?></h1>
    <h1>Hola juapo</h1>

    <a href="cierre.php">Cerrar Sesion</a>
</body>
</html>