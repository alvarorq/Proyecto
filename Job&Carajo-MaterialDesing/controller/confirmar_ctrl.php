<?php
include 'control_acceso.php';

include 'constantes.php';
include_once(MODEL_PATH.'ofertas_tools.php');
include_once(MODEL_PATH.'admin_tools.php');
include_once(RSC_PATH.'Gestor_Errores.php');

$id=$_GET['a'];
if(!$_POST){
    include(VIEW_PATH.'confirmar_borrar.php');
}
else{
    if($_POST['confirmar']==1){
        if($_GET['tipo']=='u'){
            deleteUser($id);
        }
        else{
            borrarOferta($id);
        }
    }
    $_GET['inicio']=0;
    if($_GET['tipo']=='u'){
        include(CTRL_PATH.'lista_usuarios_ctrl.php');
    }
    else{
        include(CTRL_PATH.'vistaofertas_ctrl.php');
    }
    
        
}
?>