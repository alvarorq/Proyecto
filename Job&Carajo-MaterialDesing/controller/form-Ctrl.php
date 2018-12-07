<?php 
include 'control_acceso.php';
include 'constantes.php';
include 'filtrar_formulario.php';
include_once(MODEL_PATH.'ofertas_tools.php');
include_once(MODEL_PATH.'filtrado_tools.php');
include_once(RSC_PATH.'Gestor_Errores.php');

$errores=new Gestor_Errores();
$lista_errores;
$provincias=arrayProvincias();

if(!$_POST){
    include(VIEW_PATH.'formulario.php');
}
else{
    
    FiltraCamposPost($errores);

    if($errores->HayErrores()){
        $lista_errores=$errores->listaErrores();
        include(VIEW_PATH.'formulario.php');
    }
    else{
        $_POST['fechaselec']=fechaParaDB($_POST['fechaselec']);
        $datos=$_POST;
        insertarFormulario($datos);
        include(CTRL_PATH.'inicio.php');
    }
}
?>