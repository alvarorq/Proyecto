<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Tabla</title>
    </head>
    <body>
        
        <table border="solid">
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
            <?php foreach($ofertas as $key => $oferta):?>
            <tr>
                <td><?=$oferta['descripcion']?></td>
                <td><?=$oferta['personaContacto']?></td>
                <td><?=$oferta['telefonoContacto']?></td>
                <td><?=obtenerProvincia($oferta['provincia'])?></td>
                <td><?=estadOferta($oferta['estadoOferta'])?></td>
                <td><?=$oferta['fechaCreacion']?></td>
                <td><?=$oferta['FechaConfirmacion']?></td>
                <td><a href="detalles_ctrl.php?a=<?= $oferta['idofertas']?>">Mas detalle</a>/ 
                <a href="editOfer_ctrl.php?a=<?= $oferta['idofertas']?>">Modificar</a>/
                <a href="confirmar_ctrl.php?a=<?= $oferta['idofertas']?>">Borrar</a>
                </td>
            </tr>
            <?php endforeach;?>
        </table>
        <nav>
           
            <?php

            function enlace( $pag,$desc='') {
                if ($desc=='') {
                    $desc=$pag;
                }
                echo "<a href=\"vistaOfertas_ctrl.php?pag=$pag\">$desc</a>";
            }

           
            enlace(0, "Inicio");
            
            if ($pag-1>1) {
                $pos=($pag-1)*REGxPAG;
                enlace($pag-1);
            }
            echo "-$pag-";
            if ($pag+1<$ult_pag) {
                enlace($ag+1);
            }

            enlace($ult_pag, "Fin");

           ?>
           <!-- <?php
            echo "<p><p><p>";?>
            <a href="vistaOfertas_ctrl.php?inicio=<?=0?>">Primera</a>. ./  
            if($inicio==0 || $inicio==3){ 
                            if($inicio==3){?>
                                <a href="vistaOfertas_ctrl.php?inicio=<?=$inicio?>"><?=($inicio/3)+1 ?></a>/
                        <?php }?>  
                        
                        <a href="vistaOfertas_ctrl.php?inicio=<?=$inicio+3?>"><?=($inicio/3)+2 ?></a>/
                        <a href="vistaOfertas_ctrl.php?inicio=<?=$inicio+6?>"><?=($inicio/3)+3 ?></a>/   

                        <?php $inicio+=3;
                        }
                        else{
                             if($inicio>$numreg*2){?>
                                <a href="vistaOfertas_ctrl.php?inicio=<?=$inicio-3?>"><?=($inicio/3) ?></a>/
                        <?php } 
                        else{ ?> 
                            <a href="vistaOfertas_ctrl.php?inicio=<?=$inicio-3?>"><?=($inicio/3) ?></a>/
                            <a href="vistaOfertas_ctrl.php?inicio=<?=$inicio?>"><?=($inicio/3)+1 ?></a>/
                        <?php if($inicio+3==($numreg*3)-3){}
                              else{?>
                                    <a href="vistaOfertas_ctrl.php?inicio=<?=$inicio+3?>"><?=($inicio/3)+2 ?></a>/
                        <?php       $inicio+=3;
                                }
                            }
                        }?>
            . .<a href="vistaOfertas_ctrl.php?inicio=<?= ($numreg*3)-3 ?>">Ultima</a> -->
        </nav>         
    </body>
</html>