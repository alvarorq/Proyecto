<!DOCTYPE html>
<html>
<head>
    <?php include(TEMPLATE_PATH.'head.php'); ?> 
</head>
<body>

    <div class="row ">
                
                <div class="mx-auto h-50 col-4 card shadow-lg">
                    
                    <div class="card-header">
                        <h2>Editar usuario</h2>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="form-group">
                              <label for="usuario">Nombre usuario:</label><br>
                              <input class="rounded" type="text" name="name" id="name" value="<?=valorcampo('name')?>">
                              <?php if($errores->HayErrores() && isset($lista_errores['name'])){   
                                        echo "<td style=color:red;>".$lista_errores['name'].'</td>';
                                    }   
                                ?>
                            </div>
                            <div class="form-group">
                              <label for="pwd">Contraseña: </label><br>
                              <input class="rounded" type="text" name="passw" id="passw" value="<?=valorcampo('passw'); ?>">
                              <?php if($errores->HayErrores() && isset($lista_errores['passw'])){   
                                    echo "<td style=color:red;>".$lista_errores['passw'].'</td>';
                                        }   
                                ?>
                            </div>
                            <input class="btn btn-custom" type="submit" value="Registrar">
                          </form>  
                      </div>           
                 
                  </div>
            </div>
   
<?php include(TEMPLATE_PATH.'javascript.php'); ?>
</body>

</html>