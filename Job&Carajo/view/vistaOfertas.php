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
                <td><?=$oferta['estadoOferta']?></td>
                <td><?=$oferta['fechaCreacion']?></td>
                <td><?=$oferta['FechaConfirmacion']?></td>
                <td><a href="detalles_ctrl.php?a=<?= $oferta['idofertas']?>">Mas detalle</a>/ 
                <a href="editOfer_ctrl.php?a=<?= $oferta['idofertas']?>">Modificar</a>/
                <a href="confirmar_ctrl.php?a=<?= $oferta['idofertas']?>">Borrar</a>
                </td>
            </tr>
            <?php endforeach;?>
        </table>

    </body>
</html>