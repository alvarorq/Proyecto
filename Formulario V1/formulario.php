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
    } ?>

    <form method="post">
        <p>Descripcion: <input type="text" name="descripcion" id="descripcion" value="<?php echo valorcampo('descripcion'); ?>">
        <p>Persona de contacto: <input type="text" name="contacto" id="contacto" value="<?php echo valorcampo('contacto'); ?>">
        <p>Telefono de contacto: <input type="text" name="telefono" id="telefono" value="<?php echo valorcampo('telefono'); ?>">
        <p>E-mail: <input type="text" name="email" id="email" value="<?php echo valorcampo('email'); ?>">
        <p>Direccion: <input type="text" name="direccion" id="direccion" value="<?php echo valorcampo('direccion'); ?>">
        <p>Provincia: <select name="provincia" id="provincia">
                            <option value="----------">----------</option>
                            <?php   
                            foreach ($provincias as $key => $value) {
                                echo '<option value="'.$key.'"';
                                if(isset($_POST["provincia"])&&$_POST["provincia"]=="$key"){ echo 'selected';}
                                echo '>'.$value.'</option>';
                            }
                            ?>       
                      </select><!--probando git-->
        <p>Codigo postal: <input type="text" name="cp" id="cp" value="<?php echo valorcampo('cp'); ?>">
        <p>Poblacion: <input type="text" name="poblacion" id="poblacion" value="<?php echo valorcampo('poblacion'); ?>">
        <p>Fecha de seleccion: <input type="date" name="fechaselec" id="fechaselec" value="<?php echo valorcampo('fechaselec'); ?>">
        <p>Psicologo encargado: <input type="text" name="psicologo" id="psicologo" value="<?php echo valorcampo('psicologo'); ?>">
        <p>Estado de la oferta: <input type="text" name="estado" id="estado" value="<?php echo valorcampo('estado'); ?>">
        <p>Candidato selecionado: <input type="text" name="candidato" id="candidato" value="<?php echo valorcampo('candidato'); ?>">
        <p>Observaciones:<br><textarea name="observaciones" id="observaciones" cols="50" rows="10"><?=  Nl2br(valorcampo('observaciones')); ?></textarea>
        <p><input type="submit" value="Enviar">
    </form>
</body>
</html>