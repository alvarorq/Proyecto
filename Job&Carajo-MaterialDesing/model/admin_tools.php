<?php

/*
 * Fichero con todas las herramientas necesarias del admnistrador
 *
 */

include_once('connexion.php');

/**
 * DEVUELVE UN ARRAY CON LOS USUARIOS EXISTENTES Y DETALLES
 * @return array[]
 */
function userList(){
    $conn=Db::getInstance();
    $sql="select * from usuarios";
    $users=[];
    $result = $conn->db->query($sql);
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $users[]=$row;     
        }
    return $users;
}

/**
 * OBTIENE DETALLES DE SOLO UN USUARIO
 * @param integer $id
 * @return array[]
 */
function detalleUsuario($id){
    $conn=Db::getInstance();
    $sql= $conn->db->prepare('SELECT * FROM usuarios WHERE idusuarios=?');
    $sql->bindParam(1, $id, PDO::PARAM_INT);
    $sql->execute();
    $reg = $sql->fetch(PDO::FETCH_ASSOC);
    
    return $reg;
}

/**
 * AÑADIR UN USUARIO A LA BASE DE DATOS
 * 
 */
function addUser($datos){
    $conn=Db::getInstance();
    $sql="INSERT INTO usuarios (userName , pass , typeAccount) VALUES (:user , :passw , :tipo)";
    
    $name=$datos['name'];
    $passw=$datos['passw'];
    $tipo=$datos['rol'];
    
    $resultado = $conn->db->prepare($sql);
    $resultado->bindValue(":user", $name);
    $resultado->bindValue(":passw", $passw);
    $resultado->bindValue(":tipo", $tipo);
    $resultado->execute();
}

/**
 * MODIFICA UN USUARIO
 * @param integer $id
 * @param array[] $datos
 */
function modifyUser($id, $datos){
    $conn = Db::getInstance();
    $sql = "UPDATE usuarios SET userName=:user, pass=:passw WHERE idusuarios =".$id;

    $name=$datos['name'];
    $passw=$datos['passw'];

    $resultado = $conn->db->prepare($sql);
    
    $resultado->bindValue(":user", $name);
    $resultado->bindValue(":passw", $passw);
  
    $resultado->execute();
}

/**
 * ELIMINA UN USUARIO
 * @param integer $id
 */
function deleteUser($id){
    $conn = Db::getInstance();
    $sql = "DELETE FROM usuarios WHERE idusuarios=?";
    $sentencia = $conn->db->prepare($sql);
    $sentencia->bindParam(1, $id, PDO::PARAM_INT);
    $sentencia->execute();
}


?>