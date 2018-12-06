<?php 
include 'constantes.php';
include 'filtrar_formulario.php';
include(MODEL_PATH.'user_tools.php');
include(RSC_PATH.'Gestor_Errores.php');
$erroresForm=new Gestor_Errores();
$erroresLog=new Gestor_Errores();
$lista_errores;

if(!$_POST){
    include(VIEW_PATH.'login_view.php');
}
else{

    FiltrarLogin($erroresForm);

    if($erroresForm->HayErrores()){
        $lista_errores=$erroresForm->listaErrores();
        include(VIEW_PATH.'login_view.php');
    }
    else{
        $datos=$_POST;
        $datos['login']=creaLogin($datos);
        
        if($datos['login']){
            header('location:inicio.php');
        }
        else{
            segundoLogin($erroresLog);
            $lista_errores=$erroresLog->listaErrores();
            include(VIEW_PATH.'login_view.php');
        }
    }
}
?>