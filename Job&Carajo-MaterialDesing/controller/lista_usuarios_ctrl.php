<?php

include 'control_acceso.php';
include 'constantes.php';
include_once(MODEL_PATH.'admin_tools.php');

$user=userList();

include(VIEW_PATH.'vistaUsuarios.php');