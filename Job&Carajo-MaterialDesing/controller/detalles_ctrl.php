<?php
include 'control_acceso.php';
include 'constantes.php';
include_once(MODEL_PATH.'filtrado_tools.php');
include_once(MODEL_PATH.'ofertas_tools.php');

$oferta=detalleOferta($_GET['a']);

include(VIEW_PATH.'detalles.php');
