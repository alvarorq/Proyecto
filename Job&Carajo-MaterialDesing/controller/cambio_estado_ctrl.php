<?php
include 'control_acceso.php';
include 'constantes.php';
include 'filtrar_formulario.php';
include_once(MODEL_PATH.'filtrado_tools.php');
include_once(MODEL_PATH.'ofertas_tools.php');
include_once(RSC_PATH.'Gestor_Errores.php');

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

    include(VIEW_PATH.'vista_cambio_estado.php');
}
else{  

    //FiltraCamposPost($errores);

    if($errores->HayErrores()){
        $lista_errores=$errores->listaErrores();
        include(VIEW_PATH.'vista_cambio_estado.php');
    }
    else{
        $datos=$_POST;
        updateEstado($_GET['a'],$datos);
        include(CTRL_PATH.'vistaofertas_ctrl.php');
    }
}
