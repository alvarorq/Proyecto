<?php
include 'constantes.php';
include(MODEL_PATH.'funciones.php');

$ofertas=detalleOferta($_GET['a']);

include(VIEW_PATH.'detalles.php');
