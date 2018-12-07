<!DOCTYPE html>
<html>
<head>
    <?php include(TEMPLATE_PATH.'head.php'); ?> 
</head>
<body>

    <form method="post">
        <table class="align-content-around">
            <tr>
                <th>Nombre usuario: </th>
                <td><input class="rounded" type="text" name="name" id="name" value="<?=valorcampo('name')?>"></td>
                <?php if($errores->HayErrores() && isset($lista_errores['name'])){   
                echo "<td style=color:red;>".$lista_errores['name'].'</td>';
            }   
        ?>
            </tr>
            
            <tr>
                <th>Contraseña: </th>
                <td><input class="rounded" type="text" name="passw" id="passw" value="<?=valorcampo('passw'); ?>"></td>
                <?php if($errores->HayErrores() && isset($lista_errores['passw'])){   
                echo "<td style=color:red;>".$lista_errores['passw'].'</td>';
                    }   
                ?>
            </tr>
            <tr>
                <th></th>
              
                <td><br><input class="btn btn-custom" type="submit" value="Enviar"></td>
            </tr>
        </table>
    </form>
   
<?php include(TEMPLATE_PATH.'javascript.php'); ?>
</body>

</html>