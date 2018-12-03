<!DOCTYPE html>
<html>
<head>
    <?php include(TEMPLATE_PATH.'head.php'); ?>
</head>
<body>
    <br>

        <div class="row">   
            <div class="col card" style="width:400px">
              <img class="card-img-top" src="../resources/img1.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">Añadir ofertas</h4>
                <p class="card-text">Formulario de inscripcion de ofertas que seran publicadas en nuestra web.</p>
                <a href="form-ctrl.php" class="btn btn-primary">Formulario ofertas</a>
              </div>
            </div>
            <div class="col card" style="width:400px">
              <img class="card-img-top" src="../resources/img2.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">Listado de ofertas</h4>
                <p class="card-text">Listado con todas las oferas, tanto las disponibles como las acabadas.</p>
                <a href="vistaOfertas_ctrl.php?pag=0" class="btn btn-primary">Listado de ofertas</a>
              </div>
            </div>
            <div class="col card" style="width:400px">
              <img class="card-img-top" src="../resources/img3.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">Modificar estado</h4>
                <p class="card-text">Modificar estado, candidato y anotaciones de la oferta de trabajo.</p>
                <a href="cambio_estado_ctrl.php" class="btn btn-primary">Cambio de estado</a>
              </div>
            </div>
        </div>
    </div>
    
    <?php include(TEMPLATE_PATH.'javascript.php'); ?>
</body>
</html>