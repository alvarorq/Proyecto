<?php
include 'control_acceso.php';
include 'constantes.php';
include 'filtrar_formulario.php';
include(MODEL_PATH.'funciones.php');
include(RSC_PATH.'Gestor_Errores.php');

$errores=new Gestor_Errores();
$lista_errores;
$provincias=arrayProvincias();

$oferta=detalleOferta($_GET['a']);

if(!$_POST){
    $_POST['descripcion']=$oferta['descripcion'];
    $_POST['contacto']=$oferta['personaContacto'];
    $_POST['telefono']=$oferta['telefonoContacto'];
    $_POST['email']=$oferta['email'];
    $_POST['direccion']=$oferta['direccion'];
    $_POST['provincia']=$oferta['provincia'];
    $_POST['cp']=$oferta['codigoPostal'];
    $_POST['poblacion']=$oferta['poblacion'];
    $_POST['fechaselec']=fechaParaForm($oferta['FechaConfirmacion']);
    $_POST['psicologo']=$oferta['psicologo'];
    $_POST['estado']=$oferta['estadoOferta'];
    $_POST['candidato']=$oferta['candidato'];
    $_POST['observaciones']=$oferta['anotaciones'];

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
        $_POST['fechaselec']=fechaParaDB($_POST['fechaselec']);
        $datos=$_POST;
        updateTable($_GET['a'],$datos);
        include(CTRL_PATH.'inicio.php');
    }
}
