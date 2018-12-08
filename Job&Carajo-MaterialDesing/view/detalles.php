<!DOCTYPE html>
<html>
    <head>
    <?php include(TEMPLATE_PATH.'head.php'); ?>
    </head>
    <body>
        <div class="row">
        <table class="col-6 table table-secondary table-bordered table-hover">

                <tr class="col-4 thead-dark">
                    <th>Descripcion</th>
                    <td><?=$oferta['descripcion']?></td>
                </tr>
                <tr class="col-4 thead-dark">
                    <th>Persona de contacto</th>
                    <td><?=$oferta['personaContacto']?></td>
                </tr>
                <tr class="col-4 thead-dark">
                    <th>Telefono</th>
                    <td><?=$oferta['telefonoContacto']?></td>
                </tr>
                <tr class="col-4 thead-dark">
                    <th>Email</th>
                    <td><?=$oferta['email']?></td>
                </tr>
                <tr class="col-4 thead-dark">
                    <th>Direccion</th>
                    <td><?=$oferta['direccion']?></td>
                </tr>
                <tr class="col-4 thead-dark">
                    <th>Poblacion</th>
                    <td><?=$oferta['poblacion']?></td>
                </tr>
                <tr class="col-4 thead-dark">
                    <th>Codigo Postal</th>
                    <td><?=$oferta['codigoPostal']?></td>
                </tr>
                <tr class="col-4 thead-dark">
                <th>Provincia</th>
                    <td><?=obtenerProvincia($oferta['provincia'])?></td>
                </tr>
                <tr class="col-4 thead-dark">    <th>Estado de la oferta</th>
                    <td><?=estadOferta($oferta['estadoOferta'])?></td>
                </tr>
                <tr class="col-4 thead-dark">
                    <th>Fecha de creacion</th>
                    <td><?=fechaParaForm($oferta['fechaCreacion'])?></td>
                </tr>          
                <tr class="col-4 thead-dark">
                    <th>Fecha de confirmacion</th>
                    <td><?=fechaParaForm($oferta['FechaConfirmacion'])?></td>
                </tr>
                <tr class="col-4 thead-dark">
                    <th>Psicologo</th>
                    <td><?=$oferta['psicologo']?></td>
                </tr>
                <tr class="col-4 thead-dark">
                    <th>Candidato seleccionado</th>
                    <td><?php if($oferta['candidato']==""){echo "Por determinar";}else {echo $oferta['candidato'];}?></td>
                </tr><tr class="col-4 thead-dark">
                    <th>Anotaciones</th>
                    <td><?=$oferta['anotaciones']?></td>
                </tr>
        </table>
        </div>
<?php include(TEMPLATE_PATH.'javascript.php'); ?>
    </body>
</html>