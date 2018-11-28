<?php
include 'constantes.php';

include_once(MODEL_PATH.'funciones.php');

$inicio=0;
$registro=3;
$ofertas=listapaginacion($_GET['inicio'], $registro);
$numreg=numeroReg()/3;
if(numeroReg()%3!=0){
    $numreg++;
}

include(VIEW_PATH.'vistaOfertas.php');
