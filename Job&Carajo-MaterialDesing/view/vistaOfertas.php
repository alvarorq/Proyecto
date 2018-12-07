<!DOCTYPE html>
<html>
    <head>
        <?php include(TEMPLATE_PATH.'head.php'); ?>
    </head>
    <body>
        
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th>Descripcion</th>
                <th>Persona de contacto</th>
                <th>Telefono</th>
                <th>Provincia</th>
                <th>Estado de la oferta</th>
                <th>Fecha de creacion</th>
                <th>Fecha de confirmacion</th>
                <th>Funciones</th>
            </tr>
            </thead>
            <?php foreach($ofertas as $key => $oferta):?>
            <tr>
                <td><?=$oferta['descripcion']?></td>
                <td><?=$oferta['personaContacto']?></td>
                <td><?=$oferta['telefonoContacto']?></td>
                <td><?=obtenerProvincia($oferta['provincia'])?></td>
                <td><?=estadOferta($oferta['estadoOferta'])?></td>
                <td><?=fechaParaForm($oferta['fechaCreacion'])?></td>
                <td><?=fechaParaForm($oferta['FechaConfirmacion'])?></td>
                <td><a href="detalles_ctrl.php?a=<?= $oferta['idofertas']?>"><img class="icon" src="../resources/iconic/svg/magnifying-glass.svg"></a>
                <a
                    <?php 
                        if($_SESSION['user']['typeAccount']==0){
                            echo 'href="editOfer_ctrl.php?a='.$oferta['idofertas'].'"';
                        }
                        else{
                            echo 'href="cambio_estado_ctrl.php?a='.$oferta['idofertas'].'"';
                        }
                    ?>
                ><img class="icon" src="../resources/iconic/svg/pencil.svg"></a>
                <?php 
                        if($_SESSION['user']['typeAccount']==0){ ?>
                            <a href="confirmar_ctrl.php?tipo=o&a=<?= $oferta['idofertas']?>"><img class="icon" src="../resources/iconic/svg/trash.svg"></a>
                <?php   }
                    ?>
                </td>
            </tr>
            <?php endforeach;?>
        </table>
        <nav>
           
            <?php
            //PAGINA INICIO
            if($_GET['pag']==0){
                enlace('clase',0, "Inicio");
            }else{          
            enlace('no',0, "Inicio");
            }

            if ($pag-1>=1) {
                $pos=($pag-1)*REGxPAG;
                enlace('no',$pag-1);
            }
            if(!($pag == 0 || $pag == $ult_pag)){
                echo "<a class='btn btn-custom' href=\"vistaOfertas_ctrl.php?pag=$pag\">$pag</a> ";
            }
            if ($pag+1<$ult_pag) {
                enlace('no',$pag+1);
            }
            //PAGINA FIN
            if($_GET['pag']==$ult_pag){
                enlace('clase',$ult_pag, "Fin");
            }else{          
                enlace('no',$ult_pag, "Fin");
            }
            

           ?>

        </nav>    

        <?php include(TEMPLATE_PATH.'javascript.php'); ?>     
    </body>
</html>