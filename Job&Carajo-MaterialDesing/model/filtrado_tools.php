<?php

include_once('connexion.php');
//PARA NO PERDER LO RELLENADO EN EL FORMULARIO AL COMETER ERRORES EN LOS DATOS
function valorcampo($campo){
    if(isset($_POST[$campo])){   
        return $_POST[$campo];
    }
}

//COMPRUEBA LA FECHA SI ES CORRECTA Y SI ESTA EN EL ORDEN CORRECTO
function comFecha($fecha){
        $stfecha= explode("/",$fecha);
        if(isset($stfecha[1])){
        $fechaOrden=$stfecha[2].'-'.$stfecha[1].'-'.$stfecha[0];
        }
        else{return false;}
        if (count($stfecha)!=3){
            return false;
        }
        else if((time())>(strtotime($fechaOrden))){
            return false;   
        }
        else{
            $validornot=checkdate($stfecha[1],$stfecha[0],$stfecha[2]);
        return  $validornot;
        }
}


//CONVERTIR FECHA PARA BD
function fechaParaDB($fecha){
    $stfecha= explode("/",$fecha);
    $fechaOrden=$stfecha[2].'-'.$stfecha[1].'-'.$stfecha[0];
    return $fechaOrden;
}

//CONVERTIR FECHA PARA FORMULARIO
function fechaParaForm($fecha){
    $stfecha= explode("-",$fecha);
    $fechaOrden=$stfecha[2].'/'.$stfecha[1].'/'.$stfecha[0];
    return $fechaOrden;
}

//VERIFICA SI EL EMAIL RESPETA EL FORMATO  ALGO@ALGO.ES
function validarEmail($email){
    if(filter_var( $email , FILTER_VALIDATE_EMAIL)){}
        else{
            $errores = true;
		    $cadena_Errores["email"] = "Tiene que proporcionar un EMAIL valido";
		}
}

?>