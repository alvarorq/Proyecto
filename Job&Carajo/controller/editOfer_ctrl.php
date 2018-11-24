<?php

include 'constantes.php';
include 'filtrar_formulario.php';
include(MODEL_PATH.'funciones.php');
include(RSC_PATH.'Gestor_Errores.php');

$errores=new Gestor_Errores();
$lista_errores;
$provincias=arrayProvincias();

$oferta=detalleOferta($_GET['a']);

if(!$_POST){
    $_POST['descripcion']=$oferta[0]['descripcion'];
    $_POST['contacto']=$oferta[0]['personaContacto'];
    $_POST['telefono']=$oferta[0]['telefonoContacto'];
    $_POST['email']=$oferta[0]['email'];
    $_POST['direccion']=$oferta[0]['direccion'];
    $_POST['provincia']=$oferta[0]['provincia'];
    $_POST['cp']=$oferta[0]['codigoPostal'];
    $_POST['poblacion']=$oferta[0]['poblacion'];
    $_POST['fechaselec']=$oferta[0]['FechaConfirmacion'];
    $_POST['psicologo']=$oferta[0]['psicologo'];
    $_POST['estado']=$oferta[0]['estadoOferta'];
    $_POST['candidato']=$oferta[0]['candidato'];
    $_POST['observaciones']=$oferta[0]['anotaciones'];

/*OTRA OPCION
 *   $mapaCampos=[
 *       'descipcion'=>'descripcion', 
 *       'contacto'=>'contacto']
 *   foreach($mapaCampos as $campoBD=>$campoPost) {
 *       $_POST[$campoPost]=$oferta[$campoBD];
 *   }
 */   
    include(VIEW_PATH.'formulario.php');
}
else{  

    FiltraCamposPost($errores);

    if($errores->HayErrores()){
        $lista_errores=$errores->listaErrores();
        include(VIEW_PATH.'formulario.php');
    }
    else{
        $datos=$_POST;
        updateTable($_GET['a'],$datos);
        include(CTRL_PATH.'inicio.php');
    }
}
