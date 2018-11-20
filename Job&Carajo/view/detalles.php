<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Tabla</title>
    </head>
    <body>
        
        <table border="solid">
            <?php foreach($ofertas as $key => $oferta):?>
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
                    <td><?=$oferta['estadoOferta']?></td>
                </tr>
                <tr>
                    <th>Fecha de creacion</th>
                    <td><?=$oferta['fechaCreacion']?></td>
                </tr>          
                <tr>
                    <th>Fecha de confirmacion</th>
                    <td><?=$oferta['FechaConfirmacion']?></td>
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
                
            <?php endforeach;?>
        </table>

    </body>
</html>