<?php
include 'constantes.php';

include_once(MODEL_PATH.'funciones.php');
define('REGxPAG',3);

if(isset($_GET['pag'])){
    $pag=$_GET['pag'];
}else{
    $pag=0;
}
$registro=3;
$ofertas=listapaginacion($pag*REGxPAG, $registro);
$numreg=numeroReg();
$ult_pag=ceil($numreg/3)-1;

include(VIEW_PATH.'vistaOfertas.php');
