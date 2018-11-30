<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Modificar estado</title>
</head>
<body>

    <form method="post">
        <table>
            <tr>
                <th>Descripcion: </th>
                <td><input type="text" name="descripcion" id="descripcion" value="<?=valorcampo('descripcion')?>" disabled></td>
            </tr>
            <tr>
                <th>Persona de contacto: </th>
                <td><input type="text" name="contacto" id="contacto" value="<?=valorcampo('contacto'); ?>" disabled></td>
            </tr>
            <tr>
                <th>Telefono de contacto: </th>
                <td><input type="text" name="telefono" id="telefono" value="<?=valorcampo('telefono'); ?>" disabled></td>
            </tr>
            <tr>
                <th>E-mail: </th>
                <td><input type="text" name="email" id="email" value="<?=valorcampo('email'); ?>" disabled></td>
            </tr>
            <tr>
                <th>Direccion: </th>
                <td><input type="text" name="direccion" id="direccion" value="<?=valorcampo('direccion'); ?>" disabled></td>
            </tr>
            <tr>
                <th>Provincia: </th>
                <td><select name="provincia" id="provincia" disabled>
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
                <td><input type="text" name="cp" id="cp" value="<?=valorcampo('cp'); ?>" disabled></td>
            </tr>
            <tr>
                <th>Poblacion: </th>
                <td><input type="text" name="poblacion" id="poblacion" value="<?=valorcampo('poblacion'); ?>" disabled></td>
            </tr>
            <tr>
                <th>Fecha de seleccion: </th>
                <td><input type="text" name="fechaselec" id="fechaselec" placeholder="DD/MM/YYYY" value="<?=valorcampo('fechaselec'); ?>" disabled></td>
            </tr>
            <tr>
                <th>Psicologo encargado: </th>
                <td><input type="text" name="psicologo" id="psicologo" value="<?=valorcampo('psicologo'); ?>" disabled></td>
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