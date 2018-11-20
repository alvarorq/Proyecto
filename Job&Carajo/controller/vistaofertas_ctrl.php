<?php
include 'constantes.php';

include(MODEL_PATH.'funciones.php');

$ofertas=obtenerOfertas();

include(VIEW_PATH.'vistaOfertas.php');


