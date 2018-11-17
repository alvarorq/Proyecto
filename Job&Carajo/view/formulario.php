<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulario v1.0</title>
</head>
<body>
    <?php
    if($errores){   
        echo "<div style= border:solid>";
            foreach ($cadena_Errores as $key => $value) {
                echo "<p style=color:red;>".$value;
            }
        echo"</div>";    
    } 
    ?>

    <form method="post">
        <table>
            <tr>
                <th>Descripcion: </th>
                <td><input type="text" name="descripcion" id="descripcion" value="<?=valorcampo('descripcion')?>"></td>
            </tr>
            <tr>
                <th>Persona de contacto: </th>
                <td><input type="text" name="contacto" id="contacto" value="<?=valorcampo('contacto'); ?>"></td>
            </tr>
            <tr>
                <th>Telefono de contacto: </th>
                <td><input type="text" name="telefono" id="telefono" value="<?=valorcampo('telefono'); ?>"></td>
            </tr>
            <tr>
                <th>E-mail: </th>
                <td><input type="text" name="email" id="email" value="<?=valorcampo('email'); ?>"></td>
            </tr>
            <tr>
                <th>Direccion: </th>
                <td><input type="text" name="direccion" id="direccion" value="<?=valorcampo('direccion'); ?>"></td>
            </tr>
            <tr>
                <th>Provincia: </th>
                <td><select name="provincia" id="provincia">
                        <option value="----------">----------</option>
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
                <td><input type="text" name="cp" id="cp" value="<?=valorcampo('cp'); ?>"></td>
            </tr>
            <tr>
                <th>Poblacion: </th>
                <td><input type="text" name="poblacion" id="poblacion" value="<?=valorcampo('poblacion'); ?>"></td>
            </tr>
            <tr>
                <th>Fecha de seleccion: </th>
                <td><input type="date" name="fechaselec" id="fechaselec" value="<?=valorcampo('fechaselec'); ?>"></td>
            </tr>
            <tr>
                <th>Psicologo encargado: </th>
                <td><input type="text" name="psicologo" id="psicologo" value="<?=valorcampo('psicologo'); ?>"></td>
            </tr>
            <tr>
                <th>Estado de la oferta: </th>
                <td><input type="text" name="estado" id="estado" value="<?=valorcampo('estado'); ?>"></td>
            </tr>
            <tr>
                <th>Candidato selecionado: </th>
                <td><input type="text" name="candidato" id="candidato" value="<?=valorcampo('candidato'); ?>"></td>
            </tr>
            <tr>
                <th>Observaciones:</th>
                <td><textarea name="observaciones" id="observaciones" cols="50" rows="10"><?=  Nl2br(valorcampo('observaciones')); ?></textarea></td>
            </tr>
            <tr>
                <th><input type="submit" value="Enviar"></th>
            </tr>
        </table>
    </form>
</body>
</html>