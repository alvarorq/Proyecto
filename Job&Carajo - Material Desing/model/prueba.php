<?php
   include 'funciones.php';
   $inicio=0;
   $registro=3;
   $array=listapaginacion($inicio, $registro);

   echo '<pre>';
   print_r($array);
   echo '</pre>';
?>