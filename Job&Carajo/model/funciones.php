<?php

require 'connexion.php';

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
function insertarFormulario(){
    $conn=Db::getInstance();
        $sql="INSERT INTO ofertas (
        descripcion, personaContacto, telefonoContacto, email, direccion, poblacion, codigoPostal, provincia, estadoOferta,
        FechaConfirmacion, psicologo, candidato, anotaciones) 
         VALUES ('$_POST[descripcion]', '$_POST[contacto]', '$_POST[telefono]', '$_POST[email]', '$_POST[direccion]', '$_POST[poblacion]',
         '$_POST[cp]', '$_POST[provincia]', '$_POST[estado]', '$_POST[fechaselec]', '$_POST[psicologo]', '$_POST[candidato]',
         '$_POST[observaciones]')";
    
        $conn->db->query($sql);
}

//DEVUELVE ARRAY DE PROVINCIAS
function arrayProvincias(){
    $conn=Db::getInstance();
    $sqlquery = "SELECT * FROM tbl_provincias";
    $result = $conn->db->query($sqlquery);
    $provincias=[];

        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $provincias[$row["cod"]]=$row["nombre"];
        }
    return $provincias;
}

//DADO EL PARAMETRO $NUM = CODIGO DE LA PROVINCIA Y USANDO LA FUNCION DE ARRAY DE PROVINCIAS OBTIENE EL NOMBRE DE LA PROVINCIA
function obtenerProvincia($num){
    $provincias=arrayProvincias();
    $nombre;
        $nombre=$provincias[$num];    
return $nombre;
}

//OBTIENE TODAS LAS OFERTAS DE LA TABLA Y ME LAS DEVUELVE EN UN ARRAY
function obtenerOfertas(){
    $conn=Db::getInstance();
    $sql="select * from ofertas";
    $ofertas=[];
    $result = $conn->db->query($sql);
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $ofertas[]=$row;     
        }
    return $ofertas;
}

//OBTIENE DETALLES DE SOLO UNA OFERTA
function detalleOferta($id){
    $conn=Db::getInstance();
    $sql= $conn->db->prepare('SELECT * FROM ofertas WHERE idofertas=?');
    $sql->bindParam(1, $id, PDO::PARAM_INT);
    $sql->execute();
    $arr = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    return $arr;
}

//LLAMA A LA VISTA DE OFERTAS
function ListaOfertas($ofertas){
   include "vistaOfertas.php";
}

?>