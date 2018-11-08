<?php

function arrayProvincias($conn){
    $sqlquery = "SELECT * FROM tbl_provincias";
    $result = $conn->query($sqlquery);
    $provincias=[];

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        
            $provincias[$row["cod"]]=$row["nombre"];
        }
    } else {
        echo "0 results";
    }

    return $provincias;
}

function valorcampo($campo){
    if(isset($_POST[$campo])){   
        return $_POST[$campo];
    }
}

function comFecha($cfecha){
    $stfecha= explode("-",$cfecha);
    if (count($stfecha)!=3){
        return false;
    }
    else if((time())>(strtotime($cfecha))){
        return false;   
    }
    else{
    $validornot=checkdate($stfecha[1],$stfecha[2],$stfecha[0]);
    return  $validornot;
    }
}

function validarEmail($email){
    if(filter_var( $email , FILTER_VALIDATE_EMAIL)){}
        else{
            $errores = true;
		    $cadena_Errores["email"] = "Tiene que proporcionar un EMAIL valido";
		}
}

function insertarFormulario($conn){
        $sql="INSERT INTO ofertas (
        descripcion, personaContacto, telefonoContacto, email, direccion, poblacion, codigoPostal, provincia, estadoOferta,
        FechaConfirmacion, psicologo, candidato, anotaciones) 
         VALUES ('$_POST[descripcion]', '$_POST[contacto]', '$_POST[telefono]', '$_POST[email]', '$_POST[direccion]', '$_POST[poblacion]',
         '$_POST[cp]', '$_POST[provincia]', '$_POST[estado]', '$_POST[fechaselec]', '$_POST[psicologo]', '$_POST[candidato]',
         '$_POST[observaciones]')";
    
        mysqli_query($conn,$sql);
    
}

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

function vistaOfertas($conn){
    foreach ($ofertas as $key => $value) {
        
            # code...
        }
    }
}

?>