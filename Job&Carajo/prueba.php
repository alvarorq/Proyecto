<?php
include "connexion.php";

function obtenerProvincia($conn, $num){
    $sql="select nombre from tbl_provincias where cod=$num";
    $nombre;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        $nombre=$row["nombre"];    
        }
    } else {
        echo "0 results";
    }
return $nombre;
}

function obtenerOfertas($conn){
    $sql="select * from ofertas";
    $ofertas=[];
    $result = $conn->query($sql);

    
        while($row = $result->fetch_assoc()) {
            $ofertas[]=$row;     
        }
 

    return $ofertas;
}


function ListaOfertas($ofertas){
   //include (listaofertas.php)

}

$ofertas=obtenerOfertas($conn);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
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
        <td><?=$oferta['provincia']?></td>
        <td><?=$oferta['estadoOferta']?></td>
        <td><?=$oferta['fechaCreacion']?></td>
    </tr>
    <?php endforeach;?>


    </table>

</body>
</html>