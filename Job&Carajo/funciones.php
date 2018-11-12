<?php
//DEVUELVE ARRAY DE PROVINCIAS
function arrayProvincias($conn){
    $sqlquery = "SELECT * FROM tbl_provincias";
    $result = $conn->query($sqlquery);
    $provincias=[];

        while($row = $result->fetch_assoc()) {
            $provincias[$row["cod"]]=$row["nombre"];
        }
    return $provincias;
}

//PARA NO PERDER LO RELLENADO EN EL FORMULARIO AL COMETER ERRORES EN LOS DATOS
function valorcampo($campo){
    if(isset($_POST[$campo])){   
        return $_POST[$campo];
    }
}

//COMPRUEBA LA FECHA SI ES CORRECTA Y SI ESTA EN EL ORDEN CORRECTO
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

//VERIFICA SI EL EMAIL RESPETA EL FORMATO  ALGO@ALGO.ES
function validarEmail($email){
    if(filter_var( $email , FILTER_VALIDATE_EMAIL)){}
        else{
            $errores = true;
		    $cadena_Errores["email"] = "Tiene que proporcionar un EMAIL valido";
		}
}

//INSERTAR DATOS DEL FORMULARIO 
function insertarFormulario($conn){
        $sql="INSERT INTO ofertas (
        descripcion, personaContacto, telefonoContacto, email, direccion, poblacion, codigoPostal, provincia, estadoOferta,
        FechaConfirmacion, psicologo, candidato, anotaciones) 
         VALUES ('$_POST[descripcion]', '$_POST[contacto]', '$_POST[telefono]', '$_POST[email]', '$_POST[direccion]', '$_POST[poblacion]',
         '$_POST[cp]', '$_POST[provincia]', '$_POST[estado]', '$_POST[fechaselec]', '$_POST[psicologo]', '$_POST[candidato]',
         '$_POST[observaciones]')";
    
        mysqli_query($conn,$sql);
}

//DADO EL PARAMETRO $NUM = CODIGO DE LA PROVINCIA Y USANDO LA FUNCION DE ARRAY DE OFERTAS OBTIENE EL NOMBRE DE LA PROVINCIA
function obtenerProvincia($conn, $num){
    $provincias=arrayProvincias($conn);
    $nombre;
        $nombre=$provincias[$num];    
return $nombre;
}

//OBTIENE TODAS LAS OFERTAS DE LA TABLA Y ME LAS DEVUELVE EN UN ARRAY
function obtenerOfertas($conn){
    $sql="select * from ofertas";
    $ofertas=[];
    $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
            $ofertas[]=$row;     
        }
    return $ofertas;
}

//OBTIENE DETALLES DE SOLO UNA OFERTA
function detalleOferta($conn, $id){
    $sql= $conn->prepare("SELECT * FROM ofertas WHERE idoferta=(?)");
    $sql->bind_param('i',$id);
    $sql->execute();
}

//LLAMA A LA VISTA DE OFERTAS
function ListaOfertas($ofertas){
   include "vistaOfertas.php";
}

?>