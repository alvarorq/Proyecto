<?php

require 'connexion.php';

//PARA NO PERDER LO RELLENADO EN EL FORMULARIO AL COMETER ERRORES EN LOS DATOS
function valorcampo($campo){
    if(isset($_POST[$campo])){   
        return $_POST[$campo];
    }
}

//COMPRUEBA LA FECHA SI ES CORRECTA Y SI ESTA EN EL ORDEN CORRECTO
function comFecha($fecha){
        $stfecha= explode("/",$fecha);
        if(isset($stfecha[1])){
        $fechaOrden=$stfecha[2].'-'.$stfecha[1].'-'.$stfecha[0];
        }
        else{return false;}
        if (count($stfecha)!=3){
            return false;
        }
        else if((time())>(strtotime($fechaOrden))){
            return false;   
        }
        else{
            $validornot=checkdate($stfecha[1],$stfecha[0],$stfecha[2]);
        return  $validornot;
        }
}


//CONVERTIR FECHA PARA BD
function fechaParaDB($fecha){
    $stfecha= explode("/",$fecha);
    $fechaOrden=$stfecha[2].'-'.$stfecha[1].'-'.$stfecha[0];
    return $fechaOrden;
}

//CONVERTIR FECHA PARA FORMULARIO
function fechaParaForm($fecha){
    $stfecha= explode("-",$fecha);
    $fechaOrden=$stfecha[2].'/'.$stfecha[1].'/'.$stfecha[0];
    return $fechaOrden;
}

//VERIFICA SI EL EMAIL RESPETA EL FORMATO  ALGO@ALGO.ES
function validarEmail($email){
    if(filter_var( $email , FILTER_VALIDATE_EMAIL)){}
        else{
            $errores = true;
		    $cadena_Errores["email"] = "Tiene que proporcionar un EMAIL valido";
		}
}

function estadOferta($estado){
    switch ($estado) {
        case '0': return 'Pendiente de Seleccion';break;
        case '1': return 'Realizando Seleccion';break;
        case '2': return 'Seleccion concluida';break;
        case '3': return 'Cancelada';break;
        
        default:
            return '';
            break;
    }
}

//INSERTAR DATOS DEL FORMULARIO 
function insertarFormulario($datos){
    $conn=Db::getInstance();
        $sql="INSERT INTO ofertas (
        descripcion, personaContacto, telefonoContacto, email, direccion, poblacion, codigoPostal, provincia, estadoOferta,
        FechaConfirmacion, psicologo, candidato, anotaciones) 
         VALUES ('$datos[descripcion]', '$datos[contacto]', '$datos[telefono]', '$datos[email]', '$datos[direccion]', '$datos[poblacion]',
         '$datos[cp]', '$datos[provincia]', '$datos[estado]', '$datos[fechaselec]', '$datos[psicologo]', '$datos[candidato]',
         '$datos[observaciones]')";
    
        $conn->db->query($sql);
}

//DEVUELVE ARRAY DE PROVINCIAS
function arrayProvincias(){
    $conn=Db::getInstance();
    $sqlquery = "SELECT * FROM tbl_provincias";
    $result = $conn->db->query($sqlquery);
    $provincias=[];

        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $provincias[$row["cod"]]=$row["nombre"];
        }
    return $provincias;
}

//DADO EL PARAMETRO $NUM = CODIGO DE LA PROVINCIA Y USANDO LA FUNCION DE ARRAY DE PROVINCIAS OBTIENE EL NOMBRE DE LA PROVINCIA
function obtenerProvincia($num){
    $provincias=arrayProvincias();
    $nombre;
        $nombre=$provincias[$num];    
return $nombre;
}

//OBTIENE TODAS LAS OFERTAS DE LA TABLA Y ME LAS DEVUELVE EN UN ARRAY
function obtenerOfertas(){
    $conn=Db::getInstance();
    $sql="select * from ofertas";
    $ofertas=[];
    $result = $conn->db->query($sql);
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $ofertas[]=$row;     
        }
    return $ofertas;
}

//OBTIENE DETALLES DE SOLO UNA OFERTA
function detalleOferta($id){
    $conn=Db::getInstance();
    $sql= $conn->db->prepare('SELECT * FROM ofertas WHERE idofertas=?');
    $sql->bindParam(1, $id, PDO::PARAM_INT);
    $sql->execute();
    $reg = $sql->fetch(PDO::FETCH_ASSOC);
    
    return $reg;
}

//BORRA UNA OFERTA DETERMINADA
function borrarOferta($id){
    $conn = Db::getInstance();
    $sql = "DELETE FROM ofertas WHERE idofertas=?";
    $sentencia = $conn->db->prepare($sql);
    $sentencia->bindParam(1, $id, PDO::PARAM_INT);
    $sentencia->execute();
}

//MODIFICA LA TABLA DE OFERTAS
function updateTable($id, $datos){
   $conn = Db::getInstance();
   $sql = "UPDATE ofertas SET descripcion='$datos[descripcion]', personaContacto='$datos[contacto]',
           telefonoContacto='$datos[telefono]',email='$datos[email]', direccion='$datos[direccion]',
           poblacion='$datos[poblacion]', codigoPostal='$datos[cp]',provincia='$datos[provincia]',
           estadoOferta='$datos[estado]', FechaConfirmacion='$datos[fechaselec]', psicologo='$datos[psicologo]',
           candidato='$datos[candidato]', anotaciones='$datos[observaciones]'
           WHERE idOfertas = ?";

    $sentencia = $conn->db->prepare($sql);
    $sentencia->bindParam(1, $id, PDO::PARAM_INT);
    $sentencia->execute();

}

//MODIFICA TABLA SOLO EL ESTADO
function updateEstado($id, $datos){
    $conn = Db::getInstance();
    $sql = "UPDATE ofertas SET estadoOferta='$datos[estado]', candidato='$datos[candidato]',
            anotaciones='$datos[observaciones]'
            WHERE idOfertas = ?";
 
     $sentencia = $conn->db->prepare($sql);
     $sentencia->bindParam(1, $id, PDO::PARAM_INT);
     $sentencia->execute();
 
 }

//DEVUELVE UN RANGO DE REGISTROS DE LA BASE DE DATOS DEFINIDO POR $INICIO Y $REGSXPAG
function listapaginacion($inicio, $regsxpag) {
    $conn = Db::getInstance();
    $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM ofertas LIMIT $inicio, $regsxpag";
        
    $registros = $conn->db->prepare($sql);
    //Ejecutamos la consulta...
    $registros->execute();
    //Almacenamos en una variable los registros obtenidos de la consulta
    $registros = $registros->fetchAll(PDO::FETCH_ASSOC);

    return $registros;
  }

//CONOCER NUMERO TOTAL DEL REGISTROS
function numeroReg(){
    $conn = Db::getInstance();
    $sql = "SELECT COUNT(*) FROM ofertas";
    $registros = $conn->db->query($sql);
    $registros = $registros->fetch(PDO::FETCH_ASSOC);
    return $registros['COUNT(*)'];
}

//GENERA LAS PAGINAS
function enlace( $pag,$desc='') {
    if ($desc=='') {
        $desc=$pag;
    }
    echo "<a class='btn btn-dark' href=\"vistaOfertas_ctrl.php?pag=$pag\">$desc</a> ";
}

//COMPRUEBA EL USUARIO Y CONTRASEÑA

function creaLogin($datos){
    $conn=Db::getInstance();
    $sql="select * from usuarios where userName= :usuario AND password= :password";
    $resultado=$conn->db->prepare($sql);
    $usuario=htmlentities(addslashes($datos['usuario']));
    $password=htmlentities(addslashes($datos['password']));

    $resultado->bindValue(":usuario", $usuario);
    $resultado->bindValue(":password", $password);
    $resultado->execute();

    $numero_registro=$resultado->rowCount();
    if($numero_registro!=0){

        session_start();

        $_SESSION['usuario']=$usuario;
        $_SESSION['inicio']=date("h:i");;
        return true;
    }
    else{
        return false;
    }
}

//OBTENER ROL DEL USUARIO ACTIVO
function rolUsuario(){
    $conn=Db::getInstance();
    $sql="select typeAccount from usuarios where userName= :usuario";
    $resultado=$conn->db->prepare($sql);
    $usuario=htmlentities(addslashes($_SESSION['usuario']));

    $resultado->bindValue(":usuario", $usuario);
    $resultado->execute();
    $resultado = $resultado->fetch(PDO::FETCH_ASSOC);
    
    if($resultado['typeAccount']==0){
        return 'Administrador';
    }
    else{
        return 'Psicologo';
    }
}
?>