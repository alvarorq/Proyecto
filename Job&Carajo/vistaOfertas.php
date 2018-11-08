<?php
    include "connexion.php";
    include "funciones.php";
    $ofertas=obtenerOfertas($conn);
?>
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
            </tr>
            <?php foreach($ofertas as $key => $oferta):?>
            <tr>
                <td><?=$oferta['descripcion']?></td>
                <td><?=$oferta['personaContacto']?></td>
                <td><?=$oferta['telefonoContacto']?></td>
                <td><?=obtenerProvincia($conn, $oferta['provincia'])?></td>
                <td><?=$oferta['estadoOferta']?></td>
                <td><?=$oferta['fechaCreacion']?></td>
            </tr>
            <?php endforeach;?>
        </table>

    </body>
</html>