<!DOCTYPE html>
<html>
<head>
    <?php include(TEMPLATE_PATH.'head.php'); ?>
</head>
<body>
    <br>
        
      <div class="row">   
            <div class="col card" style="width:400px">
              <img class="card-img-top" src="../resources/img6.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">Añadir ofertas</h4>
                <p class="card-text">Formulario de inscripcion de ofertas que seran publicadas en nuestra web.</p>
                <a href="form-ctrl.php" class="btn btn-custom">Formulario ofertas</a>
              </div>
            </div>
            <div class="col card" style="width:400px">
              <img class="card-img-top" src="../resources/img5.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">Lista de ofertas</h4>
                <p class="card-text">Listado con todas las oferas añadidas hasta ahora.</p>
                <a href="vistaOfertas_ctrl.php?pag=0" class="btn btn-custom">Listado de ofertas</a>
              </div>
            </div>
        </div>

        <div class="row">   
            <div class="col card" style="width:400px">
              <img class="card-img-top" src="../resources/img2.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">Lista de usuarios</h4>
                <p class="card-text">Lista de usuarios existentes en la empresa, nuestro equipo de trabajo.</p>
                <a href="lista_usuarios_ctrl.php" class="btn btn-custom">Listado de usuarios</a>
              </div>
            </div>
            <div class="col card" style="width:400px">
              <img class="card-img-top" src="../resources/img4.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">Nuevo usuario</h4>
                <p class="card-text">Añade un usuario, podrás otorgarle un rol, nombre y contraseña.</p>
                <a href="form_usuario_ctrl.php" class="btn btn-custom">Añadir usuario</a>
              </div>
            </div>
        </div>

    <?php include(TEMPLATE_PATH.'javascript.php'); ?>
</body>
</html>