<!DOCTYPE html>
<html>
<head>

    <?php include(TEMPLATE_PATH.'head_login.php'); ?>
   
</head>
<body class="custombg">
    <div class="row ">
                
        <div class="mx-auto h-50 col-4 card shadow-lg">
            
            <div class="card-header">
                <h2>Inicia sesión</h2>
            </div>
            <div class="card-body">
                <form method="post">
                    <div class="form-group">
                      <label for="usuario">Usuario:</label>
                      <input type="text" class="form-control" id="name" placeholder="Escribe tu usuario" name="usuario">
                        <?php if($erroresForm->HayErrores() && isset($lista_errores['usuario'])){   
                                    echo "<p style=color:#b30000;>".$lista_errores['usuario'];
                                }   
                            ?>
                    </div>
                    <div class="form-group">
                      <label for="pwd">Contraseña:</label>
                      <input type="password" class="form-control" id="pwd" placeholder="Escribe tu contraseña" name="password">
                        <?php if($erroresForm->HayErrores() && isset($lista_errores['password'])){   
                                    echo "<p style=color:#b30000;>".$lista_errores['password'];
                                    }   
                            ?>
                    </div>
                    <input class="btn btn-custom" type="submit" value="Iniciar">
                  </form>  
              </div>           
         
          </div>
    </div>
     <?php include(TEMPLATE_PATH.'footer_login.php'); ?>
</body>
</html>