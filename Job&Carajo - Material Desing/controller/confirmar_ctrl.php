<?php
include 'control_acceso.php';

include 'constantes.php';
include(MODEL_PATH.'ofertas_tools.php');
include_once(RSC_PATH.'Gestor_Errores.php');
$id=$_GET['a'];
if(!$_POST){
    include(VIEW_PATH.'confirmar_borrar.php');
}
else{
    if($_POST['confirmar']==1){
        borrarOferta($id);
    }
    $_GET['inicio']=0;
    include(CTRL_PATH.'vistaofertas_ctrl.php');
        
}
?>