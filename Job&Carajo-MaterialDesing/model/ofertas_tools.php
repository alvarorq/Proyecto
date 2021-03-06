<?php

include_once('connexion.php');
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
         VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";

    $sentencia = $conn->db->prepare($sql);
    $sentencia->bindParam(1, $datos['descripcion']);
    $sentencia->bindParam(2, $datos['contacto']);
    $sentencia->bindParam(3, $datos['telefono']);
    $sentencia->bindParam(4, $datos['email']);
    $sentencia->bindParam(5, $datos['direccion']);
    $sentencia->bindParam(6, $datos['poblacion']);
    $sentencia->bindParam(7, $datos['cp']);
    $sentencia->bindParam(8, $datos['provincia']);
    $sentencia->bindParam(9, $datos['estado']);
    $sentencia->bindParam(10, $datos['fechaselec']);
    $sentencia->bindParam(11, $datos['psicologo']);
    $sentencia->bindParam(12, $datos['candidato']);
    $sentencia->bindParam(13, $datos['observaciones']);

    $sentencia->execute();
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
   $sql = "UPDATE ofertas SET descripcion= ?, personaContacto= ?,
           telefonoContacto= ?,email= ?, direccion= ?,
           poblacion= ?, codigoPostal= ?,provincia= ?,
           estadoOferta= ?, FechaConfirmacion= ?, psicologo= ?,
           candidato= ?, anotaciones= ?
           WHERE idOfertas = ?";

    $sentencia = $conn->db->prepare($sql);
    $sentencia->bindParam(1, $datos['descripcion']);
    $sentencia->bindParam(2, $datos['contacto']);
    $sentencia->bindParam(3, $datos['telefono']);
    $sentencia->bindParam(4, $datos['email']);
    $sentencia->bindParam(5, $datos['direccion']);
    $sentencia->bindParam(6, $datos['poblacion']);
    $sentencia->bindParam(7, $datos['cp']);
    $sentencia->bindParam(8, $datos['provincia']);
    $sentencia->bindParam(9, $datos['estado']);
    $sentencia->bindParam(10, $datos['fechaselec']);
    $sentencia->bindParam(11, $datos['psicologo']);
    $sentencia->bindParam(12, $datos['candidato']);
    $sentencia->bindParam(13, $datos['observaciones']);
    $sentencia->bindParam(14, $id);

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
    $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM ofertas ORDER BY fechaCreacion desc LIMIT $inicio, $regsxpag";
        
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
function enlace($str='', $pag,$desc='') {
    if ($desc=='') {
        $desc=$pag;
    }
    if($str=='no'){
        echo "<a class='btn btn-dark' href=\"vistaOfertas_ctrl.php?pag=$pag\">$desc</a> ";
    }else{
        echo "<a class='btn btn-custom' href=\"vistaOfertas_ctrl.php?pag=$pag\">$desc</a> ";
    }
}

?>