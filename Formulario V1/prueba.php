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

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $ofertas[$row["idofertas"]]=[
            "Descripcion"=>$row["descripcion"],
            "Contacto"=>$row["personaContacto"],
            "Telefono"=>$row["telefonoContacto"],
            "Email"=>$row["email"],
            "Direccion"=>$row["direccion"],
            "Poblacion"=>$row["poblacion"],
            "Codigo Postal"=>$row["codigoPostal"],
            "Provincia"=>obtenerProvincia($conn,$row["provincia"]),
            "Estado"=>$row["estadoOferta"],
            "Fecha de Creacion"=>$row["fechaCreacion"],
            "Fecha de Confirmacion"=>$row["FechaConfirmacion"],
            "Psicologo"=>$row["psicologo"],
            "Candidato"=>$row["candidato"],
            "Anotaciones"=>$row["anotaciones"],
       ];       
    }
} else {
    echo "0 results";
}

return $ofertas;
}
/*
echo "<pre>";
print_r(obtenerOfertas($conn));
echo "</pre>";
*/
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
</head>
<body>
    



</body>
</html>