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

    <form method="post">
        <table class="align-content-around">
            <tr>
                <th>Descripcion: </th>
                <td><input class="rounded" type="text" name="descripcion" id="descripcion" value="<?=valorcampo('descripcion')?>"></td>
            </tr>
            <tr>
                <th>Persona de contacto: </th>
                <td><input class="rounded" type="text" name="contacto" id="contacto" value="<?=valorcampo('contacto'); ?>"></td>
            </tr>
            <tr>
                <th>Telefono de contacto: </th>
                <td><input class="rounded" type="text" name="telefono" id="telefono" value="<?=valorcampo('telefono'); ?>"></td>
            </tr>
            <tr>
                <th>E-mail: </th>
                <td><input class="rounded" type="text" name="email" id="email" value="<?=valorcampo('email'); ?>"></td>
            </tr>
            <tr>
                <th>Direccion: </th>
                <td><input class="rounded" type="text" name="direccion" id="direccion" value="<?=valorcampo('direccion'); ?>"></td>
            </tr>
            <tr>
                <th>Provincia: </th>
                <td><select class="rounded" name="provincia" id="provincia">
                        <option value="------------------">------------------</option>
                            <?php   
                                foreach ($provincias as $key => $value) {
                                    echo '<option value="'.$key.'"';
                                    if(isset($_POST["provincia"])&&$_POST["provincia"]=="$key"){ echo 'selected';}
                                    echo '>'.$value.'</option>';
                                }
                            ?>       
                    </select><!--probando git--></td>
            </tr>
            <tr>
                <th>Codigo postal: </th>
                <td><input class="rounded" type="text" name="cp" id="cp" value="<?=valorcampo('cp'); ?>"></td>
            </tr>
            <tr>
                <th>Poblacion: </th>
                <td><input class="rounded" type="text" name="poblacion" id="poblacion" value="<?=valorcampo('poblacion'); ?>"></td>
            </tr>
            <tr>
                <th>Fecha de seleccion: </th>
                <td><input class="rounded" type="text" name="fechaselec" id="fechaselec" placeholder="DD/MM/YYYY" value="<?=valorcampo('fechaselec'); ?>"></td>
            </tr>
            <tr>
                <th>Psicologo encargado: </th>
                <td><input class="rounded" type="text" name="psicologo" id="psicologo" value="<?=valorcampo('psicologo'); ?>"></td>
            </tr>
            <tr>
                <th>Estado de la oferta: </th>
                <td>
                <input type="radio" name="estado" value="0" <?php if(isset($_POST["estado"])&&$_POST["estado"]=="0"){ echo 'checked';}?>> Pendiente de Seleccion
                <input type="radio" name="estado" value="1" <?php if(isset($_POST["estado"])&&$_POST["estado"]=="1"){ echo 'checked';}?>> Realizando Seleccion
                <input type="radio" name="estado" value="2" <?php if(isset($_POST["estado"])&&$_POST["estado"]=="2"){ echo 'checked';}?>> Seleccion concluida
                <input type="radio" name="estado" value="3" <?php if(isset($_POST["estado"])&&$_POST["estado"]=="3"){ echo 'checked';}?>> Cancelada
                </td>
            </tr>
            <tr>
                <th>Candidato selecionado: </th>
                <td><input class="rounded" type="text" name="candidato" id="candidato" value="<?=valorcampo('candidato'); ?>"></td>
            </tr>
            <tr>
                <th>Observaciones:</th>
                <td><textarea class="rounded" name="observaciones" id="observaciones" cols="22" rows="8"><?=  Nl2br(valorcampo('observaciones')); ?></textarea></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="Enviar"></td>
            </tr>
        </table>
    </form>
   
<?php include(TEMPLATE_PATH.'javascript.php'); ?>
</body>

</html>