<!DOCTYPE html>
<html>
<head>
    <?php include(TEMPLATE_PATH.'head.php'); ?> 
</head>
<body>
    
    <?php
    if($errores->HayErrores()){   
        echo "<div style= border:solid>";
            foreach ($lista_errores as $key => $value) {
                echo "<p style=color:red;>".$value;
            }
        echo"</div>";    
    } 
    ?>

<form>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Descripcion:</label>
      <input class="form-control" type="text" name="descripcion" id="descripcion" value="<?=valorcampo('descripcion')?>">
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Persona de contacto:</label>
      <input class="form-control" type="text" name="contacto" id="contacto" value="<?=valorcampo('contacto'); ?>">
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">Telefono de contacto: </label>
      <input class="form-control" type="text" name="telefono" id="telefono" value="<?=valorcampo('telefono'); ?>">
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">E-mail: </label>
      <input class="form-control" type="text" name="email" id="email" value="<?=valorcampo('email'); ?>">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04">Direccion: </label>
      <input class="form-control" type="text" name="direccion" id="direccion" value="<?=valorcampo('direccion'); ?>">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Provincia:</label>
      <select class="form-control" name="provincia" id="provincia">
                        <option value="------------------">------------------</option>
                            <?php   
                                foreach ($provincias as $key => $value) {
                                    echo '<option value="'.$key.'"';
                                    if(isset($_POST["provincia"])&&$_POST["provincia"]=="$key"){ echo 'selected';}
                                    echo '>'.$value.'</option>';
                                }
                            ?>       
                    </select>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Codigo postal: </label>
      <input class="form-control" type="text" name="cp" id="cp" value="<?=valorcampo('cp'); ?>">
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Poblacion: </label>
      <input class="form-control" type="text" name="poblacion" id="poblacion" value="<?=valorcampo('poblacion'); ?>">
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">Fecha de seleccion:</label>
      <input class="form-control" type="text" name="fechaselec" id="fechaselec" placeholder="DD/MM/YYYY" value="<?=valorcampo('fechaselec'); ?>">
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Psicologo encargado:</label>
      <input class="form-control" type="text" name="psicologo" id="psicologo" value="<?=valorcampo('psicologo'); ?>">
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Estado de la oferta: </label>
      <input type="radio" name="estado" checked value="0" <?php if(isset($_POST["estado"])&&$_POST["estado"]=="0"){ echo 'checked';}?>> Pendiente de Seleccion
                <input type="radio" name="estado" value="1" <?php if(isset($_POST["estado"])&&$_POST["estado"]=="1"){ echo 'checked';}?>> Realizando Seleccion
                <input type="radio" name="estado" value="2" <?php if(isset($_POST["estado"])&&$_POST["estado"]=="2"){ echo 'checked';}?>> Seleccion concluida
                <input type="radio" name="estado" value="3" <?php if(isset($_POST["estado"])&&$_POST["estado"]=="3"){ echo 'checked';}?>> Cancelada
                
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">Candidato selecionado: </label>
      <input class="form-control" type="text" name="candidato" id="candidato" value="<?=valorcampo('candidato'); ?>">
      </div>
    </div>
  </div>
  <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">Observaciones:</label>
      <textarea class="form-control" name="observaciones" id="observaciones" cols="22" rows="8"><?=  Nl2br(valorcampo('observaciones')); ?></textarea>
      </div>
    </div>
  </div>
  
  <input class="btn btn-custom" type="submit" value="Enviar">
</form>

<?php include(TEMPLATE_PATH.'javascript.php'); ?>
</body>

</html>