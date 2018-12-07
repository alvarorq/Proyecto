<!DOCTYPE html>
<html>
<head>

    <?php include(TEMPLATE_PATH.'head_login.php'); ?>
   
</head>
<body>
    <form method="post">
        <table>
        <?php if($erroresLog->HayErrores() && isset($lista_errores['login'])){   
                echo "<p style=color:red;>".$lista_errores['login'];
            }   
        ?>
        <tr>
        <td>
        Login: <input type="text" name="usuario" id="">
        <?php if($erroresForm->HayErrores() && isset($lista_errores['usuario'])){   
                echo "<p style=color:red;>".$lista_errores['usuario'];
            }   
        ?>
        </td>
        </tr>

        <tr>
        <td>
        password: <input type="password" name="password" id="">
        <?php if($erroresForm->HayErrores() && isset($lista_errores['password'])){   
                echo "<p style=color:red;>".$lista_errores['password'];
            }   
        ?>
        </td>
        </tr>
        </table>
        <input type="submit" value="Login">
    </form>


     <?php include(TEMPLATE_PATH.'javascript.php'); ?>
</body>
</html>