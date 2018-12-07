<!DOCTYPE html>
<html>
    <head>
        <?php include(TEMPLATE_PATH.'head.php'); ?>
    </head>
    <body>
        
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th>Nombre usuario</th>
                <th>Contraseña</th>
                <th>Rol de usuario</th>
                <th>Funciones</th>
            </tr>
            </thead>
            <?php foreach($user as $key => $valor):?>
            <tr>
                <td><?=$user[$key]['userName']?></td>
                <td><?=$user[$key]['pass']?></td>
                <td><?php if($user[$key]['typeAccount']==0){echo 'Administrador';}else{echo 'Psicologo';}?></td>
                <td>
                    <a href="modtUsuario_ctrl.php?a=<?=$user['idUsuarios']?>"><img class="icon" src="../resources/iconic/svg/pencil.svg"></a>
                    <a href="confirmar_ctrl.php?tipo=u&a=<?= $user['idUsuarios']?>"><img class="icon" src="../resources/iconic/svg/trash.svg"></a>
                </td>
            </tr>
            <?php endforeach;?>
        </table>    

        <?php include(TEMPLATE_PATH.'javascript.php'); ?>     
    </body>
</html>