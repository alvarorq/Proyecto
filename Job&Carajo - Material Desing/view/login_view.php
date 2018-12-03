<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <form method="post">
        <table>
        <?php if($erroresLog->HayErrores()){   
                echo "<p style=color:red;>".$lista_errores['login'];
            }   
        ?>
        <tr>
        <td>
        Login: <input type="text" name="usuario" id="">
        <?php if($erroresForm->HayErrores()){   
                echo "<p style=color:red;>".$lista_errores['usuario'];
            }   
        ?>
        </td>
        </tr>

        <tr>
        <td>
        password: <input type="password" name="password" id="">
        <?php if($erroresForm->HayErrores()){   
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