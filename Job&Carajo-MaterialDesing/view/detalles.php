<!DOCTYPE html>
<html>
    <head>
    <?php include(TEMPLATE_PATH.'head.php'); ?>
    </head>
    <body>
        
        <table border="solid">

                <tr>
                    <th>Descripcion</th>
                    <td><?=$oferta['descripcion']?></td>
                </tr>
                <tr>
                    <th>Persona de contacto</th>
                    <td><?=$oferta['personaContacto']?></td>
                </tr>
                <tr>
                    <th>Telefono</th>
                    <td><?=$oferta['telefonoContacto']?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?=$oferta['email']?></td>
                </tr>
                <tr>
                    <th>Direccion</th>
                    <td><?=$oferta['direccion']?></td>
                </tr>
                <tr>
                    <th>Poblacion</th>
                    <td><?=$oferta['poblacion']?></td>
                </tr>
                <tr>
                    <th>Codigo Postal</th>
                    <td><?=$oferta['codigoPostal']?></td>
                </tr>
                <tr>
                <th>Provincia</th>
                    <td><?=obtenerProvincia($oferta['provincia'])?></td>
                </tr>
                <tr>    <th>Estado de la oferta</th>
                    <td><?=estadOferta($oferta['estadoOferta'])?></td>
                </tr>
                <tr>
                    <th>Fecha de creacion</th>
                    <td><?=fechaParaForm($oferta['fechaCreacion'])?></td>
                </tr>          
                <tr>
                    <th>Fecha de confirmacion</th>
                    <td><?=fechaParaForm($oferta['FechaConfirmacion'])?></td>
                </tr>
                <tr>
                    <th>Psicologo</th>
                    <td><?=$oferta['psicologo']?></td>
                </tr>
                <tr>
                    <th>Candidato seleccionado</th>
                    <td><?php if($oferta['candidato']==""){echo "Por determinar";}else {echo $oferta['candidato'];}?></td>
                </tr><tr>
                    <th>Anotaciones</th>
                    <td><?=$oferta['anotaciones']?></td>
                </tr>
        </table>

<?php include(TEMPLATE_PATH.'javascript.php'); ?>
    </body>
</html>