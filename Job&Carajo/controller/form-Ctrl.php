<?php 
include 'constantes.php';
include(MODEL_PATH.'funciones.php');

$errores=false;
$cadena_Errores=[];
$provincias=arrayProvincias();

if(!$_POST){
    include(VIEW_PATH.'formulario.php');
}
else{
    
    if($_POST["descripcion"]==""){
        $errores = true;
        $cadena_Errores["descripcion"] = "La DESCRIPCION no puede estar vacio.";
    }       

    if($_POST["contacto"]==""){
        $errores = true;
        $cadena_Errores["contacto"] = "La PERSONA DE CONTACTO no puede estar vacio.";
    }       

    if($_POST["telefono"]=="" || !ctype_digit($_POST["telefono"])){
        $errores = true;
        $cadena_Errores["telefono"] = "El TELEFONO DE CONTACTO no es valido o esta vacio.";
    }

    if($_POST["provincia"]=="------------------"){
        $errores = true;
        $cadena_Errores["provincia"] = "Selecciona una PROVINCIA.";
    }

    if(strlen($_POST["cp"])>5 || strlen($_POST["cp"])<5 || !ctype_digit($_POST["cp"])){
        echo "<p>".$_POST["cp"];
        $errores = true;
        $cadena_Errores["cp"] = "El CODIGO POSTAL esta vacio o no es valido.";
    }

    if($_POST["email"]=="" || !filter_var( $_POST["email"] , FILTER_VALIDATE_EMAIL)){
        $errores = true;
        $cadena_Errores["email"] = "El EMAIL introducido no es valido.";
    }
    
    if( !comFecha($_POST["fechaselec"])){
        $errores=true;
        $cadena_Errores["fechaselec"]="La FECHA introducida no es valida."; 
    }

    if($errores){
        include(VIEW_PATH.'formulario.php');
    }
    else{
        insertarFormulario($_POST);
        include(CTRL_PATH.'index.php');
    }
}
?>