<?php
include 'control_acceso.php';
include 'constantes.php';
include 'filtrar_formulario.php';
include_once(MODEL_PATH.'filtrado_tools.php');
include_once(MODEL_PATH.'admin_tools.php');
include_once(RSC_PATH.'Gestor_Errores.php');

$errores=new Gestor_Errores();
$lista_errores;

$usuario=detalleUsuario($_GET['a']);

if(!$_POST){
    $_POST['name']=$usuario['userName'];
    $_POST['passw']=$usuario['pass'];
    

    include(VIEW_PATH.'mod_usuarioview.php');
}
else{  

    formUsuario($errores);

    if($errores->HayErrores()){
        $lista_errores=$errores->listaErrores();
        include(VIEW_PATH.'mod_usuarioview.php');
    }
    else{
        $datos=$_POST;
        modifyUser($_GET['a'],$datos);
        include(TEMPLATE_PATH.'alerta_exito.php');
        include(CTRL_PATH.'lista_usuarios_ctrl.php');
    }
}
